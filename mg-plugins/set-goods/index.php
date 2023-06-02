<?php

/*
  Plugin Name: Комплект товаров
  Description: Плагин позволяет создавать набор из существующих товаров и сохранять его как товарную единицу. Набор отображается в общей таблице товаров, где его также возможно редактировать. Для отображения в карточке товара его составляющих, необходимо добавить шорт-код [set-goods id="&lt;?php echo $data['id']?&gt;"] в product.php. Для отображения информации о комплекте на странице комплектующего (если данный товар входит в состав какого-либо комплекта) необходимо добавить шорт-код [parts-set-goods id="&lt;?php echo $data['id']?&gt;"] в product.php. При оформлении заказа с комплектом остатки обновляются как у комплекта, так и у комплектующих. При отмене или удалении заказа все остатки также пересчитываются. Функции клонирования заказа и редактирования количества товаров в заказе недоступны, если в заказе есть комплект.
  Author:  Дарья Чуркина
  Version: 1.3.5
 */

new SetGoods;

class SetGoods {

  private static $lang = array(); // массив с переводом плагина
  private static $pluginName = ''; // название плагина (соответствует названию папки)
  private static $path = ''; //путь до файлов плагина

  public function __construct() {

    mgActivateThisPlugin(__FILE__, array(__CLASS__, 'activate')); //Инициализация  метода выполняющегося при активации
    mgDeactivateThisPlugin(__FILE__, array(__CLASS__, 'deactivate')); //Инициализация  метода выполняющегося при активации
    mgAddAction(__FILE__, array(__CLASS__, 'pageSettingsPlugin')); //Инициализация  метода выполняющегося при нажатии на кнопку настроект плагина
    mgAddShortcode('set-goods', array(__CLASS__, 'viewSetOfGoods')); // Инициализация шорткода [set-goods] - доступен в любом HTML коде движка.
    mgAddShortcode('parts-set-goods', array(__CLASS__, 'viewPartsSetOfGoods')); // Инициализация шорткода [parts-set-goods] - доступен в любом HTML коде движка.
    mgAddAction('models_product_getproduct', array(__CLASS__, 'messageAboutSet'), 1);
    mgAddAction('models_product_cloneproduct', array(__CLASS__, 'cloneSet'), 1);
    mgAddAction('models_product_deleteproduct', array(__CLASS__, 'deleteSet'), 1);
    mgAddAction('models_order_addOrder', array(__CLASS__, 'checkComponents'), 1);
    mgAddAction('models_order_refreshCountProducts', array(__CLASS__, 'checkComponentsStatus'), 1);
    mgAddAction('models_cart_addToCart', array(__CLASS__, 'checkAvailableComponents'), 1);
    mgAddAction('models_cart_refreshCart', array(__CLASS__, 'refreshCountInCart'), 1);
    mgAddAction('models_order_notsetgoods', array(__CLASS__, 'checkNotSet'), 1);
    mgAddAction('models_order_refreshCountAfterEdit', array(__CLASS__, 'refreshCountSetAfterEdit'), 1);
    mgAddAction('models_catalog_getListProductByKeyWord', array(__CLASS__, 'checkAvailableComponentsSearch'), 1);

    self::$pluginName = PM::getFolderPlugin(__FILE__);
    self::$lang = PM::plugLocales(self::$pluginName);
    self::$path = PLUGIN_DIR.self::$pluginName;
    $_SESSION[self::$pluginName.'-upload-to-product'] = true; //Указывает на то, что изображение будет обработано как для товара.
    mgAddMeta('<link rel="stylesheet" href="'.SITE.'/'.self::$path.'/css/style.css" type="text/css" />');
  }

  /**
   * Метод выполняющийся при активации палагина
   * Создает таблицу плагина в БД
   */
  static function activate() {
    DB::query("
     CREATE TABLE IF NOT EXISTS `".PREFIX.self::$pluginName."` (
      `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Порядковый номер',
      `id_product` int(11) NOT NULL COMMENT 'id из product',
      `components` text NOT NULL,
      `sort` int(11) NOT NULL,
      PRIMARY KEY (`id`)
     ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");

    $option = MG::getSetting('setGoodsOption');
    if (empty($option)) {
      $array = Array(
        'output' => 'true',
        'msg' => 'Комплект временно недосупен',
        'output2' => 'true',
        'msg2' => 'Комплект временно недосупен для покупки',
        'header' => 'Товары комплекта',
      );

      MG::setOption(array('option' => 'countPrintSetGoods', 'value' => 20));
      MG::setOption(array('option' => 'setGoodsOption', 'value' => addslashes(serialize($array))));
    }
  }

  /**
   * Метод выполняющийся при ДЕактивации палагина
   * применяет для товаров из таблицы плагина свойство выключен, после чего она не будут выводится в публичной части
   */
  static function deactivate() {
    $set = DB::query('SELECT `id_product` FROM `'.PREFIX.'set-goods` ');
    while ($row = DB::fetchArray($set)) {
      DB::query('
          UPDATE `'.PREFIX.'product`
          SET `activity` = 0
          WHERE id = '.DB::quote($row['id_product']));
    }
  }

  /**
   * Выводит страницу настроек плагина в админке
   */
  static function pageSettingsPlugin() {
    //получаем опцию setGoodsOption в переменную option
    $option = MG::getSetting('setGoodsOption');
    $option = stripslashes($option);
    $options = unserialize($option);
    if (!isset($options['output'])) {
      $options['output'] = 'true';
    }
    if (!isset($options['output2'])) {
      $options['output2'] = 'true';
    }
    if (!isset($options['msg'])) {
      $options['msg'] = 'Комплект временно недоступен';
    }
    if (!isset($options['msg2'])) {
      $options['msg2'] = 'Комплект временно недоступен';
    }
    $lang = self::$lang;
    $pluginName = self::$pluginName;
    echo '<script type="text/javascript">
         includeJS("'.SITE.'/'.self::$path.'/js/script.js");
         </script>
         <link rel="stylesheet" href="'.SITE.'/'.self::$path.'/css/style.css" type="text/css" />';
    $countPrintSetGoods = MG::getSetting('countPrintSetGoods');
    $page = !empty($_POST["page"]) ? $_POST["page"] : 0;

    $sql = "SELECT DISTINCT p.id, CONCAT(c.parent_url,c.url) as category_url,
      p.url as product_url, p.*, pv.product_id as variant_exist,
      rate,(p.price_course + p.price_course * (IFNULL(rate,0))) as `price_course`,
      s.id as id_set, s.id_product, s.components, s.sort as sort_set
      FROM `".PREFIX."product` p
      LEFT JOIN `".PREFIX."category` c ON c.id = p.cat_id
      LEFT JOIN `".PREFIX."product_variant` pv ON p.id = pv.product_id
      LEFT JOIN ( SELECT pv.product_id, SUM( pv.count ) AS varcount
                  FROM `".PREFIX."product_variant` AS pv
                  GROUP BY pv.product_id ) AS temp
           ON p.id = temp.product_id
      JOIN `".PREFIX.self::$pluginName."` s ON s.id_product = p.id
      ORDER BY `sort_set`";

    if ($sorterData[1] > 0) {
      $sorterData[3] = 'desc';
    } else {
      $sorterData[3] = 'asc';
    }


    $page = !empty($_POST["page"]) ? $_POST["page"] : 0; //если был произведен запрос другой страницы, то присваиваем переменной новый индекс

    $countPrintRowsStatusPartner = MG::getSetting('countPrintRowsStatusPartner');

    if (empty($_POST['sorter'])) {
      if (empty($userFilter)) {
        $userFilter .= ' 1=1 ';
      }
      $userFilter .= "  ORDER BY `add_datetime` DESC";
    };

    $navigator = new Navigator($sql, $page, $countPrintSetGoods);
    $entity = $navigator->getRowsSql();
    $pagination = $navigator->getPager('forAjax');

    // категории
    $model = new Models_Catalog;
    $arrayCategories = $model->categoryId = MG::get('category')->getHierarchyCategory(0);
    $categoriesOptions = MG::get('category')->getTitleCategory($arrayCategories, URL::get('category_id'));
    $product = new Models_Product();
    $exampleName = $product->getProductByUserFilter(' 1=1 LIMIT 0,1');
    $ids = array_keys($exampleName);
    $exampleName = $exampleName[$ids[0]]['title'];

    include('pageplugin.php');
  }

  /**
   *
   * Обработчик хука функции getProduct($id) для предупреждения администратора о том, что он вносит измения в комплект товаров
   *
   */
  static function messageAboutSet($arg) {
    if (MG::getSetting("enabledSiteEditor") == "true" || URL::isSection('mg-admin')) {
      $set = DB::query('SELECT `id` FROM `'.PREFIX.'set-goods` WHERE `id_product` = '.DB::quote($arg['args'][0]));
      if ($row = DB::fetchArray($set)) {
        $arg['result']['plugin_message'] = '<span style ="color: #CD3333; font:bold"> Товар является комплектом, созданным в плагине. Для редактирования перейдите в плагин.</span>';
      }
    }
    return $arg['result'];
  }

  /**
   * обработка хука функции cloneProduct($id) id клонируемого товара. для копирования набора
   */
  static function cloneSet($arg) {
    // если вызов из плагина
    if (!isset($_POST['pluginHandler'])) {
      // проверка является ли клонируемый товар комплектом и получаем значение поля components
      $isSet = DB::query('SELECT * FROM `'.PREFIX.'set-goods` WHERE `id_product` = '.DB::quote($arg['args'][0]));
      if ($row = DB::fetchArray($isSet)) {
        $array['id_product'] = $arg['result']['id'];
        $array['components'] = $row['components'];
        DB::buildQuery('INSERT INTO `'.PREFIX.self::$pluginName.'` SET ', $array);
      }
    }
    return $arg['result'];
  }

  /**
   * обработка хука функции deleteProduct($id)
   */
  static function deleteSet($arg) {
    // если вызов из плагина
    if (!isset($_POST['pluginHandler'])) {
      // проверка является ли удаляемый товар комплектом
      $isSet = DB::query('SELECT * FROM `'.PREFIX.'set-goods` WHERE `id_product` = '.DB::quote($arg['args'][0]));
      if ($row = DB::fetchArray($isSet)) {
        DB::query('DELETE FROM `'.PREFIX.self::$pluginName.'` WHERE `id`= '.$row['id']);
      }
    }
    return $arg['result'];
  }

  /**
   * обработчик шорт-кода [set-goods id="<?php echo $data['id']?>"] в карточке товара для вывода составляющих комплекта
   */
  static function viewSetOfGoods($arg) {
    if ($arg['id']) {
      $html = '';
      $isSet = DB::query('SELECT * FROM `'.PREFIX.'set-goods` WHERE `id_product` = '.DB::quote($arg['id']));
      if ($row = DB::fetchArray($isSet)) {
        $html .= self::getBlockInfo($row['components'], null, $arg['id']);
        return $html;
      }
    }
    return false;
  }
    /**
   * обработчик шорт-кода [parts-set-goods id="<?php echo $data['id']?>"] в карточке товара для вывода составляющих комплекта
   */
  static function viewPartsSetOfGoods($arg) {
    if ($arg['id']) {
      $html = '';
      $components = array();
      $product = new Models_Product;
      $res = DB::query('SELECT p.`code`, p.`title`, pv.`code` as `code_varian`, pv.`title_variant`
          FROM `'.PREFIX.'product` p  LEFT JOIN
          `'.PREFIX.'product_variant` pv ON pv.`product_id` = p.`id`
         WHERE p.`id` = '.DB::quote($arg['id']));
      $codes = array();
      $title_variant = '';
      while ($row = DB::fetchArray($res)) {
        $codes[$row['code']] = $row['code'];
        $codes[$row['code_varian']] = $row['code_varian'];
        $title = $row['title'];
      }
      $where = '';
      foreach ($codes as $code) {
        $where .= ' `components` LIKE "'.DB::quote($code, true).'|%" OR `components` LIKE "%,'.DB::quote($code, true).'|%" OR';
      }
      $where = substr($where, 0, -3);
      $sql = 'SELECT * FROM `mg_set-goods` WHERE 1';
     /* $sql = 'SELECT  * FROM `'.PREFIX.'set-goods` WHERE '.$where;*/
      $res = DB::query($sql);
      $ids = '';
      while ($row = DB::fetchArray($res)) {
        $components[$row['id_product']] = $row['components'];
        $ids .= $row['id_product'].',';
      }
      if ($ids != '') {
        $res = DB::query('
      SELECT p.url as product_url, p.*, c.parent_url, c.url as url,
          rate, (p.price_course + p.price_course * (IFNULL(rate,0))) as `price_course`
      FROM `'.PREFIX.'product` p
        LEFT JOIN `'.PREFIX.'category` c
        ON c.id = p.cat_id
      WHERE p.id  IN ('.DB::quote(substr($ids, 0, -1), true).')');
        $products = array();
          while ($result = DB::fetchAssoc($res)) {
            $result['image_url'] = $product->imagesConctruction($result['image_url'], $result['image_title'], $result['image_alt']);
            $products[] = $result;
          }
          foreach ($products as $prod) {
            $html .= self::getBlockInfo($components[$prod['id']], $prod, $prod['id'], $title);
          }
        }
      return $html;
    }
    return false;
  }

  static function getBlockInfo($components, $prod = null, $id = null, $title='') {
    if (!$prod) {
      $product = new Models_Product;
      $dataSet = $product->getProduct($id);
    }
    $option = MG::getSetting('setGoodsOption');
    $option = stripslashes($option);
    $options = unserialize($option);
    $goods = array();
    $counts = array();
    $strgoods = ' null';
    foreach (explode(',', $components) as $item) {
      $item = explode('|', $item);
      $strgoods .= ','.DB::quote($item[0]);
      if (!empty($item[0])) {
        $goods[$item[0]] = $item[0];
        $counts[$item[0]] = $item[1];
      }
    }
    $strgoods = substr($strgoods, 1);
    $res = DB::query('
      SELECT  c.parent_url, c.url as category_url,
        p.url as product_url, p.image_url, p.id, p.title, p.code,
        v.code as variant, v.title_variant, v.image as image_variant,
        p.count as count_product, v.count as count_variant
      FROM `'.PREFIX.'product` p
        LEFT JOIN `'.PREFIX.'category` c ON c.id = p.cat_id
        LEFT JOIN `'.PREFIX.'product_variant` v ON v.product_id = p.id AND v.code IN ('.$strgoods.')
      WHERE p.code IN ('.$strgoods.') OR v.code IN ('.$strgoods.')');

    $available = 1;
    while ($row = DB::fetchAssoc($res)) {
      $row['image_url'] = ($row['image_variant'] ? $row['image_variant'] : $row['image_url'] );
      $img = explode('|', $row['image_url']);
      $row['img'] = $img[0];
      $row['url'] = SITE.'/'.(isset($row["category_url"]) || isset($row["parent_url"]) ? $row["parent_url"].$row["category_url"] : 'catalog').'/'.$row["product_url"];
      $row['count'] = $counts[$row['code']];
      if (!empty($row['variant'])) {
        $row['count'] = $counts[$row['variant']];
        $goods[$row['variant']] = $row;
        if ($row['count_variant'] == 0 || ($row['count_variant'] > 0 && $row['count_variant'] - $row['count'] < 0)) {
          $available = 0 ;
        }
      } else {
        $goods[$row['code']] = $row;
        if ($row['count_product'] == 0 || ($row['count_product'] > 0 && $row['count_product'] - $row['count'] < 0)) {
          $available = 0 ;
        }
      }
    }
    //сортируем связанные товары в том порядке, в котором они идут в строке артикулов
    if (!empty($goods)) {
      foreach ($goods as $item) {
        if (is_array($item)) {
          $set[] = $item;
        }
      }
    }
   //viewData($set);
    ob_start();
    include ('layout.php');
    $html = ob_get_contents();
    ob_clean();
    return $html;
  }
/**
   *
   * Обработчик хука функции addOrder($adminOrder = false) - при оформлении заказа проверяем,
   * если был куплен комплект, то вычитаем количество комплектующих.
   */
  static function checkComponents($arg) {
    $id = $arg['result']['id'];
    $result = DB::query('
      SELECT  `order_content`
      FROM `'.PREFIX.'order` WHERE `id` ='.DB::quote($id));
    if ($order = DB::fetchAssoc($result)) {
      $content = unserialize(stripslashes($order['order_content']));
    }
    $result = DB::query('SELECT * FROM `'.PREFIX.'set-goods`');
    while ($row = DB::fetchArray($result)) {
      $sets[$row['id_product']] = $row['components'];
    }
    if (!empty($sets)) {
      $model = new Models_Product;
      foreach ($content as $product) {
        $countSet = $product['count'];
        if (!empty($sets[$product['id']])) {
          $components = explode(',', $sets[$product['id']]);
          foreach ($components as $comp) {
            $arr = explode('|', $comp);
            $code = $arr[0];
            $count = $arr[1] * $countSet;
            $result = DB::query('SELECT `id`, `count` FROM `'.PREFIX.'product` WHERE `code`='.DB::quote($code));
            if ($row = DB::fetchArray($result)) {
              $id = $row['id'];
              $countNow = $row['count'];
            } else {
              $result = DB::query('SELECT `product_id`, `count` FROM `'.PREFIX.'product_variant` WHERE `code`='.DB::quote($code));
              if ($rowvar = DB::fetchArray($result)) {
                $id = $rowvar['product_id'];
                $countNow = $rowvar['count'];
              }
            }
            if ($id && $countNow > 0) {
              $model->decreaseCountProduct($id, $code, $count);
            }
          }
        }
      }
    }
    return $arg['result'];
  }

  /**
   *
   * Обработчик хука функции refreshCountProducts($orderId, $status_id)  -
   * Пересчитывает количество остатков продуктов при отмены заказа.
   * если был куплен комплект, то пересчитываем остатки комплектующих, в зависимости от изменений заказа
   * $orderId  - id заказа.
   * $status_id  - новый статус заказа.
   */
  static function checkComponentsStatus($arg) {
    $idOrder = $arg['args'][0]; // id заказа
    $status_id = $arg['args'][1]; // - новый статус заказа.
    $result = DB::query('
      SELECT  `order_content`, `status_id`
      FROM `'.PREFIX.'order` WHERE `id` ='.DB::quote($idOrder));
    if ($row = DB::fetchAssoc($result)) {
      $content = unserialize(stripslashes($row['order_content']));
      $orderStatus = $row['status_id'];
    }
    $result = DB::query('SELECT * FROM `'.PREFIX.'set-goods`');
    while ($row = DB::fetchArray($result)) {
      $sets[$row['id_product']] = $row['components'];
    }
    if (!empty($sets)) {
      $model = new Models_Product;
      foreach ($content as $product) {
        $countSet = $product['count'];
        if (!empty($sets[$product['id']])) {
          $components = explode(',', $sets[$product['id']]);
          foreach ($components as $comp) {
            $arr = explode('|', $comp);
            $code = $arr[0];
            $count = $arr[1] * $countSet;
            $result = DB::query('SELECT `id`, `count` FROM `'.PREFIX.'product` WHERE `code`='.DB::quote($code));
            if ($row = DB::fetchArray($result)) {
              $id = $row['id'];
              $countNow = $row['count'];
            } else {
              $result = DB::query('SELECT `product_id`, `count` FROM `'.PREFIX.'product_variant` WHERE `code`='.DB::quote($code));
              if ($rowvar = DB::fetchArray($result)) {
                $id = $rowvar['product_id'];
                $countNow = $rowvar['count'];
              }
            }
            if ($id && $countNow > 0) {
              // Увеличиваем колличество товаров.
              if ($status_id == 4) {
                if (($orderStatus != 4) && ($orderStatus != 5)) {
                  $model->increaseCountProduct($id, $code, $count);
                }
              } else {
                // Уменьшаем колличество товаров.
                if ($orderStatus == 4) {
                  $model->decreaseCountProduct($id, $code, $count);
                }
              }
            }
          }
        }
      }
    }
    return $arg['result'];
  }

  /**
   *
   * Обработчик хука функции addToCart($id, $count = 1, $property = array('property' => '', 'propertyReal' => ''), $variantId = null) {  -
   * Добавляет товар в корзину.
   */
  static function checkAvailableComponents($arg) {
    $id = $arg['args'][0];
    $countInCart = $arg['args'][1];
    $variantId = $arg['args'][3];
    $res = DB::query('SELECT sg.*, p.count FROM `'.PREFIX.'set-goods` sg
      LEFT JOIN `'.PREFIX.'product` p ON p.id=sg.`id_product`
      WHERE sg.`id_product`='.DB::quote($id));
    /* если добавляемый товар является комплектом - вычисляется
     * реальное количество комплекта (в зависимости от наличия комплектующих на складе
     * и остатка от ранее добавленных в корзину товаров, входящих в состав комплекта)
     */
    if ($row = DB::fetchArray($res)) {
      $components = explode(',', $row['components']);
      $countMax = $row['count'];
      $realCount = $row['count'];
      foreach ($components as $comp) {
        $arr = explode('|', $comp);
        $code = $arr[0];
        $count = $arr[1];
        $result = DB::query('SELECT p.`id`, p.`count`, pv.count as `count_variant`, pv.id as `id_variant`, pv.`code` as `code_variant` FROM `'.PREFIX.'product` p
           LEFT JOIN `'.PREFIX.'product_variant` pv ON
           pv.product_id = p.id WHERE p.`code`='.DB::quote($code).' OR pv.code='.DB::quote($code));
        while ($row = DB::fetchArray($result)) {
          if (!empty($row['code_variant']) && $row['code_variant'] != $code) {
            continue;
          } elseif ($row['code_variant'] == $code) {
            $row['count'] = $row['count_variant'];
          }
          foreach ($_SESSION['cart'] as $key => $cart) {
            if ($row['id'] == $cart['id']) {
              if (empty($cart['variantId'])) {
                $row['count'] = $row['count'] - $cart['count'];
              } elseif ($cart['variantId'] == $row['id_variant']) {
                $row['count'] = $row['count'] - $cart['count'];
              }
            }
          }
          $countMax = $row['count'] > 0 ? floor($row['count'] / $count) : $row['count'];
        }
        if ($countMax >= 0 && ($countMax < $realCount||$realCount== -1)) {
          $realCount = $countMax; // доступное количество комплекта для покупки с учетом наличия комплектующих
        }
      }
      $cart = new Models_Cart;
      // Если есть в корзине такой товар с этими характеристиками.
      $key = $cart->alreadyInCart($id, $arg['args'][2]['property'], $arg['args'][3]);

      if ($realCount == 0) {
        $cart->delFromCart($id, $arg['args'][2]['property'], $arg['args'][3]);
      }
      // общее количество комплектующих (по отдельности) в корзине для сравнения с количеством комплектов
      if ($key !== null) {
        $countMax = $realCount;
        if (($countInCart + $_SESSION['cart'][$key]['count']) > $countMax && $countMax > 0) {
          $_SESSION['cart'][$key]['count'] = $countMax;
        }
      }
      return $arg['result'];
    }
    /* если добавляемый товар входит в состав комплектом - проверка есть ли
     * данный комплект в корзине, если да - вычисляется
     * доступное для покупки количество товара
     */

    if ($variantId) {
      $res = DB::query('SELECT `code`, `count` FROM `'.PREFIX.'product_variant` WHERE `id` = '.DB::quote($variantId));
      if ($row = DB::fetchArray($res)) {
        $code = $row['code'];
        $count = $row['count'];
      }
    } else {
      $res = DB::query('SELECT `code`, `count` FROM `'.PREFIX.'product` WHERE `id` = '.DB::quote($id));
      if ($row = DB::fetchArray($res)) {
        $code = $row['code'];
        $count = $row['count'];
      }
    }
    if ($count < 0) {
      return $arg['result'];
    }
    $where = ' `components` LIKE "'.DB::quote($code, true).'|%" OR `components` LIKE "%,'.DB::quote($code, true).'|%" ';
    $sql = 'SELECT  * FROM `'.PREFIX.'set-goods` WHERE '.$where;
    $res = DB::query($sql);
    $ids = array();
    while ($row = DB::fetchArray($res)) {
      $components[$row['id_product']] = $row['components'];
      $ids[] = $row['id_product'];
    }

    // если данный товар входит в состав какого-либо комплекта
    if (!empty($components)) {
      $cart = new Models_Cart;
      foreach ($components as $idProduct => $comp) {
        // Если этот комплект есть в корзине
        $key = $cart->alreadyInCart($idProduct, '');
        if ($key !== null) {
          $prodInSet = explode(',', $comp);
          foreach ($prodInSet as $prod) {
            if (stristr($prod, $code) !== FALSE) {
              $countInSet = explode('|', $prod);     // количество товара в комплекте
            }
          }
          $countInCartSet = $_SESSION['cart'][$key]['count']; // количество комплекта в корзине
          $totalInCart = $countInCartSet * $countInSet[1]; // количество продуктов в корзине (с учетом комплекта)
          $maxCount = $count - $totalInCart; // максимальное доступное количество с учетом тех что уже в корзине
          $key = $cart->alreadyInCart($id, $arg['args'][2]['property'], $arg['args'][3]);
          if ($maxCount <= 0) {
            $cart->delFromCart($id, $arg['args'][2]['property'], $arg['args'][3]);
          } else {
            // общее количество комплектующих (по отдельности) в корзине для сравнения с количеством комплектов
            if ($key !== null) {
              if (($countInCart + $_SESSION['cart'][$key]['count']) > $maxCount) {
                $_SESSION['cart'][$key]['count'] = $maxCount;
              }
            }
          }
        }
      }
    }
    return $arg['result'];
  }

  /**
   *
   * Обработчик хука функции refreshCart($arr) Обновляет содержимое корзины.
   * при обновлении количества товара в корзине  -
   * проверка максимально допустимого количества комплектов с учетом
   * количества товаров, входящих в состав данного комплекта и
   * находящихся в корзине. если комплектующие находятся в корзине и
   * для их количества не хватает для формирования комплекта
   *  комплект удаляется из корзины.
   */
  static function refreshCountInCart($arg) {

    $arr = $arg['args'][0];
    foreach ($arr as $key => $cart) {
      $id = $cart['id'];
      $countNew = $cart['count'];
      $result = DB::query('SELECT sg.*, p.count FROM `'.PREFIX.'set-goods` sg
        LEFT JOIN `'.PREFIX.'product` p ON p.id=sg.`id_product`
        WHERE sg.`id_product`='.DB::quote($id));
      if ($rowset = DB::fetchArray($result)) {
        $components = explode(',', $rowset['components']);
        $realCount = $rowset['count'];
        $countMax = $rowset['count'];
        foreach ($components as $comp) {
          $arr = explode('|', $comp);
          $code = $arr[0];
          $count = $arr[1];
          $result = DB::query('SELECT p.`id`, p.`count`, pv.count as `count_variant`, pv.id as `id_variant`, pv.`code` as `code_variant` FROM `'.PREFIX.'product` p
           LEFT JOIN `'.PREFIX.'product_variant` pv ON
           pv.product_id = p.id WHERE p.`code`='.DB::quote($code).' OR pv.code='.DB::quote($code));
          while ($row = DB::fetchArray($result)) {
            if (!empty($row['code_variant']) && $row['code_variant'] != $code) {
              continue;
            } elseif ($row['code_variant'] == $code) {
              $row['count'] = $row['count_variant'];
            }
            foreach ($_SESSION['cart'] as $cart) {
              if ($row['id'] == $cart['id']) {
                if (empty($cart['variantId'])) {
                  $row['count'] = $row['count'] - $cart['count'];
                } elseif ($cart['variantId'] == $row['id_variant']) {
                  $row['count'] = $row['count'] - $cart['count'];
                }
              }
            }
            $countMax = $row['count'] > 0 ? floor($row['count'] / $count) : $row['count'];
          }
          if ($countMax >= 0 && ($countMax < $realCount||$realCount== -1)) {
            $realCount = $countMax; // доступное количество комплекта для покупки с учетом наличия комплектующих
          }
        }
        if (($countNew > $realCount) && $realCount >= 0) {
          $_SESSION['cart'][$key]['count'] = $realCount;
        }
      }
      // проверка если данный товар входит в состав комплекта, который уже находится в корзине

      if (!empty($cart['variantId'])) {
        $res = DB::query('SELECT `code`, `count` FROM `'.PREFIX.'product_variant` WHERE `id` = '.DB::quote($cart['variantId']));
        if ($row = DB::fetchArray($res)) {
          $code = $row['code'];
          $count = $row['count'];
        }
      } else {
        $res = DB::query('SELECT `code`, `count` FROM `'.PREFIX.'product` WHERE `id` = '.DB::quote($id));
        if ($row = DB::fetchArray($res)) {
          $code = $row['code'];
          $count = $row['count'];
        }
      }
      if ($count >= 0) {
        $where = ' `components` LIKE "'.DB::quote($code, true).'|%" OR `components` LIKE "%,'.DB::quote($code, true).'|%" ';
        $sql = 'SELECT  * FROM `'.PREFIX.'set-goods` WHERE '.$where;
        $res = DB::query($sql);
        while ($row = DB::fetchArray($res)) {
          $components[$row['id_product']] = $row['components'];
        }
        // если данный товар входит в состав какого-либо комплекта
        if (!empty($components)) {
          $cart = new Models_Cart;
          foreach ($components as $idProduct => $comp) {
            // Если этот комплект есть в корзине
            $keyProd = $cart->alreadyInCart($idProduct, '');
            if ($keyProd !== null) {
              $prodInSet = explode(',', $comp);
              foreach ($prodInSet as $prod) {
                if (stristr($prod, $code) !== FALSE) {
                  $countInSet = explode('|', $prod);     // количество товара в комплекте
                }
              }
              $countInCartSet = $_SESSION['cart'][$keyProd]['count']; // количество комплекта в корзине
              $totalInCart = $countInCartSet * $countInSet[1]; // количество продуктов в корзине (с учетом комплекта)
              $maxCount = $count - $totalInCart; // максимальное доступное количество с учетом тех что уже в корзине
              if ($maxCount <= 0) {
                $maxCount = 0;
              } else {
                // общее количество комплектующих (по отдельности) в корзине для сравнения с количеством комплектов
              if (($countNew) > $maxCount) {
                $_SESSION['cart'][$key]['count'] = $maxCount;
              }
              }
            }
          }
        }
      }
    }
    return $arg['result'];
  }

  /**
   *
   * Обработчик хука функции notSetGoods($id)
   * проверяет есть ли в содержимом заказа комплект
   */
  static function checkNotSet($arg) {
    $result = $arg['result'];
    $id = $arg['args'][0];
    $set = DB::query('SELECT `id` FROM `'.PREFIX.'set-goods` WHERE `id_product`='.DB::quote($id));
    if ($row = DB::fetchArray($set)) {
      $result = false;
      return $result;
    }
    return $arg['result'];
  }
  /**
   * Обработчик хука функции refreshCountAfterEdit($orderId, $content)  - Пересчитывает количество остатков продуктов при редактировании заказа.
   * @param int $orderId  - id заказа.
   *           $content - новое содержимое содержимое заказа
   * @return bool $flag;
   */
  static function refreshCountSetAfterEdit($arg) {
    $orderId = $arg['args'][0];
    $content = $arg['args'][1];
    $model = new Models_Order;
    // Если количество товара меняется, то пересчитываем остатки продуктов из заказа.
    $order = $model->getOrder(' id = '.DB::quote($orderId, true));

    $order_content_old = unserialize(stripslashes($order[$orderId]['order_content']));
    $order_content_new = unserialize(stripslashes($content));
    $product = new Models_Product();
    $codes = array();
    $setsId = array(); // массив id комплектов в старом заказе
    foreach ($order_content_old as $item_old) {
      $set = DB::query('SELECT `id`, `components` FROM `'.PREFIX.'set-goods` WHERE `id_product`='.DB::quote($item_old['id']));
      // если в заказе был комплект - проверяем есть ли он в новом содержимом,
      if ($row = DB::fetchArray($set)) {
        $codes[$item_old['id']] = array('id' => $item_old['id'],
          'code' => $item_old['code'],
          'count' => $item_old['count'],
          'components' => $row['components']);
        $setsId[] = $item_old['id'];
      }
    }
    if (!empty($setsId)) {
      foreach ($order_content_new as $item_new) {
        // если комплект есть в новом заказе, то ничего не происходит, иначе увеличиваем кол-во комплектующих в базе, если да, ничего не меняем
        if (in_array($item_new['id'], $setsId)) {
          $codes[$item_new['id']]['components'] = '';
        }
      }
    }
    foreach ($codes as $prod) {
      if ($prod['components']) {
        $components = explode(',', $prod['components']);
        foreach ($components as $comp) {
          $arr = explode('|', $comp);
          $code = $arr[0];
          $count = $arr[1] * $prod['count'];
          $result = DB::query('SELECT `id`, `count` FROM `'.PREFIX.'product` WHERE `code`='.DB::quote($code));
          if ($row = DB::fetchArray($result)) {
            $id = $row['id'];
          } else {
            $result = DB::query('SELECT `product_id`, `count` FROM `'.PREFIX.'product_variant` WHERE `code`='.DB::quote($code));
            if ($rowvar = DB::fetchArray($result)) {
              $id = $rowvar['product_id'];
            }
          }
          $product->increaseCountProduct($id, $code, $count);
        }
      }
    }

    return $arg['result'];
  }

  /**
   * Обработчик хука функции getListProductByKeyWord($keyword, $allRows = false, $onlyActive = false, $adminPanel = false, $mode = false)
   *  $result = array(
      'catalogItems' => array(),
      'pager' => null,
      'numRows' => null
    );
   */
  public function checkAvailableComponentsSearch($arg){
    $catalog = $arg['result']['catalogItems'];
    foreach ($catalog as $key => $item) {
      $id = $item['id'];
      $res = DB::query('SELECT sg.*, p.count FROM `'.PREFIX.'set-goods` sg
        LEFT JOIN `'.PREFIX.'product` p ON p.id=sg.`id_product`
        WHERE sg.`id_product`='.DB::quote($id));
      if ($row = DB::fetchArray($res)) {
        $components = explode(',', $row['components']);
        $countMax = $row['count'];
        $realCount = $row['count'];
        foreach ($components as $comp) {
          $arr = explode('|', $comp);
          $code = $arr[0];
          $count = $arr[1];
          $result = DB::query('SELECT p.`id`, p.`count`, pv.count as `count_variant`, pv.id as `id_variant`, pv.`code` as `code_variant` FROM `'.PREFIX.'product` p
           LEFT JOIN `'.PREFIX.'product_variant` pv ON
           pv.product_id = p.id WHERE p.`code`='.DB::quote($code).' OR pv.code='.DB::quote($code));
          while ($row = DB::fetchArray($result)) {
            if (!empty($row['code_variant']) && $row['code_variant'] != $code) {
              continue;
            } elseif ($row['code_variant'] == $code) {
              $row['count'] = $row['count_variant'];
            }
            $countMax = $row['count'] > 0 ? floor($row['count'] / $count) : $row['count'];
          }
          if ($countMax >= 0 && ($countMax < $realCount||$realCount== -1)) {
            $realCount = $countMax; // доступное количество комплекта для покупки с учетом наличия комплектующих
          }
        }
        $catalog[$key]['count'] = $realCount;
      }

    }
    $arg['result']['catalogItems'] = $catalog;
    return $arg['result'];
  }

}


?>

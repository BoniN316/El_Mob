<?php

/**
 * Класс Pactioner наследник стандарного Actioner
 * Предназначен для выполнения действий,  AJAX запросов плагина 
 *
 */
class Pactioner extends Actioner {

  private $pluginName = 'set-goods';

  /**
   * Получает параметры редактируемого продукта.
   */
  public function getSetData() {
    USER::AccessOnly('1,4', 'exit()');
    $this->messageError = $this->lang['ACT_NOT_GET_POD'];

    $model = new Models_Product;
    $product = $model->getProduct($_POST['id_product']);

    $product['title'] = htmlspecialchars_decode($product['title']);
    if (empty($product)) {
      return false;
    }
    $this->data = $product;

    // Получаем весь набор пользовательских характеристик.
    $res = DB::query("SELECT * FROM `".PREFIX."property`");
    while ($userFields = DB::fetchAssoc($res)) {
      $this->data['allProperty'][] = $userFields;
    }

    $variants = $model->getVariants($_POST['id_product']);
    foreach ($variants as $variant) {
      if(!empty($variant['image'])){
        $dir = floor($product['id']/100).'00';
        $ds = DIRECTORY_SEPARATOR;        
        if(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$product['id'].$ds.'thumbs'.$ds.'30_'.$variant['image'])){
          $variant['image'] = 'product/'.$dir.'/'.$product['id'].'/thumbs/30_'.$variant['image'];
        }elseif(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$variant['image'])) {
          $variant['image'] = 'thumbs/30_'.$variant['image'];
        }
      }
      
      $this->data['variants'][] = $variant;
    }    

    $stringRelated = ' null';
    $sortRelated = array();
    foreach (explode(',', $product['related']) as $item) {
      $stringRelated .= ','.DB::quote($item);
      if (!empty($item)) {
        $sortRelated[$item] = $item;
      }
    }
    $stringRelated = substr($stringRelated, 1);


    //$productsRelated = $model->getProductByUserFilter(' id IN ('.($product['related']?$product['related']:'0').')');
    $res = DB::query('
      SELECT  CONCAT(c.parent_url,c.url) as category_url,
        p.url as product_url, p.id, p.image_url,p.price_course as price,p.title,p.code, p.weight
      FROM `'.PREFIX.'product` p
        LEFT JOIN `'.PREFIX.'category` c
        ON c.id = p.cat_id
      WHERE p.code IN ('.$stringRelated.')');

    while ($row = DB::fetchAssoc($res)) {
      $img = explode('|', $row['image_url']);
      
      if(!empty($img[0])){
        $dir = floor($row['id']/100).'00';
        $ds = DIRECTORY_SEPARATOR;        
        if(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$row['id'].$ds.'thumbs'.$ds.'30_'.$img[0])){
          $img[0] = SITE.'/uploads/product/'.$dir.'/'.$row['id'].'/thumbs/30_'.$img[0];
        }elseif(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$img[0])) {
          $img[0] = SITE.'/uploads/thumbs/30_'.$img[0];
        }
      }
      
      $row['image_url'] = $img[0];
      $sortRelated[$row['code']] = $row;
    }
    $productsRelated = array();
    //сортируем связанные товары в том порядке, в котором они идут в строке артикулов

    if (!empty($sortRelated)) {
      foreach ($sortRelated as $item) {
        if (is_array($item)) {
          $productsRelated[] = $item;
        }
      }
    }
    $this->data['relatedArr'] = $productsRelated;

    $_POST['produtcId'] = $_POST['id_product'];
    $_POST['categoryId'] = $product['cat_id'];
    $tempDataResult = $this->data;
    $this->data = null;
    $this->getProdDataWithCat();
    $tempDataResult['prodData'] = $this->data;
    $this->data = $tempDataResult;

    $res = DB::query('SELECT id as id_set, components FROM `'.PREFIX.$this->pluginName.'` WHERE id_product = '.DB::quote($_POST['id_product']));
    if ($copmonents = DB::fetchArray($res)) {
      $goods = array();
      $countComponents = array();
      $strgoods = ' null';
      foreach (explode(',', $copmonents['components']) as $item) {
        $item = explode('|', $item);
        $strgoods .= ','.DB::quote($item[0]);
        if (!empty($item[0])) {
          $goods[$item[0]] = $item[0];
          $countComponents[$item[0]] = $item[1];
        }
      }
      
      $strgoods = substr($strgoods, 1);
      $sql = '
      SELECT  CONCAT(c.parent_url,c.url) as category_url, c.rate,
        p.url as product_url, p.id, p.image_url,p.price, p.price_course, p.title,p.code, p.count as max,
        v.price as price_variant, v.price_course as price_course_variant, v.code as variant, v.title_variant, v.count as max_variant, p.weight
      FROM `'.PREFIX.'product` p
        LEFT JOIN `'.PREFIX.'category` c ON c.id = p.cat_id
        LEFT JOIN `'.PREFIX.'product_variant` v ON v.product_id = p.id AND v.code IN ('.$strgoods.')
      WHERE p.code IN ('.$strgoods.') OR v.code IN ('.$strgoods.')';
      $res = DB::query($sql);
 
      while ($row = DB::fetchAssoc($res)) {
        $img = explode('|', $row['image_url']);        
        
        if(!empty($img[0])){
          $dir = floor($row['id']/100).'00';
          $ds = DIRECTORY_SEPARATOR;
          
          if(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$row['id'].$ds.'thumbs'.$ds.'30_'.$img[0])){
            $img[0] = SITE.'/uploads/product/'.$dir.'/'.$row['id'].'/thumbs/30_'.$img[0];
          }elseif(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$img[0])) {
            $img[0] = SITE.'/uploads/thumbs/30_'.$img[0];
          }
        }
        
        $row['image_url'] = $img[0];
        $row['counts'] = $countComponents[$row['code']];
        if (!empty($row['variant'])) {
          $row['counts'] = $countComponents[$row['variant']];
          $goods[$row['variant']] = $row;
        }
        else {
          $goods[$row['code']] = $row;
        }
      }
      $set = array();
      //сортируем связанные товары в том порядке, в котором они идут в строке артикулов
     
      if (!empty($goods)) {
        foreach ($goods as $item) {
          if (is_array($item)) {
            $set[] = $item;
          }
        }
      }
      $this->data['set'] = $set;
      $this->data['id_set'] = $_POST['id_set'];            
    }

    return true;
  }

  /**
   * Сохраняет и обновляет параметры набора товаров
   * @return type
   */
  public function saveSet() {
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['ACT_SAVE_PROD'];
    $this->messageError = $this->lang['ACT_NOT_SAVE_PROD'];
    //Перед сохранением удалим все помеченные  картинки продукта физически с диска.  
    
    $model = new Models_Product;
    
    $images = explode("|", $_POST['image_url']);
    foreach($images as $cell=>$image){
      $pos = strpos($image, 'no-img');
      if($pos || $pos === 0){
        unset($images[$cell]);        
      }else{
        $images[$cell] = basename($image);
      }      
    }
        
    $_POST['image_url'] = implode('|', $images);
    
    foreach($_POST['variants'] as $cell=>$variant){
      if(empty($variant['image'])){
        continue;
      }
      $pos = strpos($variant['image'], 'no-img');
      if($pos || $pos === 0){
        unset($_POST['variants'][$cell]['image']);
      }else{
        $_POST['variants'][$cell]['image'] = str_replace(array('30_', '70_'), '', basename($variant['image']));      
        $images[] = $_POST['variants'][$cell]['image'];
      }
    }   
    
    if (!is_numeric($_POST['count'])) {
      $_POST['count'] = "-1";
    }

    // исключаем дублированные артикулы в строке связаных товаров
    if (!empty($_POST['related'])) {
      $_POST['related'] = implode(',', array_unique(explode(',', $_POST['related'])));
    }
    // исключаем дублированные артикулы в строке связаных товаров
    if (!empty($_POST['set'])) {
      $_POST['set'] = implode(',', array_unique(explode(',', $_POST['set'])));
    }

    if (!empty($_POST['userProperty'])) {
      foreach ($_POST['userProperty'] as $k => $v) {
        $_POST['userProperty'][$k] = htmlspecialchars_decode($v);
      }
    }
    $set = $_POST['set'];    
    //Обновление
    if (!empty($_POST['id'])) {       
      $itemId = $_POST['id'];
      if(method_exists('Models_Product', 'movingProductImage')){
        $model->movingProductImage($images, $itemId, 'uploads/prodtmpimg');
      } 
      unset($_POST['pluginHandler']);
      unset($_POST['set']);
      $setId = $_POST['id_set'];
      unset($_POST['id_set']);
      $_POST['updateFromModal'] = true; // флаг, чтобы отличить откуда было обновление  товара
      $model->updateProduct($_POST);
      $_POST['image_url'] = $images[0];
      $_POST['currency'] = MG::getSetting('currency');
      $_POST['recommend'] = $_POST['recommend'];                  
      $tempProd = $model->getProduct($_POST['id']);
      $arrVar = $model->getVariants($_POST['id']);
      foreach ($arrVar as $key => $variant) {
        $tempProd['variants'][] = $variant;
      }
      // $tempProd['variants'] = array($arrVar);
      $tempProd['real_price'] = $tempProd['price'];
      DB::query('UPDATE `'.PREFIX.$this->pluginName.'` SET `components` = '.DB::quote($set).' WHERE `id_product` = '.DB::quote($_POST['id']));
      $tempProd['id_set'] = $setId;
      $this->data = $tempProd;
    } else {  // добавление
      unset($_POST['delete_image']);
      unset($_POST['pluginHandler']);
      unset($_POST['set']);
      unset($_POST['id_set']);
      $newProd = $model->addProduct($_POST);      
      if(method_exists('Models_Product', 'movingProductImage')){
        $model->movingProductImage($images, $newProd['id'], 'uploads/prodtmpimg');
      }       
      $dir = floor($newProd['id']/100).'00';
      $ds = DIRECTORY_SEPARATOR;
      $image = '';
      
      if(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$newProd['id'].$ds.'thumbs'.$ds.'30_'.$images[0])){
        $image = '/product/'.$dir.'/'.$newProd['id'].'/thumbs/30_'.$images[0];
      }elseif(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$images[0])) {
        $image = '/thumbs/30_'.$images[0];
      }
      
      $this->data['image_url'] = $image;
      $this->data['currency'] = MG::getSetting('currency');
      $this->data['recommend'] = $_POST['recommend'];                   
      $tempProd = $model->getProduct($newProd['id']);
      $arrVar = $model->getVariants($newProd['id']);
      foreach ($arrVar as $key => $variant) {
        $tempProd['variants'][] = $variant;
      }
      // $tempProd['variants'] = array($arrVar);
      $tempProd['real_price'] = $tempProd['price'];
      $array['id_product'] = $newProd['id'];
      $itemId = $newProd['id'];
      $array['components'] = $set;
      DB::buildQuery('INSERT INTO `'.PREFIX.$this->pluginName.'` SET ', $array);
      $tempProd['id_set'] = DB::insertId();
      $this->data = $tempProd;
    }                  
    
    return true;
  }

  /**
   * Устанавливает количество отображаемых записей в разделе комплектов товаров
   * @return boolean
   */
  public function setCountPrintSetGoods() {
    //доступно только модераторам и админам.
    USER::AccessOnly('1,4', 'exit()');
    $count = 20;
    if (is_numeric($_POST['count']) && !empty($_POST['count'])) {
      $count = $_POST['count'];
    }
    MG::setOption(array('option' => 'countPrintSetGoods', 'value' => $count));
    return true;
  }

  /**
   * Устанавливает флаг для вывода продукта в блоке новых товаров.
   * @return type
   */
  public function newSet() {
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['ACT_PRINT_NEW'];
    $this->messageError = $this->lang['ACT_NOT_PRINT_NEW'];
    unset($_POST['pluginHandler']);
    $model = new Models_Product;
    // Обновление.
    if (!empty($_POST['id'])) {
      $model->updateProduct($_POST);
    }
    if ($_POST['new']) {
      return true;
    }
    return false;
  }

  /**
   * Устанавливает флаг для вывода продукта в блоке рекомендуемых товаров.
   * @return type
   */
  public function recomendProduct() {
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['ACT_PRINT_RECOMEND'];
    $this->messageError = $this->lang['ACT_NOT_PRINT_RECOMEND'];
    unset($_POST['pluginHandler']);
    $model = new Models_Product;
    // Обновление.
    if (!empty($_POST['id'])) {
      $model->updateProduct($_POST);
    }
    if ($_POST['recommend']) {
      return true;
    }
    return false;
  }

  /**
   * Устанавливает флаг  активности продукта 
   * @return type
   */
  public function visibleProduct() {
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['ACT_V_PROD'];
    $this->messageError = $this->lang['ACT_UNV_PROD'];
    unset($_POST['pluginHandler']);
    $model = new Models_Product;
    // Обновление.
    if (!empty($_POST['id'])) {
      $model->updateProduct($_POST);
    }

    if ($_POST['activity']) {
      return true;
    }

    return false;
  }

  /**
   * Клонирует  комплект товаров
   * @return boolean
   */
  public function cloneSet() {
    USER::AccessOnly('1,4', 'exit()');
    $model = new Models_Product;
    $newProd = $model->cloneProduct($_POST['id']);
    $this->messageSucces = $this->lang['ACT_CLONE_PROD'];
    $this->messageError = $this->lang['ACT_NOT_CLONE_PROD'];
    $components = DB::query('SELECT `components` FROM `'.PREFIX.$this->pluginName.'`
                            WHERE `id_product` = '.DB::quote($_POST['id']));
    $set = DB::fetchArray($components);

    $array['id_product'] = $newProd['id'];
    $array['components'] = $set['components'];
    DB::buildQuery('INSERT INTO `'.PREFIX.$this->pluginName.'` SET ', $array);
    $newProd['id_set'] = DB::insertId();
    $newProd['components'] = $set['components'];
    $newProd['image_url'] = str_replace(SITE.'/uploads/', '', mgImageProductPath($newProd['image_url'], $newProd['id']));
    $this->data = $newProd;

    return true;
  }

  /**
   * Удаляет комплект товаров
   * @return type
   */
  public function deleteSet() {
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['ACT_DEL_SET'];
    $this->messageError = $this->lang['ACT_NOT_DEL_SET'];
    $model = new Models_Product;
    if ($model->deleteProduct($_POST['id'])) {
      DB::query('DELETE FROM `'.PREFIX.$this->pluginName.'` WHERE `id_product`= '.$_POST['id']);
      return true;
    }
    return false;
  }
  /**
   * Возвращает список найденых наборов по ключевому слову
   * @return boolean
   */
  public function searchSet() {
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['SEACRH_PRODUCT'];
    $model = new Models_Catalog;

    $_POST['mode']=$_POST['mode']?$_POST['mode']:false;
    $arr = $model->getListProductByKeyWord($_POST['keyword'], true, false, true, $_POST['mode']);
    $result = array();
    if (empty($arr)) {
      $result = array();
    }
    else {
      $sets = array(); // массив с id товаров, котороые являются комплектами 
      $set = DB::query('SELECT `id`,`id_product` FROM `'.PREFIX.$this->pluginName.'` ');
      while ($row = DB::fetchArray($set)) {
        $sets[$row['id']] = $row['id_product'];
      }
      foreach ($arr['catalogItems'] as $item) {
        if (in_array($item['id'], $sets) ) {
          $item['id_set'] = array_search($item['id'], $sets);
          $result[] = $item;
        }
      }
    }
    $this->data = $result;
    return true;
  }
    /**
   * Сохраняет  опции плагина
   * @return boolean
   */
  public function saveBaseOption() {
    //доступно только модераторам и админам.
    USER::AccessOnly('1,4','exit()');
	
    $this->messageSucces = $this->lang['SAVE_BASE'];
    $this->messageError = $this->lang['NOT_SAVE_BASE'];
    if (!empty($_POST['data'])) {
      MG::setOption(array('option' => 'setGoodsOption', 'value' => addslashes(serialize($_POST['data']))));
    }   
    return true;
  }

}

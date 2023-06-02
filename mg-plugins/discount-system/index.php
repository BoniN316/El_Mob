<?php

/*
  Plugin Name: Система скидок для покупателей
  Description: Плагин позволяет устанавливать накопителную скидку для зарегистированных пользователей в зависимости от суммы оплаченных заказов и объемную единоразовую скидку, если оформленный заказ превысил установленную сумму. В настройках можно изменить опции применять максимальную скидку или сумму скидок. Для вывода информации о скидке при оформлении заказа необходимо добавить шорт-код [discount-system] на странице оформления. По шорткоду [discount-info] выводится информация о всех существующих скидках, если пользователь авторизован выводится информация о сумме всех его заказов и процент персональной скидки.
  Author: Daria Churkina
  Version: 1.1.4
 */

new discountSystem;

class discountSystem {

  private static $lang = array(); // массив с переводом плагина 
  private static $pluginName = ''; // название плагина (соответствует названию папки)
  private static $path = ''; //путь до файлов плагина 
  private static $percent = 0;
  private static $percentVolume = 0;
  private static $options;
  private static $cartCount = 0;
  private static $summOrders = false;
  private static $percentCoupon = 0;
  private static $coupon = '';


  public function __construct() {
    mgActivateThisPlugin(__FILE__, array(__CLASS__, 'activate')); //Инициализация  метода выполняющегося при активации  
    mgAddAction(__FILE__, array(__CLASS__, 'pageSettingsPlugin')); //Инициализация  метода выполняющегося при нажатии на кнопку настроект плагина  
    mgAddShortcode('discount-system', array(__CLASS__, 'discountSystemInfo')); // Инициализация шорткода [discount-system] - доступен в любом HTML коде движка.    
    mgAddShortcode('discount-info', array(__CLASS__, 'discountInfo')); // Инициализация шорткода [discount-info] - доступен в любом HTML коде движка.      
    mgAddAction('models_cart_applydiscountsystem', array(__CLASS__, 'applyDiscountSystem'), 1);
    self::$pluginName = PM::getFolderPlugin(__FILE__);
    self::$lang = PM::plugLocales(self::$pluginName);    
    self::$path = PLUGIN_DIR.self::$pluginName;

    if (!URL::isSection('mg-admin')) { // подключаем CSS плагина для всех страниц, кроме админки
      mgAddMeta('<link rel="stylesheet" href="'.SITE.'/'.self::$path.'/css/style.css" type="text/css" />');
    }
    
    
  }
  static function settingDiscounts() {
    if (empty(self::$options)) {
      self::getPercentByEmail();
      self::getPercentByOrder();
      $option = MG::getSetting('discount-system-option');
      $option = stripslashes($option);
      $options = unserialize($option);   
      self::$options = $options ? $options : array('max' => 1);
    }
  }

  /**
   * Метод выполняющийся при активации палагина 
   */
  static function activate() {
    self::createDateBase();
  }

  
  /**
   * Метод выполняющийся перед генераццией страницы настроек плагина
   */
  static function preparePageSettings() {
    echo '
      <link rel="stylesheet" href="'.SITE.'/mg-admin/design/css/jquery-ui.css">
      <link rel="stylesheet" href="'.SITE.'/'.self::$path.'/css/style.css" type="text/css" />     
      <link rel="stylesheet" href="'.SITE.'/'.self::$path.'/css/style.css" type="text/css" />  
      <script type="text/javascript">     
        includeJS("'.SITE.'/'.self::$path.'/js/script.js");  
      </script> 
    ';
  }
   
  
  /**
   * Создает таблицу плагина в БД
   */
  static function createDateBase() {
    // Запрос для проверки, был ли плагин установлен ранее.
    $exist=false;
    $result = DB::query('SHOW TABLES LIKE "'.PREFIX.self::$pluginName.'%"');
    if (DB::numRows($result) == 2){        
      $exist=true;         
    }
    
    DB::query("
     CREATE TABLE IF NOT EXISTS `".PREFIX.self::$pluginName."-cumulative` (
       `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Порядковый номер',      
       `summ` double NOT NULL COMMENT 'Минимальная сумма заказа',
       `percent` float NOT NULL COMMENT 'Процент скидки',
       PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
    
    DB::query("
     CREATE TABLE IF NOT EXISTS `".PREFIX.self::$pluginName."-volume` (
       `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Порядковый номер',      
       `summ` double NOT NULL COMMENT 'Минимальная сумма заказа',
       `percent` float NOT NULL COMMENT 'Процент скидки',
       PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
        
    // Если плагин впервые активирован, то задаются настройки по умолчанию 
    if (!$exist) {    
      $array = Array(
        'max' => '1'
      );
      MG::setOption(array('option' => 'discount-system-option', 'value' => addslashes(serialize($array))));
    }
  }
  /**
   * Выводит страницу настроек плагина в админке
   */
  static function pageSettingsPlugin() {
    self::settingDiscounts();
    $settings = array(
      1 => 'Выбор максимальной скидки из всех возможных',
      2 => 'Выбор максимальной скидки из суммы накопительной и объемной или по промокоду.',
      3 => 'Суммировать все скидки, включая по промокодам');
    $lang = self::$lang;
    $pluginName = self::$pluginName;
    $options = self::$options;
    $sql = "
      SELECT * FROM `".PREFIX.self::$pluginName."-cumulative`
      ORDER BY `summ` ";
    $res = DB::query($sql);
    $cumulative = array();
    while ($rows = DB::fetchArray($res)) {
      $cumulative[] = $rows;
    }
    $sql = "
      SELECT * FROM `".PREFIX.self::$pluginName."-volume`
      ORDER BY `summ` ";
    $res = DB::query($sql);
    $volume = array();
    while ($rows = DB::fetchArray($res)) {
      $volume[] = $rows;
    }
 
    self::preparePageSettings();
    include('pageplugin.php');
  }

  /**
   * Обработчик шотркода вида [discount-system] 
   * выполняется когда при генерации страницы встречается код
   */
  static function discountSystemInfo() {
    self::settingDiscounts();
    $html = '';
    $percentCode = self::getPercentByCoupone();
    $percentUser = self::$percent;
    $percentVolume = self::$percentVolume;
    $options = self::$options;
    $case = $options['max'];
    if ($case == '1') {
      $percent = $percentCode >= $percentUser ? $percentCode : $percentUser;
      $info = $percentCode >= $percentUser ? "1" : "2";
      $percentTotal = $percent > $percentVolume ? $percent : $percentVolume;
      $info = $percent >= $percentVolume ? $info : "3";
    }
    elseif ($case == '2') {
      $percentSum = $percentUser+$percentVolume;
      $percentTotal = $percentCode >= $percentSum ? $percentCode : $percentSum;
      $info = $percentCode >= $percentSum ? "1" : "2";
    } elseif ($case == '3') {
        $percentTotal = ($percentCode + $percentUser+$percentVolume);
    }
    $percentTotal = $percentTotal < 100 ? $percentTotal : 99;
    if ($percentTotal != 0) {
      $cart = new Models_Cart;
      $total = $cart->getTotalSumm();
      $fullSum = round($total*100/(100-$percentTotal), 2);           
      ob_start();
      include ('layout.php');
      $html = ob_get_contents();
      ob_clean();
    } 
    return $html;
  }
  
  /**
	* Применяет купонную скидку по промокоду
	*/
  static public function applyDiscountSystem($args){  
   self::settingDiscounts();
   $price = $args['args'][0];
   $percentTotal = 0;
   $percentUser = self::$percent;
   if (self::$cartCount == count($_SESSION['cart'])) {
     $percentVolume = self::$percentVolume;
   } else {
     $percentVolume = self::getPercentByOrder();
   }   
   $percentPromo = self::getPercentByCoupone();
   $discountSystem = 'true/true';
   $coupone = '';
   $options = self::$options;
    if ($options['max'] == '2') {
      $percentTotal = $percentUser + $percentVolume;
      if ($percentTotal < $percentPromo) {
        $discountSystem = 'false/false';
        $coupone = $_SESSION['couponCode'];
      }      
    } elseif ($options['max'] == '3') {
      $percentTotal = $percentPromo + $percentUser + $percentVolume;
      $coupone = $_SESSION['couponCode'];
    } else {
      if (($percentPromo >= $percentUser)&&($percentPromo >= $percentVolume)) {
        $percentTotal = $percentPromo; 
        $discountSystem = 'false/false';
        $coupone = $_SESSION['couponCode'];
       } elseif (($percentUser >= $percentPromo)&&($percentUser >= $percentVolume)) {
        $percentTotal = $percentUser; 
        $discountSystem = 'true/false';
        } elseif ($percentVolume != 0 && $percentVolume > $percentUser) {
          $percentTotal = $percentVolume;    
           $discountSystem = 'false/true';
          } 
    }
    $percentTotal = $percentTotal >= 100 ? 99 : $percentTotal;
    $result = $price - $price*$percentTotal/100;
    $args['result'] = array (
      'price' => round($result, 2),
      'discounts' => $discountSystem,
      'promo' => $coupone
      );
    return $args['result'];
  }
  
  /**
   * Получение скидки для зарегистированного пользователя 
   */
  static public function getPercentByEmail(){
    $user = USER::getThis();
    $email = $user->email;
    if ($email) {
      $sql = "SELECT SUM(`summ`) as summ FROM  `".PREFIX."order`       
          WHERE  `user_email` =  ".DB::quote($email)." 
          AND ( `status_id` =  '2'
          OR  `status_id` =  '5')";
      $res = DB::query($sql);
      if ($count = DB::fetchAssoc($res)) {
        if ($count['summ'] > 0) {
          $sql = "SELECT * FROM `".PREFIX."discount-system-cumulative` WHERE `summ` <= ".DB::quote($count['summ'])." ORDER BY `summ` DESC LIMIT 1";
          $res = DB::query($sql);
          if ($discount = DB::fetchAssoc($res)) {
            self::$percent = $discount['percent'];
          }
        }
        self::$summOrders = $count['summ'];
        return $count['summ'];
      }
    }
    return false;
  }
  /*
   * Скидка по промокоду 
   */
  static function getPercentByCoupone() {
    $result = 0;
    if (!empty($_SESSION['couponCode'])) {
      $checkTable = DB::query('SHOW TABLES LIKE "'.PREFIX.'promo-code"');
      
      if (DB::numRows($checkTable) == 0){       
        return 0;
      }
      if (!self::$percentCoupon || $_SESSION['couponCode'] != self::$coupon ) {
      $sql ="SELECT `percent` FROM `".
        PREFIX."promo-code` WHERE 
        `code` = ".DB::quote($_SESSION['couponCode'])."
        AND `invisible` = 1 
        AND now() >= `from_datetime`
        AND now() <= `to_datetime`     
        ";
      $res = DB::query($sql);
      if ($count = DB::fetchAssoc($res)){
        $result = $count['percent'];
        self::$percentCoupon = $result;
      }
      self::$coupon = $_SESSION['couponCode'];
      } else {
        $result = self::$percentCoupon;
      }
    }
    return $result;
  }
  /*
   * Скидка по объему заказа
   */
  static function getPercentByOrder(){
    $result = 0;
    if (!empty($_SESSION['cart'])) {
      $currencyRate = MG::getSetting('currencyRate');   
      $currencyShopIso = MG::getSetting('currencyShopIso');  
      $variants = array();
      $products = array();
      foreach ($_SESSION['cart'] as $key => $item) {  
        if($item['variantId']){          
          $variants[$key] = $item['variantId'];                 
        }else{  
          $products[$key] = $item['id'];            
        }
      }
        if (!empty($variants)) {
          $ids = implode(',', $variants);
          $res_var = DB::query('
            SELECT  pv.id as id, pv.price_course as `price`, c.rate as rate,
            pv.currency_iso
            FROM `'.PREFIX.'product_variant` pv   
            LEFT JOIN `'.PREFIX.'product` as p ON 
            p.id = pv.product_id
            LEFT JOIN `'.PREFIX.'category` as c ON 
            c.id = p.cat_id       
            WHERE pv.id IN ('.DB::quote($ids, true).')
          ');  
         while($prod = DB::fetchArray($res_var)) {
            $rate = $prod['rate'] ? $prod['rate'] : 0;
            $prod['price_course'] = $prod['price']+$prod['price']*$rate;
            $prices_variant[$prod['id']] = $prod;
        }
        }
        if (!empty($products)) {
          $ids = implode(',', $products);
          $res_pr = DB::query('
            SELECT p.id as id, p.price_course as `price`, c.rate,
            p.`currency_iso` 
            FROM `'.PREFIX.'product` p
            LEFT JOIN `'.PREFIX.'category` c
            ON c.id = p.cat_id
            WHERE p.id IN  ('.DB::quote($ids, true).')');        
          while($prod = DB::fetchArray($res_pr)) {
            $rate = $prod['rate'] ? $prod['rate'] : 0;
            $prod['price_course'] = $prod['price']+$prod['price']*$rate;
            $prices_prod[$prod['id']] = $prod;
          }
        }
        $totalSumm = 0;
        foreach ($_SESSION['cart'] as $key => $item){
          if($item['variantId']){       
            $price = $prices_variant[$item['variantId']]['price_course'];
            $currency = $prices_variant[$item['variantId']]['currency_iso'];
        }else{  
          $price = $prices_prod[$item['id']]['price_course'];  
          $currency = $prices_prod[$item['id']]['currency_iso'];
        }
        $price_full = SmalCart::plusPropertyMargin($price, $item['propertyReal'], $currencyRate[$currency ? $currency : $currencyShopIso]);
        $totalSumm += $item['count'] * $price_full;        
        }
        
    $sql = 'SELECT * FROM `'.PREFIX.self::$pluginName.'-volume` WHERE `summ` <= '.DB::quote($totalSumm).' ORDER BY `summ` DESC LIMIT 1';
    $rez = DB::query($sql);
    if ($discount = DB::fetchArray($rez)) {
      self::$percentVolume = $discount['percent'];
      $result = $discount['percent'];
    }
    self::$cartCount = count($_SESSION['cart']);
    }
    return $result;
  }
  /**
   * функция для вывода информации о скидках первоснальной и(или) объемной
   * выводится на месте шорт-кода [discount-info]
   * @return type
   */
  static function discountInfo() {
    self::settingDiscounts();
    $discountCum = array();
    $discountVol = array();
    $options = self::$options ? self::$options : array('max' => '1');
    $summ = self::$summOrders != false || self::$summOrders == 0 ? self::$summOrders : self::getPercentByEmail();
    $discount = self::$percent;
    if ($summ || $summ == 0) {        
      $sql = "SELECT * FROM `".PREFIX."discount-system-cumulative` ORDER BY `summ`";
      $res = DB::query($sql);
      while($row = DB::fetchArray($res)) {
        $discountCum[] = $row;
      }
    }
    $sql = "SELECT * FROM `".PREFIX."discount-system-volume` ORDER BY `summ`";
      $res = DB::query($sql);
      while($row = DB::fetchArray($res)) {
      $discountVol[] = $row;
      }
    ob_start();
    include ('layout_info.php');
    $html = ob_get_contents();
    ob_clean();
    return $html; 
  }
}
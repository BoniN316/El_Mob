<?php

/**
 *
 * Раздел управления настройками сайта позволяет внести данные, об администраторе
 * указать  номера электронных кошельков, и настроить почтовый шаблон
 *
 * @var $tablePage - переменная формирующая таблицу в HTML формате
 *
 * @autor Авдеев Марк <mark-avdeev@mail.ru>
 */
//$dir = SITE_DIR.ltrim(URL::getCutPath(), '/').'/mg-templates';
$dir = str_replace(DIRECTORY_SEPARATOR.'mg-admin'.DIRECTORY_SEPARATOR.'section'.DIRECTORY_SEPARATOR.'controlers', '', dirname(__FILE__));
$dir .=	DIRECTORY_SEPARATOR."mg-templates";

$colorSchemeActive = MG::getSetting('colorScheme');
  
$folderTemplate = scandir($dir);
	  
$templates = array();
foreach($folderTemplate as $key => $foldername){
  if(!in_array($foldername, array(".", ".."))){
  
    if(file_exists($dir.'/'.$foldername.'/css/style.css')){
      $schemes = array();	
      $colorScheme = scandir($dir.'/'.$foldername.'/css/color-scheme');
      if(file_exists($dir.'/'.$foldername.'/css/color-scheme')){   
        foreach($colorScheme as $key=>$scheme){
          if($scheme=="."||$scheme==".."){
            unset($colorScheme[$key]);
          }
        }
        if(!empty($colorScheme)){         
          // если строится схемы для дефолтного, то добавляем в по умолчанию в начало красный цвет, 
          // и в последствии его не уичтвываем
         // if($foldername=="default"){
         //  $schemes[] = "CC0000";
         // }
          foreach($colorScheme as $scheme){
            if(strpos($scheme, 'color')===0){

              $color = str_replace(array('color_','.css'), '', $scheme);  
              $schemes[] = $color; 
            }    
          }
        }
      }
      $templates[] = array('foldername'=>$foldername, 'colorScheme'=>$schemes, 'colorSchemeActive'=>$colorSchemeActive);
    }
  }
}


$licenceKey = MG::getOption('licenceKey', true);

$mOrder = new Models_Order;

$deliveryArray = $mOrder->getDeliveryMethod();
//массив способов оплаты
$paymentArray = array();
$i = 1;
while($payment = $mOrder->getPaymentMethod($i)){
  $paymentArray[$i] = $payment;
  $i++;
}

$paymentArray = array_reverse($paymentArray);
usort($paymentArray, array("Models_Order", "sort") );

$res = DB::query("
  SELECT *
  FROM `".PREFIX."setting`
  WHERE `active` = 'Y'
  ");
  
while($option = DB::fetchAssoc($res)) {
  $options[$option['option']] = $option;
}

$allGroupsOptions = array('smtpHost', 'smtpLogin', 'smtpPass', 'smtpPort');

$groups = array(  
  'STNG_GROUP_1' =>  array('sitename', 'adminEmail', 'noReplyEmail', 'templateName','currencyShopIso','priceFormat','phoneMask','widgetCode','consentData'),
  'STNG_GROUP_2' =>  array('horizontMenu','actionInCatalog','printRemInfo','printProdNullRem',
                           'printStrProp','printCompareButton','compareCategory',
                          'useCaptcha','autoRegister','printFilterResult', 'lockAuthorization', 'orderNumber', 
                          'popupCart', 'catalogIndex', 'productInSubcat', 'copyrightMoguta', 'picturesCategory', 'requiredFields', 'connectZoom','showCountInCat'),
  'STNG_GROUP_3' =>  array('mainPageIsCatalog', 'countСatalogProduct', 'countNewProduct', 'countRecomProduct','countSaleProduct', 'randomProdBlock', 'buttonBuyName', 'buttonMoreName', 'buttonCompareName', 'filterSort'),
  'STNG_GROUP_4' =>  array('categoryImgHeight','categoryImgWidth','heightPreview','widthPreview','heightSmallPreview','widthSmallPreview', 'imageResizeType', 'imageSaveQuality', 'waterMark', 'waterMarkVariants'),
  'STNG_GROUP_5' =>  array('smtp', 'smtpHost', 'smtpLogin', 'smtpPass', 'smtpPort'),
  'STNG_GROUP_6' =>  array('shopName','shopPhone','shopAddress','shopLogo', 'backgroundSite', 'favicon'),
  'STNG_GROUP_7' =>  array('cacheObject','cacheMode','cacheTime','cacheHost','cachePort'),
);

//Получаем список страниц с фильтрами, для обработки адресов
$sql = "
  SELECT `id`, `titeCategory`, `url`, `short_url`, `activity` 
  FROM `".PREFIX."url_rewrite` 
  ORDER BY `id` desc";

if($_REQUEST["rewritePage"]){
  $page = $_REQUEST["rewritePage"]; //если был произведен запрос другой страницы, то присваиваем переменной новый индекс
}

$navigator = new Navigator($sql, $page, 25); //определяем класс
$arUrlRewrite = $navigator->getRowsSql();
$urlRewritePager = $navigator->getPager('forAjax');

//Получаем список ссылок для редиректа
$sql = "
  SELECT * 
  FROM `".PREFIX."url_redirect` 
  ORDER BY `id` desc";

if($_REQUEST["redirectPage"]){
  $page = $_REQUEST["redirectPage"]; //если был произведен запрос другой страницы, то присваиваем переменной новый индекс
}

$navigator = new Navigator($sql, $page, 25); //определяем класс
$arUrlRedirect = $navigator->getRowsSql();
$urlRedirectPager = $navigator->getPager('forAjax');
$filename = 'sitemap.xml'; 
$siteMapMsg = false;
if (file_exists($filename)) { 
  $siteMapMsg =  MG::dateConvert(date ("d.m.Y", filemtime($filename)), true ); 
} 
$seoSettingsGroups = array(
  'STNG_SEO_GROUP_1' => array(
    'data' => $arUrlRewrite,
    'pager' => str_replace("linkPage", "rewriteLinkPage", $urlRewritePager),
  ),
  'STNG_SEO_GROUP_2' => array(
    'data' => $arUrlRedirect,
    'pager' => str_replace("linkPage", "redirectLinkPage", $urlRedirectPager),
  ),
  'STNG_SEO_GROUP_3' => array(
    'msg' => $siteMapMsg,
    'excludeUrl' => str_replace(';','',$options['excludeUrl']['value'])
  ),
  'STNG_SEO_GROUP_4' => array(
    'data' => array(
      'catalog_meta_title' => MG::getSetting('catalog_meta_title'),
      'catalog_meta_description' => MG::getSetting('catalog_meta_description'),
      'catalog_meta_keywords' => MG::getSetting('catalog_meta_keywords'),
      'product_meta_title' => MG::getSetting('product_meta_title'),
      'product_meta_description' => MG::getSetting('product_meta_description'),
      'product_meta_keywords' => MG::getSetting('product_meta_keywords'),
      'page_meta_title' => MG::getSetting('page_meta_title'),
      'page_meta_description' => MG::getSetting('page_meta_description'),
      'page_meta_keywords' => MG::getSetting('page_meta_keywords'),
    )
  ),
  'STNG_SEO_ROBOTS' => file_get_contents('robots.txt'),
);
  
  foreach (MG::getSetting('currencyRate') as $key => $val) {
    $currencySettings[$key]['rate'] = $val;
  }  
  
  foreach (MG::getSetting('currencyShort') as $key => $val) {
    $currencySettings[$key]['short'] = $val;
  }  
  

$this->groups = $groups;
$this->seoGroups = $seoSettingsGroups;

$this->data = array(
  'setting-shop' => array(
    'options' => $options,
    'templates' => $templates
  ),
  'setting-system' => array(
    'options' => array(
      'downtime' => MG::getOption('downtime', true),
      'licenceKey' => $licenceKey,
    )
  ),
  'setting-template' => array(
    'files' => array( 
      'template.php'=> array('/template.php', 'Каркас шаблона сайта'),
      'functions.php'=> array('/functions.php', 'Пользовательские функции'),     
      'ajaxuser.php'=> array('/ajaxuser.php', 'Пользовательская обработка ajax'),
      '404.php'=> array('/404.php', 'Страница с 404 ошибкой'),
      'style.css'=> array('/css/style.css', 'Стили сайта'),
      'script.js'=> array('/js/script.js', 'Javascript сайта'),
      'cart.php'=> array('/views/cart.php', 'Верстка страницы корзины'),
      'catalog.php'=> array('/views/catalog.php', 'Верстка страницы каталога'),
      'enter.php'=> array('/views/enter.php', 'Верстка страницы авторизации'),
      'feedback.php'=> array('/views/feedback.php', 'Верстка страницы обратной связи'),
      'forgotpass.php'=> array('/views/forgotpass.php', 'Верстка страницы восстановления пароля'),
      'index.php'=> array('/views/index.php', 'Верстка главной страницы'),
      'personal.php'=> array('/views/personal.php', 'Верстка личного кабинета'),
      'product.php'=> array('/views/product.php', 'Верстка карточки товара'),
      'registration.php'=> array('/views/registration.php', 'Верстка страницы регистрации пользователя'),
      'order.php'=> array('/views/order.php', 'Верстка страницы оформления заказа'),
      ),
    'email_layout' => array(
      'email_template.php'=> array('/layout/email_template.php', 'Каркас шаблона писем'),
      'email_feedback.php'=> array('/layout/email_feedback.php', 'Письма с обратной связи'),
      'email_forgot.php'=> array('/layout/email_forgot.php', 'Письмо восстановления пароля'),
      'email_order.php'=> array('/layout/email_order.php', 'Письмо оформления заказа клиенту'),
      'email_registry.php'=> array('/layout/email_registry.php', 'Письмо регистрации'),
      'email_order_electro.php'=> array('/layout/email_order_electro.php', 'Письмо электронных товаров'),
      'email_order_status.php'=> array('/layout/email_order_status.php', 'Смена статуса заказа'),
      'email_unclockauth.php'=> array('/layout/email_unclockauth.php', 'Разблокировка личного кабинета'),
      'email_order_admin.php'=> array('/layout/email_order_admin.php', 'Письмо оформления заказа администратору'),
      ),
    'layout' => array(     
      'layout_cart.php' => array('/layout/layout_cart.php', 'Верстка блока с маленькой корзиной'),
      'layout_contacts.php' => array('/layout/layout_contacts.php', 'Верстка блока с контактами'),
      'layout_compare.php' => array('/layout/layout_compare.php', 'Сравнения товаров'),
      'layout_related.php' => array('/layout/layout_related.php', 'Верстка блока связанных товаров'),
      'layout_search.php' => array('/layout/layout_search.php', 'Верстка блока с поиском'),
      'layout_topmenu.php' => array('/layout/layout_topmenu.php', 'Верстка блока с верхним меню'),
      'layout_leftmenu.php' => array('/layout/layout_leftmenu.php', 'Верстка блока с левым меню'),
      'layout_images.php' => array('/layout/layout_images.php', 'Верстка блока с галерей товара'),
      'layout_compare.php' => array('/layout/layout_compare.php', 'Верстка блока сравнений'),
      'layout_auth.php' => array('/layout/layout_auth.php', 'Верстка блока с элементами авторизации'),
      'layout_contacts_mobile.php' => array('/layout/layout_contacts_mobile.php', 'Верстка блока с контактами для мобильных устройств'),
      'layout_horizontmenu.php' => array('/layout/layout_horizontmenu.php', 'Верстка блока горизонтального меню'),
      'layout_property.php ' => array('/layout/layout_property.php', 'Верстка формы характеристик и кнопки купить'),
      'layout_relatedcart.php' => array('/layout/layout_relatedcart.php', 'Товары доппродажи в корзине'),
      'layout_search.php' => array('/layout/layout_search.php', 'Блок поиска'),
      'layout_subcategory.php' => array('/layout/layout_subcategory.php', 'Блок вложенных категорий'),
      'layout_variant.php' => array('/layout/layout_variant.php', 'Блок вариантов товара'),
        
     
      ),
    'print_layout' => array(     
      'print_order.php'=> array('/layout/print_order.php', 'Верстка PDF счета по заказу'),
      'print_qittance.php'=> array('/layout/print_qittance.php', 'Верстка квитанции сбербанка'),      
      'print_sales_receipt.php'=> array('/layout/print_sales_receipt.php', 'Верстка товарного чека'),      
      )
  ),
  'interface-settings' => array(
    'options' => array(
      'themeColor' => MG::getOption('themeColor', true),
      'themeBackground' => MG::getOption('themeBackground', true),
      'staticMenu' => MG::getOption('staticMenu', true),
    )
  ),
  'paymentMethod-settings' => array(
      'paymentArray' => $paymentArray,
  ),
  'deliveryMethod-settings' => array(
      'deliveryArray' => $deliveryArray,
  ), 
  'currency-settings' => $currencySettings,
   'numericFields' => array('countСatalogProduct','countNewProduct','countRecomProduct','countSaleProduct'),
   'checkFields' => array('horizontMenu','mainPageIsCatalog','actionInCatalog','printRemInfo','printProdNullRem',
                    'smtp','waterMark','printStrProp','noneSupportOldTemplate','printCompareButton',
                    'cacheObject','randomProdBlock','compareCategory','useCaptcha','autoRegister',
                    'printFilterResult','lockAuthorization', 'orderNumber', 'popupCart', 'catalogIndex', 'productInSubcat',
                    'copyrightMoguta', 'picturesCategory', 'requiredFields', 'waterMarkVariants', 'connectZoom', 'filterSort','consentData','showCountInCat'),
   'textFields' => array('widgetCode'),
   'seo-setting' => array( 'cacheCssJs', 'shortLink','duplicateDesc'), 
);

// для отображения текущего шаблона
$this->pathTemplate  = 'mg-templates'.DIRECTORY_SEPARATOR.MG::getSetting('templateName');

/**
 * Раздел управления системой
 *
 */
$downtime = MG::getOption('downtime');

if('Y' == $downtime){
  $checked = 'checked';
}

$this->checked = $checked;

if(!$checkLibs = MG::libExists()){
  $newVer = Updata::checkUpdata();
  if (!MG::getSetting('trialVersionStart')){
  preg_match('/Ближайшая версия для обновления:(.*)/', $newVer['msg'], $m);    
  if(!empty($m[1])){
    $this->newFirstVersiov = $m[1];  
  }
  
  preg_match('/Последняя версия системы:(.*)/', $newVer['msg'], $m);    
  if(!empty($m[1])){
     $this->newLastVersiov = $m[1];  
  }

  $this->newVersionMsg = 'none';   
  preg_match('/Описание:(.* )/si', $newVer['msg'], $m);  
  if(!empty($m[1])){
    $this->newVersionMsg = $m[1];  
  }
  } else {
     $this->errorUpdata .= MG::getSetting('trialVersionStart').'<br>';
  }
  
}else{
  
  foreach ($checkLibs as $message){
    $errorUpdata .= $message.'<br>';
  }
  $this->errorUpdata = $errorUpdata;
}
if(32 != strlen($licenceKey['value'])&&!empty($licenceKey['value'])){
  $this->updataDisabled = 'disabled';
  $this->updataOpacity = 'opacity';  
}

$listCategories[0] = "Все доступные характеристики";
$arrayCategories = MG::get('category')->getHierarchyCategory(0);
$lc = MG::get('category')->getTitleCategory($arrayCategories, 0, true);

foreach ($lc as $key => $value) {
  $listCategories[$key] = $value;
}

$this->listCategories = $listCategories;

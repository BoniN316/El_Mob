<?php
/**
 *  Файл представления Product - выводит сгенерированную движком информацию на странице личного кабинета.
 *  В этом файле доступны следующие данные:
 *   <code>
 *   $data['category_url'] => URL категории в которой находится продукт
 *   $data['product_url'] => Полный URL продукта
 *   $data['id'] => id продукта
 *   $data['sort'] => порядок сортировки в каталоге
 *   $data['cat_id'] => id категории
 *   $data['title'] => Наименование товара
 *   $data['description'] => Описание товара
 *   $data['price'] => Стоимость
 *   $data['url'] => URL продукта
 *   $data['image_url'] => Главная картинка товара
 *   $data['code'] => Артикул товара
 *   $data['count'] => Количество товара на складе
 *   $data['activity'] => Флаг активности товара
 *   $data['old_price'] => Старая цена товара
 *   $data['recommend'] => Флаг рекомендуемого товара
 *   $data['new'] => Флаг новинок
 *   $data['thisUserFields'] => Пользовательские характеристики товара
 *   $data['images_product'] => Все изображения товара
 *   $data['currency'] => Валюта магазина.
 *   $data['propertyForm'] => Форма для карточки товара
 *   $data['liteFormData'] => Упрощенная форма для карточки товара
 *   $data['meta_title'] => Значение meta тега для страницы,
 *   $data['meta_keywords'] => Значение meta_keywords тега для страницы,
 *   $data['meta_desc'] => Значение meta_desc тега для страницы
 *   </code>
 *
 *   Получить подробную информацию о каждом элементе массива $data, можно вставив следующую строку кода в верстку файла.
 *   <code>
 *    <php viewData($data['thisUserFields']); ?>
 *   </code>
 *
 *   Вывести содержание элементов массива $data, можно вставив следующую строку кода в верстку файла.
 *   <code>
 *    <php echo $data['thisUserFields']; ?>
 *   </code>
 *
 *   <b>Внимание!</b> Файл предназначен только для форматированного вывода данных на страницу магазина. Категорически не рекомендуется выполнять в нем запросы к БД сайта или реализовывать сложую программную логику логику.
 *   @author Авдеев Марк <mark-avdeev@mail.ru>
 *   @package moguta.cms
 *   @subpackage Views
 */
// Установка значений в метатеги title, keywords, description.
?>

<div id="mkrprd" itemscope itemtype="http://schema.org/Product">
<?php
mgSEO($data);
mgAddMeta('<link href="'.SCRIPT.'standard/css/layout.related.css" rel="stylesheet" type="text/css" />');
mgAddMeta('<link rel="stylesheet" type="text/css" href="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.css">');
mgAddMeta('<script type="text/javascript" src="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.js"></script>');


$fas = "Фасовка: металлическая тара - 10, 20, 50кг;<br>Под заказ: пластиковая тара - 5, 10, 30кг.";
if(isset($data['thisUserFields'][75]['value']) && $data['thisUserFields'][75]['value'] != '') $fas=$data['thisUserFields'][75]['value'];
$grs="Гарантийный срок хранения в таре производителя - 6 мес.";
if(isset($data['thisUserFields'][76]['value']) && $data['thisUserFields'][76]['value'] != '') $grs="Гарантийный срок хранения в таре производителя - " . $data['thisUserFields'][76]['value'];
$tem = "от –40°С до +25°С.";
if(isset($data['thisUserFields'][77]['value']) && $data['thisUserFields'][77]['value'] != '') $tem=$data['thisUserFields'][77]['value'];
?>

   <span itemprop="name" class="ProdName"><?php echo $data['title'].':' ?></span>
<br><br>
<div class="product-top-block clearfix">
  <div class="product-top-in product-top-left product-images">
                    <?php
                      $i = 0;
                      foreach ($data['images_product'] as $image) {
                        echo '<a class="popup-product-image" href="'.SITE.'/uploads/'.$image.'" title="'.$data['images_title'][$i].'" rel="product-top-gal" title="'.$data['images_title'][$i].'"><img src="'.mgImageProductPath($image, $data['id'], 'big').'" title="'.$data['images_title'][$i].'" alt="'.$data['images_alt'][$i].'"></a>';
                        $i++;
                      }

                    ?>


  </div><!-- product-top-left -->
<!--<Img itemprop = "image" src = "<?php $data['image_url']  ?>" alt = '<?php $data['title'] ?>' />-->


<!-- brend IN-->
 <span itemprop="brand" style="color:#29c88c;>'Элакор'</span> <span itemprop="model" style="color:#FFFFFF;"><?php echo $data['code'].print_r($data['id']) ?></span>



  <div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
 <meta itemprop="priceCurrency" content="RUB"/>

<?php

                  $mat = !in_array($data[cat_id], array(22, 23, 24, 25,41));

                  if ($mat) {
                  ?>
<div id="rzdMat"></div>
    <div id="PokKT" class="product-prices">  [mxlwprices id="<?php echo $data['id']?>"] руб.</div>

                  <?php } else {
                    ?>
 <BR><BR>
<div id="rzdPokr"></div>
  <div id="PokKT" class="product-top-in product-top-right product-prices">Стоимость комплекта материалов "Элакор" рассчитывается, исходя из площади, условий объекта  и дополнительных требований заказчика </div>

                   <?php }
                    ?>




                    <?php
                     $mat = !in_array($data[cat_id], array(22, 23, 24, 25,41));

                      if ($mat) {
                      ?>
  <div id="abCen" class="product-prices"  style="text-align:right;">Цена за 1 кг с учетом тары и НДС

  </div><!-- product-top-right -->
                     <?php
                      }
                     ?>

<?php
/*





<!--form method="POST" class="property-form actionView" data-product-id="<?php echo $data["id"]; ?>">
<div class="buy-container product">
      <div class="hidder-element">
      <p class="qty-text">Количество:</p>
      <div class="cart_form">
        <input type="text" name="amount_input" class="amount_input" data-max-count="-1" value="1">
        <div class="amount_change">
          <a href="#" class="up">+</a>
          <a href="#" class="down">-</a>
        </div>
      </div>
    </div>

  <div class="hidder-element">
    <input type="hidden" name="inCartProductId" value="<?php echo $data["id"]; ?>">
    <a class="pbutton btatcart addToCart buy-product buy" href="<?php echo SITE.'/catalog?inCartProductId='.$data["id"]; ?>" data-item-id="<?php echo $data["id"]; ?>">Купить</a>
    <input type="submit" name="buyWithProp" onclick="return false;" style="display:none"> onclick - предупреждает переход по ссылке class в <a надо заменить на <a class="pbutton btgreen" только тогда будет происходить переход по сслке и после нажатия купить будет открываться корзина
  </div>
</div></form-->
*/
?>
<?php

                  $mat = !in_array($data[cat_id], array(22, 23, 24, 25,41));

                  if ($mat) {
                  ?>
    <div class="tab">

                  <?php } else {
                    ?>
<div class="tabpkr">

                   <?php }
                    ?>

  <ul class="tabmenu">
    <li><a href="#tab_Content1" class="tab active" id="DContent1">Покупка</a></li>
    <li><a href="#tab_Content2" class="tab" id="DContent2">Инструкция</a></li>
    <li><a href="#tab_Content3" class="tab" id="DContent3">Область применения</a></li>
    <li><a href="#tab_Content4" class="tab" id="DContent4">Сертификаты</a></li>
    <li><a href="#tab_Content5" class="tab" id="DContent5">Опт</a></li>
  </ul><!-- tabmenu -->

  <div class="tabcontents">
    <div class="tabcontent active" id="Content1">
    	<span itemprop="description"><?php substr($data['description'],0,160); ?></span><?php echo $data['description']; ?>
                            <?php
                            if ($mat) {
                            ?>
    	<div class="buy-block-bottom clearfix">
            <div class="buy-left">
                <form method="POST" class="property-form actionView" data-product-id="<?php echo $data["id"]; ?>">
                    <div class="out_cart_form">
                      <div class="cart_form">
                        <input type="text" name="amount_input" class="amount_input" data-max-count="-1" value="1">
                        <div class="amount_change">
                          <a href="#" class="up">+</a>
                          <a href="#" class="down">-</a>
                        </div>
                      </div>
                      <div class="cart_form_kg">кг.</div>
                    </div>
               <input type="hidden" name="inCartProductId" value="<?php echo $data["id"]; ?>">
                    <a class="pbutton btgreen" href="<?php echo SITE.'/catalog?inCartProductId='.$data["id"]; ?>">Купить</a>
                  <input type="submit" name="buyWithProp" style="display:none">
                </form>
                <p><strong>Покупка должна быть кратной фасовке</strong></p>
            </div><!-- buy-left -->
            <div class="buy-right">
                <p><?php echo $fas ?></p>
                <p><?php echo $grs ?><br>Хранить и транспортировать при температуре <?php echo $tem ?></p>
            </div>
        </div><!-- buy-block -->
                        <?php } ?>

        [parts-set-goods id="<?php echo $data['id']?>"]
        [set-goods id="<?php echo $data['id']?>"]

    </div><!-- tab1-content -->

    <div class="tabcontent" id="Content2"><?php if(isset($data['thisUserFields'][71]['value']) && $data['thisUserFields'][71]['value'] != '') echo preg_replace('/\<br(\s*)?\/?\>/i', "\n", $data['thisUserFields'][71]['value']);  ?>

<span itemprop="seller">Производитель:"ТэоХим"</span>
</div>











    <div class="tabcontent" id="Content3"><?php if(isset($data['thisUserFields'][72]['value']) && $data['thisUserFields'][72]['value'] != '') echo preg_replace('/\<br(\s*)?\/?\>/i', "\n", $data['thisUserFields'][72]['value']);?></div>

    <div class="tabcontent" id="Content4"><?php if(isset($data['thisUserFields'][73]['value']) && $data['thisUserFields'][73]['value'] != '') echo preg_replace('/\<br(\s*)?\/?\>/i', "\n", $data['thisUserFields'][73]['value']);?></div>

  <div class="tabcontent" id="Content5"><!-- tab5-content -->
                       <?php

                      $mat = !in_array($data[cat_id], array(22, 23, 24, 25,41));

                      if ($mat) {
                      ?>
  <div class="product-top-in product-top-right product-prices">
    [prices id="<?php echo $data['id']?>"]
  </div><!-- product-top-right -->

                      <?php } else {
                        ?>
 <BR><BR>

  <div id="PokKT" class="product-top-in product-top-right product-prices">Стоимость комплекта материалов "Элакор" рассчитывается, исходя из площади, условий объекта  и дополнительных требований заказчика </div>

                       <?php }
                        ?>
 <!-- product-top-block -->
                     <?php if ($mat) {echo '<div class="abCen"> <p>Цена руб/кг в зависимости от количества. С учетом НДС и тары.</p></div>';} ?>

</div><!-- tab5-content -->


  </div><!-- tabcontents -->


</div><!-- micro -->
</div>


<script language="JavaScript" type="text/javascript">

window.onload = function () {

    //получаем идентификатор элемента
    var a = document.getElementById('DContent1');
    var b = document.getElementById('DContent2');
    var c = document.getElementById('DContent3');
    var d = document.getElementById('DContent4');
    var e = document.getElementById('DContent5');
    //вешаем на него событие
    a.onclick = function() {

      document.getElementById('DContent1').className='tab active';
      document.getElementById('DContent2').className='tab';
      document.getElementById('DContent3').className='tab';
      document.getElementById('DContent4').className='tab';
      document.getElementById('DContent5').className='tab';
console.log("c", c.className,"d", d.className,"e",e.className,"a",a.className,"b", b.className);
 return false;
    }
     b.onclick = function() {

      document.getElementById('DContent1').className='tab';
      document.getElementById('DContent2').className='tab active';
      document.getElementById('DContent3').className='tab';
      document.getElementById('DContent4').className='tab';
      document.getElementById('DContent5').className='tab';
console.log("c", c.className,"d", d.className,"e",e.className,"a",a.className,"b", b.className);
 return false;
    }
     c.onclick = function() {


      document.getElementById('DContent1').className='tab';
      document.getElementById('DContent2').className='tab';
      document.getElementById('DContent3').className='tab active';
      document.getElementById('DContent4').className='tab';
      document.getElementById('DContent5').className='tab';
console.log("c", c.className,"d", d.className,"e",e.className,"a",a.className,"b", b.className);
 return false;
    }
     d.onclick = function() {
      document.getElementById('DContent1').className='tab';
      document.getElementById('DContent2').className='tab';
      document.getElementById('DContent3').className='tab';
      document.getElementById('DContent4').className='tab active';
      document.getElementById('DContent5').className='tab';
console.log("c", c.className,"d", d.className,"e",e.className,"a",a.className,"b", b.className);
 return false;

    }
     e.onclick = function() {
     document.getElementById('DContent1').className='tab';
      document.getElementById('DContent2').className='tab';
      document.getElementById('DContent3').className='tab';
      document.getElementById('DContent4').className='tab';
      document.getElementById('DContent5').className='tab active';
console.log("c", c.className,"d", d.className,"e",e.className,"a",a.className,"b", b.className);
 return false;
    }

}


</script>
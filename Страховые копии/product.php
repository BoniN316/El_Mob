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

<div itemscope itemtype="http://schema.org/Product">
<?php
mgSEO($data);
mgAddMeta('<link href="'.SCRIPT.'standard/css/layout.related.css" rel="stylesheet" type="text/css" />');
mgAddMeta('<link rel="stylesheet" type="text/css" href="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.css">');
mgAddMeta('<script type="text/javascript" src="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.js"></script>');

$fas = "Фасовка: металлическая тара - 10, 20, 50, 200кг;<br>Под заказ: пластиковая тара - 5, 10, 30кг.";
if(isset($data['thisUserFields'][75]['value']) && $data['thisUserFields'][75]['value'] != '') $fas=$data['thisUserFields'][75]['value'];
$tem = "от –40°С до +25°С.";
if(isset($data['thisUserFields'][77]['value']) && $data['thisUserFields'][77]['value'] != '') $tem=$data['thisUserFields'][77]['value'];
?>

<h1><span itemprop="name"><?php echo $data['title'] ?></span></h1>

<div class="product-top-block clearfix">
  <div class="product-top-in product-top-left product-images">
    <?php
      $i = 0;
      foreach ($data['images_product'] as $image) {
        echo '<a class="popup-product-image" href="'.SITE.'/uploads/'.$image.'" title="'.$data['images_title'][$i].'" rel="product-top-gal" title="'.$data['images_title'][$i].'"><img src="'.mgImageProductPath($image, $data['id'], 'big').'" title="'.$data['images_title'][$i].'" alt="'.$data['images_alt'][$i].'"></a>';
        $i++;
      }

    ?>
 <Img itemprop = "image" src = "<?php $data['image_url']  ?>" alt = '<?php $data['title'] ?>' />
  </div><!-- product-top-left -->
  <?php
  $mat = !in_array($data[cat_id], array(21, 22, 23, 24, 25));
  if ($mat) {
  ?>
  <div class="product-top-in product-top-right product-prices">
    [prices id="<?php echo $data['id']?>"]
  </div><!-- product-top-right -->
  <?php } ?>
</div><!-- product-top-block -->
<?php if ($mat) echo "<p>Цена руб/кг в зависимости от количества. С учетом НДС и тары.</p>" ?>

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
	<input type="submit" name="buyWithProp" onclick="return false;" style="display:none">
  </div>
</div></form-->
*/
?>

<div class="tabs">
  <ul class="tabmenu">
    <li><a id="tab1" class="tab active">Покупка</a></li>
    <li><a id="tab2" class="tab">Подробное описание. Инструкция</a></li>
    <li><a id="tab3" class="tab">Область применения</a></li>
    <li><a id="tab4" class="tab">Сертификаты</a></li>
  </ul><!-- tabmenu -->

  <div class="tabcontents">
    <div class="tabcontent active" id="tab1-content">
    	<span itemprop="description"><?php echo $data['description'] ?></span>
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
					<a class="pbutton btatcart addToCart buy-product buy" href="<?php echo SITE.'/catalog?inCartProductId='.$data["id"]; ?>" data-item-id="<?php echo $data["id"]; ?>">Купить</a>
					<input type="submit" name="buyWithProp" onclick="return false;" style="display:none">
				</form>
				<p><strong>Покупка должна быть кратной фасовке</strong></p>
			</div><!-- buy-left -->
			<div class="buy-right">
				<p><?php echo $fas ?></p>
				<p>Гарантийный срок хранения в таре производителя – 6мес.<br>Хранить и транспортировать при температуре <?php echo $tem ?></p>
			</div>
		</div><!-- buy-block -->
        <?php } ?>

		[parts-set-goods id="<?php echo $data['id']?>"]
		[set-goods id="<?php echo $data['id']?>"]

    </div><!-- tab1-content -->

    <div class="tabcontent" id="tab2-content"><?php if(isset($data['thisUserFields'][71]['value']) && $data['thisUserFields'][71]['value'] != '') echo preg_replace('/\<br(\s*)?\/?\>/i', "\n", $data['thisUserFields'][71]['value']);  ?>


 <span itemprop="brand">Элакор</span> <span itemprop="model"><?php echo $data['code'] ?></span>

<div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
<span itemprop="seller">Производитель:"ТэоХим"</span><span style="color:rgba(0, 0, 0, 0.1);><span itemprop="lowPrice"> <?php echo $data['price']*0.89 ?></span></span><span style="color:rgba(0, 0, 0, 0.1);><span itemprop="highPrice"><?php echo $data['price']   ?></span></span>
<meta itemprop="priceCurrency" content="RUB"/>
</div>

</div>




    <div class="tabcontent" id="tab3-content"><?php if(isset($data['thisUserFields'][72]['value']) && $data['thisUserFields'][72]['value'] != '') echo preg_replace('/\<br(\s*)?\/?\>/i', "\n", $data['thisUserFields'][72]['value']);?></div>

    <div class="tabcontent" id="tab4-content"><?php if(isset($data['thisUserFields'][73]['value']) && $data['thisUserFields'][73]['value'] != '') echo preg_replace('/\<br(\s*)?\/?\>/i', "\n", $data['thisUserFields'][73]['value']);?></div>
  </div><!-- tabcontents -->
</div><!-- tabs -->

</div><!-- micro -->
<script>
    //product images gallery popup
    $('.popup-product-image').fancybox({
        helpers     : {
                title : null
            },

            tpl         : {
                closeBtn : '<a title="Закрыть" class="fancybox-item fancybox-close" href="javascript:;"></a>'
            }
    });
</script>

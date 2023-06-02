<?php
/**
 *  Файл представления Catalog - выводит сгенерированную движком информацию на странице сайта с каталогом товаров.
 *  В этом  файле доступны следующие данные:
 *   <code>
 *    $data['items'] => Массив товаров
 *    $data['titeCategory'] => Название открытой категории
 *    $data['cat_desc'] => Описание открытой категории
 *    $data['pager'] => html верстка  для навигации страниц
 *    $data['searchData'] =>  результат поисковой выдачи
 *    $data['meta_title'] => Значение meta тега для страницы
 *    $data['meta_keywords'] => Значение meta_keywords тега для страницы
 *    $data['meta_desc'] => Значение meta_desc тега для страницы
 *    $data['currency'] => Текущая валюта магазина
 *    $data['actionButton'] => тип кнопки в миникарточке товара
 *   </code>
 *
 *   Получить подробную информацию о каждом элементе массива $data, можно вставив следующую строку кода в верстку файла.
 *   <code>
 *    <?php viewData($data['items']); ?>
 *   </code>
 *
 *   Вывести содержание элементов массива $data, можно вставив следующую строку кода в верстку файла.
 *   <code>
 *    <php echo $data['items']; ?>
 *   </code>
 *
 *   <b>Внимание!</b> Файл предназначен только для форматированного вывода данных на страницу магазина. Категорически не рекомендуется выполнять в нем запросы к БД сайта или реализовывать сложую программную логику логику.
 *   @author Авдеев Марк <mark-avdeev@mail.ru>
 *   @package moguta.cms
 *   @subpackage Views
 */
// Установка значений в метатеги title, keywords, description.
mgSEO($data);
?>
<!-- Верстка каталога -->
<?php if(empty($data['searchData'])): ?>

  <?php echo mgSubCategory($data['cat_id']); ?>


  <?php if($cd = str_replace("&nbsp;", "", $data['cat_desc'])): ?>
    <div class="cat-desc">
      <?php if($data['cat_img']): ?>
        <div class="cat-desc-img">
          <img src="<?php echo SITE.$data['cat_img'] ?>" alt="<?php echo $data['titeCategory'] ?>" title="<?php echo $data['titeCategory'] ?>" >
        </div>
      <?php endif; ?>
      <div class="cat-desc-text"><?php echo $data['cat_desc'] ?></div>
      <div class="clear"></div>
    </div>
  <?php endif; ?>


  <div class="products-wrapper catalog products">

    <?php foreach($data['items'] as $item): ?>
      <div class="product-wrapper product">

        <div class="row">
            <div class="pbuttons">
              <a class="pbutton bttech" href="<?php echo SITE.'/' ?><?php echo isset($item["category_url"])?$item["category_url"]:'catalog/' ?><?php echo $item["product_url"] ?>" title="Подробное описание. Покупка">Подробное описание. Покупка</a>
              <!-- <a class="pbutton btatcart addToCart product-buy" data-item-id="<?php echo $item["id"]; ?>" href="<?php echo SITE.'/catalog?inCartProductId='.$item["id"]; ?>" title="Купить">

              img style="height: 20px; position: absolute; z-index: -1;" src="<?php echo SITE.'/uploads/thumbs/30_no-img.jpg' ?>" data-product-id="<?php echo $item['id'];?>" data-transfer="true"

              Купить</a> -->
            </div>
            <div class="ptitle"><h4><?php echo $item["title"] ?></h4></div>
        </div>
        <div class="pintro"><?php echo trim($item['thisUserFields'][52]['value'], '#0#');?></div>

        <div class="clear"></div>
      </div>
    <?php endforeach; ?>
    <?php echo $data['pager']; ?>
      <div class="clear"></div>
  </div>


  <!-- Верстка поиска -->
<?php else: ?>

  <h1 class="new-products-title">При поиске по фразе: <strong>"<?php echo $data['searchData']['keyword'] ?>"</strong> найдено
    <strong><?php echo mgDeclensionNum($data['searchData']['count'], array('товар', 'товара', 'товаров')); ?></strong>
  </h1>

  <div class="search-results products-wrapper list">
    <?php foreach($data['items'] as $item): ?>
      <div class="product-wrapper product">

        <div class="row">
            <div class="pbuttons">
              <a class="pbutton bttech" href="<?php echo SITE.'/' ?><?php echo isset($item["category_url"])?$item["category_url"]:'catalog/' ?><?php echo $item["product_url"] ?>" title="Технология">Технология</a>
              <a class="pbutton btatcart addToCart product-buy" data-item-id="<?php echo $item["id"]; ?>" href="<?php echo SITE.'/catalog?inCartProductId='.$item["id"]; ?>" title="Купить">Купить</a></div>
            <div class="ptitle"><h4><?php echo $item["title"] ?></h4></div>
        </div>
        <div class="pintro"><?php echo trim($item['thisUserFields'][52]['value'], '#0#');?></div>

        <div class="clear"></div>
      </div>
    <?php endforeach; ?>
    <div class="clear"></div>
  </div>

  <?php
  echo $data['pager'];
endif;
?>
<!-- / Верстка поиска -->
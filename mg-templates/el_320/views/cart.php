<?php
/**
 *  Файл представления Cart - выводит сгенерированную движком информацию на странице сайта с корзиной товаров.
 *  В этом  файле доступны следующие данные:
 *   <code>
 *    $data['isEmpty'] => 'Флаг наполненности корзины'
 *    $data['productPositions'] => 'Набор продуктов в корзине'
 *    $data['totalSumm'] => 'Общая стоимость товаров в корзине'
 *    $data['meta_title'] => 'Значение meta тега для страницы '
 *    $data['meta_keywords'] => 'Значение meta_keywords тега для страницы '
 *    $data['meta_desc'] => 'Значение meta_desc тега для страницы '
 *    $data['currency'] => 'Текущая валюта магазина'
 *   </code>
 *
 *   Получить подробную информацию о каждом элементе массива $data, можно вставив следующую строку кода в верстку файла.
 *   <code>
 *    <php viewData($data['productPositions']); ?>
 *   </code>
 *
 *   Вывести содержание элементов массива $data, можно вставив следующую строку кода в верстку файла.
 *   <code>
 *    <php echo $data['productPositions']; ?>
 *   </code>
 *
 *   <b>Внимание!</b> Файл предназначен только для форматированного вывода данных на страницу магазина. Категорически не рекомендуется выполнять в нем запросы к БД сайта или реализовывать сложую программную логику логику.
 *   @author Авдеев Марк <mark-avdeev@mail.ru>
 *   @package moguta.cms
 *   @subpackage Views
 *$x=PROTOCOL.'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
*echo $x;
 */
// Установка значений в метатеги title, keywords, description.
mgSEO($data);
mgAddMeta('<script type="text/javascript" src="https://moguta.elakor-floor.ru/mg-templates/el_320/js/layout.cart.js"></script>');
?>
<?php mgTitle('Корзина');

?>

<h1 class="new-products-title"><span>Корзина</span> товаров</h1>

<div class="product-cart" style="display:<?php echo!$data['isEmpty']?'none':'block'; ?>">
  <div class="cart-wrapper">
    <form method="post" action="<?php echo SITE ?>/cart">
      <table id="krzTbl" class="cart-table">
        <?php $i = 1;
        foreach($data['productPositions'] as $product): ?>
          <tr id="<?php echo $product['id'] ?>_1">
            <td id="krzFoto" class="img-cell">
              <a href="<?php echo $product["link"] ?>" target="_blank" id="krzLinkFoto" class="cart-img">
                <img src="<?php echo mgImageProductPath($product["image_url"], $product['id'], 'small')?>" alt="">
              </a>
            </td>
            <td id="krzNazProd">
              <a href="<?php echo $product["link"]?>" target="_blank">
                <?php echo $product['title'] ?>
              </a>
              <!-- <br/><?php echo $product['property_html'] ?> -->
            </td>
            <td id ="krzArticul" class="code-cell">Артикул:<br><span class="code"><?php echo $product['code'] ?></span>
            </td>
            </tr>
            <tr id="<?php echo $product['id'] ?>_2">
            <td id="krzAmount"  class="count-cell">
              <div class="cart_form">
                <input type="text" class="amount_input zeroToo" name="item_<?php echo $product['id'] ?>[]"   value="<?php echo $product['countInCart'] ?>" />
                <!--  // смотри mg-core\controllers\cart.php
                // стр 180 intval($_REQUEST['amount_input']) : 10;//Установка начального количества товаров при покупке-->
                <div class="amount_change">
                  <a href="#" class="up">+</a>
                  <a href="#" class="down">-</a>
                </div>
              </div>
              <input type="hidden"  name="property_<?php echo $product['id'] ?>[]" value = "<?php echo $product['property'] ?>"/>
              <button type="submit" name="refresh" id="krzRefr" class="refresh" title="Пересчитать" value="Пересчитать">Пересчитать</button>
            </td>
            <td id="krzSum" class="price-cell">

<?php
 $product['price']=truProdPrice($product['id'],$product['countInCart']);

 if ( $product['price']==0) {echo "Обновите корзину";

 }
else{
if($product['countInCart']>=10){ echo MG::numberFormat($product['countInCart'] *  $product['price']). '='. $product['countInCart'].'*'. $product['price']. $data['currency'];}

if($product['countInCart']==1){
$product['countInCart']=10;
echo MG::numberFormat($product['countInCart']* $product['price']). '='. $product['countInCart'] .'*'.$product['price']. $data['currency'];

}
}



?>
            </td>
            <td id="tdDel" class="price-cell">
             <a id="krzDel" class="deleteItemFromCart delete-btn" href="#" data-delete-item-id="<?php echo $product['id'] ?>" data-property="<?php echo $product['property'] ?>" data-variant="<?php echo $product['variantId'] ?>" title="Удалить товар"></a>
            </td>


          </tr>
        <?php endforeach; ?>
        <!--                <tr>-->
        <!--                    <td colspan="4" style="text-align:right;"></td>-->
        <!--                    <td class="total-sum-cell">-->
        <!---->
        <!--                    </td>-->
        <!--                </tr>-->
      </table>

    </form>
    <div id="krzTotSym" class="total-sum">
      <span id="ukPr" > Проверьте количество, нажмите Пересчитать   в любой строке.<br> Стоимость всех товаров:</span>
      <strong> <?php echo priceFormat($data['totalSumm']) ?> <?php echo $data['currency']; ?></strong>
    </div>
    <span id="nxt">Для продолжения покупок есть кнопка вверху ВЫБОР&nbsp;МАТЕРИАЛОВ</span>
  </div>


  <?php if(class_exists('PromoCode')): ?>
    [promo-code]
  <?php endif; ?>




  <form action="<?php echo SITE ?>/order" method="post" class="checkout-form">
    <button type="submit" class="pbutton btatcart" name="order" value="Оформить заказ">Оформить заказ</button>
  </form>
  <div class="clear">&nbsp;</div>


  <?php echo $data['related'] ?>
</div>

<div class="empty-cart-block alert-info" style="display:<?php echo!$data['isEmpty']?'block':'none'; ?>">
  Ваша корзина пуста
</div>
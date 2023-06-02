<?php
//viewData($data);
  if(!$data['ids']){
    $data['ids'] = '';
  }
  $cat = new Models_Catalog();
  $result = $cat->getListByUserFilter(100,'p.id IN ('.$data['ids'].')');
  //viewData($result);
  ?>

  <div class="products-wrapper catalog products">

    <?php foreach($result['catalogItems'] as $item): ?>
      <div class="product-wrapper product">

        <div class="row">
            <div class="pbuttons">
              <a class="pbutton bttech" href="<?php echo SITE.'/' ?><?php echo isset($item["category_url"])?$item["category_url"]:'catalog/' ?><?php echo $item["product_url"] ?>" title="Подробное описание. Покупка">Перейти</a>
              <!-- <a class="pbutton btatcart addToCart product-buy" data-item-id="<?php echo $item["id"]; ?>" href="<?php echo SITE.'/catalog?inCartProductId='.$item["id"]; ?>" title="Купить">
              Купить</a>-->
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
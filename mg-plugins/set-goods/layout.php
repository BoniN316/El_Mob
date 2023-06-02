<?php if (!$prod) :?>
<div class="mg-set-goods" data-available="<?php echo $available?>" data-set="<?php echo $prod ? "false" : "true"?>">
<?php endif;?>
<?php if (($options['output']=='true'|| $available==1) && !$prod) :?>
<?php if (!empty($set)) :?>
<div class="mg-set-goods-plugin">
<?php endif; ?>
<div class="mg-set-goods-border">
    <h2>Товары в комплекте:</h2>
  <?php
  foreach ($set as $item):
    $item["image_url"] = $item['img'];
    ?>
    <div class="product-wrapper">
        <div class="mg-set-goods-wrapper">
            <span class="mg-set-goods-plus"></span>
            <div class="mg-set-goods-image">
              <a href="<?php echo $item['url']; ?>">
                <?php echo mgImageProduct($item) ?>
              </a>
            </div>
            <div class="mg-set-goods-name">
              <a href="<?php echo $item['url']; ?>"><?php echo $item["title"].($item['title_variant'] ? ' ('.$item['title_variant'].')' :'' )?> <br>
              <?php echo $item['count']?> шт.</a>
            </div>
        </div>
    </div>
  <?php endforeach; ?>
    <?php if ($available == 1 ):?>
        <div class="mg-set-goods-buy">
            <div class="mg-set-old-price"><?php echo ($dataSet['old_price'] ? MG::numberFormat($dataSet['old_price']).' '.MG::getSetting('currency') : '')?></div>
            <div class="mg-set-goods-price"> <?php echo MG::numberFormat($dataSet['price_course']).' '.MG::getSetting('currency')?></div>
            <div> <a class="addToCart" href="<?php echo SITE ?>/catalog?inCartProductId=<?php echo $dataSet['id']; ?>" data-item-id="<?php echo $dataSet['id']; ?>">В корзину</a></div>
        </div>
    <?php else :?>
      <h2> <?php echo $options['msg']?></h2>
    <?php endif;?>
  </div>
</div>
<?php endif;?>
<?php if (!$prod) :?>
 </div>
<?php endif;?>

<?php if ($options['output2']=='true' && $prod) :?>
<div class="mg-set-goods" data-available="<?php echo $available?>" data-set="<?php echo $prod ? "false" : "true"?>">
<div class="mg-set-good-parts">
<h2><?php echo $title?> в комплекте <a href="<?php echo SITE.'/'.($prod['parent_url']||$prod['url'] ? $prod['parent_url'].$prod['url']  : 'catalog').'/'.$prod['product_url']?>"><?php echo $prod['title']?></a> дешевле! </h2>
<?php if (!empty($set)) :?>
<div class="mg-set-goods-plugin">
 <?php endif; ?>
<div class="mg-set-goods-border">
    <h2>Товары в комплекте:</h2>
  <?php
  foreach ($set as $item):
    $item["image_url"] = $item['img'];
    ?>
    <div class="product-wrapper">
        <div class="mg-set-goods-wrapper">
            <span class="mg-set-goods-plus"></span>
            <div class="mg-set-goods-image">
              <a href="<?php echo $item['url']; ?>">
                <?php echo mgImageProduct($item) ?>
              </a>
            </div>
            <div class="mg-set-goods-name">
              <a href="<?php echo $item['url']; ?>"><?php echo $item["title"].($item['title_variant'] ? ' ('.$item['title_variant'].')' :'' )?> <br>
              <?php echo $item['count']?> шт.</a>
            </div>
        </div>
    </div>
  <?php endforeach; ?>
    <?php if ($available == 1 ):?>
        <div class="mg-set-goods-buy">
            <div class="mg-set-old-price"><?php echo ($prod['old_price'] ? MG::numberFormat($prod['old_price']).' '.MG::getSetting('currency') : '')?></div>
            <div class="mg-set-goods-price"> <?php echo MG::numberFormat($prod['price_course']).' '.MG::getSetting('currency')?></div>
            <div> <a class="addToCart" href="<?php echo SITE ?>/catalog?inCartProductId=<?php echo $prod['id']; ?>" data-item-id="<?php echo $prod['id']; ?>">Купить</a></div>
        </div>
    <?php else :?>
      <h2> <?php echo $options['msg2'] ?></h2>
    <?php endif;?>
  </div>
</div>
</div>
 </div>
<div class="clear"> </div>
<?php endif;?>
<script>
$(document).ready(function(){
  $('.mg-set-goods').each(function(){
    if($(this).data('available')== 1) {
      $(this).find('.mg-set-goods-plus:last').addClass('mg-set-goods-equals');
    }  else {
      $(this).find('.mg-set-goods-plus:last').addClass('mg-set-goods-equals-none');
    }
  });
  if ($('.mg-set-goods').data('set')== true && $('.mg-set-goods').data('available')==0) {
    $('.buy-block .buy-container.product').hide();
  }
})
 </script>


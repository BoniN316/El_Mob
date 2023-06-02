<div class="mg-discount-system">
     <?php if (!empty($discountCum)||!empty($discountVol)) :?>
    <h3 class="mg-discount-system-header">Действует система скидок!</h3>
    <span class="discount-img"></span>
    <?php if (!empty($discountCum)) :?>
        <h2>Получите персональную скидку!</h2>
        <div class="link-result">Только для зарегистрированных пользователей! </div>
        <p>При сумме всех заказов:</p>
        <ul>
            <?php foreach ($discountCum as $disc) {?>
            <li><span class="mg-discount-system-condition">более <?php echo MG::numberFormat($disc['summ']).' '.MG::getSetting('currency') ?> скидка - <strong><?php echo $disc['percent']?>%</strong></span></li>
            <?php } ?>
            <?php if ($discount > 0) :?>
                <li><span>Ваша персональная скидка - <span class="mg-discount-system-percent"><strong><?php echo $discount?>%</strong></span></span></li>
            <?php endif; ?>
        </ul>
        <?php if ($summ > 0) :?>
        <p class="mg-discount-system-summ-orders">Сумма Ваших заказов  составляет: <strong><span><?php echo $summ?> <?php echo MG::getSetting('currency')?> </span></strong></p>
        <?php endif; ?>
    <?php endif; ?>
    <?php if (!empty($discountVol)) :?>
    <h2>Мы предлагаем гибкую систему скидок!</h2>
    <div class="link-info">Скидка зависит от суммы заказа при покупке. </div>
    <ul>
        <?php foreach ($discountVol as $disc) {?>
            <li><span class="mg-discount-system-condition">от <?php echo MG::numberFormat($disc['summ']).' '.MG::getSetting('currency') ?> скидка - <strong><?php echo $disc['percent']?>%</strong></span></li>
        <?php } ?>
    </ul>
    <?php endif; ?>

    <?php if ($options['max']=='1'){?>
    <strong>Скидки не суммируются!</strong>
    <?php }else {?>
    <strong>Скидки суммируются!</strong>
    <?php } ?>
    <?php endif;?>
</div>
<?php
//Если применяется маскимальная скидка из возможных
 if ($case == '1') { 
   switch ($info) {
  // если применяется максимальная скидка по купону
     case "1": {
       $msg = "Скидка по купону";
       break;
   }
  // если применяется максимальная скидка - накопительная 
     case "2": {
       $msg = "Накопительная персональная скидка";
       break;
     }
  // если применяется максимальная скидка - накопительная 
      case "3": {
       $msg = "Чем больше Ваш заказ, тем больше скидка.";
       break;
     }
   }
} 
//Если накопительная и объемная скидки суммируются, применяется максимальная между скидки по купону и сумму других 
elseif ($case == '2') {
  switch ($info) {
  // если применяется максимальная скидка по купону
     case "1": {
       $msg = "Скидка по купону";
       break;
   }
  // если применяется сумма скидкок - накопительная + объемная
     case "2": {
       $msg = "Накопительная + Объемная скидки - ";
       break;
     }
    }
  }
  //Если все скидки суммируются
  elseif ($case == '3') {
    $msg = "Сумма скидок:";
  };
  ?>
<div class="mg-plugin-notify">
    <span class="mg-plugin-ds-message"> <?php echo $msg ?> <strong class="mg-plugin-ds-discount"> <?php echo $percentTotal.'%' ?> </strong></span>

    <span>Экономия: <strong class="mg-plugin-ds-difference"><?php echo MG::numberFormat($fullSum - $total) ?> <?php echo MG::getSetting('currency')?></strong> </span>
</div>

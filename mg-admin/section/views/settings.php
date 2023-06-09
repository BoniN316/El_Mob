<div class="section-settings">
<div class="widget-table-wrapper">
<div class="widget-table-title">
    <h4 class="settings-table-icon"><?php echo $lang['TITLE_SETTINGS'];?></h4>
</div>

<!-- Тут начинается Верстка модального окна -->
<div class="mg-modal b-modal hidden-form" id="add-list-cat-wrapper">
    <div class="properties-table-wrapper">
        <div class="widget-table-title">
            <h4 class="pages-table-icon" id="modalTitle"><?php echo $lang['STNG_LIST_CAT'];?></h4>
            <div class="b-modal_close tool-tip-bottom" title="<?php echo $lang['T_TIP_CLOSE_MODAL'];?>"></div>
        </div>
        <div class="widget-table-body">
            <div class="add-product-form-wrapper">
                <div id="select-category-form-wrapper" class="user-fields-wrapper">
                    <select  class ="tool-tip-right category-select" title="<?php echo $lang['T_TIP_SELECTED_U_CAT'];?>" name="listCat" multiple>';
                    </select>
                </div>
                <div class="user-fields-desc-wrapper">
                    <span><?php echo $lang['STNG_LISC_SELECT_CAT'];?></span> : "<span class="propertyName"></span>"
                    <p class="clear-text"><?php echo $lang['STNG_LISC_TIP'];?></p>
                    <a href="javascript:void(0);" class="cancelSelect"><?php echo $lang['STNG_LISC_CANCEL_SELECT'];?></a>
                </div>
                <div class="clear"></div>
                <button class="save-button tool-tip-bottom" title="<?php echo $lang['T_TIP_SAVE_U_CAT'];?>">
                    <span><?php echo $lang['SAVE'];?></span>
                </button>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!-- Тут заканчивается Верстка модального окна -->


<div class="widget-table-body">
<div id="settings-tabs">
<ul class="tabs-list">
    <li class="ui-state-active" >
        <a href="javascript:void(0);" class="tool-tip-top" id="tab-shop" title="<?php echo $lang['T_TIP_TAB_SHOP'];?>"><span><?php echo $lang['STNG_TAB_SHOP'];?></span></a>
    </li>
    <li>
        <a href="javascript:void(0);" class="tool-tip-top" id="tab-system" title="<?php echo $lang['T_TIP_TAB_SYSTEM'];?>"><span ><?php echo $lang['STNG_TAB_SYSTEM'];?></span></a>
    </li>
    <li>
        <a href="javascript:void(0);" class="tool-tip-top" id="tab-template" title="<?php echo $lang['T_TIP_TAB_TEMPLATE'];?>"><span ><?php echo $lang['STNG_TAB_TEMPLATE'];?></span></a>
    </li>
    <li>
        <a href="javascript:void(0);" class="tool-tip-top" id="interface" title="<?php echo $lang['T_TIP_TAB_INTERFACE'];?>"><span ><?php echo $lang['STNG_TAB_INTERFACE'];?></span></a>
    </li>
    <li>
        <a href="javascript:void(0);" class="tool-tip-top" id="tab-userField" title="<?php echo $lang['T_TIP_TAB_USERFIELDS'];?>"><span ><?php echo $lang['STNG_USER_FIELD'];?></span></a>
    </li>
    <li>
        <a href="javascript:void(0);" class="tool-tip-top" id="tab-currency" title="<?php echo $lang['T_TIP_CURRENCY_SHOP'];?>"><span ><?php echo $lang['STNG_CURRENCY_SHOP'];?></span></a>
    </li>
    <li>
        <a href="javascript:void(0);" class="tool-tip-top" id="tab-deliveryMethod" title="<?php echo $lang['T_TIP_TAB_DELIVERY'];?>"><span ><?php echo $lang['STNG_TAB_DELIVERY'];?></span></a>
    </li>
    <li>
        <a href="javascript:void(0);" class="tool-tip-top" id="tab-paymentMethod" title="<?php echo $lang['T_TIP_TAB_PAYMENT'];?>"><span ><?php echo $lang['STNG_TAB_PAYMENT'];?></span></a>
    </li>
    <li>
        <a href="javascript:void(0);" class="tool-tip-top" id="tab-SEOMethod" title="<?php echo $lang['T_TIP_TAB_SEO'];?>"><span ><?php echo $lang['STNG_TAB_SEO'];?></span></a>
    </li>
</ul>
<div class="clear"></div>
<div class="tabs-content">
<!--Раздел настроек магазина-->
<div class="main-settings-container" id="tab-shop-settings">


    <h4><?php echo $lang['STNG_MAIN_SITE'];?></h4>

    <?php
    $propertyHtml = '';

    foreach($groups as $key=>$group){
        $propertyHtml .= "<div class='group-property'><h3>".$lang[$key]."</h3><ul class='group-property-list' style='display:none'>";

        if($key == 'STNG_GROUP_7'){
                  //$propertyHtml .=  '<li><div class="system-message">Режим кэширования находится в состоянии beta-тестирования.</div><a href = "javascript:void(0);" class="clear-cache custom-btn"><span>Очистить кэш</span></a></li>';
                  $propertyHtml .=  '<li><a href = "javascript:void(0);" class="clear-cache custom-btn"><span>Очистить кэш</span></a></li>';
                 
				          $propertyHtml .=  '<li><a href = "javascript:void(0);" class="memcache-conection custom-btn"><span>Проверить соединение для MEMCACHE</span></a></li>';
        }

        if($key == 'STNG_GROUP_5'){
          $propertyHtml .=  '<li><div class="system-message"> Для отправки через защищенное соединение, сервер нужно указывать с добавлением "ssl://" например так: "ssl://smtp.mail.ru"</div></li>';
        }
                
                
        foreach($group as $optionName){
            $input = '';
            $option = $data['setting-shop']['options'][$optionName];            
            $alias = $option['name'];
            $numericProtection=""; if (in_array($alias,$data['numericFields'])){$numericProtection = "numericProtection";};


            if (in_array($option['option'],$data['checkFields'])){
                $checked = ('true' == $option['value'])?"checked='checked'":"";
                $checkUp = "";
                if($option['option']=="waterMark"){
                    if(in_array($option['option'], array("waterMark"))){
                        $checkUp = "check-up";
                    }
                }

                $input = '<input type="checkbox" class="option '.$checkUp.'" name="'.$option['option'].'" value="'.$option['value'].'" '.$checked.'/>';

            }

            if (in_array($option['option'],$data['textFields'])){
                $input = '<textarea name="'.$option['option'].'" class="settings-input option">'.$option['value'].'</textarea>';
            }

            if($option['option'] == 'templateName'){
                    
                    $style='';
                    if($option['value']=="default"){
                      $style="display:block;";
                    }
                    
                   $input = '<div class="wrapp-templ"><div class="install-templ"><span>'.$lang['SETTING_BASE_1'].':</span><br/><span class="default-info" style="'.$style.'">Все изменения шаблона defaul будут отменены при обновлении версии системы,<br/>чтобы избежать этого, пожалуйста, используйте другоЙ шаблон!</span></div>
                      <select class="option last-items-dropdown" name="'.$option['option'].'" style="margin-top:5px; width:170px;" >';
                foreach($data['setting-shop']['templates'] as $template){
                         $input .=  '<option data-schemes=\''.json_encode($template['colorScheme']).'\' value="'.$template['foldername'].'" ';
                           if($template['foldername'] == $option['value']){  
                             $input .=  "selected";    
                             
                             // для выбранного строим перечень доступных схем
                             foreach($template['colorScheme']  as $scheme){
                               $active = '';
                               if($scheme==$template['colorSchemeActive']){
                                 $active = 'active';
                               }
                               $schemeHtml .= '<li class="color-scheme '.$active.'" data-scheme="'.$scheme.'" style="background:#'.$scheme.';"></li>';
                             }     
                             
                           } 
                         $input .=  '  > '. $template['foldername'].'
                         </option>';
                       }                    
                $input .= '</select>';

                      if(empty($schemeHtml)){
                        $style = 'style="display:none"';
                      }
                      
                      $input .= '<div class="template-schemes" '.$style.'><span>'.$lang['SETTING_BASE_14'].':</span><ul class="color-list">'.$schemeHtml.'</ul></div>';
                      
                      
                $input .= '<form id="newTemplateForm" method="post" noengine="true" enctype="multipart/form-data">
                          <div class="install-templ"><span>'.$lang['SETTING_BASE_2'].'</span></div>
                        <div class="type-file">
                            <a class="install-template custom-btn" href="javascript:void(0);"><span>'.$lang['SETTING_BASE_3'].'</span></a>
                            <input type="file" name="addTempl" id="addTempl" size="1">
                        </div>
                      </form></div>';
            }

            if($option['option'] == 'priceFormat'){
                $input = '
                      <select class="option last-items-dropdown" name="'.$option['option'].'" style="margin-top:5px; width:170px;" >';
                foreach(array(
                            '1234.56'=>'1234.56 - без форматирования',
                            '1 234,56'=>'1 234,56 - разделять тысячи пробелами, а копейки запятыми',
                            '1,234.56'=>'1,234.56 - разделять тысячи запятыми, а копейки точками',
                            '1234'=>'1234 - без копеек, без форматирования',
                            '1 234'=>'1 234 - без копеек, разделять тысячи пробелами',
                            '1,234'=> '1,234 - без копеек, разделять тысячи запятыми'
                        ) as $key =>$item){
                    $input .=  '<option value="'.$key.'" ';
                    if($key == $option['value']){
                        $input .=  "selected";
                    }
                    $input .=  '  > '. $item.'
                         </option>';
                }
                $input .= '</select>';

            }


            if($option['option'] == 'cacheMode'){
                $input = '
                      <select class="option last-items-dropdown" name="'.$option['option'].'" style="margin-top:5px; width:170px;" >';
                foreach(array('DB','MEMCACHE') as $item){
                    $input .=  '<option value="'.$item.'" ';
                    if($item == $option['value']){
                        $input .=  "selected";
                    }
                    $input .=  '  > '. $item.'
                         </option>';
                }
                $input .= '</select>';

            }

            if($option['option'] == 'currencyShopIso'){
                $input = '
                      <select class="option last-items-dropdown" name="'.$option['option'].'" style="margin-top:5px; width:170px;" >';
                $currencyShopIso = MG::getSetting('currencyShopIso');
                foreach(MG::getSetting('currencyShort') as $iso => $short){
                    $input .=  '<option value="'.$iso.'" ';
                    if($currencyShopIso == $iso){
                        $input .=  "selected";
                    }
                    $input .=  '  > '. $short.'
                         </option>';
                }
                $input .= '</select>';


            }

            if($option['option']=="waterMark"){
                $input .= '
                     <div class="wrapp-watermark-img" >
                         <div class="watermark-img" >
                           <img src="'.SITE.'/uploads/watermark/watermark.png">
                         </div>
                         <form class="watermarkform" method="post" noengine="true" enctype="multipart/form-data">
                           <a href="javascript:void(0);" class="add-watermark">
                           <span>'.$lang['SETTING_LOCALE_27'].'</span>
                             <input type="file" name="photoimg" class="add-img tool-tip-top" title="'.$lang['SETTING_LOCALE_27'].'">
                           </a>
                         </form>
                    </div>';
            }

            if($option['option']=="shopLogo"){
                if(empty($option['value'])){
                  $displaynone=" display:none";
                }
                $input .= '
                     <div class="wrapp-logo-img" >
                         <div class="logo-img" >
                           <img  style="max-width:200px; '.$displaynone.' "  src="'.SITE.$option['value'].' ">
                           <a class="remove-added-logo custom-btn" style="'.$displaynone.'" href="javascript:void(0);"><span></span></a>  
                         </div>
                       
                         <a href="javascript:void(0);" class="custom-btn add-logo browseImageLogo">
                           <span>'.$lang['SETTING_LOCALE_30'].'</span>                            
                         </a>
                         
                     <input type="hidden"  name="'.$option['option'].'" class="settings-input option" value="'.$option['value'].'">
                    </div>';
            }
            if($option['option']=="backgroundSite"){
              $displaynone ='';
                if(empty($option['value'])){
                  $displaynone=" display:none";
                }
                $input .= '
                     <div class="wrapp-background-img" >
                         <div class="background-img" >
                           <img  style="max-width:200px; '.$displaynone.' "  src="'.SITE.$option['value'].' ">
                             <a class="remove-added-background custom-btn" style="'.$displaynone.'" href="javascript:void(0);"><span></span></a>
                         </div>
                       
                         <a href="javascript:void(0);" class="custom-btn add-background browseBackgroundSite">
                           <span>'.$lang['SETTING_LOCALE_31'].'</span>                            
                         </a>
                         
                     <input type="hidden"  name="'.$option['option'].'" class="settings-input option" value="'.$option['value'].'">
                    </div>';
            }
              if($option['option']=="favicon"){
                $input .= '
                     <div class="wrapp-favicon-img" >
                         <div class="favicon-img" >
                           <img  style="width:30px;"  src="'.SITE.'/'.($option['value'] == '' ? 'favicon.ico' : $option['value']).' ">                            
                         </div>
                       <form class="imageform" method="post" noengine="true" enctype="multipart/form-data">
                        <a href="javascript:void(0);" class="change-favicon">
                        <span>'.$lang['CHANGE_FAVICON'].'</span>
                        <input type="file" name="favicon" class="add-img tool-tip-top" title="'.$lang['CHANGE_FAVICON'].'">
                </a>
              </form>  
                <input type="hidden"  name="'.$option['option'].'" class="settings-input option" value="">
                    </div>';
            }
              if($option['option'] == 'filterSort'){
                $input = '
                      <select class="option last-items-dropdown" name="'.$option['option'].'" style="margin-top:5px; width:170px;" >';
                $compareArray = array(
                  "sort|desc" => 'по порядку',
                  "price_course|asc" => 'по цене, сначала недорогие',
                  "price_course|desc" => 'по цене, сначала дорогие',
                  "id|desc" => 'по новизне',
                  "count_buy|desc" => 'по популярности',
                  "recommend|desc" => 'сначала рекомендуемые',
                  "new|desc" => 'сначала новинки',
                  "old_price|desc" => 'сначала распродажа',
                  "count|desc" => 'по наличию'
                );
              foreach($compareArray as $key => $item){
                    $input .=  '<option value="'.$key.'" ';
                    if($key == $option['value']){
                        $input .=  "selected";
                    }
                    $input .=  '  > '. $item.'
                         </option>';
                }
                $input .= '</select>';

            }
            
            if($option['option'] == 'imageResizeType'){
              $input = '
                <select class="option last-items-dropdown" 
                      name="'.$option['option'].'" style="margin-top:5px; width:170px;">
                  <option value="PROPORTIONAL" '.($option['value']=='PROPORTIONAL'?'selected="selected"':'').'>Пропорционально</option>
                  <option value="EXACT" '.($option['value']=='EXACT'?'selected="selected"':'').'>Точно</option>
                </select>';                
            }
            
            if($option['option'] == 'imageSaveQuality'){
              $input = '<input type="number"  name="'.$option['option'].'" 
                  class="settings-input option'.$numericProtection.'" 
                  value="'.$option['value'].'" min="0" max="100">';
            }
            
            if(empty($input)){
                $type = "text";
                if($option['option']=="smtpPass"){
                    $type = "password";
                    $option['value'] = CRYPT::mgDecrypt($option['value']);
                }

                $input = '<input type="'.$type.'"  name="'.$option['option'].'" class="settings-input option'.$numericProtection.'" value="'.str_replace('"','&quot;',$option['value']).'">';
            }

            $textUp = "";
            if(in_array($option['option'], array("waterMark","widgetCode","templateName"))){
                $textUp = "text-up";
                if($option['option']=="waterMark"){
                    $textUp = 'watermark-text';
                }
            }

            $propertyHtml .=  "<li><span class='property-name ".$textUp."'>".$lang[$alias]."</span><span class='property-fields'>".$input."<a href='javascript:void(0);' class='tool-tip-top desc-property' title='".$lang['DESC_'.$option['name']]."' >?</a></span></li>";
        }
        $propertyHtml .=  "</ul></div>";
    }
    ?>

    <table class="main-settings-list">
        <tr id="data">
            <td><?php echo $propertyHtml;?></td>
        </tr>
    </table>
    <button class="save-button save-settings"><span><?php echo $lang['SAVE'] ?></span></button>
    <div class="clear"></div>
</div>


<!--Раздел настроек системы-->
<div class="main-settings-container" id="tab-system-settings" style="display:none">
    <h4><?php echo $lang['STNG_SYSTEM']?></h4>

    
    <div class="tab-inner">
        <?php          
          $downtime = $data['setting-system']['options']['downtime']['value'];
          $checked = '';
          $value = 'value="false"';

          if($downtime=="true"){
              $checked = 'checked="checked"';
              $value = 'value="'.$downtime.'"';
        }?>
        <ul class="form-list">
            <li>
                <label>
                    <span class="key-text"><?php echo $lang['DOWNTIME_SITE']?>:</span>
                    <input class="option downtime-check" type="checkbox" <?php echo $value ?> <?php echo $checked ?> name="downtime">
                </label>
            </li>
        </ul>

        <?php if($newFirstVersiov):?>
            <div class="step-info link-success">Доступна более новая версия движка - <?php echo $newFirstVersiov?>  <span class='start-update'>[<a href="javascript:void(0);" onclick="$('#go').click();">Начать обновление</a>]</span></div>
        <?php endif; ?>

       

        <?php if($newFirstVersiov):?>

            <ul class="step-form">

                <li class="step-update-li-1" >
                    <span class="corner"></span>
                    <h2>Шаг 1</h2>
                    <strong>Загрузка обновлений</strong>
                    <img style="display: none" class="loading-update-step-1 loader" src="<?php echo SITE ?>/mg-admin/design/images/small-loader.gif" class="loader" width="16" height="16" alt=""/>
                </li>
                <li class="step-update-li-2 current">
                    <span class="corner"></span>
                    <h2>Шаг 2</h2>
                    <strong>Применение обновлений</strong>
                    <img style="display:none" class="loading-update-step-2 loader" src="<?php echo SITE ?>/mg-admin/design/images/small-loader.gif" class="loader" width="16" height="16" alt=""/>
                </li>
                <li class="step-update-li-3 current">
                    <span class="corner"></span>
                    <h2>Шаг 3</h2>
                    <strong>Система обновлена!</strong>
                </li>
            </ul>


           
            
            <div class="step-block">
                <div class="step1">                   
                    <div style="display:none" class="step-process-info link-result"></div>
                    <div class="step-1-info link-result">
                        <ul class="system-version-list">
                            <li>
                                <strong>Описание изменений: </strong>
                                <?php
                                if($newVersionMsg){
                                    echo $newVersionMsg;
                                }
                                ?>
                            </li>
                        </ul>
						<div style="display:none" class="step-eror-info link-fail" style="margin-bottom:5px;"></div>
                        <button rel="preDownload" class="update-now tool-tip-bottom <?php echo $updataOpacity ?>" title="<?php $lang['SETTING_BASE_6']?>" <?php echo $updataDisabled ?> >
                            <span id="go">Скачать <?php echo strip_tags( $newFirstVersiov)?></span>
                        </button>
                    </div>
                </div>
                <div class="step2" style="display:none">                   
                    <div style="display:none" class="step-process-info link-result"></div>
                    <div class="step-2-info link-result">
                        <ul class="system-version-list">
                             <li>
							     Вы подтверждаете, что резервная копия сайта и базы данных создана?<br/>
                                 Вы принимаете риск несовместимости установленных плагинов и шаблонов с новой версией?<br/>
								 <div style="display:none" class="step-eror-info link-fail" style="margin-bottom:5px;"></div>
                                 <button style="display:none" rel="preDownload" class="update-archive button">
                                     <span id="go"><?php echo $lang['APPLY_UPDATE']?></span>
                                 </button>
                             </li>
                        </ul>
                    </div>
                </div>
            </div>
            

        <?php else: ?>         
            <ul class="step-form">

                <li class="step-update-li-1 current completed" >
                    <span class="corner"></span>
                    <h2>Шаг 1</h2>
                    <strong>Загрузка обновлений</strong>
                </li>
                <li class="step-update-li-2 current completed">
                    <span class="corner"></span>
                    <h2>Шаг 2</h2>
                    <strong>Применение обновлений</strong>
                </li>
               <li class="step-update-li-3">                  
                    <h2>Шаг 3</h2>
                    <strong>Система обновлена до актуальной версии <?php echo VER?>!</strong>
                </li>
            </ul>
        <?php endif; ?>
          <div class="enter-key-block">              
            <ul class="form-list">
                <li>
                    <span class="key-text"><?php echo $lang['LICENSE_KEY'] ?>:</span>
                    <?php 
                    $displayKey = "display:block";
                    if($data['setting-system']['options']['licenceKey']['value']){ $displayKey = "display:none"; }?>
                    <input style="<?php echo $displayKey; ?>" type="text"  name="licenceKey" class="settings-input option licenceKey" value="<?php echo $data['setting-system']['options']['licenceKey']['value']?>">
                    <button style="<?php echo $displayKey; ?>" class="save-button save-settings save-settings-system"><span>Сохранить ключ</span></button>
                    <?php if($displayKey == "display:none"):?>
<!--                    <span class="key-text">--><?php //echo $data['setting-system']['options']['licenceKey']['value'] ?><!--</span>-->
                    <a href="javascript:void(0);" class ="edit-key edit-row" ><?php echo $data['setting-system']['options']['licenceKey']['value'] ?></a>
                    <?php endif;?>
                </li>
                <li>
                    <span class="error-key link-fail" style="display: <?php echo (($updataDisabled!="disabled")?'none':'block'); ?>"><?php echo $lang['SETTING_LOCALE_1']?></span>
                    <?php
                    $dateActivate = MG::getOption('dateActivateKey');
                    if($dateActivate!='0000-00-00 00:00:00'){
                        $now_date = strtotime($dateActivate);
                        $future_date = strtotime(date("Y-m-d"));
                        $dayActivate = (365-(floor(($future_date - $now_date) / 86400 )));
                        if($dayActivate<=0){$dayActivate=0; $extend=" [<a href='http://moguta.ru/extendcenter'>Продлить</a>]";}
                        $activeDate =   " ".$lang['SETTING_BASE_4']." <span class='key-days-number'>".$dayActivate." ".$lang['SETTING_BASE_5']."</span>".$extend;

                    } else{
                        $activeDate = " <span class='link-result'>".$lang['SETTING_LOCALE_2']."</span>";
                    }
                    ?>
                    <?php echo $activeDate ?>
                </li>
                <li>
                    <a href="javascript:void(0);" class="clearLastUpdate custom-btn">
                        <span><?php echo $lang['SETTING_LOCALE_7']?></span>
                    </a>
                    <?php if($newFirstVersiov):?>
                     
                        
                    <?php endif; ?>
                </li>
            </ul>
        </div> 

    </div>
    <table style="display:none" class="main-settings-list-table">
        <tr>
            <td>
                <dl>
                    <dt><?php echo $lang['STNG_CUR_VER']?><span><?php echo VER?></span></dt>
                    <dd id="updataMsg">
                        <?php if(!$errorUpdata):
                            if($newVersionMsg):
                                echo $newVersionMsg;?>
                                <span class="custom-text" style="color:red"><?php echo $lang['SETTING_LOCALE_3']?></span>
                                <br/><button rel="preDownload" class="update-now tool-tip-bottom <?php echo $updataOpacity ?>" title="<?php $lang['SETTING_BASE_6']?>" <?php echo $updataDisabled ?> >
                                <span id="go"><?php echo $lang['SETTING_LOCALE_5']?></span>
                            </button>
                            <?php else:?> <!--if($newVersionMsg)-->
                                <strong><span style="color:green;"><?php echo $lang['SETTING_LOCALE_6']?></span></strong>
                                (<a href="javascript:void(0);" class="clearLastUpdate"><?php echo $lang['SETTING_LOCALE_7']?></a> )
                            <?php endif?><!--if($newVersionMsg)-->
                        <?php  else:?>  <!--if(!$errorUpdata)-->
                            <span style="color:red">
                                <?php echo $errorUpdata; ?> <?php echo $lang['SETTING_LOCALE_8']?>
                              </span>
                        <?php endif?> <!--if(!$errorUpdata)-->
                    </dd>
                </dl>
            </td>
        </tr>
    </table>

    <div class="clear"></div>
</div>









<!--Раздел настроек пользовательсктх полей-->
<div class="main-settings-container" id="tab-userField-settings" style="display:none">
    <h4><?php echo $lang['STNG_USER_FIELD'];?></h4>
    <button class="save-button addProperty"><span><?php echo $lang['SETTING_LOCALE_9']?></span></button>
            
            <label class="property-options">
                Показать характеристики привязанные к категории:
                <select name="cat_id">
                  <?php foreach ($listCategories as $key => $value):?>
                    <option value="<?php echo $key?>"><?php echo $value?></option>
                  <?php endforeach;?>
                </select>
            </label>
    <div class="clear"> </div> 
    <div class="message-block">
      Обратите внимание, что в одной категории нельзя использовать характеристики с одинаковыми названиями. 
      В карточке товара выводятся только уникальные названия свойств, повторяющиеся отображаться не будут . 
    </div>
    <table class="userField-settings-list main-settings-list"></table>

    <div class="clear"></div>
    <select name="operation" class="property-operation" >
        <option value="activity_0"><?php echo $lang['SETTING_BASE_7']?></option>
        <option value="activity_1"><?php echo $lang['SETTING_BASE_8']?></option>
              <option value="filter_1">Использовать в фильтрах</option> 
              <option value="filter_0">Не использовать в фильтрах</option> 
        <option value="delete"><?php echo $lang['SETTING_BASE_9']?></option>
    </select>
    <a href="javascript:void(0);" class="run-operation custom-btn"><span><?php echo $lang['SETTING_BASE_10']?></span></a>
   
    
</div>
<!--Содержимое, показываемое при удачном загрузке архива с обновлением-->
<div id="hiddenMsg" style="display:none">
    <?php echo $lang['SETTING_LOCALE_10']?> <b><span id="lVer"></span></b> <?php echo $lang['SETTING_LOCALE_11']?><br>
    <a href="javascript:void(0);" rel="postDownload" class="button"><span><?php echo $lang['SETTING_LOCALE_12']?></span></a>
</div>

<!--Раздел настроек шаблона -->
<div class="main-settings-container" id="tab-template-settings" style="display:none;">
    <h4><?php echo $lang['STNG_TEMPLATE'];?></h4>
    <div class="template-edit-links-wrapper">
        <ul class="template-tabs">
            <!--<li><a href="javascript:void(0);" class="active open-email-views">Шаблоны страниц</a></li>-->
            <!--<li><a href="javascript:void(0);" class="open-block-layout" >Шаблон блоков</a></li>-->
            <li><a href="javascript:void(0);" class="open-email-layout" >Шаблоны писем</a></li>
            <li><a href="javascript:void(0);" class="open-print-layout"  >Шаблон печати</a></li>
            <li><a hhref="javascript:void(0);"  class='browseImage'><?php echo $lang['SETTING_BASE_11']?></a></li>
        </ul>
<!--605/628 отключает в админке вывод настроек-->

        <?php foreach($data['setting-template']['files'] as $filename=>$path):?>
            <?php if(file_exists($pathTemplate.'/'.$path[0])):?>
                <a href="javascript:void(0);" class="file-template tab-email-views tool-tip-bottom" title="<?php echo $path[1];?>" data-path="<?php echo $path[0]?>"><?php echo $filename?></a>
            <?php endif;?>
        <?php endforeach;?>

        <?php foreach($data['setting-template']['email_layout'] as $filename=>$path):?>
            <?php if(file_exists($pathTemplate.'/'.$path[0])):?>
                <a href="javascript:void(0);" class="file-template tab-email-layout tool-tip-bottom" title="<?php echo $path[1];?>" data-path="<?php echo $path[0]?>"  style="display:none;"><?php echo $filename?></a>
            <?php endif;?>
        <?php endforeach;?>

        <?php foreach($data['setting-template']['layout'] as $filename=>$path):?>
            <?php if(file_exists($pathTemplate.'/'.$path[0])):?>
                <a href="javascript:void(0);" class="file-template tab-block-layout tool-tip-bottom" title="<?php echo $path[1];?>" data-path="<?php echo $path[0]?>"  style="display:none;"><?php echo $filename?></a>
            <?php endif;?>
        <?php endforeach;?>

        <?php foreach($data['setting-template']['print_layout'] as $filename=>$path):?>
            <?php if(file_exists($pathTemplate.'/'.$path[0])):?>
                <a href="javascript:void(0);" class="file-template tab-print-layout tool-tip-bottom" title="<?php echo $path[1];?>" data-path="<?php echo $path[0]?>"  style="display:none;"><?php echo $filename?></a>
            <?php endif;?>
        <?php endforeach;?> 
    </div>


    <textarea id="codefile" style="width:100%; height:500px;"></textarea>
    <div class="error-not-tpl" style="display:none"><?php echo $lang['NOT_FILE_TPL'] ?></div>

    <button class="save-button save-file-template"><span><?php echo $lang['SAVE'] ?></span></button>
    <div class="clear"></div>
</div>



<!--Интерфейс-->
<div class="main-settings-container" id="interface-settings" style="display:none;">
    <h4><?php echo $lang['STNG_INTERFACE'];?></h4>
    <table class="main-settings-list">
        <tr>
            <td>
                <p><?php echo $lang['SETTING_LOCALE_13']?></p>
            </td>
            <td>
                <div class="color-settings">
                    <ul class="color-list">
                        <li class="red-theme"></li>
                        <li class="blue-theme"></li>
                        <li class="yellow-theme"></li>
                        <li class="green-theme"></li>
                    </ul>
                </div>
                <input type="hidden" name="themeColor" class="option" value="<?php echo $data['interface-settings']['options']['themeColor']['value'] ?>">
            </td>
            <td>
                <p><?php echo $lang['SETTING_LOCALE_14']?></p>
            </td>
        </tr>
        <tr>
            <td>
                    <span>
                      <?php echo $lang['SETTING_LOCALE_15']?>
                    </span>
            </td>
            <td>
                <div class="background-settings">
                    <ul class="color-list">
                        <li class="bg_1"></li>
                        <li class="bg_2"></li>
                        <li class="bg_3"></li>
                        <li class="bg_4"></li>
                        <li class="bg_5"></li>
                        <li class="bg_6"></li>
                        <li class="bg_7"></li>
                        <li class="bg_8"></li>
                        <li class="bg_9"></li>
                        <li class="bg_10"></li>
                        <li class="bg_11"></li>
                        <li class="bg_12"></li>
                        <li class="bg_13"></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <input type="hidden" name="themeBackground" class="option" value="<?php echo $data['interface-settings']['options']['themeBackground']['value'] ?>">
            </td>
            <td>
                <p><?php echo $lang['SETTING_LOCALE_16']?></p>
            </td>
        </tr>
        <tr>
            <td>
                    <span>
                      <?php echo $lang['SETTING_LOCALE_17']?>
                    </span>
            </td>
            <td>
                <?php $staticMenu = $data['interface-settings']['options']['staticMenu']['value'];
                $checked = '';
                $value = 'value="false"';
                if($staticMenu=="true"){
                    $checked = 'checked="checked"';
                    $value = 'value="'.$staticMenu.'"';
                }
                ?>
                <input type="checkbox" <?php echo $value ?> <?php echo $checked ?> name="staticMenu" class="option the-fixed-menu">
            </td>
            <td>
                <p><?php echo $lang['SETTING_LOCALE_18']?></p>
            </td>
        </tr>
    </table>
    <button id="temp" class="save-button save-settings tool-tip-bottom" title="<?php echo $lang['T_TIP_SAVE_U_CAT'];?>">
                <span><?php echo $lang['SAVE'];?>
                </span>
    </button>
    <div class="clear"></div>
</div>
<!--Вкладка - Валюта-->
<div class="main-settings-container" id="tab-currency-settings" style="display:none;">
    <h4>Курсы валюты</h4>
    <div class="currency-buttons">
        <a href="javascript:void(0)" class="add-new-currency custom-btn tool-tip-bottom" title="Добавить валюту" ><span>Добавить валюту</span></a>
        <a href="javascript:void(0)" class="edit-currency custom-btn tool-tip-bottom" title="Редактировать" ><span>Редактировать</span></a>
        <a href="javascript:void(0)" class="save-currency custom-btn tool-tip-bottom" title="Сохранить" ><span>Сохранить</span></a>
    </div>
    <?php $currencyShort = MG::getSetting('currencyShort');?>
    <table class="main-settings-list">
        <thead class="yellow-bg">
        <th>ISO</th>
        <th>Стоимость по отношению к валюте магазина ( <span class="view-value-curr"><?php echo MG::getSetting('currencyShopIso') ?> </span>)</th>
        <th>Сокращение</th>
        <th>Действия</th>
        </thead>
        <tbody class="currency-tbody">
        <?php
        if(0 < count($data['currency-settings'])):
            foreach($data['currency-settings'] as $iso => $currency):?>
                <?php
                if($iso == MG::getSetting('currencyShopIso') ){
                    $class = 'class="none-edit"';
                }else{
                    $class = '';
                }
                ?>
                <tr data-iso="<?php echo $iso ?>" <?php echo $class ?>>
                    <td data-iso="<?php $iso ?>">
                        <span class="view-value-curr"><?php echo $iso ?></span>
                        <input type="text" name="currency_iso" value="<?php echo $iso ?>" class="currency-field" style="display:none"/>
                    </td>
                    <td class="currency-rate">
                        <span class="view-value-curr"> = </span>
                        <span class="view-value-curr"><?php echo number_format($currency['rate'], 2, ',', ' ' ); ?></span>
                        <span class="view-value-curr"><?php echo $currencyShort[MG::getSetting('currencyShopIso')]?></span>
                        <input type="text" name="currency_rate" value="<?php echo $currency['rate'] ?>" class="currency-field" style="display:none"/>
                    </td>
                    <td class="currency-short">
                        <span class="view-value-curr"><?php echo $currency['short'] ?></span>
                        <input type="text" name="currency_short" value="<?php echo $currency['short'] ?>" class="currency-field" style="display:none"/>
                    </td>
                    <td class="actions">
                        <?php if($iso != MG::getSetting('currencyShopIso') ){ ?>
                            <ul class="action-list">
                                <li class="delete-row" id="<?php echo $iso ?>"><a class="tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['DELETE'];?>"></a></li>
                            </ul>
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach;
        else:?>
            <tr id="none_delivery"><td class="no-delivery" colspan="4">Отсутствуют валюты</td></tr>
        <?php endif;?>
        </tbody>
    </table>
</div>
<!-- Верстка модального окна  валют-->
</div>

<!--Методы доставки-->
<div class="main-settings-container" id="tab-deliveryMethod-settings" style="display:none;">
    <h4><?php echo $lang['STNG_DELIVERY'];?></h4>
    <a href="javascript:void(0);" class="mg-open-modal add-new-button tool-tip-bottom" title="<?php echo $lang['T_TIP_KEY_ADD_DELIVERY'];?>" ><span><?php echo $lang['STNG_KEY_ADD_DELIVERY'];?></span></a>
    <table class="main-settings-list">
        <thead class="yellow-bg">
            <tr>
                <th>id</th>
                <th><?php echo $lang['SETTING_LOCALE_19']?></th>
                <th><?php echo $lang['SETTING_LOCALE_20']?></th>
                <th><?php echo $lang['SETTING_LOCALE_21']?></th>
                <th><?php echo $lang['SETTING_LOCALE_29']?></th>
                <th><?php echo $lang['SETTING_LOCALE_22']?></th>
                <th><?php echo $lang['SETTING_LOCALE_23']?></th>
            </tr>
        </thead>
        <tbody class="deliveryMethod-tbody">
        <?php if(0 < count($data['deliveryMethod-settings']['deliveryArray'])):
            foreach($data['deliveryMethod-settings']['deliveryArray'] as $delivery):?>
                <tr id="delivery_<?php echo $delivery['id'] ?>"  data-id="<?php echo $delivery['id'] ?>" style="cursor:move">
                    <td class="deliveryId"><?php echo $delivery['id'] ?></td>
                    <td id="deliveryName" ><?php echo $delivery['name'] ?></td>
                    <td id="deliveryCost"><span class="costValue"><?php echo MG::numberFormat($delivery['cost'])?></span> <span class="currency"><span class="currency"><?php echo MG::getSetting('currency')?></span></span> </td>
                    <td id="deliveryDescription"><?php echo $delivery['description'] ?></td>
                    <td class="free"><span class="costFree"><?php echo MG::numberFormat($delivery['free']) ?></span> <span class="currency"><?php echo MG::getSetting('currency')?></span></td>
                  <td id="activity"  data-delivery-date ="<?php echo $delivery['date'] ?>" data-delivery-ymarket ="<?php echo $delivery['ymarket'] ?>" status="<?php echo $delivery['activity'] ?>">
                        <?php if($delivery['activity']):?>
                            <span class="activity-product-true"><?php echo $lang['ACTYVITY_TRUE'];?></span>
                        <?php else:?>
                            <span class="activity-product-false"><?php echo $lang['ACTYVITY_FALSE'];?></span>
                        <?php endif?>
                    </td>
                    <td class="actions">
                        <ul class="action-list">
                            <li class="edit-row" id="<?php echo $delivery['id'] ?>"><a class="mg-open-modal tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['EDIT'];?>"></a></li>
                            <li class="delete-row " id="<?php echo $delivery['id'] ?>"><a class="tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['DELETE'];?>"></a></li>
                        </ul>
                    </td>
                    <td id="paymentHideMethod" style="display: none"></td>
                </tr>
            <?php endforeach;
        else:?>
            <tr id="none_delivery"><td class="no-delivery" colspan="6"><?php echo $lang['NONE_DELIVERY'];?></td></tr>
        <?php endif;?>
        </tbody>
    </table>
    <!-- Верстка модального окна способов доставки-->
    <div class="mg-modal b-modal hidden-form add-category-popup" id="add-deliveryMethod-wrapper">
        <div class="product-table-wrapper deliveryMethod-table-wrapper">
            <div class="widget-table-title">
                <h4 class="delivery-table-icon"></h4>
                <div class="b-modal_close tool-tip-bottom" title="<?php echo $lang['T_TIP_CLOSE_WITHOUT_SAVE'];?>"></div>
            </div>
            <div class="widget-table-body">
                <div class="add-user-form-wrapper">
                    <div class="add-user-form">
                        <label>
                            <span class="custom-text"><?php echo $lang['SETTING_LOCALE_19']?>:</span>
                            <input type="text" name="deliveryName" class="product-name-input" title="<?php echo $lang['T_TIP_USER_EMAIL'];?>">
                            <div class="errorField"><?php echo $lang['ERROR_EMPTY'];?></div>
                        </label>
                        <label>
                            <span class="custom-text"><?php echo $lang['SETTING_LOCALE_20']?>:</span>
                            <input type="text" name="deliveryCost" class="product-name-input">
                            <span class="currency"><?php echo MG::getSetting('currency')?></span>
                            <div class="errorField"><?php echo $lang['ERROR_NUMERIC'];?></div>
                        </label>
                        <label>
                            <span class="custom-text"><?php echo $lang['SETTING_LOCALE_21']?>:</span>
                            <input type="text" name="deliveryDescription" class="product-name-input">
                            <div class="errorField"><?php echo $lang['ERROR_EMPTY'];?></div>
                        </label>
                        <label>
                            <span class="custom-text"><?php echo $lang['SETTING_BASE_12'];?>:</span>
                            <input type="text" name="free" class="product-name-input tool-tip-bottom" title="<?php echo $lang['SETTING_BASE_13'];?>">
                            <span class="currency"><?php echo MG::getSetting('currency')?></span>
                            <div class="errorField"><?php echo $lang['ERROR_NUMERIC'];?></div>
                        </label>
                        <label>
                            <span class="custom-text"><?php echo $lang['SETTING_LOCALE_22']?>:</span>
                            <input type="checkbox" name="deliveryActivity" class="delivery-active">
                        </label>
                         <label>
                            <span class="custom-text"><?php echo $lang['SETTING_LOCALE_YMARKET']?>:</span>
                            <input type="checkbox" name="deliveryYmarket" class="delivery-date">
                        </label>
                        <label>
                            <span class="custom-text"><?php echo $lang['SETTING_LOCALE_DATE']?>:</span>
                            <input type="checkbox" name="deliveryDate" class="delivery-date">
                        </label>
                        <div id="paymentCheckbox">
                            <span class="custom-text bold-text"><?php echo $lang['SETTING_LOCALE_24']?>:</span>
                            <div id="paymentArray">
                                <?php foreach($data['paymentMethod-settings']['paymentArray'] as $payment):?>
                                    <label>
                                        <span class="custom-text"><?php echo $payment['name']?></span>
                                        <input type="checkbox" name="<?php echo $payment['id']?>" class="paymentMethod">
                                    </label>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <button class="save-button tool-tip-bottom" title="<?php echo $lang['T_TIP_USER_SAVE'];?>"><span><?php echo $lang['SAVE'];?></span></button>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Верстка модального окна  способов доставки-->
</div>
<!--Методы оплаты-->
<div class="main-settings-container" id="tab-paymentMethod-settings" style="display:none;">
    <h4><?php echo $lang['STNG_PAYMENT'];?>  ( <a style="color:#73CBF7" href="http://wiki.moguta.ru/kak-nastroit-sposobi-oplati-v-moguta-cms">Видеоинструкция</a> )</h4>
    <?php //viewData($data['paymentMethod-settings']['paymentArray'])?>
    <table class="main-settings-list">
        <thead class="yellow-bg">
        <th class="id-way" style="display:none">id способа</th>
        <th><?php echo $lang['SETTING_LOCALE_19']?></th>        
        <th><?php echo $lang['SETTING_LOCALE_22']?></th>
        <th><?php echo $lang['SETTING_LOCALE_23']?></th>
        </thead>
        <tbody class="paymentMethod-tbody">
        <?php foreach($data['paymentMethod-settings']['paymentArray'] as $payment):?>
            <tr id="payment_<?php echo $payment['id'] ?>" data-id="<?php echo $payment['id'] ?>" style="cursor:move">
                <td class="paymentId" style="display:none"><?php echo $payment['id'] ?></td>
                <td id="paymentName"><?php echo $payment['name'] ?></td>                
                <td id="activity" status="<?php echo $payment['activity'] ?>">
                    <?php if($payment['activity']):?>
                        <span class="activity-product-true"><?php echo $lang['ACTYVITY_TRUE'];?></span>
                    <?php else:?>
                        <span class="activity-product-false"><?php echo $lang['ACTYVITY_FALSE'];?></span>
                    <?php endif?>
                </td>
                <td class="actions">
                    <ul class="action-list">
                        <li class="edit-row" id="<?php echo $payment['id'] ?>"><a class="mg-open-modal tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['EDIT'];?>"></a></li>
                    </ul>
                </td>
                <td id="paramHideArray" style="display: none"><?php echo $payment['paramArray'] ? htmlspecialchars($payment['paramArray']): '{"0":0}' ?></td>
                <td id="deliveryHideMethod" style="display: none"><?php echo $payment['deliveryMethod'] ? $payment['deliveryMethod']: '{"0":0}' ?></td>
                <td id="urlArray" style="display: none"><?php echo $payment['urlArray'] ?></td>
                <td id="paymentRate" style="display: none"><?php echo $payment['rate']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <!-- Верстка модального окна способов оплаты-->
    <div class="mg-modal b-modal hidden-form add-category-popup" id="add-paymentMethod-wrapper">
        <div class="product-table-wrapper paymentMethod-table-wrapper">
            <div class="widget-table-title">
                <h4 class="payment-table-icon"></h4>
                <div class="b-modal_close tool-tip-bottom" title="<?php echo $lang['T_TIP_CLOSE_WITHOUT_SAVE'];?>"></div>
            </div>
            <div class="widget-table-body">
                <div class="add-user-form-wrapper">
                    <div class="add-user-form">
                        <span class="custom-text"><strong><?php echo $lang['SETTING_LOCALE_19']?>:</strong></span>
                        <span id="paymentName"><?php echo $lang['SETTING_LOCALE_28']?></span><br>
                        <span class="custom-text bold-text"><?php echo $lang['SETTING_LOCALE_25']?>:</span>
                        <div id="paymentParam"></div>
                        <label>
                            <span class="custom-text"><?php echo $lang['SETTING_LOCALE_22']?>:</span>
                            <input type="checkbox" name="paymentActivity" class="payment-active">
                        </label>
                        <!--START Установка скидки/наценки для способа оплаты-->
                        <a class="discount-setup-rate" href="javascript:void(0);" title="">Установить скидку/наценку для способа оплаты</a>
                        <div class="discount-rate-control" style="display:none">                  
                          <div class="select-rate-block" style="display:none">
                            <div class="currency-block">
                              <div class="change-rate-dir">
                                <span>Применять к товарам категории:</span>        
                                <select name="change_rate_dir">  
                                  <option value="up">Наценку</option>     
                                  <option value="down" >Cкидку</option>                              
                                </select> 
                              </div>                   
                              <a class="apply-rate-dir fl-right custom-btn" href="javascript:void(0);"><span>Применить</span></a>
                              <a class="cancel-rate-dir fl-left custom-btn" href="javascript:void(0);"><span>Отмена</span></a>
                              <div class="clear"></div>
                            </div>
                          </div>   
                          <a class="discount-change-rate rate-dir-name" href="javascript:void(0);" title="Нажмите для выбора скидки или наценки">Наценка</a>
                          <div class="discount-rate">                        
                            <span class="set-margin" style=""> <span class="rate-dir" style="">+</span> <input type="text" name="rate" value="0"> %</span>                 
                            <a href="javascript:void(0);" class="cancel-rate" style="display:inline-block">X</a>  
                          </div>  
                          <div class="discount-error errorField">Введите число</div>
                        </div>
                        <!--END Установка скидки/наценки для способа оплаты-->
                        <div id="deliveryCheckbox">
                            <span class="custom-text bold-text"><?php echo $lang['SETTING_LOCALE_26']?>:</span>
                            <div id="deliveryArray">
                                <?php foreach($data['deliveryMethod-settings']['deliveryArray'] as $delivery):?>
                                    <label>
                                        <span class="custom-text"><?php echo $delivery['name']?></span>
                                        <input type="checkbox" name="<?php echo $delivery['id']?>" class="deliveryMethod">
                                    </label>
                                <?php endforeach;?>
                            </div>
                        </div>

                        <div id="urlParam"></div>
                        <div class="clear"></div>
                        <button class="save-button tool-tip-bottom" title="<?php echo $lang['T_TIP_USER_SAVE'];?>"><span><?php echo $lang['SAVE'];?></span></button>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Верстка модального окна  способов оплаты-->
    <div class="clear"></div>
</div>
<div class="main-settings-container" id="tab-SEOMethod-settings" style="display:none;">
  <h4><?php echo $lang['STNG_SEO']; ?></h4>
  <div class="wrapper-seo-settings">
    <table class="form-list">
      <?php
      foreach ($data['setting-shop']['options'] as $option) {
        if (in_array($option['option'], $data['seo-setting'])) :
          ?>       
          <?php if ($option['option'] == 'cacheCssJs') : ?>
            <?php
            $cacheCssJs = $option['value'];
            $warning = '';
            if (!file_exists(PATH_TEMPLATE . '/cache/images')) {
              $warning = $lang['WARN_CREATE_IMG_CSS'];
            }
            ?>
            <tr>
              <td>
                  <a href = "javascript:void(0);" class="create-images-for-css-cache custom-btn" style="display:<?php echo $cacheCssJs != 'true' ? 'none' : 'block' ?>">
                      <span><?php echo $lang['CREATE_IMG_CSS']; ?></span>
                  </a>
              </td>
              <td>
                  <span class="warning-create-images" style="display:<?php echo $cacheCssJs != 'true' ? 'none' : 'block' ?>; color:#cc0000"><?php echo $warning; ?></span>
              </td>
            </tr>
            <tr>
                <td>
                    <span class='property-name'><?php echo $lang[$option['name']]; ?></span>
                </td>
                <td>
                    <span class='property-fields'>
                    <input type="checkbox" class="option" name="<?php echo $option['option']; ?>" value="<?php echo $option['value']; ?>" <?php echo ($option['value'] == 'true' ? 'checked=checked' : ''); ?>/>
                    <a href='javascript:void(0);' class='tool-tip-top desc-property' title='<?php echo $lang['DESC_' . $option['name']] ?>' >?</a>
                </span>
                </td>
            </tr>
          <?php else: ?>
            <tr>
              <td>
                  <span class='property-name'><?php echo $lang[$option['name']]; ?></span>
              </td>
               <td>
                    <span class='property-fields'>
                <input type="checkbox" class="option" name="<?php echo $option['option']; ?>" value="<?php echo $option['value']; ?>" <?php echo ($option['value'] == 'true' ? 'checked=checked' : ''); ?>/>
                <a href='javascript:void(0);' class='tool-tip-top desc-property' title='<?php echo $lang['DESC_' . $option['name']] ?>' >?</a>
                </span>
               </td>
            </tr>
          <?php endif; ?>      
        <?php endif;
      } ?>   
    </table>
  </div>  
  <table class="main-settings-list">
    <tr id="data">
      <td>
      <?php   
      foreach($seoGroups as $key=>$group){?>
        <div class="group-property seoBlockList" id="<?php echo $key?>">
          <h3><?php echo $lang[$key]?></h3>
          <div class="group-property-list" style='display:none'>
          <?php if($key == 'STNG_SEO_GROUP_1'){?>
            <button class='add-new-button addShortLink'><span><?php echo $lang['STNG_SEO_URL_REWRITE_ADD']?></span></button>
              <div class="table-wrapper">
                  <table class="main-settings-list urlRewriteList" style="display: table;">
                      <thead class="yellow-bg">
                      <tr>
                          <th><?php echo $lang['STNG_SEO_URL_REWRITE_NAME']?></th>
                          <th><?php echo $lang['STNG_SEO_URL_REWRITE_URL']?></th>
                          <th><?php echo $lang['STNG_SEO_URL_REWRITE_SHORT_URL']?></th>
                          <th><?php echo $lang['STNG_SEO_URL_REWRITE_ACTION']?></th>
                      </tr>
                      </thead>
                      <tbody class="filterShortLinkTable" style="">
                      <?php foreach($group['data'] as $row){?>
                          <tr class="rewrite-line" id="<?php echo $row['id']?>">
                              <td><?php echo $row['titeCategory']?></td>
                              <td><?php echo $row['url']?></td>
                              <td>
                                  <?php echo SITE.'/'.$row['short_url']?>
                                  <a class="link-to-site tool-tip-bottom" target="_blank" href="<?php echo SITE.'/'.$row['short_url']?>" title="<?php echo $lang['T_TIP_STNG_SEO_URL_REWRITE_GO']?>">
                                      <img alt="" src="<?php echo SITE?>/mg-admin/design/images/icons/link.png">
                                  </a>
                              </td>
                              <td class="actions">
                                  <ul class="action-list">
                                      <li class="edit-row" id="<?php echo $row['id']?>"><a class="tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['EDIT']?>"></a></li>
                                      <li class="visible tool-tip-bottom <?php echo ($row['activity']) ? 'active' : '';?>" data-id="<?php echo $row['id']?>" title="" ><a href="javascript:void(0);"></a></li>
                                      <li class="delete-row" id="<?php echo $row['id']?>"><a class="tool-tip-bottom" href="javascript:void(0);"  title=""></a></li>
                                  </ul>
                              </td>
                          </tr>
                      <?php }?>
                      </tbody>
                      <?php if(!empty($group['pager'])):?>
                      <tfoot>
                        <tr><td colspan="4"><?php echo $group['pager']?></td></tr>
                      </tfoot>
                      <?php endif;?>
                  </table>
              </div>
            <div class="clear"></div>
          <?php }?> 
          <?php if($key == 'STNG_SEO_GROUP_2'){?>
            <button class='add-new-button addRedirect'><span><?php echo $lang['STNG_SEO_URL_REDIRECT_ADD']?></span></button>
                <div class="table-wrapper">
                    <table class="main-settings-list urlRedirectList" style="display: table;">
                        <thead class="yellow-bg">
                        <tr>
                            <th><?php echo $lang['STNG_SEO_URL_REDIRECT_OLD_URL']?></th>
                            <th><?php echo $lang['STNG_SEO_URL_REDIRECT_NEW_URL']?></th>
                            <th><?php echo $lang['STNG_SEO_URL_REDIRECT_CODE']?></th>
                            <th><?php echo $lang['STNG_SEO_URL_REWRITE_ACTION']?></th>
                        </tr>
                        </thead>
                        <tbody class="urlRedirectTable" style="">
                        <?php foreach($group['data'] as $row){?>
                            <tr class="rewrite-line" id="<?php echo $row['id']?>">
                                <td class="url_old"><?php echo $row['url_old']?></td>
                                <td class="url_new"><?php echo $row['url_new']?></td>
                                <td class="code" width="250px" value="<?php echo $row['code'];?>"><?php echo $lang['REDIRECT_MESSAGE_'.$row['code']]?></td>
                                <td class="actions">
                                    <ul class="action-list">
                                        <li class="save-row" id="<?php echo $row['id']?>" style="display:none"><a class="tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['SAVE']?>"></a></li>
                                        <li class="cancel-row" id="<?php echo $row['id']?>" style="display:none"><a class="tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['CANCEL']?>"></a></li>
                                        <li class="edit-row" id="<?php echo $row['id']?>"><a class="tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['EDIT']?>"></a></li>
                                        <li class="visible tool-tip-bottom <?php echo ($row['activity']) ? 'active' : '';?>" data-id="<?php echo $row['id']?>" title="<?php echo $lang['ACTIVITY']?>" ><a href="javascript:void(0);"></a></li>
                                        <li class="delete-row" id="<?php echo $row['id']?>"><a class="tool-tip-bottom" href="javascript:void(0);"  title="<?php echo $lang['DELETE']?>"></a></li>
                                    </ul>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                        <?php if(!empty($group['pager'])):?>
                        <tfoot>
                          <tr><td colspan="4"><?php echo $group['pager']?></td></tr>
                        </tfoot>
                        <?php endif;?>
                    </table>
                </div>
            <div class="clear"></div>
          <?php }?>
          <?php if($key == 'STNG_SEO_GROUP_3'){?>
            <button class='add-new-button createSitemap'><span><?php echo $lang['CREATE_SITEMAP']?></span></button>    
            <span class="sitemap-msg"><?php if ($group['msg'] ) {
              echo '<span class="link-result">'.$lang['MSG_SITEMAP1'].$group['msg'].'</span>';
            } else {
              echo '<span class="link-fail">'.$lang['MSG_SITEMAP0'].'</span>';
            } ?>
            </span>
              <div class="excludeSitemap">
                    <span><?php echo $lang['EXCLUDE_SITEMAP']?>:
                    <a href='javascript:void(0);' class='tool-tip-top desc-property' title='<?php echo $lang['DESC_EXCLUDE_SITEMAP'] ?>' >?</a></span>  
                  <textarea name="excludeUrl" class="option" placeholder="<?php echo $lang['RELATED_2'].' '.SITE.'/example'?>"><?php echo $group['excludeUrl']?></textarea> 
              </div>           
            <span class='property-fields'>
              <input type="checkbox" class="option" name="autoGeneration" value="<?php echo $data['setting-shop']['options']['autoGeneration']['value'] ; ?>" <?php echo ($data['setting-shop']['options']['autoGeneration']['value'] == 'true' ? 'checked=checked' : ''); ?>/>
           </span>
             <span class='property-name'><?php echo $lang[$data['setting-shop']['options']['autoGeneration']['name']]; ?></span>
            <span class='property-name'><?php echo $lang[$data['setting-shop']['options']['generateEvery']['name']]; ?></span>
            <input type="text" class="option" name="generateEvery" value="<?php echo $data['setting-shop']['options']['generateEvery']['value'] ; ?>"/><span><?php echo $lang['SETTING_BASE_5']?></span>
            <a href='javascript:void(0);' class='tool-tip-top desc-property' title='<?php echo $lang['DESC_' . $data['setting-shop']['options']['autoGeneration']['name']] ?>' >?</a>
            <div class="clear"></div>
          <?php }?>
          <?php if($key == 'STNG_SEO_GROUP_4'){
            $fields = $group['data'];
            ?>
            <div class="tmpl-seo-wrapper">
                <h5><?php echo $lang['STNG_SEO_TMPL_CATEGORY']?></h5>
                <div class="left-side">
                    <table class="form-list">
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_TITLE']?></label></td>
                            <td><input type="text" class="option medium" name="catalog_meta_title" value="<?php echo $fields['catalog_meta_title'];?>" /></td>
                        </tr>
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_DESC']?></label></td>
                            <td><textarea class="option medium" name="catalog_meta_description"><?php echo $fields['catalog_meta_description'];?></textarea></td>
                        </tr>
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_KEYWORDS']?></label></td>
                            <td><input type="text" class="option medium" name="catalog_meta_keywords" value="<?php echo $fields['catalog_meta_keywords'];?>" /></td>
                        </tr>
                    </table>
                </div>
                <div class="right-side">
                    <div class="tmpl-seo-description">
                        <ul>
                            <li><span>{titeCategory}</span> - <?php echo $lang['STNG_SEO_TMPL_CAT_TITLE']?></li>
                            <li><span>{cat_desc}</span> - <?php echo $lang['STNG_SEO_TMPL_CAT_DESC']?></li>
                            <li><span>{totalCountItems}</span> - <?php echo $lang['STNG_SEO_TMPL_CAT_COUNT']?></li>
                            <li><span>{searchData:keyword}</span> - <?php echo $lang['STNG_SEO_TMPL_CAT_SEARCH_WORD']?></li>
                            <li><span>{searchData:count}</span> - <?php echo $lang['STNG_SEO_TMPL_CAT_SEARCH_COUNT']?></li>
                            <li><span>{meta_title}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_TITLE']?></li>
                            <li><span>{meta_keywords}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_KEYWORDS']?></li>
                            <li><span>{meta_desc}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_DESC']?></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="tmpl-seo-wrapper">
                <h5><?php echo $lang['STNG_SEO_TMPL_PRODUCT']?></h5>
                <div class="left-side">
                    <table class="form-list">
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_TITLE']?></label></td>
                            <td><input type="text" class="option medium" name="product_meta_title" value="<?php echo $fields['product_meta_title'];?>" /></td>
                        </tr>
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_DESC']?></label></td>
                            <td><textarea class="option medium" name="product_meta_description"><?php echo $fields['product_meta_description'];?></textarea></td>
                        </tr>
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_KEYWORDS']?></label></td>
                            <td><input type="text" class="option medium" name="product_meta_keywords" value="<?php echo $fields['product_meta_keywords'];?>" /></td>
                        </tr>
                    </table>
                </div>
                <div class="right-side">
                    <div class="tmpl-seo-description">
                        <ul>
                            <li><span>{title}</span> - <?php echo $lang['STNG_SEO_TMPL_PROD_TITLE']?></li>
                            <li><span>{description}</span> - <?php echo $lang['STNG_SEO_TMPL_PROD_DESC']?></li>
                            <li><span>{price}</span> - <?php echo $lang['STNG_SEO_TMPL_PROD_PRICE']?></li>
                            <li><span>{old_price}</span> - <?php echo $lang['STNG_SEO_TMPL_PROD_OLD_PRICE']?></li>
                            <li><span>{count}</span> - <?php echo $lang['STNG_SEO_TMPL_PROD_COUNT']?></li>
                            <li><span>{currency}</span> - <?php echo $lang['STNG_SEO_TMPL_PROD_CURRENCY']?></li>
                            <li><span>{code}</span> - <?php echo $lang['STNG_SEO_TMPL_PROD_ARTICLE']?></li>
                            <li><span>{stringsProperties:характеристика}</span> - <?php echo $lang['STNG_SEO_TMPL_PROD_PROPERTIY']?></li>
                            <li><span>{meta_title}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_TITLE']?></li>
                            <li><span>{meta_keywords}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_KEYWORDS']?></li>
                            <li><span>{meta_desc}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_DESC']?></li>
                        </ul>
                    </div>
                </div>
              <div class="clear"></div>
            </div>
            <div class="tmpl-seo-wrapper">
                <h5><?php echo $lang['STNG_SEO_TMPL_PAGE']?></h5>
                <div class="left-side">
                    <table class="form-list">
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_TITLE']?></label></td>
                            <td><input type="text" class="option medium" name="page_meta_title" value="<?php echo $fields['page_meta_title'];?>" /></td>
                        </tr>
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_DESC']?></label></td>
                            <td><textarea class="option medium" name="page_meta_description"><?php echo $fields['page_meta_description'];?></textarea></td>
                        </tr>
                        <tr>
                            <td><label><?php echo $lang['STNG_SEO_TMPL_META_KEYWORDS']?></label></td>
                            <td><input type="text" class="option medium" name="page_meta_keywords" value="<?php echo $fields['page_meta_keywords'];?>" /></td>
                        </tr>
                    </table>
                </div>
                <div class="right-side">
                    <div class="tmpl-seo-description">
                        <ul>
                            <li><span>{title}</span> - <?php echo $lang['STNG_SEO_TMPL_PAGE_TITLE']?></li>
                            <li><span>{meta_title}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_TITLE']?></li>
                            <li><span>{meta_keywords}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_KEYWORDS']?></li>
                            <li><span>{meta_desc}</span> - <?php echo $lang['STNG_SEO_TMPL_CUR_META_DESC']?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
          <?php }?>
             <?php if($key == 'STNG_SEO_ROBOTS'){?>
            <div class="table-wrapper">
             <textarea class="robots option" name="robots"><?php echo $group?></textarea>
            </div>
            <div class="clear"></div>
          <?php }?>
          </div>
        </div>
      <?php }?>
      </td>
    </tr>
  </table>
  <button class="save-button save-settings"><span><?php echo $lang['SAVE'] ?></span></button> 
  <!-- START Верстка модального окна настроки перенаправлений-->
  <div class="mg-modal b-modal hidden-form add-filter-short-link" id="add-filterShortLink-wrapper">
    <div class="product-table-wrapper filterShortLink-table-wrapper">
      <div class="widget-table-title">  
        <h4><?php echo $lang['STNG_SEO_URL_REWRITE_MODAL_TITLE']?></h4>
        <div class="b-modal_close tool-tip-bottom" title="<?php echo $lang['T_TIP_CLOSE_WITHOUT_SAVE']; ?>"></div>
      </div>
      <div class="widget-table-body">
        <div class="add-product-form-wrapper">
          <div class="add-category-form">
            <input type="hidden" name="activity" value="1" />
            <label><span class="custom-text"><?php echo $lang['STNG_SEO_URL_REWRITE_NAME']; ?>:</span><input type="text" name="titeCategory" class="product-name-input tool-tip-right" title="<?php echo $lang['T_TIP_STNG_SEO_URL_REWRITE_NAME']; ?>" ><div class="errorField"><?php echo $lang['ERROR_SPEC_SYMBOL']; ?></div></label>
            <label><span class="custom-text"><?php echo $lang['STNG_SEO_URL_REWRITE_URL']; ?>:</span><input type="text" name="url" class="product-name-input tool-tip-right" title="<?php echo $lang['T_TIP_STNG_SEO_URL_REWRITE_URL']; ?>"><div class="errorField"><?php echo $lang['ERROR_EMPTY']; ?></div></label>                        
            <label><span class="custom-text"><?php echo $lang['STNG_SEO_URL_REWRITE_SHORT_URL']; ?>:</span><input type="text" name="short_url" class="product-name-input tool-tip-right" title="<?php echo $lang['T_TIP_STNG_SEO_URL_REWRITE_SHORT_URL']; ?>"><div class="errorField"><?php echo $lang['ERROR_EMPTY']; ?></div></label>                        
            <div class="category-desc-wrapper">
              <p><?php echo $lang['STNG_SEO_URL_REWRITE_DESC']; ?>:</p>
              <a href="javascript:void(0);" class="html-content-edit"><?php echo $lang['DESCRIPTION_PRODUCT_EDIT'];?></a>
              <div style="background:#FFF" id="html-content-wrapper">
                <textarea class="product-desc-field" name="cat_desc"></textarea>
              </div>
            </div>
            <div class="clear"></div>
            <span class="seo-title"><?php echo $lang['SEO_BLOCK'] ?></span>
            <div class="seo-wrapper">
              <label><span class="custom-text"><?php echo $lang['META_TITLE']; ?>:</span><input type="text" name="meta_title" class="product-name-input meta-data-category tool-tip-bottom" title="<?php echo $lang['T_TIP_META_TITLE']; ?>"></label>
              <label><span class="custom-text"><?php echo $lang['META_KEYWORDS']; ?>:</span><input type="text" name="meta_keywords" class="product-name-input meta-data-category tool-tip-bottom" title="<?php echo $lang['T_TIP_META_KEYWORDS']; ?>"></label>
              <label>
                <ul class="meta-list">
                  <li><span class="custom-text"><?php echo $lang['META_DESC']; ?>:</span></li>
                  <li><span class="symbol-left"><?php echo $lang['LENGTH_META_DESC']; ?>: <span class="symbol-count"></span></li>
                </ul>
                <textarea class="product-meta-field meta-data-category tool-tip-bottom" name="meta_desc" title="<?php echo $lang['T_TIP_META_DESC']; ?>"></textarea>
              </label>
            </div>
            <div class="clear"></div>                        
            <button class="save-button tool-tip-bottom" title="<?php echo $lang['T_TIP_SAVE_REWRITE']; ?>"><span><?php echo $lang['SAVE']; ?></span></button>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Верстка модального окна настроки перенаправлений-->
  <div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
<script>
$('.memcache-conection').hide();	
$('input[name="cacheHost"]').parent('li').hide();
$('input[name="cachePort"]').parent('li').hide();

if($('.section-settings  select[name="cacheMode"]').val()=="MEMCACHE"){
  $('.memcache-conection').show();	
  $('input[name="cacheHost"]').parent('li').show();	
  $('input[name="cachePort"]').parent('li').show();		 
};
</script>
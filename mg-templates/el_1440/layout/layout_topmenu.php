<ul class="top-menu-list">
<?php
//_______________DETECT DEVICES__________________//

$tablet_browser = 0;
$mobile_browser = 0;

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {$tablet_browser++;}if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {$mobile_browser++;}
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {$mobile_browser++;}
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array('w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac', 'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno', 'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-', 'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-', 'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar', 'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-', 'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp', 'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-');
if (in_array($mobile_ua, $mobile_agents)) {$mobile_browser++;}
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera mini') > 0) {$mobile_browser++;
//Check for tablets on opera mini alternative headers //
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {$tablet_browser++;}}if ($tablet_browser > 0) {
  //  $GLOBALS['mob_vibor']= 1; do something for tablet devices print 'is tablet';

$mob_vibor=1;

} else if ($mobile_browser > 0) { MG::set('mob_vibor',1)  ; // do something for mobile devices print 'is mobile';
    // $GLOBALS['mob_vibor'] = 1;
$mob_vibor=1;

} else {
    // $GLOBALS['mob_vibor'] = 0;
$mob_vibor=0;

    // do something for everything else print 'is desktop';
} //_______________END DETECTING DEVICES__________________//

/*echo '#1laut#';
    print_r($mob_vibor);
      echo '#2#';*/


foreach($data['pages'] as $page):
  if($mob_vibor=="1"){
  if($page['id']=="127"){continue;}
  }else{
  if($page['id']=="0"){continue;}
  }

  if($page['invisible']=="1"){continue;}

  if(URL::getUrl()==$page['link']||URL::getUrl()==$page['link'].'/'){$active = 'active';} else {$active = '';}
    if(isset($page['child'])):
   /** если все вложенные страницы неактивны, то не создаем вложенный список UL */ $slider = 'slider'; $noUl = 1; foreach($page['child'] as $pageLevel1){$noUl *= $pageLevel1['invisible']; } if($noUl){$slider='';}?>

             <li class="<?php echo $slider?> <?php echo $active?>">
          
             <a class="twocolor" href="<?php echo $page['link']; ?>">

          <?php echo MG::contextEditor('page', $page['title'], $page["id"], "page"); ?>

      </a>
     	<?php  if($noUl){$slider=''; continue;} ?>

      <ul class="sub_menu">
          <?php foreach($page['child'] as $pageLevel1):
        if($pageLevel1['invisible']=="1"){continue;}
            if(isset($pageLevel1['child'])):
         /** если все вложенные страницы неактивны, то не создаем вложенный список UL */ $slider = 'slider'; $noUl = 1; foreach($pageLevel1['child'] as $pageLevel2){$noUl *= $pageLevel2['invisible']; } if($noUl){$slider='';}?>

                  <li class="<?php echo $slider?> <?php echo $active?>">
                      <div class="slider_btn "></div>
                    <a class="twocolor" href="<?php echo $pageLevel1['link']; ?>">

              <?php echo MG::contextEditor('page', $pageLevel1['title'], $pageLevel1["id"], "page"); ?>

          </a>
            <?php  if($noUl){$slider=''; continue;} ?>

                      <ul class="sub_menu">
                      <?php foreach($pageLevel1['child'] as $pageLevel2):?>
                      <?php if($pageLevel2['invisible']=="1"){continue;}?>
                            <li class="<?php echo $active?>">

                                <a class="twocolor" href="<?php echo $pageLevel2['link']; ?>">
                                <?php echo MG::contextEditor('page', $pageLevel2['title'], $pageLevel2["id"], "page");?>
                               </a>

                            </li>

                      <?php endforeach;?>
                      </ul>

                  </li>
                <?php else:?>
                <li class="<?php echo $active?>">
                  <a class="twocolor" href="<?php echo $pageLevel1['link']; ?>">

              <?php echo MG::contextEditor('page', $pageLevel1['title'], $pageLevel1["id"], "page");  ?>

          </a>
                </li>
       <?php
       endif;
       endforeach;
           ?>
          </ul>
      </li>
    <?php else:?>
    <li class="<?php echo $active?>">
      <a class="twocolor" href="<?php echo $page['link']; ?>">
       <?php echo MG::contextEditor('page', $page['title'], $page["id"], "page"); ?>
    </a>
    </li>
    <?php endif;?>
<?php endforeach;?>
</ul>
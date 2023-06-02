
<?php
/**
 * Файл template.php является каркасом шаблона, содержит основную верстку шаблона.
 *
 *
 *   Получить подробную информацию о доступных данных в массиве $data, можно вставив следующую строку кода в верстку файла.
 *   <code>
 *    <?php viewData($data); ?>
 *   </code>
 *
 *   Также доступны вставки, для вывода верстки из папки layout
 *   <code>
 *      <?php layout('cart'); ?>      // корзина
 *      <?php layout('auth'); ?>      // личный кабинет
 *      <?php layout('widget'); ?>    // виджиеы и коды счетчиков
 *      <?php layout('compare'); ?>   // информер товаров для сравнения
 *      <?php layout('content'); ?>   // содержание открытой страницы
 *      <?php layout('leftmenu'); ?>  // левое меню с категориями
 *      <?php layout('topmenu'); ?>   // верхнее горизонтаьное меню
 *      <?php layout('contacts'); ?>  // контакты в шапке
 *      <?php layout('search'); ?>    // форма для поиска
 *      <?php layout('content'); ?>   // вывод контента сгенерированного движком
 *   </code>
 *   @author Авдеев Марк <mark-avdeev@mail.ru>
 *   @package moguta.cms
 *   @subpackage Views
 *
*$x=PROTOCOL.'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
*echo $x;
*/
?>

<!DOCTYPE html>
<html>
  <head>
<meta name="yandex-verification" content="fd6c904da7f5597a" />
    <?php

 mgMeta();

    ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="cmsmagazine" content="e43c9fcdf582574b78a64d24365e6e0d" />
    <meta name="yandex-verification" content="fd6c904da7f5597a" />





    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php mgAddMeta('<script type="text/javascript" src="'.PATH_SITE_TEMPLATE.'/js/script.js"></script>');?>

<?php
 echo '<link  href="'.PATH_SITE_TEMPLATE.'/css/swip_min.css"   rel="stylesheet" type="text/css" />';
?>
<?php
 echo '<link  href="'.PATH_SITE_TEMPLATE.'/css/style.css" id="LMN"  rel="stylesheet" type="text/css" />';
?>
  <?php echo'<script type="text/javascript" src="'.PATH_SITE_TEMPLATE.'/js/swiper-bundle.min.js"></script>';?>

<script type="text/javascript">

function txtv(){

    document.getElementById("ftdiv").style.display="none";
   document.getElementById("txdiv").style.display="block";
   document.getElementById("idtxtv").style.display="none";
   document.getElementById("idftv").style.display="block";
 }

function ftv(){


      document.getElementById("ftdiv").style.display="block";
      document.getElementById("txdiv").style.display="none";
      document.getElementById("idtxtv").style.display="block";
      document.getElementById("idftv").style.display="none";}


function mobE(){
var glbstl=document.getElementById('LMN');
var n=0;

if(x320_340.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/320_340.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x340_360.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/340_360.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x360_375_390.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/360_375_390.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}
if(x360_375_512.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/360_375_512.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x360_375.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/360_375.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x375_380.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/375_380.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x384_389.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/384_389.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x390_411.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/390_411.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x411_440.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/411_440.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x440_480.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/440_480.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x480_500.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/480_500.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x500_533.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/500_533.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x533_580.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/533_580.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}


if(x580_600.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/580_600.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}


if(x600_630.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/600_630.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x630_680.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/630_680.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x730_750.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/730_750.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x768_800.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/768_800.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}



if(x960_990.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/960_990.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x800_950.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/800_950.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x960_990.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/960_990.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x1024_1280.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/1024_1280.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x1280_1350.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/1280_1350.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x1360_1440.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/1360_1440.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(x1440_3000.matches){
    glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/1440_3000.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
n=1;
return;
}else{n=0;}

if(n===0){
   glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/1440_3000.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');

}

}//end func
var x1440_3000= window.matchMedia("only screen and (min-width:1440px) and (max-width:4000px)  ");
var x1360_1440= window.matchMedia("only screen and (min-width:1360px) and (max-width:1439px)  ");
var x1280_1350= window.matchMedia("only screen and (min-width:1280px) and (max-width:1349px)  ");
var x1024_1280= window.matchMedia("only screen and (min-width:1000px) and (max-width:1278px)  ");
var x960_990= window.matchMedia("only screen and (min-width:960px) and (max-width:990px)  ");
var x800_950= window.matchMedia("only screen and (min-width:800px) and (max-width:950px)  ");
var x768_800= window.matchMedia("only screen and (min-width:760px) and (max-width:799px)  ");
var x730_750= window.matchMedia("only screen and (min-width:700px) and (max-width:750px)  ");
var x630_680= window.matchMedia("only screen and (min-width:630px) and (max-width:681px)  ");
var x600_630= window.matchMedia("only screen and (min-width:600px) and (max-width:629px)  ");
var x580_600= window.matchMedia("only screen and (min-width:580px) and (max-width:599px)  ");
var x533_580= window.matchMedia("only screen and (min-width:533px) and (max-width:578px)  ");
var x500_533= window.matchMedia("only screen and (min-width:500px) and (max-width:532px)  ");
var x480_500= window.matchMedia("only screen and (min-width:480px) and (max-width:499px)  ");
var x440_480= window.matchMedia("only screen and (min-width:440px) and (max-width:479px)  ");
var x411_440= window.matchMedia("only screen and (min-width:411px) and (max-width:439px)  ");
var x390_411= window.matchMedia("only screen and (min-width:390px) and (max-width:410px)  ");
var x384_389= window.matchMedia("only screen and (min-width:381px) and (max-width:389px)  ");
var x375_380= window.matchMedia("only screen and (min-width:375px) and (max-width:380px)  ");
 var x360_375= window.matchMedia("only screen and (min-width:360px) and (max-width:374px) ");
 var x360_375_512= window.matchMedia("only screen and (min-width:360px)   and (max-width:374px) and (max-height: 641px)");
 var x360_375_390= window.matchMedia("only screen and (min-width:360px) and (max-width:374px)  and (max-height: 391px)");
var x340_360 = window.matchMedia("only screen and (min-width:340px) and (max-width:359px)  ");
var x320_340 = window.matchMedia("only screen and (min-width:319px) and (max-width:339px)  ");
//myFunction(x) // Вызов функции прослушивателя во время выполнения
x1440_3000.addListener(mobE);
x1360_1440.addListener(mobE);
x1280_1350.addListener(mobE);
x1024_1280.addListener(mobE);
x960_990.addListener(mobE);
x800_950.addListener(mobE);
x768_800.addListener(mobE);
x730_750.addListener(mobE);
x630_680.addListener(mobE);
x600_630.addListener(mobE);
x580_600.addListener(mobE);
x533_580.addListener(mobE);
x500_533.addListener(mobE);
x480_500.addListener(mobE);
x440_480.addListener(mobE);
x411_440.addListener(mobE);
x390_411.addListener(mobE);
x384_389.addListener(mobE);
x375_380.addListener(mobE);
x360_375.addListener(mobE);
x360_375_512.addListener(mobE);
x360_375_390.addListener(mobE);
x340_360.addListener(mobE);
x320_340.addListener(mobE);

//x630_700.addListener(mobE);
mobE();
console.log("work  ", document.getElementById('LMN2').href);
</script>


<?php echo '<link href="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.css" rel="stylesheet" />';?>
<?php echo '<link  href="'.PATH_SITE_TEMPLATE.'/css/filtr.css" id="LMN1" rel="stylesheet" type="text/css" />';?>

<?php echo '<script type="text/javascript" src="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.js"></script>';?>






  </head>

<?php //_______________DETECT DEVICES__________________//
  $tablet_browser = 0;
  $mobile_browser = 0;
  if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) { $tablet_browser++; } if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) { $mobile_browser++; }
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) { $mobile_browser++; } $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
 $mobile_agents = array( 'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac', 'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno', 'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-', 'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-', 'newt','noki','palm','pana','pant','phil','play','port','prox', 'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar', 'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-', 'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp', 'wapr','webc','winw','winw','xda ','xda-');
 if (in_array($mobile_ua,$mobile_agents)) { $mobile_browser++; }
 if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) { $mobile_browser++;
//Check for tablets on opera mini alternative headers //
$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
 if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) { $tablet_browser++; } } if ($tablet_browser > 0) {
   $mob_vibor=1; // do something for tablet devices print 'is tablet';
} else if ($mobile_browser > 0)
{   $mob_vibor=1; // do something for mobile devices print 'is mobile';
} else
{
   $mob_vibor=0;
     // do something for everything else print 'is desktop';
} //_______________END DETECTING DEVICES__________________//

if ( $mob_vibor=0) {

print "<div id=\"BlockCatTov\" class=\"wrap--BlockCatTov\">";
                /*  <!-- Вывод верхнего меню материалов, покрытий, объектов-->*/


 echo "           <div class=\"col1\">
                <div class=\"cattitle\" id=\"ctt1\"> Материалы Элакор™ </div>

                   <ul class=\"submenu\">

                                <li>
                                <a  href=\"https://elakor-floor.ru/materialy/grunty-gruntovki\" title=\"Все грунты и грунтовки\" onclick=\"mobmenGrid();\"> Грунты, грунтовки</a>
                               </li>
                                   <li><a  href=\"https://elakor-floor.ru/materialy/laki\" title=\"Все лаки\" onclick=\"mobmenGrid();\">Лаки</a>
                                  </li>
                                        <li> <a  href=\"https://elakor-floor.ru/materialy/emali-kraski\" title=\"Все эмали и краски\" onclick=\"mobmenGrid();\">
                                        Эмали, краски</a>
                                        </li>
                                            <li><a  href=\"https://elakor-floor.ru/materialy/nalivnye-poly\" title=\"Все наливные полы\" onclick=\"mobmenGrid();\">Наливные полы</a>
                                            </li>
                                                <li><a  href=\"https://elakor-floor.ru/materialy/shpatlevki\" title=\"Все шпатлевки\" onclick=\"mobmenGrid();\">Шпатлевки</a>
                                                </li>

                  </ul>
                <div class=\"others\" id=\"otr1\"><a href=\"https://elakor-floor.ru/materialy\" title=\"Все материалы\" onclick=\"mobmenGrid();\">Все материалы</a></div>
            </div>";





echo "            <div class=\"col2\">
                <div class=\"cattitle\" id=\"ctt2\">Покрытия</div>
                <ul class=\"submenu\">
                                <li><a  href=\"https://elakor-floor.ru/pokrytiya/okrasochnye-poly\" title=\"Все полы окрасочного типа (тонкие полы)\" onclick=\"mobmenGrid();\">Окрасочные полы</a>
                                </li>
                                    <li><a  href=\"https://elakor-floor.ru/pokrytiya/nalivnye-poly\" title=\"Все наличные полы - покрытия (классические)\" onclick=\"mobmenGrid();\">Наливные полы</a>
                                   </li>
                                      <li><a  href=\"https://elakor-floor.ru/pokrytiya/napolnennye-pokrytiya\" title=\"Наполненные наливные полы (толстые)\" onclick=\"mobmenGrid();\">Наполненные</a>
                                      </li>
                                        <li><a  href=\"https://elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya\" title=\"Специальные полимерные покрытия\" onclick=\"mobmenGrid();\">Спец.полимерные</a>
                                        </li>
                                            <li><a  href=\"https://elakor-floor.ru/pokrytiya/propitki-dlya-betona\" title=\"Все пропитки для бетона\" onclick=\"mobmenGrid();\">Пропитки  бетона </a>
                                            </li>
               </ul>
                <div class=\"others\"
                <div class=\"others\" id=\"otr2\"><a href=\"https://elakor-floor.ru/pokrytiya\" title=\"Все покрытия\" onclick=\"mobmenGrid();\">Все покрытия</a></div>
            </div>";





echo "            <div class=\"col3\">
                <div class=\"cattitle\" id=\"ctt3\">Объекты </div>
                   <ul class=\"submenu\">
                        <li><a  href=\"https://elakor-floor.ru/obekty/poly-dlya-garaja\" title=\"Полы для гаражей  паркингов, СТО, моек\" onclick=\"mobmenGrid();\">Полы для авто</a>
                        </li>
                            <li><a  href=\"https://elakor-floor.ru/obekty/poly-dlya-sklada\" title=\"Полы для складоы, хранилищ, подсобок\" onclick=\"mobmenGrid();\">Полы для склада</a>
                             </li>
                                <li><a  href=\"https://elakor-floor.ru/obekty/poly-dlya-tseha\" title=\"Полы для цехов, производств, ферм\" onclick=\"mobmenGrid();\">Полы для цеха</a>
                                </li>
                                   <li><a  href=\"https://elakor-floor.ru/obekty/poly-dlya-ofisa\" title=\"Полы для офисных, административных помещений, медучреждений\" onclick=\"mobmenGrid();\">Полы для офиса</a>
                                   </li>
                                        <li><a  href=\"https://elakor-floor.ru/obekty/poly-dlya-magazina\" title=\"Полы для торговых центров, магазинов\" onclick=\"mobmenGrid();\">Для магазина</a>
                                        </li>
                  </ul>
                <div class=\"others\" id=\"otr3\"><a href=\"https://elakor-floor.ru/obekty\" title=\"Все объекты\" onclick=\"mobmenGrid();\">Все объекты</a></div>
            </div>";
            if(!(URL::isSection(null) || URL::isSection('index')) && (MG::get('controller')=='controllers_catalog' || MG::get('controller')=='controllers_product')){[brcr];}


echo "</div>


</header>";

echo "<table id=\"bl_cont_centr\" class=\"tblcentr\">
<tr>
<td class=\"tdleft\"><!--левое меню-->
 <div class=\"downprice\"><a class=\"twocolor\" href=\"/prays-list\" title=\"Полный прайс лист\">Полный прайс лист</a></div>
<div  class=\"leftblock\"> </div>
<div  class=\"outleftblock\"> </div>
 <div class=\"leftmenu\">";
                   echo " layout('topmenu');
                        <ul>

                            //\$subpages = MG::get('pages')->getPageByUrl('index');
                            \$subpages = MG::get('pages')->getHierarchyPage(7);
                            \$current_url = URL::getUrl();
                            foreach (\$subpages as \$subpage) {
                              if(\$current_url==\$subpage['link']||\$current_url==\$subpage['link'].'/'){\$subactive = 'active';} else {\$subactive = '';}
                              echo '<li class=\"'.\$subactive.'\"><a class=\"twocolor\" title=\"'.\$subpage['title'].'\" href=\"'.\$subpage['link'].'\">'.\$subpage['title'].'</a></li>';
                            }
                            //viewData(\$subpages);

                        </ul>
                        [blog-categories]
                    </div>
</td><!--левое меню-->


<td class=\"content\"> [brcr] <!--content-->
 <main <?php if (!(MG::get('controller')==\"controllers_catalog\")) echo 'style=\"width: 100%; display:block;width: 100%; \"'; >
                      <?php \$main = MG::get('pages')->getPageByUrl('index');
                      if (!(isset(\$_GET['applyFilter']) && \$_GET['applyFilter'] != '') && (URL::isSection(null) || URL::isSection('index')))
                      echo \$main['html_content'];
                      else layout('content');
                  </main><!-- .content -->

</td><!--content-->
if(MG::get('controller')==\"controllers_catalog\") {
<td class=\"tdfltr\"><!--фильтр-->
<div class=\"outfilter\">
<div class=\"flowfilter\">

 <div id=\"ffltr\">


                            <div class=\"filter\">
                                <div class=\"filtitle\"> Отметьте свои приоритеты для быстрого подбора нужного вам варианта.</div>

                                  <?php if(MG::get('controller')==\"controllers_catalog\"|| MG::get('controller')==\"controllers_product\" ) :
                                  <div class=\"filter-block \">filterCatalog();</div>
                                endif;


                            <div class=\"btnfltr\">
                            <button class=\"button angrd bt_podbor\">Подобрать</button>
                            <button class=\"button flbtBF bt_all\">Больше фильтров</button>
                            <button class=\"button flbtCLR bt_resets\">Сбросить фильтры</button>
                            </div>
                            </div><!--filter-->
</div>
</div>
</div><!--ffltr-->
 }else{

<td class=\"tdnofltr\"><!--фильтр-->
 }

</td><!--фильтр-->
</tr>
</table>

";

/*    <!-- header .container -->*/



echo "
  <div id=\"main_futer\" class=\"outfooter\">
      <footer class=\"footer\">

          <div class=\"ftleft\">
              <p>
                  Телефон отдела продаж:<br>
                 <a href=\"tel:+79851442162\"> +7-985-144-21-62</a><br>
                  пн-пт 9:00-18:00
              </p>
          </div>
          <div class=\"ftright\">
              <p>ИП Лабудин Андрей Валентинович,<br>105122, Россия, г. Москва</p>
          </div>
          <div class=\"ftcopyr\">2016 © ИП Лабудин А.В.<p style=\"margin: 10px 0;\">Все <a href=\"http://teohim.ru/nalivnye/\" target=\"_blank\" title=\"полимерные наливные полы\">полимерные наливные полы</a> от производителя</p><br>
            <p><a href=\"https://elakor-floor.ru/politika-konfidentsialnosti\" target=\"_blank\" title=\"Согласие на обработку персональных данных\">Политика конфиденциальности</a></p><?php layout('widget'); </div>
      </footer><!-- .footer -->
  </div><!-- outfooter -->
<div class=\"downmenu\">

<table class=\"tdownmenu\">



<td class=\"twocolorH\"> <a href=\"/\">Главная</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/about-\">О компании</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/contacts\">Контакты</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/dostavka\">Доставка и оплата</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/zakazat-konsultatsiyu\">Заявка</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/sertifikaty\">Сертификаты</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/protokoly-ispytaniy\">Протоколы испытаний</a></td>
</tr>
<tr>
<td class=\"twocolorH rw2\">&nbsp&nbsp;&nbsp;</td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/prays-list\">Прайс-лист</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/obraztsy-betonov\">Образцы бетонов</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/tablitsa-tsvetov\">Таблица цветов</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/poly/promyshlennye-poly\">Промышленные полы</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/poly/betonnye-poly\">Бетонные полы</a></td>
<td class=\"twocolorH\"> <a href=\"https://elakor-floor.ru/poly/polimernye-poly\">Полимерные полы</a></td>


</table>

</div>

  </div>";/*<!-- .wrapper -->*/


















}







?>


 <body>



 <div class="topic__tmplgrid">
                      <div class="topic__Logo_grid"> <a href="/" title="Элакор" class="logo"><span class="cred">Элакор</span><sup><span class="tm">&trade;</span></sup></a>
                      </div>

                      <div class="topic__phone__grid"> <a href="tel:+79851442162"> +7&nbsp; (985)&nbsp; 144-21-62</a>
                      </div>
                      <div class="topic__outcart__grid"><?php layout('cart'); ?></div>
<div class="topic__callback__grid">

                       [back-ring]
 </div>

<div class="topic__txttop__grid">Наливные полы:<br />материалы, покрытия.<br />Удобный выбор для вашего объекта</div>

 <div class="pano-container">
 <div class="pano-one"><img id="imgB" src="https://elakor-floor.ru/uploads/imgshrfrm.jpg" title="пано" /></div>

 <div class="pano-two"><img id="img2" src="https://elakor-floor.ru/uploads/imgshrfrm.jpg" title="пано" /></div>


 </div>










<div class="tdintro--mobmen" onclick="Zakkons();" >
<div class="hamburger-menu">

<a href="#openModal"><img src="/uploads/menu.png" alt="мобильное меню" /></a>
</div>

</div>



<div class="fltrIco">
<a href="#openfltrIco"><img src="/uploads/filtr_ico.png" alt="Фильтр" class="imgflico"/></a>
</div>

<div id="openfltrIco" class="modalfltrIco">
<div>
<a href="#closefltrIco" title="Закрыть" class="closelfltrIco">X</a>
<h2>Выбор материалов по фильтру</h2>

 <div id="modalffltr">



                                <div class="mod_filtitle"> Отметьте свои приоритеты для быстрого подбора нужного вам варианта.</div>


                                  <div class="mod_filter-block "><?php filterCatalog(); ?></div>



                            <div class="mod_btnfltr">
                            <button class="button angrd bt_podbor">Подобрать</button>
                            <button class="button flbtBF bt_all">Больше фильтров</button>
                            <button class="button flbtCLR bt_resets">Сбросить фильтры</button>
                            </div>

</div><!--ffltr-->

</div>

	</div>





<div class="topic__goteo__grd">

<button class="banTeoPdp"  onclick="ZamLink(1)"> <span style="text-decoration: underline;text-decoration-color:#09edf3;text-decoration-style:double;"> Перейти на официальный сайт производителя<br></span>
материалов "Элакор"  - ООО "ТэоХим".<br>
ЦЕНЫ Производителя!</button>

</div>




</div><!--topic__tmplgrid-->















<main>
<div class="main__tmplgrd">

<footer>

                <div class="footer__grft_outfuter">

                         <div class="ftleft">
                             <p class="cltlf">
                             Телефон отдела продаж:<br>
                             <a href="tel:+79851442162"> +7-985-144-21-62</a><br>
                             пн-пт 9:00-18:00
                             </p>
                        </div>
                          <div class="ftright">
                              <p class="ftlab">ИП Лабудин Андрей Валентинович,<br>105122, Россия, г. Москва,<br> ул. Никитинская,дом 31, корпус 2, квартира 89</p>
                          </div>
                            <div class="ftcopyr"><p class="clip">2016 © <br>ИП Лабудин А.В.</p><br><br><br><br> </div>

<div class="lteo"><p class="ftlt">Все <a href="http://teohim.ru/nalivnye/" target="_blank" title="полимерные наливные полы">полимерные                                                  наливные полы</a> от производителя</p><br><br><br></div>
                           <div class="plz"><p class="clplz"><a href="https://moguta.elakor-floor.ru/politika-konfidentsialnosti" target="_blank" title="Согласие на обработку персональных данных">Политика конфиденциальности</a></p></div>

<?php                            layout('widget'); ?>








<div class="wrp__downmenu__grid">

<div class="downmenu__grid__box">
<div class="downm__grd__main1"> <a href="/">Главная</a></div>
<div class="downm__grd__about1"> <a href="https://moguta.elakor-floor.ru/about-">О компании</a>
</div>
<div class="downm__grd__cont1"> <a href="https://moguta.elakor-floor.ru/contacts">Контакты</a>
</div>
<div class="downm__grd__deliv1"> <a href="https://moguta.elakor-floor.ru/dostavka">Доставка и оплата</a>
</div>
<div class="downm__grd__zakaz1"> <a href="https://moguta.elakor-floor.ru/zakazat-konsultatsiyu">Заявка</a>
</div>
<div class="downm__grd__sert1"> <a href="https://moguta.elakor-floor.ru/sertifikaty">Сертификаты</a>
</div>
<div class="downm__grd__ispit1"> <a href="https://moguta.elakor-floor.ru/protokoly-ispytaniy">Протоколы испытаний</a>
</div>



<div class="downm__grd__price2"> <a href="https://moguta.elakor-floor.ru/prays-list">Прайс-лист</a></div>
<div class="downm__grd__obrz2"> <a href="https://moguta.elakor-floor.ru/obraztsy-betonov">Образцы бетонов</a></div>
<div class="downm__grd__colr2"> <a href="https://moguta.elakor-floor.ru/tablitsa-tsvetov">Таблица цветов</a></div>
<div class="downm__grd__promf2"> <a href="https://moguta.elakor-floor.ru/poly/promyshlennye-poly">Промышленные полы</a></div>
<div class="downm__grd__betf2"> <a href="https://moguta.elakor-floor.ru/poly/betonnye-poly">Бетонные полы</a></div>
<div class="downm__grd__polif2"> <a href="https://moguta.elakor-floor.ru/poly/polimernye-poly">Полимерные полы</a></div>


</div>

</div><!--wrp__downmenu__grid-->
</div><!--footer__grft_outfuter-->


</footer>


	<div id="openModal" class="modalDialog">

	    <div>

	        <a href="#close" title="Закрыть" class="close">X</a>



<div class="mbm__tmpl" id="mbm">
<div class="mbcol1 mbcol1_2"><a href="https://moguta.elakor-floor.ru/about-">О компании</a></div>

<div class="mbcol1 mbcol1_3"><a href="https://moguta.elakor-floor.ru/contacts">Контакты</a></div>

<div class="mbcol1 mbcol1_4"><a href="https://moguta.elakor-floor.ru/dostavka">Доставка и оплата</a></div>

<div class="mbcol1 mbcol1_5"><a href="https://moguta.elakor-floor.ru/zakazat-konsultatsiyu">Заявка</a></div>

<div class="mbcol1 mbcol1_6"><a href="https://moguta.elakor-floor.ru/sertifikaty">Сертификаты</a></div>

<div class="mbcol1 mbcol2_1"><a href="https://moguta.elakor-floor.ru/protokoly-ispytaniy">Протоколы испытаний</a></div>

<div class="mbcol2_2"><a class="mbcol1" href="https://moguta.elakor-floor.ru/prays-list">Прайс-лист</a></div>

<div class="mbcol1 mbcol2_3"><a href="https://moguta.elakor-floor.ru/obraztsy-betonov">Образцы бетонов</a></div>

<div class="mbcol1 mbcol2_4"><a href="https://moguta.elakor-floor.ru/tablitsa-tsvetov">Таблица цветов</a></div>

<div class="mbcol1 mbcol2_5"><a href="https://moguta.elakor-floor.ru/poly/promyshlennye-poly">Промышленные полы</a></div>

<div class="mbcol1 mbcol2_6"><a href="https://moguta.elakor-floor.ru/poly/betonnye-poly">Бетонные полы</a></div>

<div class="mbcol1 mbcol3_1"><a href="https://moguta.elakor-floor.ru/poly/polimernye-poly">Полимерные полы</a></div>
</div>

	    </div>

	</div>
<div class="circle"><a class="downprice" href="/prays-list" title="Полный прайс лист">Полный прайс лист</a></div>




 <div class="leftmenu">
                      <?php layout('topmenu'); ?>
                        <ul>
                        <?php
                            //$subpages = MG::get('pages')->getPageByUrl('index');
                            $subpages = MG::get('pages')->getHierarchyPage(7);
                            $current_url = URL::getUrl();
                            foreach ($subpages as $subpage) {
                              if($current_url==$subpage['link']||$current_url==$subpage['link'].'/'){$subactive = 'active';} else {$subactive = '';}
                              echo '<li class="'.$subactive.'"><a class="twocolor" title="'.$subpage['title'].'" href="'.$subpage['link'].'">'.$subpage['title'].'</a></li>';
                            }
                            //viewData($subpages);
                        ?>
                        </ul>
                        [blog-categories]
</div><!--div class="leftmenu"-->



<div class="col1" style="display:none"></div>
<div class="col2" style="display:none"></div>
<div class="col3" style="display:none"></div>
<div class="main__tmplgrid__contnt">


                      <?php $main = MG::get('pages')->getPageByUrl('index');
                      if (!(isset($_GET['applyFilter']) && $_GET['applyFilter'] != '') && (URL::isSection(null) || URL::isSection('index')))
                      echo $main['html_content'];
                      else layout('content'); ?><!-- .content -->

</div><!--content-->

 <?php
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];


if($url=='https://moguta.elakor-floor.ru/') { ?>

 <div class="main__tmplgrid__filtr">

 <div id="ffltr">



                                <div class="filtitle"> Отметьте свои приоритеты для быстрого подбора нужного вам варианта.</div>

                                  <?php if(MG::get('controller')=="controllers_catalog"|| MG::get('controller')=="controllers_product" ) : ?>
                                  <div class="filter-block "> <?php filterCatalog(); ?></div>
                                <?php endif; ?>


                            <div class="btnfltr">
                            <button class="button angrd bt_podbor">Подобрать</button>
                            <button class="button flbtBF bt_all">Больше фильтров</button>
                            <button class="button flbtCLR bt_resets">Сбросить фильтры</button>
                            </div>

</div><!--ffltr-->


<?php }else{ ?>

<div class="tdnofltr">  </div><!--нет фильтр-->
<?php } ?>








        </div><!--main__tmplgrid__filtr-->




</div>
</main>














<!--<div  ID="InHtBl" class="wrap__PUP__grid">
<div class="wrap__PUP__grid__wind">
 <button id="GoTeor" onclick="ZamLink(0)">
      <div id="modalZ" class="modalPUP">
<p class="PUPTeoPdp"><span style="text-decoration: underline;text-decoration-color:#09edf3;text-decoration-style:double;"> Перейти на официальный сайт производителя<br></span>
материалов "Элакор"  - ООО "ТэоХим".<br>
ЦЕНЫ Производителя!</p>


</div>
</button>
</div>
 <div class="wrap__PUP__grid__Closer" >
    <button class="closePUP" id="PUPclose" title="Закрыть" onclick="closePup()">Х</button>

  </div>
</div>
-->

    <script type="text/javascript">

 window.onload = function() {
     //shir()shir()shir()shir()shir()
     function shir(){
var i;
  var wdth=document.documentElement.clientWidth;

    var rzm = [320,340,360,375,384,390,411,440,480,500,533,580,598,600,630,730,768,800,960,1024,1280,1360,1440,1600,1900,2000,2500,3000];
                for (i = 0; i < rzm.length; i++) {

                if(rzm[i]==wdth){wdth=rzm[i]; break;}
 if (i+1<= rzm.length){if(wdth > rzm[i] && wdth < rzm[i+1]){wdth=rzm[i]; break;}}
                }
  console.log("workwdth  ",wdth);
return wdth;

}//shir()shir()shir()shir()shir()shir()shir()shir()shir()shir()shir()

function prcset()
{
     console.log("var onclick b ", b);


                var elem = document.getElementsByClassName('ohd');
                var stl = "display:block;";
                for (var i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
                 elem = document.getElementsByClassName('zghdTbl');
                 stl = "display:block;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor


                elem = document.getElementsByClassName('zghd');
                stl = "";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

                 elem = document.getElementsByClassName('cell');
                 stl = "";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
                 elem = document.getElementsByClassName('zghd_lp');
                stl = "display:none;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

 var arr=[{wdt:'320',shad:'275',row:'268',bl_mat:'268',pr_anot:'275',alink:'4'},{wdt:'340',shad:'294',row:'284',bl_mat:'289',pr_anot:'298',alink:'3'},{wdt:'360',shad:'306',row:'290',bl_mat:'299',pr_anot:'309',alink:'3'},{wdt:'375',shad:'333',row:'308',bl_mat:'326',pr_anot:'337',alink:'3'},{wdt:'384',shad:'344',row:'344',bl_mat:'336',pr_anot:'349',alink:'3'},{wdt:'390',shad:'354',row:'346',bl_mat:'346',pr_anot:'356',alink:'3'},{wdt:'411',shad:'375',row:'368',bl_mat:'368',pr_anot:'373',alink:'3'},{wdt:'440',shad:'408',row:'402',bl_mat:'402',pr_anot:'406',alink:'3'},{wdt:'480',shad:'438',row:'429',bl_mat:'429',pr_anot:'438',alink:'3'},{wdt:'500',shad:'465',row:'456',bl_mat:'456',pr_anot:'465',alink:'3'},{wdt:'533',shad:'480',row:'471',bl_mat:'471',pr_anot:'480',alink:'3'},{wdt:'580',shad:'528',row:'519',bl_mat:'519',pr_anot:'528',alink:'3'},{wdt:'598',shad:'528',row:'519',bl_mat:'519',pr_anot:'528',alink:'3'},{wdt:'600',shad:'557',row:'548',bl_mat:'548',pr_anot:'557',alink:'3'},{wdt:'630',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'730',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'768',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'800',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'960',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'1024',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'1280',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'1360',shad:'785',row:'621',bl_mat:'851',pr_anot:'543'},{wdt:'1440',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'1600',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'1900',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'2000',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'2500',shad:'',row:'',bl_mat:'',pr_anot:''},{wdt:'3000',shad:'',row:'',bl_mat:'',pr_anot:''}];



   for (i = 0; i < arr.length; i++) {
               if(arr[i].wdt==wdth){

 var arshad =arr[i].shad;
 var arrow =arr[i].row;
 var arbl_mat =arr[i].bl_mat;
 var arpr_anot =arr[i].pr_anot;
 var aalink=arr[i].alink;
                   break;}
                } //endfo

 elem = document.getElementsByClassName('shad');
 stl = "width:" + arshad + "px!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

 elem = document.getElementsByClassName('row');
 stl="width:" + arrow + "px!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor


 elem =  document.getElementsByClassName('bl_mat');
 stl="width:" + arbl_mat + "px!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }



 elem =  document.getElementsByClassName('pr_anot');
 stl="width:" + arpr_anot + "px!important;font-size:" + Math.round(arrow/34.72) + "px!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }

 elem =  document.getElementsByClassName('alnk');
 stl="font-size:" + aalink + "vw!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }

  elem =  document.getElementsByClassName('onz');
 stl="line-height: 19px!important;font-size:" + Math.round(arrow/34.72) + "px!important; width:" + Math.floor(arrow/3) + "px!important;display:block;line-height: 14px !important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }

var ohd=Math.floor(wdth/80);
if(ohd>5){ohd=5;}
  elem =  document.getElementsByClassName('ohd');
 stl="line-height: 19px!important;font-size:" +ohd +"vw; width:" + Math.floor(arrow/3) + "px!important;display:block;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }



 elem = document.getElementsByClassName('nw');
 stl = "font-size:"+ Math.round(arrow/34.72) + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;  }






  if(document.getElementsByClassName('lppl')[0]===null ||document.getElementsByClassName('lppl')[0]===undefined){console.log("fx plusnul ");}else{
 document.getElementsByClassName('lppl')[0].style = "display:block;";}

document.getElementsByClassName('lpmn')[0].style = "display:none;";

elem = document.getElementsByClassName('btgreenPrL');
stl = "position: relative; top: 1vw;left:" + Math.floor(wdth/26,66) + "vw;";
             for ( i = 0; i < elem.length; i++) {
             elem[i].style = stl;
             } //endfor
 elem = document.getElementsByClassName('lpmn');
stl = "position: fixed; top:" + (Number(wdth) + Number(wdth/1.77)) + "px!important;left:" + (Number(wdth) - Number(wdth/5.33)) +  "px;display:block;";
                for ( i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
 document.getElementsByClassName('lpmn')[0].style="display:none;";

wdth=shir();
if (wdth<=533){

 elem = document.getElementsByClassName('lppl');
stl = "position: fixed; top:" + (Number(wdth) + Number(wdth/1.77)) + "px!important;left:" + (Number(wdth) - Number(wdth/5.33)) +  "px;display:block;";
                for ( i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
}else{
     elem = document.getElementsByClassName('lppl');
stl = "position: fixed; top:307px!important;left:130px;display:block;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

}
var prn,cnt,q,i;
var arr=[{wdt:'320',kfwdth:'25',kffont:'12',per:'1'},{wdt:'340',kfwdth:'27',kffont:'12',per:'1'},{wdt:'360',kfwdth:'27',kffont:'12',per:'1'},{wdt:'375',kfwdth:'29',kffont:'12',per:'1'},{wdt:'384',kfwdth:'32',kffont:'12',per:'1'},{wdt:'390',kfwdth:'34',kffont:'12',per:'1'},{wdt:'411',kfwdth:'36',kffont:'14',per:'1'},{wdt:'440',kfwdth:'38',kffont:'14',per:'1'},{wdt:'480',kfwdth:'40',kffont:'14',per:'1'},{wdt:'500',kfwdth:'42',kffont:'14',per:'1'},{wdt:'533',kfwdth:'14',kffont:'14',per:'1'},{wdt:'580',kfwdth:'46',kffont:'14',per:'1'},{wdt:'598',kfwdth:'48',kffont:'14',per:'1'},{wdt:'600',kfwdth:'50',kffont:'14',per:'1'}];

wdth=shir();
console.log("ali  ",wdth );
   for (i = 0; i < arr.length; i++) {
               if(arr[i].wdt==wdth){

var kfwdth =arr[i].kfwdth;
var kffont =arr[i].kffont;
var peren =arr[i].per;
cnt=i;
console.log("exali  ", arr[i].kffont );
                   break;}
                }



if(peren==1){prn="normal";}else{prn="nowrap";}


elem = document.querySelectorAll('td.cell');
kffont =arr[cnt].kffont;
stl = "width:" +  kfwdth + "px!important;margin:0px!important;padding:0px!important;text-align: center;font-size:" + kffont + "px!important;white-space:" + prn + ";";
 q=0;
                for (i = 0; i < elem.length; i++) {
               q=q+1; if(q>6){q=0;}




stl = "width:" +  (Number(kfwdth) +Number(q*0.75) ) + "px!important;margin:0px!important;padding:0px!important;text-align: center;font-size:" + kffont + "px!important;";
elem[i].style = stl;

                } //endfor

elem = document.querySelectorAll('td.zghd');
kffont =arr[cnt].kffont;
stl = "width:" +  (Number(kfwdth)+Number(3)) + "px!important;margin:0px!important;padding:0px!important;text-align: center;font-size:" + kffont + "px!important;white-space:" + prn + ";";
 q=0;
                for (i = 0; i < elem.length; i++) {
               q=q+1; if(q>6){q=0;}

stl = "width:" +  (Number(kfwdth) +Number(q*1) ) + "px!important;margin:0px!important;padding:0px!important;text-align: center;font-size:" + kffont + "px!important;";
elem[i].style = stl;

                } //endfor
  elem = document.querySelectorAll('td.cell');
stl = "<td class=\"cell\" style=\"display:none!important;\">купить</td>"
var inhtml="купить";

                for (i = 0; i < elem.length; i++) {
   if(elem[i].innerHTML.length==6){
 elem[i].style="display:none!important;";
console.log(" elem[i].innerHTM",  elem[i].style  );

                     }}

}




// a.onclick  a.onclick  a.onclick ++++++++++++++++++++++++++++
 var a = document.getElementsByClassName('lppl')[0];
             console.log("var onclick a ", a);
            a.onclick=function(){
var i;
     var arr=[{wdt:'320',shad:'276',row:'271',bl_mat:'271',pr_anot:'270',alink:'3'},{wdt:'340',shad:'294',row:'284',bl_mat:'289',pr_anot:'298',alink:'5'},{wdt:'360',shad:'306',row:'290',bl_mat:'299',pr_anot:'309',alink:'5'},{wdt:'375',shad:'333',row:'308',bl_mat:'326',pr_anot:'337',alink:'5'},{wdt:'384',shad:'344',row:'344',bl_mat:'336',pr_anot:'349',alink:'5'},{wdt:'390',shad:'354',row:'346',bl_mat:'346',pr_anot:'356',alink:'5'},{wdt:'411',shad:'375',row:'368',bl_mat:'368',pr_anot:'373',alink:'5'},{wdt:'440',shad:'408',row:'402',bl_mat:'402',pr_anot:'406',alink:'5'},{wdt:'480',shad:'438',row:'429',bl_mat:'429',pr_anot:'438',alink:'5'},{wdt:'500',shad:'465',row:'456',bl_mat:'456',pr_anot:'465',alink:'5'},{wdt:'533',shad:'480',row:'471',bl_mat:'471',pr_anot:'480',alink:'5'},{wdt:'580',shad:'528',row:'519',bl_mat:'519',pr_anot:'528',alink:'5'},{wdt:'598',shad:'528',row:'519',bl_mat:'519',pr_anot:'528',alink:'5'},{wdt:'600',shad:'557',row:'548',bl_mat:'548',pr_anot:'557',alink:'5'},{wdt:'630',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'730',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'768',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'800',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'960',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'1024',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'1280',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'1360',shad:'785',row:'621',bl_mat:'851',pr_anot:'543',alink:''},{wdt:'1440',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'1600',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'1900',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'2000',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'2500',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''},{wdt:'3000',shad:'',row:'',bl_mat:'',pr_anot:'',alink:''}];
var wdth;
wdth=wdth=shir();
console.log("xali  ", wdth );
   for (i = 0; i < arr.length; i++) {
               if(arr[i].wdt==wdth){

 var arshad =arr[i].shad;
 var arrow =arr[i].row;
 var arbl_mat =arr[i].bl_mat;
 var arpr_anot =arr[i].pr_anot;
var aalink=arr[i].alink;
                   break;}
                }
               console.log("fx a ");
   var elem = document.getElementsByClassName('shad');
                var stl = "width:" + arshad + "px!important; font-size:1.8vw;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

elem = document.getElementsByClassName('bl_mat');
 stl = "width:" + arbl_mat + "px !important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
elem = document.getElementsByClassName('pr_anot');
 stl = "width:" +arpr_anot + "px!important;";
              for (i = 0; i < elem.length; i++) {
                  elem[i].style = stl;
              } //endfor
               console.log("priexali5  ", elem[0], stl);


                document.getElementsByClassName('lpmn')[0].style = "display:block;";

elem = document.getElementsByClassName('alnk');
 stl = "width:" + wdth*0.95 + "vw; font-size:" + wdth/80 + "vw !important;white-space: normal;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
 elem = document.getElementsByClassName('ohd');
stl = "display:none;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

elem = document.getElementsByClassName('zghd');
stl = "padding:2vw;font-size:4vw;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

elem = document.getElementsByClassName('cell');
stl = "padding:" + Math.floor(wdth/59) + "vw;font-size:" + Math.floor(wdth/18,8235) + "px; margin-left:-1vw";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

elem = document.getElementsByClassName('zghdTbl');
stl = "display:none;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

                //var tbl = document.getElementsByClassName('zghdTbl')[1];
                //let p;







var par = document.getElementsByClassName('onz');
stl = "width:" + arbl_mat + "px!important; font-size:"+ Math.floor(wdth/80) +";line-height:19px!important;";
                for (i = 0; i < elem.length; i++) {
                    par[i].style = stl;
                } //endfor


if(document.getElementsByClassName('clr')[0]===null ||document.getElementsByClassName('clr')[0]===undefined){




                var chld = '<div class="clr"></div><table class="zghdTbl_lp"><td class="zghd_lp">10-39кг</td><td class="zghd_lp">40-199кг</td><td class="zghd_lp"> 200-499кг</td><td class="zghd_lp"> 500-1тн</td><td class="zghd_lp"> 1-3тн</td><td class="zghd_lp">от 3тн</td></table>';

                for (i = 0; i < par.length; i++) {
                    par[i].insertAdjacentHTML('afterEnd', chld);
                }
}

elem = document.getElementsByClassName('btgreenPrL');
stl = "position: relative; top: 1vw;left:" + Math.floor(-wdth/11.428) + "vw;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor




//endfo

elem = document.getElementsByClassName('shad');
stl = "width:" + arshad + "px!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

elem = document.getElementsByClassName('row');
stl="width:" + arrow + "px!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor


elem =  document.getElementsByClassName('bl_mat');
stl="width:" + arbl_mat + "px!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }


elem =  document.getElementsByClassName('pr_anot');
stl="width:" + arpr_anot + "px!important;font-size:" + Math.round(arrow/34.72) + "px!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }
elem =  document.getElementsByClassName('alnk');
stl="font-size:" + aalink + "vw!important;";
  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }

par = document.getElementsByClassName('onz');
stl = "width:" + arbl_mat + "px!important; font-size:"+ Math.round(arrow/34.72) + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    par[i].style = stl;
                } //endfor

 elem = document.getElementsByClassName('nw');
 stl = "font-size:"+ Math.round(arrow/34.72) + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;  }




// celllcelllcelllcelllcelllcelllcelllcelllcelllcelllcelllcelllcelllcelll
elem = document.querySelectorAll('td.zghd_lp');

var prn,cnt,q,i;
var arr=[{wdt:'320',kfwdth:'41',kffont:'24',per:'1'},{wdt:'340',kfwdth:'44',kffont:'24',per:'1'},{wdt:'360',kfwdth:'44',kffont:'24',per:'1'},{wdt:'375',kfwdth:'48',kffont:'24',per:'1'},{wdt:'384',kfwdth:'54',kffont:'24',per:'1'},{wdt:'390',kfwdth:'50',kffont:'24',per:'1'},{wdt:'411',kfwdth:'56',kffont:'24',per:'1'},{wdt:'440',kfwdth:'62',kffont:'24',per:'1'},{wdt:'480',kfwdth:'66',kffont:'24',per:'1'},{wdt:'500',kfwdth:'68',kffont:'24',per:'1'},{wdt:'533',kfwdth:'70',kffont:'24',per:'1'},{wdt:'580',kfwdth:'74',kffont:'24',per:'1'},{wdt:'598',kfwdth:'76',kffont:'24',per:'1'},{wdt:'600',kfwdth:'78',kffont:'24',per:'1'}];

wdth=shir();
console.log("ali  ",wdth );
   for (i = 0; i < arr.length; i++) {
               if(arr[i].wdt==wdth){

var kfwdth =arr[i].kfwdth;
var kffont =arr[i].kffont;
var peren =arr[i].per;
cnt=i;
console.log("exali  ", arr[i].kffont );
                   break;}
                }
                console.log("pr  ",wdth, kfwdth, kffont,peren,cnt,i,arr.length);


if(peren==1){prn="normal";}else{prn="nowrap";}


 elem = document.querySelectorAll('td.zghd_lp');
if(kffont>16){kffont=16;}
 stl = "width:" +  kfwdth + "px!important;margin:0px!important;padding:0px!important;text-align: center;font-size:" + kffont + "px!important;white-space:" + prn + ";";
                for (i = 0; i < elem.length; i++) {

                    elem[i].style = stl;
                } //endfor

elem = document.querySelectorAll('td.cell');
kffont =arr[cnt].kffont;
stl = "width:" +  kfwdth + "px!important;margin:0px!important;padding:0px!important;text-align: center;font-size:" + kffont + "px!important;white-space:" + prn + ";";
 q=0;
                for (i = 0; i < elem.length; i++) {
               q=q+1; if(q>6){q=0;}





stl = "width:" +  (Number(kfwdth) +Number(q*0.75) ) + "px!important;margin:0px!important;padding:0px!important;text-align: center;font-size:" + kffont + "px!important;padding-top:" + (30 - 5*q) + "px!important;";
elem[i].style = stl;

                } //endfor
 document.getElementsByClassName('lppl')[0].style="display:none;";

wdth=shir();
if (wdth<=533){

 elem = document.getElementsByClassName('lpmn');
stl = "position: fixed; top:" + (Number(wdth) + Number(wdth/1.77)) + "px!important;left:" + (Number(wdth) - Number(wdth/5.33)) +  "px;display:block;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
}else{
     elem = document.getElementsByClassName('lpmn');
stl = "position: fixed; top:303px!important;left:104px;display:block;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

}
 elem = document.querySelectorAll('td.cell');
stl = "<td class=\"cell\" style=\"display:none!important;\">купить</td>"
var inhtml="купить";

                for (i = 0; i < elem.length; i++) {
   if(elem[i].innerHTML.length==6){
 elem[i].style="display:none!important;";
console.log(" elem[i].innerHTM",  elem[i].style  );


                     }}
};// a.onclick  a.onclick  a.onclick ++++++++++++++++++++++++++++


// b.onclick  b.onclick -------------------------------------------------
            var b = document.getElementsByClassName('lpmn')[0];
 console.log("var b ", b);
            b.onclick = function() {
prcset();

};//fxbbbbbbbbbbbbbbbb-------------------------------------------------
// b.onclick  b.onclick ------------------------------------------------
// b.onclick  b.onclick ------------------------------------------------



function circus(){
var kll,i,wdth;
wdth=shir();

var khh;
var crk=[{wd:'1024', l:'36', h:'157'},{wd:'1280', l:'10', h:'10'},{wd:'1360', l:'10', h:'10'},{wd:'1440', l:'10', h:'10'},{wd:'1600', l:'10', h:'10'},{wd:'1900',  l:'10', h:'10'},{wd:'2000', l:'10', h:'10'},{wd:'2500',l:'10', h:'10'},{wd:'3000', l:'10', h:'10'}];
  for (i = 0; i < crk.length; i++) {
               if(crk[i].wd==wdth){kll=crk[i].l;khh=crk[i].h; break;}
                } //endfor




//var ttop=hctop+hcctr;


document.getElementsByClassName('downprice')[0].style="position:absolute!important;top:" + khh + "px!important; left:" +kll + "px!important;";
console.log("priexali  ", document.getElementsByClassName('downprice')[0].style );
var hctop=document.querySelector('main').getBoundingClientRect().top;

/*hctop=160;*/
if(hctop>300){
i = 0;
 while (hctop>300 && i<20){
 i=i+ 1;
 hctop=document.getElementsByTagName('main')[0].getBoundingClientRect().top;

}
 var arr=[{wdt:'1024',shad:'190'},{wdt:'1280',shad:'190'},{wdt:'1360',shad:'190'},{wdt:'1440',shad:'190'},{wdt:'1600',shad:'190'},{wdt:'1900',shad:'190'},{wdt:'2000',shad:'190'},{wdt:'2500',shad:'190'},{wdt:'3000',shad:'190'}];


   for (i = 0; i < arr.length; i++) {
               if(arr[i].wdt==wdth){

hctop =arr[i].shad;

                   break;}
                } //endfo

}

document.getElementsByClassName('topic__tmplgrid')[0].style="height:" + Math.round(hctop + 1) + "px!important;";


document.getElementsByClassName('pano-container')[0].style="height:" + (hctop - 25 ) + "px!important; ";

document.getElementById('imgB').style="height:" + hctop + "px!important;";
document.getElementById('img2').style="height:" + (hctop * 0.85) + "px!important;";
 hctop=document.getElementsByClassName('pano-container')[0].offsetHeight;
var txh=document.getElementsByClassName('topic__txttop__grid')[0].offsetHeight;
document.getElementsByClassName('topic__txttop__grid')[0].style="grid-row:" +  Math.floor(((hctop-txh)/3 )) + "; ";

}//circus
//circus()circus()circus()circus()circus()circus()circus()circus()circus()



var x;
var wdth;
wdth=shir();

var zapr='width=' + wdth;
document.cookie =  zapr;
 localStorage.setItem('goteo', 1);
function accord() {
var chbox;
var wrpfrm=document.getElementById("cfwpkf");//soglasie
chbox=document.getElementById('polKf');
    if (chbox.checked) {
         wrpfrm.style="display:block !important;";
    }
    else {
       wrpfrm.style="display:none !important;";
    }
}//accordaccordaccordaccordaccordaccordaccordaccordaccordaccordaccordaccord



var x1,x2,i;
x=document.getElementById('LMN');
x1=document.getElementById('LMN1');
x2=document.getElementById('LMN2');

//var from = x2.search('?');
//var to = x2.length;
//x2 = x2.substring(from,to);

x.href+='?'+ new Date().getTime();
x2.href+='?'+ new Date().getTime();


if (document.querySelectorAll('h1')!==null){

var inh= document.querySelectorAll("h1")[0];
var p = document.createElement('р');


//inh.innerHTML+="/";
//inh.innerHTML+=wdth;
//inh.innerHTML+="_";



//inh.append(p);

}

if (document.querySelectorAll('div.AttentYl')!==null){
var elem=document.querySelectorAll('div.AttentYl');
var stl="";
for (i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor

}
if (document.querySelectorAll('table.tblclr')!==null){
elem=document.querySelectorAll('table.tblclr');
 stl="";
for (i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor

}

var wdth;
wdth=shir();



var bdy = [{wd:'320', re:'318'},{wd:'340',re:'338'},{wd:'360',re:'358'},{wd:'375',re:'373'},{wd:'384',re:'382'},{wd:'390',re:'388'},{wd:'411',re:'409'},{wd:'440',re:'438'},{wd:'480',re:'478'},{wd:'500',re:'498'},{wd:'533',re:'531'},{wd:'580',re:'578'},{wd:'600',re:'598'},{wd:'630',re:'628'},{wd:'730',re:'728'},{wd:'768',re:'766'},{wd:'800',re:'798'},{wd:'960',re:'958'},{wd:'1024',re:'1030'},{wd:'1280',re:'1278'},{wd:'1360',re:'1358'},{wd:'1440',re:'1438'},{wd:'1600',re:'1598'},{wd:'1900',re:'1898'},{wd:'2000',re:'1998'},{wd:'2500',re:'2498'},{wd:'3000',re:'2998'}];
var wde;
                for (i = 0; i < bdy.length; i++) {

                if(bdy[i].wd==wdth){wde=bdy[i].re; break;}else{wde=wdth-2;}
                } //endfor

elem = document.getElementsByTagName('body');
stl = "width:" + wde + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
var aman = [{wd:'320', re:'300'},{wd:'340',re:'320'},{wd:'360',re:'347'},{wd:'375',re:'361'},{wd:'384',re:'372'},{wd:'390',re:'382'},{wd:'411',re:'399'},{wd:'440',re:'437'},{wd:'480',re:'468'},{wd:'500',re:'498'},{wd:'533',re:'510'},{wd:'580',re:'562'},{wd:'598',re:'572'},{wd:'600',re:'590'},{wd:'630',re:'628'},{wd:'730',re:'703'},{wd:'768',re:'745'},{wd:'800',re:'777'},{wd:'960',re:'953'},{wd:'1024',re:'964'},{wd:'1280',re:'1200'},{wd:'1360',re:'1200'},{wd:'1440',re:'1200'},{wd:'1600',re:'1200'},{wd:'1900',re:'1200'},{wd:'2000',re:'1200'},{wd:'2500',re:'1200'},{wd:'3000',re:'1200'}];
var wdth;
wdth=shir();
                for (i = 0; i < aman.length; i++) {
               if(aman[i].wd==wdth){wde=aman[i].re; break;}else{wde=wdth-2;}
                } //endfor



 elem = document.getElementsByTagName('main');
stl = "width:" +wde + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

 elem = document.getElementsByClassName('main__tmplgrd');
 stl = "width:" + wde + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
if(wdth<1000){
elem = document.getElementsByClassName('main__tmplgrid__contnt');
stl = "width:" + wde + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } }else{
var cnt = [{wd:'1024',re:'673'},{wd:'1280',re:'936'},{wd:'1360',re:'830'},{wd:'1440',re:'867'},{wd:'1600',re:'867'},{wd:'1900',re:'867'},{wd:'2000',re:'867'},{wd:'2500',re:'867'},{wd:'3000',re:'867'}];
                for (i = 0; i < cnt.length; i++) {
               if(cnt[i].wd==wdth){wde=cnt[i].re; break;}
                } //endfor
elem = document.getElementsByClassName('main__tmplgrid__contnt');
stl = "width:" + wde + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }





                }




var tiptop = [{wd:'320', re:'305'},{wd:'340',re:'329'},{wd:'360',re:'357'},{wd:'375',re:'360'},{wd:'384',re:'321'},{wd:'390',re:'332'},{wd:'411',re:'344'},{wd:'440',re:'368'},{wd:'480',re:'402'},{wd:'500',re:'498'},{wd:'533',re:'447'},{wd:'580',re:'488'},{wd:'598',re:'494'},{wd:'600',re:'500'},{wd:'630',re:'522'},{wd:'730',re:'597'},{wd:'768',re:'629'},{wd:'800',re:'655'},{wd:'960',re:'788'},{wd:'1024',re:'964'},{wd:'1280',re:'1200'},{wd:'1360',re:'1200'},{wd:'1440',re:'1200'},{wd:'1600',re:'1200'},{wd:'1900',re:'1200'},{wd:'2000',re:'1200'},{wd:'2500',re:'1200'},{wd:'3000',re:'1200'}];

                for (i = 0; i < tiptop.length; i++) {
               if(tiptop[i].wd==wdth){wde=tiptop[i].re; break;}
                } //endfor





elem = document.getElementsByClassName('topic__tmplgrid');

stl =  "width:" + wde + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = elem[i].style + stl;
                } //endfor


elem = document.getElementsByTagName('footer');
stl = "width:" +  wde + "px!important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
  if(document.getElementsByClassName('pr_anot')[0]===null ||document.getElementsByClassName('pr_anot')[0]===undefined){console.log("an isnul ");}else{
elem =  document.getElementsByClassName('pr_anot');
stl="width:" + wdth*0.83 + "px!important;font-size:" + Math.round( wdth*0.95/34.72) + "px!important;";

  for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                }
document.getElementsByClassName('circle')[0].style="display:none!important;";
                }




                console.log(" do 1000  ");
  if(wdth>1000){
var flt=[{wd:'1024',re:'-97'},{wd:'1280',re:'378'},{wd:'1360',re:'380'},{wd:'1440',re:'379'},{wd:'1600',re:'378'},{wd:'1900',re:'378'},{wd:'2000',re:'378'},{wd:'2500',re:'378'},{wd:'3000',re:'378'}];
var grd=['0.2916667',	'0.1816667',	'0.1525',	'0.06',	'0.3'
];
elem = document.getElementsByClassName('footer__grft_outfuter');
stl = "width:" + wde + "px!important; grid-template-columns:" + Math.floor(wde*grd[0]) + "px "  + Math.floor(wde*grd[1])+ "px "  + Math.floor(wde*grd[2])+ "px "  + Math.floor(wde*grd[3]) + "px "  + Math.floor(wde*grd[4]) + "px;grid-template-areas:'tel . ip . dom' '. . pz . .' '. . lt . .''dm dm dm dm .' !important;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;

                }
 document.getElementsByClassName('cltlf')[0].style="margin-top: 3%!important;margin-left:8%!important;";
 document.getElementsByClassName('ftright')[0].style="margin-left:0px !important;";
 document.getElementsByClassName('ftlab')[0].style="margin-left:0px !important;width: 357px;!important";
 document.getElementsByClassName('ftlt')[0].style="width: 30vw;margin: 0px auto !important;text-align: start !important;margin-left: -102px !important; grid-area: none !important;";
 document.getElementsByClassName('lteo')[0].style="margin: 0px auto !important;text-align: start !important;width:30vw;grid-area: lt !important;";

document.getElementsByClassName('plz')[0].style= "margin: 0px auto !important; width: 14vw;text-align: start;grid-area: pz! important;";
document.getElementsByClassName('clplz')[0].style= "margin-left:-2vw!important; !important;text-align: start!important; grid-area:none!important;";
document.getElementsByClassName('clip')[0].style= "margin-left:0px!important; !important;text-align: start!important; grid-area:none!important;";
document.getElementsByClassName('ftcopyr')[0].style= "margin:0 auto!important; !important;text-align: start!important; grid-area:ip!important;";
document.getElementsByClassName('wrp__downmenu__grid')[0].style= "margin-left:-4vw !important; ";


                for (i = 0; i < flt.length; i++) {
               if(flt[i].wd==wdth){wde=flt[i].re; break;}
                } //endfor




 if (document.getElementById('ffltr')!==null){
     document.getElementById('ffltr').style= "margin-left:" + wde + "px !important;";}

               //endfor
var cf = [{wd:'320', re:'', op:'275'},{wd:'340',re:'', op:'292'},{wd:'360',re:'', op:'322'},{wd:'375',re:'', op:'337'},{wd:'384',re:'', op:'348'},{wd:'390',re:'', op:''},{wd:'411',re:'', op:'326'},{wd:'440',re:'', op:'345'},{wd:'480',re:'', op:'353'},{wd:'500',re:'', op:'396'},{wd:'533',re:'', op:'417'},{wd:'580',re:'', op:'449'},{wd:'598',re:'', op:'450'},{wd:'600',re:'', op:'456'},{wd:'630',re:'', op:'478'},{wd:'730',re:'', op:'559'},{wd:'768',re:'', op:'581'},{wd:'800',re:'', op:'600'},{wd:'960',re:'', op:'684'},{wd:'1024',re:'', op:'663'},{wd:'1280',re:'', op:'910'},{wd:'1360',re:'', op:'907'},{wd:'1440',re:'', op:'910'},{wd:'1600',re:'', op:'910'},{wd:'1900',re:'', op:'910'},{wd:'2000',re:'', op:'910'},{wd:'2500',re:'', op:'910'}];

   for (i = 0; i < cf.length; i++) {
               if(cf[i].wd==wdth){wde=cf[i].op; break;}
                } //endfor
 if (document.getElementById('cf_osob')!==null){document.getElementById('cf_osob').style= "width:" + wde + "px !important;";}
 if (document.getElementsByClassName('cf_table')[0]!==undefined){document.getElementsByClassName('cf_table')[0].style="width:" + wde + "px !important;";}

console.log("end 100");

}/*>1000*/




/////////////////////++++++++++++++++++++++++++++++++++++++++++++++++++
if(document.getElementsByClassName('lppl')[0]===null ||document.getElementsByClassName('lppl')[0]===undefined){console.log("fx a nul ");}else{
wdth=shir();
prcset();
if (wdth<=600){



if (wdth<=533){

 elem = document.getElementsByClassName('lppl');
stl = "position: fixed; top:" + (Number(wdth) + Number(wdth/1.77)) + "px!important;left:" + (Number(wdth) - Number(wdth/5.33)) +  "px;display:block;";

                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor
}else{
     elem = document.getElementsByClassName('lppl');
stl = "position: fixed; top:307px!important;left:130px;display:block;";
                for (i = 0; i < elem.length; i++) {
                    elem[i].style = stl;
                } //endfor

}
}
}


/////////////////////////aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/////////////
console.log("fx h1 ");

wdth=shir();

var pl=[{wde:'1024',wd:'673',h1:'482',dl:'557'},{wde:'1280',wd:'812',h1:'568',dl:'589'},{wde:'1360',wd:'812',h1:'537',dl:'553'},{wde:'1440',wd:'812',h1:'488',dl:'509'},{wde:'1600',wd:'812',h1:'482',dl:'500'},{wde:'1900',wd:'812',h1:'482',dl:'500'},{wde:'2000',wd:'',h1:'',dl:''},{wde:'2500',wd:'',h1:'',dl:''},{wde:'3000',wd:'',h1:'',dl:''}
];
var wdt;
var plh1;
var dlt;


          for (i = 0; i < pl.length; i++) {

                if(pl[i].wde==wdth){wdt=pl[i].wd;
                   plh1=pl[i].h1;
                   dlt=pl[i].dl;
                break;}

}

 document.getElementsByClassName('main__tmplgrid__contnt')[0].style="width:" + wdt + "px !important;";
if( document.querySelectorAll('h1')[0]===null || document.querySelectorAll('h1')[0]===undefined){console.log("h1 nul ");}else{
 document.querySelectorAll('h1')[0].style="width:" + plh1 + "px !important;";}




 //не тр


circus();
};//winonload
    </script>
  </body>



</html>
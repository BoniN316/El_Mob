
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

if(n===0){
   glbstl.insertAdjacentHTML('afterend', '<link  href=\"https://moguta.elakor-floor.ru/mg-templates/elakor/css/medmob.css\" id=\"LMN2\"  rel=\"stylesheet\" type=\"text/css\" />');
console.log("other  ", n );
}

}//end func
var x1024_1280= window.matchMedia("only screen and (min-width:1000px) and (max-width:1280px)  ");
var x960_990= window.matchMedia("only screen and (min-width:960px) and (max-width:990px)  ");
var x800_950= window.matchMedia("only screen and (min-width:800px) and (max-width:950px)  ");
var x768_800= window.matchMedia("only screen and (min-width:760px) and (max-width:799px)  ");
var x730_750= window.matchMedia("only screen and (min-width:730px) and (max-width:750px)  ");
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
 var x360_375_512= window.matchMedia("only screen and (min-width:360px)  and (height: 512px)");
 var x360_375_390= window.matchMedia("only screen and (min-width:360px)  and (height: 390px)");
var x340_360 = window.matchMedia("only screen and (min-width:340px) and (max-width:359px)  ");
var x320_340 = window.matchMedia("only screen and (min-width:319px) and (max-width:339px)  ");
//myFunction(x) // Вызов функции прослушивателя во время выполнения
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

</script>


<?php echo '<link href="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.css" rel="stylesheet" />';?>
<?php echo '<link  href="'.PATH_SITE_TEMPLATE.'/css/filtr.css" id="LMN1" rel="stylesheet" type="text/css" />';?>

<?php echo '<script type="text/javascript" src="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.js"></script>';?>

<script type="text/javascript">
var s,i,x;

var wdth=document.documentElement.clientWidth;
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
}
document.addEventListener("DOMContentLoaded", function(event){


var s,i,x1,x2,x;
x=document.getElementById('LMN');
x1=document.getElementById('LMN1');
x2=document.getElementById('LMN2');

//var from = x2.search('?');
//var to = x2.length;
//x2 = x2.substring(from,to);

x.href+='?'+ new Date().getTime();
x2.href+='?'+ new Date().getTime();


var inh= document.getElementsByClassName("ftright")[0];
var p = document.createElement('p');


p.innerHTML+="/";
p.innerHTML+=wdth;
p.innerHTML+="_";



inh.append(p);
console.log("priexali3  ", p.innerHTML,inh );

if (document.querySelectorAll('div.AttentYl')!==null){
var elem=document.querySelectorAll('div.AttentYl');
var stl="";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
console.log("priexali4  ",  elem[0], elem[1] );
}



}
)

</script>




  </head>
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
 <div class="pano-one"><img src="https://elakor-floor.ru/uploads/imgshrfrm.jpg" title="пано" /></div>

 <div class="pano-two"><img src="https://elakor-floor.ru/uploads/imgshrfrm.jpg" title="пано" /></div>


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
                             <p>
                             Телефон отдела продаж:<br>
                             <a href="tel:+79851442162"> +7-985-144-21-62</a><br>
                             пн-пт 9:00-18:00
                             </p>
                        </div>
                          <div class="ftright">
                              <p>ИП Лабудин Андрей Валентинович,<br>105122, Россия, г. Москва,<br> ул. Никитинская,дом 31, корпус 2, квартира 89</p>
                          </div>
                            <div class="ftcopyr"><p>2016 © <br>ИП Лабудин А.В.</p><br><br><br><br> </div>

<div class="lteo"><p>Все <a href="http://teohim.ru/nalivnye/" target="_blank" title="полимерные наливные полы">полимерные                                                  наливные полы</a> от производителя</p><br><br><br></div>
                           <div class="plz"><p><a href="https://moguta.elakor-floor.ru/politika-konfidentsialnosti" target="_blank" title="Согласие на обработку персональных данных">Политика конфиденциальности</a></p></div>

<?php                            layout('widget'); ?>



                </div><!--footer__grft_outfuter-->




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
  </body>
</html>
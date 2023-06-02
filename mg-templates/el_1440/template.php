<!DOCTYPE html>
<html>
<head>
  <meta name="yandex-verification" content="fd6c904da7f5597a"><!-- mgMeta();-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="cmsmagazine" content="e43c9fcdf582574b78a64d24365e6e0d">
  <meta name="yandex-verification" content="fd6c904da7f5597a"><!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php
  echo '<link  href="' . PATH_SITE_TEMPLATE . '/js/jquery-3.3.1.js"></script>';
  echo  '<link  href="' . PATH_SITE_TEMPLATE . '/js/script.js"></script>';
//  echo '<link  href="' . PATH_SITE_TEMPLATE . '/js/stscript.js"></script>';
  echo '<link  href="' . PATH_SITE_TEMPLATE . '/css/swip_min.css"   rel="stylesheet" type="text/css" />';





    echo '<link  href="' . PATH_SITE_TEMPLATE . '/css/style1000.css" id="LMN"  rel="stylesheet" type="text/css" />';
  echo '<script type="text/javascript" src="https://moguta.elakor-floor.ru/mg-core/script/jquery-1.10.2.min.js"></script>';
  echo '<script type="text/javascript" src="https://moguta.elakor-floor.ru/mg-core/script/engine-script.js"></script>';
  echo '<script type="text/javascript" src="' . PATH_SITE_TEMPLATE . '/js/script.js"></script>';
 // echo '<script type="text/javascript" src="' . PATH_SITE_TEMPLATE . '/js/stscript.js"></script>';
  echo '<script type="text/javascript" src="' . PATH_SITE_TEMPLATE . '/js/swiper-bundle.min.js"></script>'; ?>
  <script type="text/javascript">
  function txtv()
  {

    document.getElementById("ftdiv").style.display = "none";
    document.getElementById("txdiv").style.display = "block";
    document.getElementById("idtxtv").style.display = "none";
    document.getElementById("idftv").style.display = "block";
  }

  function ftv()
  {


    document.getElementById("ftdiv").style.display = "block";
    document.getElementById("txdiv").style.display = "none";
    document.getElementById("idtxtv").style.display = "block";
    document.getElementById("idftv").style.display = "none";}


  function mobE()
  {
    var glbstl = document.getElementById('LMN');
    var n = 0;



    if(x1024_768.matches)
    {
      glbstl.insertAdjacentHTML('afterend', '<link  href="https://moguta.elakor-floor.ru/mg-templates/elakorD/css/1024_768.css" id="LMN2"  rel="stylesheet" type="text/css" />');
      n = 1;
      return;
    }else
    {
      n = 0;}

    if(x1280_800.matches)
    {
      glbstl.insertAdjacentHTML('afterend', '<link  href="https://moguta.elakor-floor.ru/mg-templates/elakorD/css/1280_800.css" id="LMN2"  rel="stylesheet" type="text/css" />');
      n = 1;
      return;
    }else
    {
      n = 0;}

    if(x1360_900.matches)
    {
      glbstl.insertAdjacentHTML('afterend', '<link  href="https://moguta.elakor-floor.ru/mg-templates/elakorD/css/1360_900.css" id="LMN2"  rel="stylesheet" type="text/css" />');
      n = 1;
      return;
    }else
    {
      n = 0;}

    if(x1440_900.matches)
    {
      glbstl.insertAdjacentHTML('afterend', '<link  href="https://moguta.elakor-floor.ru/mg-templates/elakorD/css/1440_900.css" id="LMN2"  rel="stylesheet" type="text/css" />');
      n = 1;
      return;
    }else
    {
      n = 0;}
    if(x1600_3000.matches)
    {
      glbstl.insertAdjacentHTML('afterend', '<link  href="https://moguta.elakor-floor.ru/mg-templates/elakorD/css/1600_900.css" id="LMN2"  rel="stylesheet" type="text/css" />');
      n = 1;
      return;
    }else
    {
      n = 0;}

    if(n===0)
    {
      glbstl.insertAdjacentHTML('afterend', '<link  href="https://moguta.elakor-floor.ru/mg-templates/elakorD/css/1440_3000.css" id="LMN2"  rel="stylesheet" type="text/css" />');

    }

  }//end func
  var x1600_3000 = window.matchMedia("only screen and (min-width:1600px) and (max-width:4000px)  ");
  var x1440_900 = window.matchMedia("only screen and (min-width:1440px) and (max-width:1599px)  ");
  var x1360_900 = window.matchMedia("only screen and (min-width:1360px) and (max-width:1439px)  ");
  var x1280_800 = window.matchMedia("only screen and (min-width:1280px) and (max-width:1349px)  ");
  var x1024_768 = window.matchMedia("only screen and (min-width:1000px) and (max-width:1279px)  ");

  //myFunction(x) // Вызов функции прослушивателя во время выполнения
  x1600_3000.addListener(mobE);
  x1440_900.addListener(mobE);
  x1360_900.addListener(mobE);
  x1280_800.addListener(mobE);
  x1024_768.addListener(mobE);


  //x630_700.addListener(mobE);
  mobE();

  </script><?php echo '<link href="' . PATH_SITE_TEMPLATE . '/js/fancybox/jquery.fancybox.css" rel="stylesheet" />'; ?><?php echo '<link  href="' . PATH_SITE_TEMPLATE . '/css/filtr.css" id="LMN1" rel="stylesheet" type="text/css" />'; ?><?php echo '<script type="text/javascript" src="' . PATH_SITE_TEMPLATE . '/js/fancybox/jquery.fancybox.js"></script>'; ?>
  <title></title>
</head>
<body>
  <!--
    //grossgrossgrossgrossgrossgrossgrossgrossgrossgrossgrossgrossgrossgross//-->
  <div class='wrapper'>
    <header>
      <table class='hdrtbl'>
        <tr>
          <td class='tdlogo'>
            <div class='colleft'>
              <a href='/' title='Элакор' class='logo'><span class='cred'>Элакор</span><sup><small>&trade;</small></sup></a>
              <div class='inettitle'>
                <a href='/' title='Интернет-магазин' onclick='mobmenMain();'>интернет магазин</a>
              </div>
              <div class='phone'>
                <a href='tel:+79851442162'>+7 (985)144-21-62</a>
              </div>
              <div class='outcart'>
                <?php layout('cart'); ?>
              </div>
            </div>
          </td>
          <td class='tdintro'>
            <div class='pano-container'>
<div class='pano-one'><img src='https://moguta.elakor-floor.ru/uploads/bangreen1.png' title='пано'></div>
             <!-- <div class='pano-two'><img src='https://moguta.elakor-floor.ru/uploads/bangreen.jpg' title='пано'></div>-->
              <!--<div class='pano-one'><img src='https://elakor-floor.ru/uploads/imgshrfrm.jpg' title='пано'></div>
              <div class='pano-two'><img src='https://elakor-floor.ru/uploads/imgshrfrm.jpg' title='пано'></div>-->

              <div class='intros'>
                Наливные полы:<br>
                материалы, покрытия.<br>
                Удобный выбор для вашего объекта
              </div>
            </div>
          </td>
          <td class='tdphone'>
            <table>
              <tr>
                <td><button class="banTeoPdp" style="border:3px solid #0000FF; box-shadow: 1px 1px 0px 3px #e69717;" onclick="ZamLink(1)"><span style="text-decoration: underline;text-decoration-color:#09edf3;text-decoration-style:double;">Перейти на официальный сайт производителя<br></span> материалов "Элакор" - ООО "ТэоХим".<br>
                ЦЕНЫ Производителя!</button></td>
              </tr>
              <tr>
                <td>
                  <div class='topconts'>
                    <div class='zvonok'>
                      [back-ring]
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <table id='BlockCatTov' class='wrap--BlockCatTov'>
        <tbody id='BodyCatTov'>
          <tr>
            <td class='cattitle' id='ctt1'>Материалы</td>
            <td class='cattitle' id='ctt2'>Покрытия</td>
            <td class='cattitle' id='ctt3'>Объекты</td>
          </tr>
          <tr>
            <td class='col1'>
              <ul class='submenu'>
                <li>
                  <a class='col1li' href='https://moguta.elakor-floor.ru/materialy/grunty-gruntovki' title='Все грунты и грунтовки' onclick='mobmenGrid();'>Грунты, грунтовки</a>
                </li>
                <li>
                  <a class='col1li' href='https://moguta.elakor-floor.ru/materialy/laki' title='Все лаки' onclick='mobmenGrid();'>Лаки</a>
                </li>
                <li>
                  <a class='col1li' href='https://moguta.elakor-floor.ru/materialy/emali-kraski' title='Все эмали и краски' onclick='mobmenGrid();'>Эмали, краски</a>
                </li>
                <li>
                  <a class='col1li' href='https://moguta.elakor-floor.ru/materialy/nalivnye-poly' title='Все наливные полы' onclick='mobmenGrid();'>Наливные полы</a>
                </li>
                <li>
                  <a class='col1li' href='https://moguta.elakor-floor.ru/materialy/shpatlevki' title='Все шпатлевки' onclick='mobmenGrid();'>Шпатлевки</a>
                </li>
              </ul>
            </td>
            <td class='col2'>
              <ul class='submenu'>
                <li>
                  <a class='col2li' href='https://moguta.elakor-floor.ru/pokrytiya/okrasochnye-poly' title='Все полы окрасочного типа (тонкие полы)' onclick='mobmenGrid();'>Окрасочные полы</a>
                </li>
                <li>
                  <a class='col2li' href='https://moguta.elakor-floor.ru/pokrytiya/nalivnye-poly' title='Все наличные полы - покрытия (классические)' onclick='mobmenGrid();'>Наливные полы</a>
                </li>
                <li>
                  <a class='col2li' href='https://moguta.elakor-floor.ru/pokrytiya/napolnennye-pokrytiya\' title="Наполненные наливные полы (толстые)" onclick='mobmenGrid();'>Наполненные</a>
                </li>
                <li>
                  <a class='col2li' href='https://moguta.elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya' title='Специальные полимерные покрытия' onclick='mobmenGrid();'>Спец.полимерные</a>
                </li>
                <li>
                  <a class='col2li' href='https://moguta.elakor-floor.ru/pokrytiya/propitki-dlya-betona' title='Все пропитки для бетона' onclick='mobmenGrid();'>Пропитки бетона</a>
                </li>
              </ul>
            </td>
            <td class='col3'>
              <ul class='submenu'>
                <li>
                  <a class='col3li' href='https://moguta.elakor-floor.ru/obekty/poly-dlya-garaja' title='Полы для гаражей паркингов, СТО, моек' onclick='mobmenGrid();'>Полы для гаражей</a>
                </li>
                <li>
                  <a class='col3li' href='https://moguta.elakor-floor.ru/obekty/poly-dlya-sklada' title='Полы для складоы, хранилищ, подсобок' onclick='mobmenGrid();'>Полы для склада</a>
                </li>
                <li>
                  <a class='col3li' href='https://moguta.elakor-floor.ru/obekty/poly-dlya-tseha' title='Полы для цехов, производств, ферм' onclick='mobmenGrid();'>Полы для цеха</a>
                </li>
                <li>
                  <a class='col3li' href='https://moguta.elakor-floor.ru/obekty/poly-dlya-ofisa' title='Полы для офисных, административных помещений, медучреждений' onclick='mobmenGrid();'>Полы для офиса</a>
                </li>
                <li>
                  <a class='col3li' href='https://moguta.elakor-floor.ru/obekty/poly-dlya-magazina' title='Полы для торговых центров, магазинов' onclick='mobmenGrid();'>Для магазина</a>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td class='others' id='otr1'>
              <a href='https://elakor-floor.ru/materialy' title='Все материалы' onclick='mobmenGrid();'>Все материалы</a>
            </td>
            <td class='others' id='otr2'>
              <a href='https://elakor-floor.ru/pokrytiya' title='Все покрытия' onclick='mobmenGrid();'>Все покрытия</a>
            </td>
            <td class='others' id='otr3'>
              <a href='https://elakor-floor.ru/obekty' title='Все объекты' onclick='mobmenGrid();'>Все объекты</a>
            </td>
          </tr>
        </tbody>
      </table><?php     if (!(URL::isSection(null) || URL::isSection('index1') || URL::isSection('index')) && (MG::get('controller') == 'controllers_catalog' || MG::get('controller') == 'controllers_product')) {[brcr];} ?>
    </header>
    <table id='bl_cont_centr' class='tblcentr'>
      <tr>
        <td class='tdleft'>
          <!--левое меню-->
          <div class="circle">
            <a class="downprice" href="/prays-list" title="Прайс лист">Прайс лист</a>
          </div><!--<div  class='leftblock'> </div>
<div  class='outleftblock'> </div>-->
          <div class='leftmenu'>
            <?php  layout('topmenu'); ?>
            <ul>
              <!-- // $subpages = MG::get('pages')->getPageByUrl('index);-->
              <?php
              $subpages = MG::get('pages')->getHierarchyPage(7);


              $cudent_url = URL::getUrl();
              foreach ($subpages as $subpage) {
              if ($cudent_url == $subpage['link'] || $cudent_url == $subpage['link'] . '/') {$subactive = 'active';} else { $subactive = '';}
              echo '<li class="'.$subpage[''] . $subactive . '"><a class="twocolor" title="' . $subpage['title'] . '" href="' . $subpage['link'] . '">' . $subpage['title'] . '</a></li>';

              }
              ?>
            </ul><?php   [blog-categories]; ?>
          </div>
<div class="colpik">
<p><a href="https://moguta.elakor-floor.ru/karta-tsvetov" target="_self" title="Стоимость колеровки">Стоимость колеровки</a></p>

</div>





        </td><!--левое меню-->
        <td class='content'>

<table>
<tr>

<td><h1>Интернет-магазин материалов для наливных полов</h1>

</td>
</tr>

</table>
          <?php
          [brcr]
          ?><!--content-->
          <main
          <?php  if (!(MG::get('controller')=="controllers_catalog")) {echo "style='width: 100%; display:block;width: 100%;'>";}
                      $main = MG::get('pages')->getPageByUrl('index1');

                      if (!(isset($_GET['applyFilter']) && $_GET['applyFilter'] != '') && (URL::isSection(null) || URL::isSection('index') || URL::isSection('index1'))){

                      echo $main['html_content'];
                      }else{ layout('content');} ;?>></main><!-- .content -->
        </td><!--content-->
        <?php if(MG::get('controller')=="controllers_catalog") { ?>
        <td class="tdfltr">
          <!--фильтр-->
          <div class="outfilter">
            <div class="flowfilter">
              <div id="ffltr">
                <div class="filter">
                  <div class="filtitle">
                    Отметьте свои приоритеты для быстрого подбора нужного вам варианта.
                  </div><?php if(MG::get('controller')=="controllers_catalog"|| MG::get('controller')=="controllers_product" ) : ?>
                  <div class="filter-block">
                    <?php filterCatalog(); ?>
                  </div><?php endif; ?>
                  <div class="btnfltr">
                    <button class="button angrd bt_podbor">Подобрать</button> <button class="button flbtBF bt_all">Больше фильтров</button> <button class="button flbtCLR bt_resets">Сбросить фильтры</button>
                  </div>
                </div><!--filter-->
              </div>
            </div>
          </div><!--ffltr-->
          <?php }else{ ?>
        </td>
        <td class="tdnofltr"><!--фильтр-->
        <?php } ?></td><!--фильтр-->
      </tr>
    </table>
    <div id="main_futer" class="outfooter">
      <footer class="footer">
        <div class="ftleft">
          <p>Телефон отдела продаж:<br>
          <a href="tel:+79851442162">+7-985-144-21-62</a><br>
          пн-пт 9:00-18:00</p>
        </div>
        <div class="ftright">
          <p>ИП Лабудин Андрей Валентинович,<br>
          105122, Россия, г. Москва</p>
        </div>
        <div class="ftcopyr">
          2016 © ИП Лабудин А.В.
          <p>Все <a href="http://teohim.ru/nalivnye/" target="_blank" title="полимерные наливные полы">полимерные наливные полы</a> от производителя</p><br>
          <p><a href="https://elakor-floor.ru/politika-afidentsialnosti" target="_blank" title="Согласие на обработку персональных данных">Политика конфиденциальности</a></p><?php   layout('widget'); ?>
        </div>
      </footer><!-- .footer -->
    </div><!-- outfooter -->
    <div class="downmenu">
      <table class="tdownmenu">
        <tr>
          <td class="twocolorH">
            <a href='https://moguta.elakor-floor.ru/'>Главная</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/about-">О компании</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/contacts">Контакты</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/dostavka">Доставка и оплата</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/zakazat-asultatsiyu">Заявка</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/sertifikaty">Сертификаты</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/protokoly-ispytaniy">Протоколы испытаний</a>
          </td>
        </tr>
        <tr>
          <td class="twocolorH rw2">���</td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/prays-list">Прайс-лист</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/obraztsy-betonov">Образцы бетонов</a>
          </td>
          <td class="twocolorH">
         <!--   <a href="https://elakor-floor.ru/tablitsa-tsvetov">Таблица цветов</a>-->
            <a href="https://moguta.elakor-floor.ru/karta-tsvetov">Таблица цветов</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/poly/promyshlennye-poly">Промышленные полы</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/poly/betonnye-poly">Бетонные полы</a>
          </td>
          <td class="twocolorH">
            <a href="https://elakor-floor.ru/poly/polimernye-poly">Полимерные полы</a>
          </td>
        </tr>
      </table>
    </div>
  </div><?php
  $tt=  $_SERVER['REMOTE_ADDR'];
  echo '#ip#';
    print_r($tt);
      echo '#2#';
  ?>
  <script type="text/javascript">
  window.onload = function()
  {
    //shir()shir()shir()shir()shir()
    function shir()
    {
      var i;
      var wdth = document.documentElement.clientWidth;

      var rzm =[320, 340, 360, 375, 384, 390, 411, 440, 480, 500, 533, 580, 598, 600, 630, 730, 768, 800, 960, 1024, 1280, 1360, 1440, 1600, 1900, 2000, 2500, 3000];
      for (i = 0; i < rzm.length; i++)
      {

        if(rzm[i]==wdth)
        {
          wdth = rzm[i]; break;}
        if (i+1<= rzm.length)
        {
          if(wdth > rzm[i] && wdth < rzm[i+1])
          {
            wdth = rzm[i]; break;}
        }
      }

      return wdth;

    }//shir()shir()shir()shir()shir()shir()shir()shir()shir()shir()shir()


    /* circus()circus()circus()circus()circus()circus()circus()circus()circus()circus()circus()circus()circus()circus()circus()circus() */
    function circus()
    {
      var kll, i, wdth;

      var khh;
      var crk =[
        {
        wd: '1024', l: '36', h: '157'},
        {
        wd: '1280', l: '10', h: '10'},
        {
        wd: '1360', l: '10', h: '10'},
        {
        wd: '1440', l: '10', h: '10'},
        {
        wd: '1600', l: '10', h: '10'},
        {
        wd: '1900', l: '10', h: '10'},
        {
        wd: '2000', l: '10', h: '10'},
        {
        wd: '2500', l: '10', h: '10'},
        {
        wd: '3000', l: '10', h: '10'}
      ];
      for (i = 0; i < crk.length; i++)
      {
        if(crk[i].wd==wdth)
        {
          kll = crk[i].l; khh = crk[i].h; break;}
      } //endfor

  var elem = document.getElementsByClassName('circle')[0];
  var stl = "top:10px!important;";
           elem.style = stl;
       //endfor*


      //var ttop=hctop+hcctr;

      /*
    document.getElementsByClassName('downprice')[0].style="position:absolute!important;top:" + khh + "px!important; left:" +kll + "px!important;";

      var hctop = document.getElementById('otr1').getBoundingClientRect();


   /


      /*hctop=160;*/

      /*i = 0;
    while (hctop>300 && i<20){
    i=i+ 1;
    hctop=document.getElementsByTagName('wrap--BlockCatTov')[0].getBoundingClientRect().bottom;

    }*/
      /* var ad=[{wdt:'1024',shad:'190'},{wdt:'1280',shad:'190'},{wdt:'1360',shad:'190'},{wdt:'1440',shad:'190'},{wdt:'1600',shad:'190'},{wdt:'1900',shad:'190'},{wdt:'2000',shad:'190'},{wdt:'2500',shad:'190'},{wdt:'3000',shad:'190'}];


     for (i = 0; i < ad.length; i++) {
                 if(ad[i].wdt==wdth){

    hctop =ad[i].shad;

                     break;}
                  } //endfo*/




    }//circus
    //circus()circus()circus()circus()circus()circus()circus()circus()circus()



    var x;
    var wdth;
    wdth = shir();

    var zapr = 'width=' + wdth;
    document.cookie = zapr;
    localStorage.setItem('goteo', 1);
    function accord()
    {
      var chbox;
      var wrpfrm = document.getElementById("cfwpkf"); //soglasie
      chbox = document.getElementById('polKf');
      if (chbox.checked)
      {
        wrpfrm.style = "display:block !important;";
      }
      else
      {
        wrpfrm.style = "display:none !important;";
      }
    }//accordaccordaccordaccordaccordaccordaccordaccordaccordaccordaccordaccord



    var x1, x2, i;
    x = document.getElementById('LMN');
    x1 = document.getElementById('LMN1');
    x2 = document.getElementById('LMN2');

    //var from = x2.search('?');
    //var to = x2.length;
    //x2 = x2.substring(from,to);

    x.href += '?'+ new Date().getTime();
    x2.href += '?'+ new Date().getTime();


    if (document.querySelectorAll('h1')!==null)
    {

      var inh = document.querySelectorAll("h1")[0];
      var p = document.createElement('р');


      //inh.innerHTML+="/";
      //inh.innerHTML+=wdth;
      //inh.innerHTML+="_";



      //inh.append(p);

    }

    if (document.querySelectorAll('div.AttentYl')!==null)
    {
     var  elem = document.querySelectorAll('div.AttentYl');
      var  stl = "";
      for (i = 0; i <elem.length; i++)
      {
        elem[i].style = stl;
      }//endfor

    }
    if (document.querySelectorAll('table.tblclr')!==null)
    {
      elem = document.querySelectorAll('table.tblclr');
      stl = "";
      for (i = 0; i <elem.length; i++)
      {
        elem[i].style = stl;
      }//endfor

    }


  wdth = shir();























      circus();

      var nbn = 0;
      var bdy =[
        {
        wd: '1024', re: '1024',b:'83',c:'85.5',d:'21',e:'10.4'},
        {
        wd: '1280', re: '1200',b:'100',c:'100',d:'21',e:'10.4'},
        {
        wd: '1360', re: '1200',b:'100',c:'100',d:'21',e:'10.4'},
        {
        wd: '1440', re: '1200',b:'100',c:'100',d:'21',e:'9.9'},
        {
        wd: '1600', re: '1200',b:'100',c:'100',d:'21',e:'8.6'},
        {
        wd: '1900', re: '1200',b:'100',c:'100',d:'21',e:'7.5'},
        {
        wd: '2000', re: '1200',b:'100',c:'100',d:'21',e:'7.1'},
        {
        wd: '2500', re: '1200',b:'100',c:'100',d:'21',e:'5.5'},
        {
        wd: '3000', re: '1200',b:'100',c:'100',d:'21',e:'4.6'} ];
      var wde = 1;
      var tblcentr;
      var collft;
var wdft;
      for (i = 0; i < bdy.length; i++)
      {

        if(bdy[i].wd==wdth)
        {
          wde = bdy[i].re;
          bl=bdy[i].b;
tblcentr=bdy[i].c;
collft=bdy[i].d;
wdft=bdy[i].e;
           break;


          }else
        {
          wde = wdth-2;}
      } //endfor

      elem = document.getElementsByTagName('body');
if(wde==1024){stl = "width:1024px!important; margin-left:"  + 0 + "px!important;";}else{
      stl = "width:1200px!important; margin-left:" + (Number(wdth)-1200)/2 + "px!important;";}
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor
            elem = document.getElementsByClassName('hdrtbl')[0];
      stl = "width:" + bl +"%!important;";
          elem.style = stl;
   //endfor

if(document.getElementsByClassName('filter')==null || document.getElementsByClassName('filter')==undefined){console.log("priexali undefined " );}else{
            elem = document.getElementsByClassName('filter');
      stl = "width:" + wdft +"vw!important;";
           for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
       };}
   //endfor

 if(document.getElementsByClassName('filter-block')!==null && document.getElementsByClassName('filter-block')!==undefined){
         elem = document.getElementsByClassName('filter-block');
      if(wdth>=1900){
 stl = "width:" + Number( Number(wdft)-1) + "vw!important;display:block;";
      }else{
      stl = "width:" +wdft + "vw!important;display:block;";}
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
       }}//endfor*/

   if(document.getElementsByClassName('angrd')!==null && document.getElementsByClassName('angrd')!==undefined){
          elem = document.getElementsByClassName('angrd');
      stl = "width:" +wdft + "vw!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      }} //endfor

  if(document.getElementsByClassName('flbtBF')!==null && document.getElementsByClassName('flbtBF')!==undefined){
          elem = document.getElementsByClassName('flbtBF');
      stl = "width:" + wdft + "vw!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } }//endfor

    if(document.getElementsByClassName('flbtCLR')!==null && document.getElementsByClassName('flbtCLR')!==undefined){
          elem = document.getElementsByClassName('flbtCLR');
      stl = "width:" +wdft + "vw!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      }} //endfor

  if(document.getElementsByClassName('filtitle')!==null && document.getElementsByClassName('filtitle')!==undefined){
         elem = document.getElementsByClassName('filtitle');

      stl = "line-height:" + 16 + "px!important;padding: 5% 13px 0px 9%!important;width:" +wdft + "vw!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;

      }} //endfor*/
/*
 if(document.getElementsByClassName('mg-filter-item')!==null && document.getElementsByClassName('mg-filter-item')!==undefined){
          elem = document.getElementsByClassName('mg-filter-item');

      stl = "line-height:" + 0 + "px!important;padding: 0px 0px 0px 0px;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;

      }} */


if(document.getElementsByClassName('tdfltr')!==null && document.getElementsByClassName('tdfltr')!==undefined){
         elem = document.getElementsByClassName('tdfltr');

      stl = "padding: 0!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;

      } }//endfor


/*
if(document.getElementsByTagName('h4')!==null && document.getElementsByTagName('h4') !==undefined){
         elem = document.getElementsByTagName('h4');

      stl = "line-height:" + 10 + "px!important";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;

      } }//endfor

      elem = document.getElementsByTagName('li');

      stl = "list-style-type:none!important;margin:1px 5px 0 -79%!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;

      } //endfor*/

/*if( document.getElementsByTagName('label')!==null &&  document.getElementsByTagName('label') !==undefined){
          elem = document.getElementsByTagName('label');
      stl = "line-height:" + 9 + "px!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;

      } //endfor
}*/


/*
if(document.getElementsByClassName('mg-filter-prop-checkbox')!==null && document.getElementsByClassName('mg-filter-prop-checkbox') !==undefined){
         elem = document.getElementsByClassName('mg-filter-prop-checkbox');
      stl = "margin: -7px 5px 0 71%;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;

      } //endfor}
}*/

               elem = document.getElementsByClassName('tblcentr')[0];
      stl = "width:" + tblcentr +"%!important;";
          elem.style = stl;
   //endfor
                  elem = document.getElementsByClassName('colleft')[0];
      stl = "margin-left:" + collft +"%!important;";
          elem.style = stl;
   //endfor

      var aman =[
        {
        wd: '1024', re: '626', b: '0', ft: '1024', d: '700'},
        {
        wd: '1280', re: '819', b: '1', ft: '1200', d: '836'},
        {
        wd: '1360', re: '844', b: '1', ft: '1200', d: '849'},
        {
        wd: '1440', re: '844', b: '1', ft: '1200', d: '849'},
        {
        wd: '1600', re: '844', b: '1', ft: '1200', d: '849'},
        {
        wd: '1900', re: '844', b: '1', ft: '1200', d: '849'},
        {
        wd: '2000', re: '844', b: '1', ft: '1200', d: '849'},
        {
        wd: '2500', re: '844', b: '1', ft: '1200', d: '849'},
        {
        wd: '3000', re: '844', b: '1', ft: '1200', d: '849'}
      ];
      wdth;
      wdth = shir();
      for (i = 0; i < aman.length; i++)
      {
        if(aman[i].wd==wdth)
        {
          wde = aman[i].re;
          var bl = aman[i].b;
          var ftr = aman[i].ft;
          var wd= aman[i].d;
          break;
        }else
        {
          wde = wdth-2;
        }
      } //endfor


      elem = document.getElementsByTagName('main');
      stl = "width:" + wde +"px!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor
  if (document.getElementById('d')!==null && document.getElementById('d')!==undefined){
elem = document.getElementById('d');
      stl = "width:" + wd +"px!important;";
      elem.style = stl;
     //endfor
}

elem = document.getElementsByTagName('h1')[0];
       stl = "width:" + wd +"px!important;";
      elem = document.getElementsByClassName('wrapper');

    if (document.getElementsByTagName('p')!==null && document.getElementsByTagName('p')!==undefined){
elem = document.getElementsByTagName('p');
           stl = "margin-left:" + Number(Number(wd) - Number(wde)) + "px;padding:0";
 for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //
}
elem = document.getElementsByClassName('wrapper');

      stl = "margin-left:" + bl + "px!important;padding:0";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

      elem = document.getElementsByTagName('footer');
      stl = "width:" + ftr + "px!important;max-width:200%!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

      elem = document.getElementsByClassName('outfooter');
      stl = "width:" + ftr + "px!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

      elem = document.getElementsByClassName('downmenu');
      stl = "width:" + ftr + "px!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor*/

      elem = document.querySelectorAll('td.content');
      stl = "width:" + 70 + "%!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor*/





      var blocat =[
        {
        wd: '1024', re: '1023', b: '1', c: '19'},
        {
        wd: '1280', re: '1198', b: '0', c: '27'},
        {
        wd: '1360', re: '1198', b: '0', c: '27'},
        {
        wd: '1440', re: '1198', b: '0', c: '27'},
        {
        wd: '1600', re: '1198', b: '0', c: '27'},
        {
        wd: '1900', re: '1198', b: '0', c: '27'},
        {
        wd: '2000', re: '1198', b: '0', c:'27'},
        {
        wd: '2500', re: '1198', b: '0', c:'27'},
        {
        wd: '3000', re: '1198', b: '0', c:'27'}
      ];
      for (i = 0; i < blocat.length; i++)
      {
        if(blocat[i].wd==wdth)
        {
          wde = blocat[i].re;
            bl = blocat[i].b;
          var bh = blocat[i].c;
          break;
        }else
        {
          wde = wdth-2;
        }
      } //endfor


      elem = document.getElementById('BlockCatTov');
      stl = "margin:0!important;padding:0!important;margin-left:" + bl + "px!important;margin-top:" + bh + "px!important; width:" + wde + "px!important;";
      elem.style = stl;

      elem = document.getElementById('BodyCatTov');
      stl = "width:" + wde + "px!important;display:block!important;";
      elem.style = stl;

      elem = document.getElementsByTagName('tr');
      stl = "width:" + wde + "px!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

      var blocol =[
        {
        wd: '1024', a: Math.floor(Number(wde)/3), b: '1', c: '3', z2m: '-10', z3m: '-20', d: '6', e: '3', f: '36'},
        {
        wd: '1280', a: Math.floor(Number(wde)/3), b: '1', d: '1', e: '1', f: '1'},
        {
        wd: '1360', a: Math.floor(Number(wde)/3), b: '1', d: '1', e: '1', f: '1'},
        {
        wd: '1440', a: Math.floor(Number(wde)/3), b: '1', d: '1', e: '1', f: '1'},
        {
        wd: '1600', a: Math.floor(Number(wde)/3), b: '1', d: '1', e: '1', f: '1'},
        {
        wd: '1900', a: Math.floor(Number(wde)/3), b: '1', d: '1', e: '1', f: '1'},
        {
        wd: '2000', a: Math.floor(Number(wde)/3), b: '1', d: '1', e: '1', f: '1'},
        {
        wd: '2500', a: Math.floor(Number(wde)/3), b: '1', d: '1', e: '1', f: '1'},
        {
        wd: '3000', a: Math.floor(Number(wde)/3), b: '1', d: '1', e: '1', f: '1'}
      ];
      for (i = 0; i < blocat.length; i++)
      {
        if(blocat[i].wd==wdth)
        {
          var bln = blocol[i].b;
          var ag = blocol[i].a;
          var dg = blocol[i].d;
          var eg = blocol[i].e;
          var fg = blocol[i].f;
          //c
          break;
        }
      } //endfor

      elem = document.getElementsByClassName('col1')[0];
      stl = "width:" + ag + "px!important;";
      elem.style = stl;

      elem = document.getElementsByClassName('cattitle')[0];
      stl = "width:" + ag + "px!important;";
      elem.style = stl;

      elem = document.getElementsByClassName('col2')[0];
      stl = "width:" + ag + "px!important;";
      elem.style = stl;

      elem = document.getElementsByClassName('col3')[0];
      stl = "width:" + ag + "px!important;";
      elem.style = stl;

      elem = document.querySelectorAll('td.col1 > ul.submenu')[0];
      stl = "width:" + ag + "px!important;margin-left:0px!important;";
      elem.style = stl;

      elem = document.querySelectorAll('td.col2 > ul.submenu')[0];
      stl = "width:" + ag + "px!important;margin-left:0px!important;";
      elem.style = stl;

      elem = document.querySelectorAll('td.col3 > ul.submenu')[0];
      stl = "width:" + ag + "px!important;margin-left:0px!important;margin-top:0px!important;";
      elem.style = stl;


      elem = document.getElementsByClassName('col1li');
      stl = "width:" + Number(ag*0.7) + "px!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor


      elem = document.getElementsByClassName('col2li');
      stl = "width:" + Number(ag*0.7) + "px!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor


      elem = document.getElementsByClassName('col3li');
      stl = "width:" + Number(ag*0.7) + "px!important;margin-top:1px!important;";
      for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor







      elem = document.getElementById('otr1');
      stl = "width:" + ag + "px!important;margin-left:" + dg + "%!important;padding-left:10px!important;";
      elem.style = stl;


      elem = document.getElementById('otr2');
      stl = "width:" + ag + "px!important;margin-left:" + eg + "%!important;padding-left:10px!important;";
      elem.style = stl;

      elem = document.getElementById('otr3');
      stl = "width:" + ag + "px!important;margin-left:" + fg + "%!important;padding-left:10px!important;";
      elem.style = stl;





      var tiptop =[
        {
        wd: '1024', a: '514', b: '159', c: '6', d: '25', log: '-29', im: '-30', tfh: '-57',  corh: '32',corl: '-109',tfm: '-24', losh: '99'},
        {
        wd: '1280', a: '709', b: '159', c: '5', d: '25', log: '-29', im: '-14', tfh: '-57', corh: '-15',corl: '-54', tfm: '-24', losh: '147'},
        {
        wd: '1360', a: '709', b: '160', c: '5', d: '25', log: '-29', im: '-14', tfh: '-57',corh: '-15', corl: '-17',tfm:'-24', losh: '147'},
        {
        wd: '1440', a: '709', b: '160', c: '5', d: '25', log: '-29', im: '-14', tfh: '-57',corh: '-15', corl: '10',tfm: '-24', losh: '157'},
        {
        wd: '1600', a: '709', b: '160', c: '5', d: '25', log: '-29', im: '-14', tfh: '-57',corh: '5', corl: '66',tfm: '-24', losh: '147'},
        {
        wd: '1900', a: '709', b: '160', c: '5', d: '25', log: '-29', im: '-14', tfh: '-57',corh: '6', corl: '167',tfm: '-24', losh: '147'},
        {
        wd: '2000', a: '709', b: '160', c: '5', d: '25', log: '-29', im: '-14', tfh: '-57',corh: '3', corl: '201',tfm: '-24', losh: '147'},
        {
        wd: '2500', a: '709', b: '160', c: '5', d: '25', log: '-29', im: '-14', tfh: '-57',corh: '3', corl: '372',tfm:'-24', losh: '147'},
        {
        wd: '3000', a: '709', b: '160', c: '5', d: '25', log: '-29', im: '-14', tfh: '-57',corh: '3', corl: '541',tfm: '-24', losh: '147'}
      ];

      for (i = 0; i < tiptop.length; i++)
      {
        if(tiptop[i].wd==wdth)
        {
          var cont = tiptop[i].a;
          var contb = tiptop[i].c;
          var conth = tiptop[i].b;
          var wdsm = tiptop[i].d;
          var logo = tiptop[i].log;
          var imgmg = tiptop[i].im;
          var telh = tiptop[i].tfh;
          var telmg = tiptop[i].tfm;
          var crzh = tiptop[i].corh;
          var lzh = tiptop[i].losh;
          var crzl= tiptop[i].corl;
          break;}
      } //endfor

if(wdth==1024){
elem= document.getElementsByClassName('cartleft')[0];
elem.style="margin-left: 62px;";
}
   elem = document.getElementsByClassName('pano-container')[0];
      stl = "width:" + cont + "px!important;margin-left:" + contb + "%!important;height:" + conth + "px!important;";

      elem.style = stl;



      elem = document.getElementsByClassName('pano-one')[0];
      stl = "width:" + cont + "px!important;height:" + conth + "px!important;";

      elem.style = stl;

      elem = document.getElementsByTagName('img')[0];
if (wdth==1024){ stl = "width:" + 517 + "px!important;height:" + conth + "px!important;";}else{
      stl = "width:" + cont + "px!important;height:" + conth + "px!important;";}
      elem.style = stl;

 /*     elem = document.getElementsByClassName('pano-two')[0];
      stl = "width:" + wdsm + "%!important;";

      elem.style = stl;*/

      elem = document.getElementsByClassName('intros')[0];
      stl = "top:" + lzh + "px!important;";
      elem.style = stl;

      elem = document.getElementsByClassName('cred')[0];
      stl = "margin-left:" + logo + "px!important;";
      elem.style = stl;

      elem = document.getElementsByClassName('inettitle')[0];
      stl = "margin-left:" + imgmg + "px!important;";
      elem.style = stl;

      elem = document.getElementsByClassName('phone')[0];
      stl = "margin-left:" + telmg + "px!important;margin-top:" + telh + "px!important";
      elem.style = stl;

      elem = document.getElementsByClassName('mg-desktop-cart')[0];
      stl = "left:" + crzl + "px!important;top:" +  Number(crzh) + "px!important";
      elem.style = stl;


var strel =[
        {
        wd: '1024', rlp: '236', lft: '42', c: '19'},
        {
        wd: '1280',  rlp: '302', lft: '47', c: '27'},
        {
        wd: '1360',  rlp: '313', lft: '47', c: '27'},
        {
        wd: '1440',  rlp: '313', lft: '47', c: '27'},
        {
        wd: '1600',  rlp: '313', lft: '47', c: '27'},
        {
        wd: '1900',  rlp: '312', lft: '47', c: '27'},
        {
        wd: '2000',  rlp: '312', lft: '47', c:'27'},
        {
        wd: '2500',  rlp: '312', lft: '47', c:'27'},
        {
        wd: '3000',  rlp: '312', lft: '47', c:'27'}
      ];
      for (i = 0; i < strel.length; i++)
      {
        if(strel[i].wd==wdth)
        {
          var rlpl = strel[i].rlp;
          var  slft = strel[i].lft;
          bh = strel[i].c;

          break;
        }
      } //endfor

  if (document.getElementById('rlp')!==null && document.getElementById('rlp')!==undefined){
      elem = document.getElementById('rlp');
      stl = "margin-left:" + rlpl + "px!important;";
      elem.style = stl;

      elem.style = stl;
     elem = document.getElementsByClassName('strlFt')[0];
      stl = "margin-left:" + slft + "px!important;";
      elem.style = stl;
}


if(window.location.href=="https://moguta.elakor-floor.ru/"){

var zak =[
        {
        wd: '1024', wid: '702', hgt: '43', widtd: '19',fz:'16',bfut:'-65'},
        {
        wd: '1280', wid: '842', hgt: '11', widtd: '20',fz:'17',bfut:'-9'},
        {
        wd: '1360',wid: '842', hgt: '11', widtd: '20',fz:'17',bfut:'-65'},
        {
        wd: '1440', wid: '842', hgt: '11', widtd: '20',fz:'17',bfut:'-9'},
        {
        wd: '1600', wid: '842', hgt: '11', widtd: '20',fz:'17',bfut:'-35'},
        {
        wd: '1900', wid: '842', hgt: '11', widtd: '20',fz:'17',bfut:'-60'},
        {
        wd: '2000', wid: '842', hgt: '11', widtd: '20',fz:'17',bfut:'-47'},
        {
        wd: '2500', wid: '842', hgt: '11', widtd: '20',fz:'17',bfut:'-47'},
        {
        wd: '3000', wid: '842', hgt: '11', widtd: '20',fz:'17',bfut:'-47'}
      ];
for (i = 0; i < zak.length; i++)
      {
        if(zak[i].wd==wdth)
        {
          var wid = zak[i].wid;
          var hgt = zak[i].hgt;
          var widtd = zak[i].widtd;
          var fz = zak[i].fz;
          var mrfut=zak[i].bfut;
          break;
        }
      } //endfor


       elem=document.getElementsByClassName('outfooter')[0];
elem.style ="margin-top:" + mrfut + "px!important;";


       elem=document.querySelectorAll('textarea#cf_osob')[0];
   if (elem) {


elem.style = "width:" + wid + "px!important;height:" + hgt + "vw!important;font-size:" + fz + "px!important;";
    elem=document.getElementsByClassName('cf_table')[0];
elem.style = "width:" + wid + "px!important;height:" + hgt + "vw!important;white-space:normal!important;";
    elem=document.getElementsByClassName('cf_areaHlp')[0];
elem.style = "font-size:" + Number( Number(fz)-2) + "px!important;color: rgb(74, 10, 247) !important;";
    elem=document.getElementsByClassName('cf_area_Q')[0];
elem.style = "font-size:0px!important;";
    elem=document.getElementsByClassName('cf_name');
stl = "font-size:" + 12 + "px!important;white-space:normal!important;width:" + widtd + "px!important;";
         for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
 } //endfor*/
   }



}




//price price priceprice price priceprice price priceprice price priceprice price priceprice price priceprice price price
//price price priceprice price priceprice price priceprice price priceprice price priceprice price priceprice price price
//price price priceprice price priceprice price priceprice price priceprice price priceprice price priceprice price priceprice price price

if(window.location.href=="https://moguta.elakor-floor.ru/prays-list"){

elem=document.getElementById('pu-all');
stl="display:none;";

    elem.style = stl;
elem=document.getElementById('pu-grn');
 stl="display:none;";
    elem.style = stl;

  elem = document.getElementsByClassName('content');
stl = "display:inline;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor
        elem = document.getElementsByTagName('main')[0];
stl = 'width: 930px;margin: 0px 0px 0px 32px;background: url("/uploads/fgrpr.png");';
elem.style = stl;
       //endfor

  elem = document.getElementsByClassName('shad');
stl = 'background-image: url("/uploads/prlfnmet.png") !important;';
 elem[2].style ='background-image: url("/uploads/4prfnelectr.png") !important;';
        elem[3].style = stl;
 elem[4].style ='background-image: url("/uploads/1prlfnwood.png") !important;';
elem[5].style ='background-image: url("/uploads/2prlfnwass.png") !important;';


  elem = document.getElementsByClassName('bl_mat');
 elem[11].style ='background-image: url("/uploads/3prlfnsun.png")!important;';


  elem = document.getElementsByTagName('label');
stl = 'line-height: 9px !important;color: #ffff75;text-shadow: #3c7b10 3px 2px 2px, yellow 0px 0px 1em;font-size: 24px;font-weight: 700;';
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

  elem = document.getElementsByClassName('row');
stl = "display:inline;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor


elem = document.getElementsByClassName('ohd');
stl = "width:" + Number(Number(wde)*0.18) + "px!important;float: left;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor


elem = document.getElementsByClassName('zghdTbl');
stl = "width:" + Number(Number(wde)*0.43) + "px!important;float: left;margin: 0px 0px 0px 8px";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor


elem = document.getElementsByClassName('zghd');
stl = "width: 4vw;text-align: center;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

elem = document.getElementsByClassName('cell');
stl = "width: 4vw;text-align: center;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

 elem = document.getElementsByClassName('clrnr');
stl = "float: left;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

elem = document.getElementsByClassName('alnk');
stl = "width:" + Number(Number(wde)*0.15) + "px!important;float: left;white-space: normal;color: rgb(26, 26, 28);text-shadow: rgb(117, 253, 164) 1px 1px 0px, yellow 0px 0px 1vw;font-weight: 600;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor



 elem = document.querySelectorAll('td.cell');
stl = '<td class="cell" style="display:none!important;">купить</td>';
var inhtml="купить";

                for (i = 0; i < elem.length; i++) {
   if(elem[i].innerHTML.length==6){
 elem[i].style="display:none!important;";
 elem[i-1].style="display:none!important;";
  elem[i-2].style="display:none!important;";
   elem[i-3].style="display:none!important;";
    elem[i-4].style="display:none!important;";
     elem[i-5].style="display:none!important;";
      elem[i-6].style="display:none!important;";



                     }}

elem = document.getElementsByClassName('cellTbl');
stl = "width:" + Number(Number(wde)*0.51) + "px!important;float: left;white-space: nowrap;margin: -53px 0px 0px 225px;background: rgba(6, 6, 6, 0.28) none repeat scroll 0% 0%;color: rgb(240, 238, 255);font-weight: 600;text-shadow: rgb(36, 60, 45) 2px 1px 0px, yellow 0px 0px 1vw;font-size: 20px;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor
 var elem1;
elem = document.getElementsByClassName('onz');

    for (i = 0; i < elem.length; i++)
      {
if(elem[i].innerHTML.includes('<a class="alnk"')){//если есть ссылка

elem1=Number(Number(document.getElementsByClassName('onz')[i].innerText.length)*1.5 );
if (elem1==78) {elem1=97;}
stl = "padding-bottom:" + elem1 + "px;";

        elem[i].style = stl;}else{
elem[i].style ="display:none;";//если ссылки нет
        }
      } //endfor

elem = document.getElementsByClassName('btgreenPrL');
stl = "margin: 0px 0px 0px -30px; padding: 9px 1px 6px 0px;";
    for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor
}


//catDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesc

//catDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesccatDesc

if(document.getElementsByClassName('cat-desc-text').length>0){
var desc =[
        {
        wd: '1024', wid: '697', hgt: '26'},
        {
        wd: '1280', wid: '829', hgt: '26'},
        {
         wd: '1360', wid: '840', hgt: '26'},
        {
         wd: '1440', wid: '840', hgt: '26'},
        {
         wd: '1600', wid: '840', hgt: '26'},
        {
         wd: '1900', wid: '840', hgt: '26'},
        {
        wd: '2000', wid: '840', hgt: '26'},
        {
         wd: '2500', wid: '840', hgt: '26'},
        {
         wd: '3000', wid: '840', hgt: '26'},
      ];
for (i = 0; i < desc.length; i++)
      {
        if(desc[i].wd==wdth)
        {
          var wdd = desc[i].wid;
          var ht = desc[i].hgt;
                  break;
        }
      } //endfor
elem=document.querySelectorAll('div.ptitle>h4');
stl= "line-height:" + ht + "px!important;color: #000905;";
 for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor

elem=document.querySelectorAll('div.products-wrapper.catalog.products');
stl= "width:" + wdd + "px !important;";
 for (i = 0; i < elem.length; i++)
      {
        elem[i].style = stl;
      } //endfor
}

//mkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprd
//mkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprd
//mkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprdkprd
if(document.getElementsByClassName('tab').length>0){
var prod =[
        {
        wd: '1024', wid: '77'},
        {
        wd: '1280', wid: '73'},
        {
         wd: '1360', wid: '69'},
        {
         wd: '1440', wid: '69'},
        {
         wd: '1600', wid: '58'},
        {
         wd: '1900', wid: '49'},
        {
        wd: '2000', wid: '47'},
        {
         wd: '2500', wid: '38'},
        {
         wd: '3000', wid: '31'},
      ];
for (i = 0; i < prod.length; i++)
      {
        if(prod[i].wd==wdth)
        {
          var wddp = prod[i].wid;
          var htp = prod[i].hgt;
                  break;
        }
      }

elem=document.getElementById('mkrprd');
stl="width:" + wddp  +"vw;!important;";
elem.style=stl;
}


  }; //winonload
  </script>
</body>
</html>
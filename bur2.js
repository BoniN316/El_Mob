"use strict";
//tplo el_320
//tpl el_320 - название темплаты...
/*
1 - зероморд.= zerMord
2 - list MOP.=listMOP
3 - list Burg.=listBurg
4 - contBurg.=contBurg
5 - cont. contCont
6 - cart.=contCart
7 - order.=contOrder
8 - zak.=contZak
9 - mag.=contMag
=topVib
=botVib
=operMsg
*/
let zs='10';
 let zerMord = '';
 let listMOP = '';
 let listBurg = '';
 let contBurg = '';
 let contCont = '';
 let contCart = '';
 let contOrder = '';
 let contZak = '';
 let contMag = '';
 let topVib = '';
 let botVib = '';
 let operMsg = '';
/* zerMord = '1';
 listMOP = '0';
 listBurg = '0';
 contBurg = '0';
 contCont = '0';
 contCart = '0';
 contOrder = '0';
 contZak = '0';
 contMag = '0';
 topVib = '0';
 botVib = '1';
 operMsg = 'Закажите Ваш пол нулевой';
 zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;
    console.log("0 zs  ", zs.slice(0,11));*/

$(document).ready(function rdstrt()
  {
zs=sessionStorage.getItem('zs', zs);
zs==null?zs="10000000001Закажите Ваш пол рестарт":"";
  console.log("switch1  ", zs);
    /*   sessionStorage.setItem('redy',1);/*/   //ф библиотеке jqyery-1/8/3.js по адресу mg-core/script в строке 386 считывается значение для вызова этой функции. Сделано для принудительной проверки при переходе с адреса на адрес
    let hh = $(window).height();
    let docWidth = document.documentElement.offsetWidth;
    let urCnt;
    let sdvgH = 1;
    hh>500? sdvgH = 3: sdvgH = 7;
    let topLosung = $('.logoEl').height() + $('.logoEl').offset()['top'] + sdvgH;
    let topOper = $('.txtring').offset()['top'] + sdvgH;
    let bottomOper = topOper + $('.txtopermsg').height()+ sdvgH;
    let ContLink;
    console.log("Границы топЛозунг/топОпер/ботОпер  ", topLosung, topOper, bottomOper, $('div.conteiner').offset()['top']);


    let topVibor = $('.view_consult_form').height() + $('.view_consult_form').offset()['top'] + 64;
    let topHero = $('div.conteiner').offset()['top'] -191;
    let Ubot=$('.tbl_hdr_inner').offset()['top'] + $('.tbl_hdr_inner').height();
    let urllE = location.href;
    let win = 0;
    let PosClik = '';
    $('.tbl_hdr_inner').removeAttr('style');
    $('div.slogan').removeAttr('style');
    $('.txtopermsg').removeAttr('style');
    $('.view_consult_form').removeAttr('style');


    $('.tbl_hdr_inner').css({'display': 'block', 'height': bottomOper});
    $('div.slogan').css({'display': 'block', 'position': 'absolute', 'top': topLosung, left: '64px'});
    $('.txtopermsg').css({'display': 'block', 'position': 'absolute', 'top': topOper});
    $('.view_consult_form').css({'display': 'block', 'position': 'absolute', 'top': bottomOper});
var elem=document.querySelector('main');

console.log("чисто js  ", elem.getBoundingClientRect());
//x
//y
//top
//width
//right от левой гр.окна до правой гр объекта
//left
// height
//bottom от верхней гр.окна до нижней грани объета







    function TopVib()
    {
      $("#pb1").removeAttr('style');
      $("#pb1").removeClass('pb1Zero pb1Top');
      $("#pb1").addClass('pb1Top');
      $('div.slogan').css({'background': 'rgb(0, 128, 0)', 'color': 'rgb(0, 128, 0)'}
      );
      $("#pb1").css({'display': 'block', 'top': topLosung}
      );
      $('.txtopermsg').css({'display': 'block', 'position': 'absolute', 'top': topOper});
      if(sessionStorage.getItem('nrburm')==3) {

      }
    }










    function BotVib()
    {
      let knOfZak = $('#out_consult_form').offset()['top'] + 6*$('#cf_open').height();
      $("#pb1").removeAttr('style');
      $("#pb1").removeClass('pb1Top pb1Zero');
      $("#pb1").addClass('pb1Zero'); //установка класса ВНИЗУ для кнопки ВЫБОР МАТЕРИАЛОВ
      $("#pb1").css({'top': knOfZak, 'position': 'relative'}
      ); // установка кнопки ВЫБОР МАТЕРИАЛОВ
    }











    //clrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZeroclrZero
    function clrZero()
    {

      console.log(" clrZero() ", sessionStorage.getItem('nrburm'), $('#cf_open').height());
      $('.hdr_burger').is('.active')? $('.hdr_burger').removeClass('.active'): $('.hdr_burger').css('display', 'block');
      $('.hdr_menu').is('.active')? $('.hdr_menu').removeClass('.active'): $('.hdr_menu').css('display', 'none');
      $('.hero1').is('.active')? $('.hero1').removeClass('.active'): $('.hero1').css('display', 'none');
      $('#stal').css('display', 'none');
      $('.view_consult_form').is('.active')? $('.view_consult_form').removeClass('.active'): $('.view_consult_form').css('display', 'block');
   $('.view_consult_form').removeAttr('style');
      $('.slogan').css('color', '#edffe5');
      $(".close-ring-button").click();
      $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
      $('main').addClass('mainDispZero');

          $("#pb1").removeClass('pb1Top pb1Zero');
           $('main').removeAttr('style');
          $('#haupt').removeAttr('style');
          $('.ElacOpis').removeAttr('style');
      $('img[name="l"]').removeAttr('style');
          $('img[name="p"]').removeAttr('style');
          $('#ftdiv').removeAttr('style');
          $('#tblft').removeAttr('style');
          $('#rlp').removeAttr('style');
          $("#pb1").removeAttr('style');

   $("#pb1").css('display','none');






}




function delMag()
{



          $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
          $('#haupt').addClass('ElacOpis');
          $('.ElacOpis').css({display: 'block'});
          $('.hero1').css({display: 'none'});
          $('#haupt').css({display: 'block'});
          /*$('p.MonFt').remove();*/
          $('img[name="l"]').addClass("Levo");
          $('img[name="p"]').addClass("Pravo");



}









function Form1(){

          $('div.slogan').css('background', 'rgb(232, 225, 40) linear-gradient(45deg, #008600 0%, rgb(35, 72, 35) 50%, rgb(0, 134, 0) 100%) repeat scroll 0% 0%;');;
          $('.txtopermsg').html(' Закажите Ваш пол Form1');
          $(".txtopermsg").removeAttr('style');
          $(".mainDispZero").removeAttr('style');
          $(".hero1").removeAttr('style');
          $("div.hero1").removeAttr('style');
          $('.txtopermsg').css({'display': 'block', 'position': 'absolute', 'top': topOper});
          $('.mainDispZero').css({'display': 'none'});
          $('#haupt').css({'display': 'none'});
          $('div.hero1').css({'display': 'block', 'position': 'absolute', 'top': Ubot});
      /*   $("#pb1").css({top: knOfZak, 'position': 'relative'});*/
       }










    function Design()
    {    console.log("Design()  ");

        PosClik=sessionStorage.getItem('PosClk');
      let knOfZak = $('#out_consult_form').offset()['top'] + 4*$('#cf_open').height();
      $('.view_consult_form').css('display')=='block'? PosClik = 'Form1': '';
      $('.stal_all_submenu').css('display')=='block'? PosClik = 'MOP': '';
      $('.hdr_menu.active').css('display')=='block'? PosClik = 'Burg': '';
      $('nav').hasClass('.hdr_menu.active')? PosClik = 'Burg': '';
      sessionStorage.setItem('PosClk',PosClik);
      if(PosClik !='Burg')
      {
        urllE=='https://moguta.elakor-floor.ru/about-'? PosClik = 'BurgCont': '';
        urllE=="https://moguta.elakor-floor.ru/dostavka"? PosClik = 'BurgCont': '';
        urllE=="https://moguta.elakor-floor.ru/contacts"? PosClik = 'BurgCont': '';
        urllE=="https://moguta.elakor-floor.ru/protokoly-ispytaniy"? PosClik = 'BurgCont': '';
        urllE=="https://moguta.elakor-floor.ru/prays-list"? PosClik = 'BurgCont': '';
        urllE=="https://moguta.elakor-floor.ru/cart"? PosClik = 'Cart': '';
        urllE=="https://moguta.elakor-floor.ru/order"? PosClik = 'Order': '';
        urllE.indexOf('catalog')>0? PosClik = 'Spis': '';
        urllE.indexOf('materialy-elakor')>0? PosClik = 'Cont': '';
            console.log("materialy-elakor  ",  urllE.indexOf('materialy-elakor'));
        urllE.indexOf('pokrytiya')>0? PosClik = 'Cont': '';
        urllE.indexOf('obekty')>0? PosClik = 'Cont': '';
            sessionStorage.setItem('PosClk',PosClik);
        sessionStorage.getItem('nrburm')==3? PosClik = 'Mag': '';
            sessionStorage.setItem('PosClk',PosClik);
      }
      let hhb = $('body').height();

      console.log("PosClik  ", PosClik, hh, hhb);

    }












 function MOP(){

          $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
          $('main').addClass('mainDisp');
          $('.view_consult_form').css('display', 'none');
          $('#stal').css('display', 'none');
          $('div.slogan').css('color', '#008000');
          $("#pb1").toggleClass('pb1Zero pb1Top');
          $('#liGru').css({'position': 'absolute', top: '-17px', left: '30px'});
          $('#liNalpol').css({'position': 'absolute', top: '-2px', left: '24px'});
          $('#liSpa').css({'position': 'absolute', top: '-2px', left: '127px'});
          $('#liLak').css({'position': 'absolute', top: '35px', left: '74px'});
          $('#liKras').css({'position': 'absolute', top: '35px', left: '185px'});
         }













    function Burg(){

          $("#pb1").removeAttr('style');
          $("#pb1").removeClass('pb1Zero pb1Top');
          $("#pb1").addClass('pb1Top');
          $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
          $('main').addClass('mainDispZero');
          $(".view_consult_form").removeAttr('style');
          $(".view_consult_form").css('display', 'none');
          $('.txtopermsg').html('Сделайте Ваш выбор');
          $('.txtopermsg').css('display', 'block');
          $('div.slogan').css({'background': 'rgb(0, 128, 0)', 'color': 'rgb(0, 128, 0)'});

          $('.hdr_list').css({display: 'flex', flexDirection: 'row', justifyContent: 'space-around', flexWrap: 'wrap', position: 'relative', top: '-53px'});
          let dtmargin = (hh-480)/14 +30 + 'px';
          $('.pres_but_hdr_menu ').css({marginBottom: dtmargin}
          )

        }












  function BurgCont(){


          $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
          $('main').addClass('mainDispZero');
          $(".view_consult_form").removeAttr('style');
          $(".view_consult_form").css('display', 'none');
          $('.txtopermsg').css('display', 'none');
          $('div.slogan').css({'background': 'rgb(0, 128, 0)', 'color': 'rgb(0, 128, 0)'});


          let hhn = parseInt($('main').height());
          let wwn = parseInt($('main').width());
          let ssn = hhn*wwn;
          let paddmn = Math.round(ssn/1100); // вписывает кнопку Прайс-листа в рамку страницы
          let hdrGrenz = parseInt($('.hdr').height());
          let hdrGrenzR = parseInt($('header').height());
          $('main').css({'top': hdrGrenzR, 'position': 'absolute'});

          $('.mainDispZero').css({display: 'block', top: hdrGrenzR}
          )
          console.log("mainDispZero  ", paddmn, hhn, hdrGrenz, hdrGrenzR);
          if (urllE=='https://moguta.elakor-floor.ru/about-')
          {document.querySelector('span.AttentGrn').style = 'width: 47% !important;padding: 7% 8% 2% 4% !important;display: block !important;height: 75px !important;float: left !important;position: static !important;margin: 125px 0px 7px 49px !important;'; document.querySelector('span.AttentYl').style = 'margin: 9% -620% 5% 17px !important;padding: 3% 11% 5% 9% !important;display: block !important;height: 116px !important;position: static !important;float: left !important;';
            if(document.querySelectorAll('p')!==null) {
              let elem = document.querySelectorAll('p');
              let stl = 'font-size: 16px; width: 100%; padding: 9px 3px 0px 24px;margin: 0;';
              for (var i = 0; i <elem.length; i++) {
                elem[i].style = stl;
                elem[i].style.margin = null;
              }
              elem[15].style = 'font-size: 16px; width: 100%; padding: 111px 3px 0px 23px;margin: 0;';}
          }
          if (urllE=="https://moguta.elakor-floor.ru/protokoly-ispytaniy")
          {
            document.querySelector('h1').style = "";
            var stl = "color:let(--colrBaz);text-decoration: underline;font-size: 12px;line-height: 29px;font-weight: 700;";
            var elem = $('.mainDispZero p a');
            for (var i = 0; i <elem.length; i++) {
              elem[i].style = stl; elem[i].style.margin = null;
            }
          }

          if (urllE=="https://moguta.elakor-floor.ru/prays-list")
          {
            var idTov = 0;
            $('h1').css('width', '92vw');
            $(".prc_cell").each(function(index, element)
              {/*          console.log("$).each  ",index, element.lastChild.href );*/
                let ptnhr = element.lastChild.href; //последний линк  a href
                let ptn = ptnhr.indexOf('=');
                ptn>0? idTov = ptnhr.slice(ptn + 1): idTov = 0;
                idTov>59? element.id = idTov: ""; //idTov отсчет  c 60
                if(element.lastChild.className=='btgreenPrL') {
                  element.lastChild.text = "";
                  element.lastChild.className = "btgreenPrLPlus " + "cl" + idTov;
                  element.lastChild.outerHTML = "<button class='btgreenPrLPlus'></button>"; /*element.lastChild.tagName="button";*/
                }
              }
            );

          }
       }











function Mag(){

          $('main').removeAttr('style');
          $('#haupt').removeAttr('style');
          $('.ElacOpis').removeAttr('style');
          $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
          $('#haupt').addClass('ElacOpis');
          $('.ElacOpis').css({display: 'block'});
          $('.hero1').css({display: 'none'});
          $('#haupt').css({display: 'block'});
          $('img[name="l"]').addClass("Levo");
          $('img[name="p"]').addClass("Pravo");
          $('img[name="l"]').removeAttr('style');
          $('img[name="p"]').removeAttr('style');
          $('.Pravo').addClass('active');
          $('#ftdiv').removeAttr('style');
          $('#tblft').removeAttr('style');
          $('#rlp').removeAttr('style');
          $('.txtopermsg').removeAttr('style');
          $('.txtopermsg').css('display', 'none');
          TopVib();
    }


   function Cart(){

         }





     function Order(){

         }






     function Spis(){

         }
















    function stalin()
    {
      console.log("stalin  ");
      $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
      $('main').addClass('mainDispZero');
      $(".view_consult_form").removeAttr('style');
      $(".view_consult_form").css('display', 'none');
      $("div.conteiner").removeAttr('style');
      $(".stal_all_submenu").css({'top': topOper +12 +'px', 'display': 'block', 'position': 'absolute', 'z-index': -1}
      );
 $("div.conteiner").css({'display': 'block'});
      $('.txtopermsg').html('Сделайте Ваш выбор');
      $('.txtopermsg').css('display', 'block');
      TopVib();
      $('#stal').css({'display': 'block', 'position': 'absolute', 'top': bottomOper}
      );
      $('#liGru').css({'position': 'absolute', top: '-17px', left: '30px'}
      );
      $('#liNalpol').css({'position': 'absolute', top: '-2px', left: '24px'}
      );
      $('#liSpa').css({'position': 'absolute', top: '-2px', left: '127px'}
      );
      $('#liLak').css({'position': 'absolute', top: '35px', left: '74px'}
      );
      $('#liKras').css({'position': 'absolute', top: '35px', left: '185px'}
      );
    }










    function SetElm(NamElm, NamParntElm)
    {
      //Позиционирует элемент кроссбраузерно.1-класс,ID или тэг 2- родительский блок, если требуется снести его стиль. Кроме этого в управляющем классе элемента должно пристутствовать свойство 'content' : '4,25,150' 4-в процентах - желаемый отступ правого ребра элемента от правого края браузера 25 в процентах вертикальное смещение  0- если элемент составной и требуется указать уровень вложенности, '888888 для пропуска значения
      NamParntElm.length>0? $(NamParntElm).removeAttr('style'): '';
      $(NamElm).removeAttr('style');
      let cont = $(NamElm).css('content');
      let wdthPhPlz = 0;
      let TopPhPlz = 0;
      let deltahh = 0;
      let arcont = cont.split(',');
      let prcOfRight = parseInt(arcont[0].match(/\d+/));
      /*content:'4,10,0';*///для bur izso 4 10 0
      /*content:'4,888888,0';*///для bur tt 4 99 0
      let ofhh = parseInt(arcont[1].match(/\d+/));
      let levl = parseInt(arcont[2].match(/\d+/));
      let bodw = $('body')[0].clientWidth;
      let ofprc = parseInt(bodw*prcOfRight/100);
      // console.log("Движуха  ",NamElm, "pars",arcont,prcOfRight,"/",ofhh,levl,bodw,ofprc );
      const kray = bodw -ofprc; //Задаем физ.край и желаемый отступ
      levl<888888? wdthPhPlz = $(NamElm)[levl].clientWidth: wdthPhPlz = $(NamElm).clientWidth;
      //получаем собственную ширину элемента
      let LeftPhPlz = $(NamElm).offset(); //левая граница элемента
      if(ofhh<888888)
      {
        TopPhPlz = $(NamElm).offset(); //если есть запрос на вертикаль считываем начальное значение
        TopPhPlz = parseInt(TopPhPlz.top);

        deltahh = ofhh-TopPhPlz
        switch (true)
        {
          case (deltahh>0): TopPhPlz = TopPhPlz-deltahh;
            break;
          case (deltahh<0): TopPhPlz = TopPhPlz+deltahh; break;
          default:
        }
      }
      $(NamParntElm).css({'left': 'unset', 'position': 'unset', 'top': 'unset'}
      ); //заданнывй сдвиг в css сносим
      LeftPhPlz = parseInt(LeftPhPlz.left);
      // console.log("zamerrrrrrrrr  ", wdthPhPlz, "/", $(NamElm), LeftPhPlz, "/t", TopPhPlz, bodw, cont, prcOfRight, levl);

      let rightGrenz = (wdthPhPlz+LeftPhPlz); //получаем реальную правуцю границу элемента

      let delta = rightGrenz - kray; //получаем дельту между физграницей экрана и правой границей элемента Для выяснения стороны смещения
      let mufLR = "";
      let MuvEl = 0;
      delta>0? mufLR = '-': mufLR = '+'; //определяем направление корректирующего сдвига - влево
      switch (true)
      {
        case (mufLR=='-'):
          MuvEl = LeftPhPlz - Math.abs(delta);
          MuvEl = MuvEl+ "px";
          break;
        case (mufLR=='+'):
          MuvEl = LeftPhPlz + Math.abs(delta);
          MuvEl = MuvEl+ "px";
          break;
        default:
      }

      // console.log("MuvEl",'left', MuvEl, 'rightGrenz', rightGrenz, 'kray', kray, 'LeftPhPlz', LeftPhPlz, 'wdthPhPlz', wdthPhPlz, 'delta', delta, 'mufLR', mufLR);
      $(NamElm).css({'left': MuvEl, 'position': 'absolute', 'top': TopPhPlz}
      ); // enjoy....

    }//end setElm









    //clickclickclickclickclickclickclickclickclickclickclickclickclickclickclickclickclick


    $('#ZakPokr').click(function(event)
      {
        /*    sessionStorage.setItem('calMOP', 0)*/
        clrZero();
        $('#stal').css('display', 'none');
        event.target.className=='hdr_burger active'? $('.view_consult_form').css('display', 'none'): $('.view_consult_form').css('display', 'block');
        event.target.className=='hdr_burger active'? $('.hero1').css('display', 'none'): $('.hero1').css('display', 'block');
        event.target.className=='hdr_burger active'? $('#pb1').css('display', 'none'): $('#pb1').css('display', 'block');
        $('.hdr_menu').is('.active')? $('.hdr_menu').css('display', 'block'): $('.hdr_menu').css('display', 'none');

      }
    );












    $('#hdrb').click(function bumenu(event)
      {
 zerMord = '0';
 listMOP = '0';
 listBurg = '1';
 contBurg = '0';
 contCont = '0';
 contCart = '0';
 contOrder = '0';
 contZak = '0';
 contMag = '0';
 topVib = '1';
 botVib = '0';
 operMsg = 'Сделайте Ваш выбор';
 zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;
    console.log("bu zs  ", zs);
        console.log("burger", urllE, urllE.length);
        /*        sessionStorage.setItem('calMOP', 0)*/
        sessionStorage.setItem('stal', 0)

        $('.hdr_burger,.hdr_menu').toggleClass('active');
        // console.log("priexali1  ", $('nav').height(),$('nav').width() );
        let hhn = parseInt($('nav').height());
        let wwn = parseInt($('nav').width());
        let ssn = hhn*wwn;
        let paddLi = Math.round(ssn/37000); // вписывает кнопку Прайс-листа в рамку страницы

        $('.hdr_li').css('padding', paddLi +'px')
        $('#stal').css('display', 'none');
        event.target.className=='hdr_burger active'? $('.view_consult_form').css('display', 'none'): $('.view_consult_form').css('display', 'block');
        event.target.className=='hdr_burger active'? $('.hero1').css('display', 'none'): $('.hero1').css('display', 'block');
        event.target.className=='hdr_burger active'? $('#pb1').css('display', 'none'): $('#pb1').css('display', 'block');
        $('.hdr_menu').is('.active')? $('.hdr_menu').css('display', 'block'): $('.hdr_menu').css('display', 'none');
        $('.hdr_menu').is('.active')? $('.txtopermsg').html('Сделайте Ваш выбор'): $('.txtopermsg').html(' Закажите Ваш пол burger');
        Design();
        TopVib();
      }

    );










    $("#pb1").click(function vibor(event)
      {
        console.log("visov  ");

        let sam = 0;


        $('.mainDispZero').css({'display': 'none'});

        $('.ElacOpis').css({'display': 'none'});
        $('.haupt').css({'display': 'none'});

        if (urllE=="https://moguta.elakor-floor.ru/prays-list")
        {
          sam = 1;
          $('.tblLup').css({'display': 'none'});
          $('#SaBut').css({'display': 'none'});
          $('#minLup').css({'display': 'none'});
          $('h1').css({'display': 'none'});
          $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
          $('main').css({'display': 'none'});
          $('.view_consult_form').css('display', 'none');
          $('#stal').css('display', 'none');
          $('div.slogan').css('color', '#008000');
          $("#pb1").toggleClass('pb1Zero pb1Top');
          $('#stal').removeAttr('style');
          $('#stal').css({'display': 'block', 'position': 'absolute', 'top': $('.hdr_inner').offset()['top'] + $('.hdr_inner').height()}
          )
          $('.txtopermsg').css({'top': $('.hdr_inner').offset()['top'] + $('.hdr_inner').height()- $('.txtopermsg').height(), 'position': 'absolute', display: 'block', zIndex: '1'});
          $('.txtopermsg').html('Сделайте Ваш выбор');
          $('div.slogan').css('color', '#008000');
          $("#pb1").toggleClass('pb1Zero pb1Top');
          $('#liGru').css({'position': 'absolute', top: '-17px', left: '30px'});
          $('#liNalpol').css({'position': 'absolute', top: '-2px', left: '24px'});
          $('#liSpa').css({'position': 'absolute', top: '-2px', left: '127px'});
          $('#liLak').css({'position': 'absolute', top: '35px', left: '74px'});
          $('#liKras').css({'position': 'absolute', top: '35px', left: '185px'});

        }
        if(sam==0)
        {
            $('.hdr_menu').removeClass('active');
                 $('.hdr_menu').removeAttr('style');
          stalin()};
      }
    ); //ВЫБОР  ВЫБОР  ВЫБОР  ВЫБОР  ВЫБОР  ВЫБОР  ВЫБОР  ВЫБОР  ВЫБОР  ВЫБОР













    $("#Log").click(function logo(event)
      {
 zerMord = '1';
 listMOP = '0';
 listBurg = '0';
 contBurg = '0';
 contCont = '0';
 contCart = '0';
 contOrder = '0';
 contZak = '0';
 contMag = '0';
 topVib = '0';
 botVib = '1';
 operMsg = 'Закажите Ваш пол "под ключ" logo';
 zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;

        sessionStorage.setItem('PosClk', 'Form1');
sessionStorage.setItem('zs', zs);
        window.location.href = '/';
        clrZero();
/*        let knOfZak = $('#out_consult_form').offset()['top'] + 4*$('#cf_open').height();
        $('div.slogan').css('background', 'rgb(232, 225, 40) linear-gradient(45deg, #008600 0%, rgb(35, 72, 35) 50%, rgb(0, 134, 0) 100%) repeat scroll 0% 0%;');;
        $('.txtopermsg').html(' Закажите Ваш пол под ключ');
        $(".txtopermsg").removeAttr('style');
        $(".mainDispZero").removeAttr('style');
        $(".hero1").removeAttr('style');
        $('.txtopermsg').css({'display': 'block', 'position': 'relative', 'top': knOfZak}
        );
        $('.mainDispZero').css({'display': 'none'});
        $('#haupt').css({'display': 'none'});
        $('div.hero1').css({'display': 'block', 'position': 'absolute', 'top': bottomOper}
        )*/
      }
    );



















    $("#cf_open").click(function ofzakaz(event)
      {
        sessionStorage.setItem('calMOP', 0)
        clrZero();
        $('#pb1').css('display', 'none');
        $('#osn_info').css('display', 'none');
        $('#dop_info').css('display', 'block');

      }
    );











    $("#nxtPok").click (function nxtPok(event)
      {
        sessionStorage.setItem('calMOP', 0)
        $('#pb1').css('display', 'none');
        $('#osn_info').css('display', 'none');
        $('#dop_info').css('display', 'block');

      }
    );













    $("table.tabl_stal_all_submenu").click(function linkList(event)//клик на линках листа меню выбора материалов и решений
      {

        sessionStorage.setItem('calMOP', 0);
        // console.log("priexaliMat  ", event.target);
        $('.view_consult_form').css('display', 'none');
        $('#stal').css('display', 'none');
        $('div.slogan').css('color', '#008000');
        $('main').removeClass('.mainDisp');
        $("#pb1").toggleClass('pb1Zero pb1Top');
        sessionStorage.setItem('stal', 1);
        sessionStorage.setItem('nrburm', 0);
        sessionStorage.setItem('MOP', 0);

        switch (true)
        {

          case (event.target.id == "liGru"):
  console.log("event.target.id  ", event.target.id);
   ContLink = 'M';
             PosClik='Cont';
             sessionStorage.setItem('PosClk','Cont');

            $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/grunty-gruntovki';


            break;
          case (event.target.id=="liLak"):
            ContLink = 'M';
              PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/laki';

            break;
          case (event.target.id=="liKras"):
            ContLink = 'M';
              PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/emali-kraski';

            break;
          case (event.target.id=="liNalpol"):

            ContLink = 'M';
                 PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/nalivnye-poly';

            break;
          case (event.target.id=="liSpa"):

            ContLink = 'M';
                 PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/shpatlevki';

            break;
          case (event.target.id=="liGar"):

            ContLink = 'O';
            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-garaja';

            break;
          case (event.target.id=="liSkl"):
            ContLink = 'O';
                 PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-sklada';

            break;
          case (event.target.id=="liCeh"):
            ContLink = 'O';
     PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-tseha';

            break;
          case (event.target.id=="liOf"):


            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-ofisa';
            ContLink = 'O';
                 PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            break;
          case event.target.id=="liMag":
            ContLink = 'O';
            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-magazina';

            break;
          case (event.target.id=="liOkr"):

            ContLink = 'P';
                 PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/okrasochnye-poly';

            break;
          case (event.target.id=="liNal"):

            ContLink = 'P';
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/nalivnye-poly';

            break;
          case (event.target.id=="liNap"):

            ContLink = 'P';
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/napolnennye-pokrytiya';

            break;
          case (event.target.id=="liSpez"):


            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya';
            ContLink = 'P';
                 PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            break;
          case (event.target.id=="liProp"):

            ContLink = 'P';
                 PosClik='Cont';
             sessionStorage.setItem('PosClk', PosClik);
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/propitki-dlya-betona';

            break;
        }

      });















    $('.tabmenuR a').click(function tabmenu(event)
      {

        let element = $(this),
        activeClassName = 'active',
        target = element.attr('href').split('_')[1];

        $('.tabcontent').removeClass(activeClassName);
        $('#'+target).addClass(activeClassName);




      }
    );

    $('#DContent5').click(function cont5(event)
      {
        //вкладки
        $("#pb1").toggleClass('pb1Zero pb1Top');
        $('#PokKT').css('display', 'none');
        $('#abCen').css('display', 'none');
        $('#DContent5').addClass('active');
        $('#DContent4').removeClass('active');
        $('#DContent3').removeClass('active');
        $('#DContent2').removeClass('active');
        $('#DContent1').removeClass('active');

      }
    );
    $('#DContent4').click(function cont4(event)
      {
        $("#pb1").toggleClass('pb1Zero pb1Top');
        $('#PokKT').css('display', 'block');
        $('#abCen').css('display', 'block');
        $('#DContent4').addClass('active');
        $('#DContent5').removeClass('active');
        $('#DContent3').removeClass('active');
        $('#DContent2').removeClass('active');
        $('#DContent1').removeClass('active');
      }
    );

















    $('#DContent3').click(function cont3(event)
      {
        $("#pb1").toggleClass('pb1Zero pb1Top');
        $('#PokKT').css('display', 'block');
        $('#abCen').css('display', 'block');
        $('#DContent3').addClass('active');
        $('#DContent5').removeClass('active');
        $('#DContent4').removeClass('active');
        $('#DContent2').removeClass('active');
        $('#DContent1').removeClass('active');
      }
    );

















    $('#DContent2').click(function cont2(event)
      {
        $('#PokKT').css('display', 'block');
        $('#abCen').css('display', 'block');
        $('#DContent2').addClass('active');
        $('#DContent5').removeClass('active');
        $('#DContent4').removeClass('active');
        $('#DContent3').removeClass('active');
        $('#DContent1').removeClass('active');
        $("#pb1").toggleClass('pb1Zero pb1Top');

      }
    );

















    $('#DContent1').click(function cont1(event)
      {
        $("#pb1").toggleClass('pb1Zero pb1Top');
        $('#PokKT').css('display', 'block');
        $('#abCen').css('display', 'block');
        $('#DContent1').addClass('active');
        $('#DContent5').removeClass('active');
        $('#DContent4').removeClass('active');
        $('#DContent3').removeClass('active');
        $('#DContent2').removeClass('active');
        $('#Bnr').css('display', 'none');
      }
    );





    $('#Bnr').css('display', 'none');
    if($('div') .hasClass('product-wrapper product'))
    {
      $('main').addClass('mainMaterList');

    }
    if($('div') .hasClass('material'))
    {
      $('main').addClass('mainMater');

    }


    if($('div') .hasClass('cat-desc'))
    {
      $('main').addClass('mainObt');

    }

    if($('div').hasClass('zOb'))
    {
      // only collection object_
      let flg = 0;

      $("a").each(function(index, element)
        {

          // производим перебор элементов <a>коллекции jQuery
          if(element.firstElementChild!==null)
          {//если есть child то это img
            flg = 1;
            if(element.firstElementChild.currentSrc.indexOf('kapel1511511501.png')>0) {// если фото kapel_
              var aa = element;
              $(aa).addClass('aspec');
            }

          }
        }
      );



      if (flg==0)
      {
        // ессли child отсутствует - значит фото выше

        $("a").each(function(index, element)
          {
            if(element.previousElementSibling!==null && index>10) {// check
              if(element.previousElementSibling.currentSrc.indexOf('kapel1511511501.png')>0) {
                let aa = element; $(aa).addClass('aspec');}
            }
          }
        ); //$("a").each(function( index, element )_

      }
    }//h if($('div').hasClass('zOb'))_






    if($('table') .hasClass('potab'))
    {
      $('main').addClass('mainPokr');
      var imgwid = $('.imgPokTop').width();
      var pos = $('.imgPokTop').offset();
      var imgLeft = pos.left;
      imgLeft = (311-imgwid)/2 + imgLeft;
      var poss = $('.imgPokTop');
      poss.offset({left: imgLeft});
    }


    $('#burm1').click(function burm1(event)
      {
        sessionStorage.setItem('calMOP', 0)
        sessionStorage.setItem('nrburm', 1);

      }
    );
    $('#burm2').click(function burm2(event)
      {
        sessionStorage.setItem('calMOP', 0)
        sessionStorage.setItem('nrburm', 2);

      }
    );
    $('#burm3').click(function burm3(event)
      {
        sessionStorage.setItem('nrburm', 3);
        sessionStorage.setItem('calMOP', 0)
        clrZero();

      }
    );

    $('#burm4').click(function burm4(event)
      {
        sessionStorage.setItem('calMOP', 0)
        sessionStorage.setItem('nrburm', 4);

      }
    );
    $('#burm').click(function burm5(event)
      {
        sessionStorage.setItem('calMOP', 0)
        sessionStorage.setItem('nrburm', 5);

      }
    );






    $('.strlFt').click (function strlka(event)
      // see  mg-core/script/burGal.js
      {
        $('img.Levo').removeAttr('style');
        $('img.Pravo').removeAttr('style');
      }
    );
















    $('button').click(function PlusLp(event)
      {
        // Модифицирует ПрайсЛист: выбранный товар выводится на отдельный лист, ориенти руется вертикально, увеличивается, вставляется знак лупы минус. Изображения в классах в фоне

        var tt = event.target.parentElement.parentElement.textContent;
        let arDat = tt.split('\n');
        var nz = arDat[1];
        var c1 = arDat[2];
        var c2 = arDat[3];
        var c3 = arDat[4];
        var c4 = arDat[5];
        var c5 = arDat[6];
        var c6 = arDat[7];
        let idm = event.target.parentElement.id;
        var LinkCart = "https://moguta.elakor-floor.ru/catalog?inCartProductId=" + idm;
        $("#pb1").toggleClass('pb1Zero pb1Top');
        $('.lp').css({'background': '#380000', 'color': 'beige', 'display': 'block', 'width': '310px', 'position': 'relative', 'top': '0px'}); /*<tr><td colspan=2 class="prc_cellLp">'+ nz +'</td></tr>*/
        var htmlLP = '<table class="tblLup" ><tr><td class="prc_lupC">' + 'Объем' + '</td><td class="prc_lupC">' + 'Цена за 1 кг' + '</td></tr><tr><td class="prc_lup">' + '10-39кг' + '</td><td class="prc_lupC">' + c1 + '</td></tr><tr><td class="prc_lup">' + '40-199кг' + '</td><td class="prc_lupC">' + c2 + '</td></tr><tr><td class="prc_lup">' + '200-499кг' + '</td><td class="prc_lupC">' + c3 + '</td></tr><tr><td class="prc_lup">' + '500-1тн' + '</td><td class="prc_lupC">' + c4 + '</td></tr><tr><td class="prc_lup">' + '1-3тн' + '</td><td class="prc_lupC">' + c5 + '</td></tr><tr><td class="prc_lup">' + 'от 3тн' + '</td><td class="prc_lupC">' + c6 +'</td></tr></table> <div><button id="minLup" class="btgreenPrLMinus"></button> </div>' + '<div class="sale">' + '<a href=' + LinkCart +'><button id="SaBut" class="pressed-button">Купить</button></a></div>';
        $('header').after(htmlLP);
        $('.mainDispZero').css('display', 'none');
        $('div.slogan').css('color', '#008000');
        $("#pb1").toggleClass('pb1Zero pb1Top');
        let i = 0;
        while (i < nz.length)
        {
          i++;
          if (nz.charCodeAt(i)>64)
          {break;
          }
        }
        let nzstr = nz.substr(i);



        $('.txtopermsg').html(nzstr);
        let opermesto = $('.tblLup').offset()['top'] -27;
        $('.txtopermsg').css({'display': 'block', 'position': 'absolute', 'top': opermesto}
        )

        window.scrollTo(0, -400);


        $('#minLup').click(function MinusLup(event)
          {// console.log("zuruck  "); $('.mainDispZero').css('display', 'block'); $('.tblLup').css('display', 'none'); $('#minLup').css('display', 'none'); $('#SaBut').css('display', 'none'); mvz.scrollIntoView(top);
          }
        );



      }
    );















    if (urllE=="https://moguta.elakor-floor.ru/dostavka")
    {
      let hhn = parseInt($('main').height());
      let wwn = parseInt($('main').width());
      let ssn = hhn*wwn;
      let paddmn = Math.round(ssn/1500); // вписывает кнопку Прайс-листа в рамку страницы
      $('main').css({'top': paddmn, 'position': 'absolute'}
      );
      $('.txtopermsg').css('display', 'none'); //('Сделайте Ваш выбор');
      $("#pb1").removeAttr('style');
      $("#pb1").removeClass('pb1Zero pb1Top');
      $("#pb1").addClass('pb1Top');
      $('div.slogan').css({'background': 'rgb(0, 128, 0)', 'color': 'rgb(0, 128, 0)'}
      );
      document.querySelector('span.AttentGrn').style = "width: 72% !important;margin: 16% 0% 0% 0px !important;padding: 23% 11% 2% 5% !important;display: block !important;height: 116px !important;position: relative;left: -3vw;";
      document.querySelector('span.AttentYl').style = "width: 43px !important;margin: 23% -35% 5% 0px !important;padding: 9% 51% 29% 12% !important;display: block !important;height: 97px !important;";
      document.querySelector('table.tblclr').style = "border: 6px ridge #BA4C08!important;margin-bottom:1em!important;margin-left:-1%!important;box-shadow:5px 2px 17px 3px rgba(0,0,0,0.3)!important;text-align:center!important;border-collapse:collapse!important;font-size:12px;";
    }












    if (urllE=="https://moguta.elakor-floor.ru/obekty/poly-dlya-sklada")
    {
      //прайс
      $("#skl1ul").css('color', 'brown');
      $('a').css({'color': 'var(--colrBaz)', 'text-decoration': 'underline', 'font-size': 'calc(1.36rem )', 'background': '#afff00'}
      );
      $('section').css({'top': topOper, 'position': 'relative'}
      );
      $("#pb1").toggleClass('pb1Zero pb1Top');
    }







    if (urllE=="https://moguta.elakor-floor.ru/cart")
    {
      // console.log("InKorz  ");
      $('#minLup').css('display', 'none');
      $('#SaBut').css('display', 'none');
      $('.tblLup').css('display', 'none');
      $('.view_consult_form').css('display', 'none');
      $('#hero1').css('display', 'none');
      $("#pb1").toggleClass('pb1Zero pb1Top');
      $('.mainDispZero').css('display', 'block');
      var postop = $('.hdr_inner').offset().top +181;
      var poss = $('.mainDispZero');
      poss.offset({top: postop});
      $('.mainDispZero').css('left', '0vw');
      $('h1').css('width', '93.5vw');

    }

    if (urllE=="https://moguta.elakor-floor.ru/order")
    {
      // console.log("InKorz  ");
      $('#minLup').css('display', 'none');
      $('#SaBut').css('display', 'none');
      $('.tblLup').css('display', 'none');
      $('.view_consult_form').css('display', 'none');
      $('#hero1').css('display', 'none');
      $("#pb1").toggleClass('pb1Zero pb1Top');
      $('.mainDispZero').css('display', 'block');
      var postop = $('.hdr_inner').offset().top +142;
      var poss = $('.mainDispZero');
      poss.offset({top: postop}
      );
    }



    SetElm('img.tlfpng', 'div.wrapper-back-ring');
    SetElm('span.txtring', "");
    SetElm('.hdr_burger ', "");
 Design();

/*
1 - зероморд.
2 - list MOP.
3 - list Burg.
4 - contBurg.
5 - cont.
6 - cart.
7 - order.
8 - zak.
9 - mag.
*/
    console.log("switch  ", zs);
      switch (zs.slice(0,11))
        {
          case ('10000000001')://зероморд.
         clrZero();
         Form1();
         BotVib();
   $('.txtopermsg').html(zs.substr(11));
         break;

           case ('01000000000')://list MOP.
           TopVib();

         break;
           case ('001000000')://list Burg.
           TopVib();

         break;
           case ('000100000')://contBurg.
           TopVib();

         break;
           case ('000010000')://cont.
           TopVib();

         break;
           case ('000001000')://cart.

         break;
           case ('000000100')://order.
           TopVib();

         break;
           case ('000000010')://zak.
           TopVib();

         break;
           case ('000000001')://mag.
           TopVib();


}

});
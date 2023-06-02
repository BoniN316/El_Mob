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


/*      window.location.href = '/';*/
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
  let WinVert =0;
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

// zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;
//                 \ ___________________________\
//                  0                          1....5 Табы на листе товара    tabmenu
//                 \ ___________________________\
//                   1                          1...3 из МОР в Лист товаров выбранной группы MOP_list_clickAllitem
//                 \ ___________________________\
//                  2                            >0  из листа товаров в описание товара  FromListTovToTovar
//
//
const OperRand=['На рынке с 1996 года','Произведено более 25 млн. кв.метров наливных полов', 'Собственная производственная база','Более 10 филиалов и представительств','Оптом и в розницу','Хорошие скидки от объема закупки'];
$(document).ready(function rdstrt()
{
            zs=sessionStorage.getItem('zs');
            zs==null?zs="10000000001Закажите Ваш пол рестарт":"";
            sessionStorage.setItem('zs', zs);

    /*   sessionStorage.setItem('redy',1);/*/   //ф библиотеке jqyery-1/8/3.js по адресу mg-core/script в строке 386 считывается значение для вызова этой функции. Сделано для принудительной проверки при переходе с адреса на адрес

     const window_height = $(window).height();
     const docWidth = document.documentElement.offsetWidth;
     const WinBreit=document.documentElement.clientWidth;
     let urllE = location.href;
     let UrlImgProt=urllE.search('/protokoly-ispytaniy/');

     const topLosung =document.querySelector('.logoEl').getBoundingClientRect().bottom;//слоган
     const botLosung = topLosung+document.querySelector('.logoEl').getBoundingClientRect().height;//слоган

     const topOper=parseInt(botLosung)+35 + "px";//опер
     const height_hdr=parseInt(topOper) +30 + "px";
     const bottom_hdr=parseInt(document.querySelector('.tbl_hdr_inner').getBoundingClientRect().bottom) + 2 + "px";
     const topContent=parseInt(document.querySelector('.tbl_hdr_inner').getBoundingClientRect().bottom)
     const topVibor = document.querySelector('.view_consult_form').getBoundingClientRect().bottom;
     const topHero=document.querySelector('div.conteiner').getBoundingClientRect().top;
     const topForm=parseInt(document.querySelector('.tbl_hdr_inner').getBoundingClientRect().bottom)-parseInt(document.querySelector('div.conteiner').getBoundingClientRect().top);
    const knOfZak =parseInt(document.querySelector('#osn_info').getBoundingClientRect().bottom)  - 190 + "px";;
     $(".mainDispZero").removeAttr('style');
     $('.mainDispZero').css({'display':'none'});

    console.log("Const window_height=",window_height,"docWidth =",docWidth, "WinBreit=",WinBreit,"topLosung =",topLosung,"botLosung =",botLosung,"topOper=",topOper,"height_hdr=",height_hdr);
 console.log("Const bottom_hdr=",bottom_hdr,"topContent=",topContent,"topVibor=",topVibor,"topHero=",topHero,"topForm=",topForm,"knOfZak =",knOfZak);
razbor();



function razbor(){
/*BotVib();*/
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
$('div:has(.div_Predlog_button)').length>5?$('#Bnr').remove():false;

    console.log("switchiNrAZBOR  ", zs);
  if (zs.slice(0,1)=='z'){
  let zk=sessionStorage.getItem('zk');
     console.log("garazkkkkkkk", zk);
   switch(true) {
     case zk==1:  // if (x === 'value1')
      $('#cf_pokritie').val('Окрасочное покрытие');
       break;
      case zk==2:  // if (x === 'value1')
      $('#cf_pokritie').val('Наливной пол');
       break;
       case zk==3:  // if (x === 'value1')
      $('#cf_pokritie').val('Наполненное покрытие');
       break;
       case zk==4:  // if (x === 'value1')
      $('#cf_pokritie').val('Полимерное покрытие');
       break;
       case zk==5:  // if (x === 'value1')
      $('#cf_pokritie').val('Пропиточное покрытие');
       break;
        default:    // if (x === 'value1')
      $('#cf_pokritie').val('другое');
       break;

   }

     sessionStorage.removeItem('zk');
     sessionStorage.removeItem('zs');
      clrZero();
      // BurgCont();
        anlzTop(zs);
        rndOper();


               $('#hero1').attr('style','display:block');

               $('.mainDispZero').attr('style','display:none');
                   $('#out_consult_form').attr('style','display:block');
                   return false;
  }

      switch (true)
        {
case (zs.slice(0,11)=='10000000001')://зероморд.
        clrZero();
        Form1();
        anlzTop(zs);
                 $(".mainDispZero").removeAttr('style');
                 $('.mainDispZero').css({'display':'none'});

break;
case (zs.slice(0,11)=='01000000010')://list MOP.

        clrZero();
        stalin();
        anlzTop(zs);
                document.getElementById("cnt2").removeAttribute("style");
                $('#cnt2').css({'display': 'block',  'top': bottom_hdr,'padding':'3px'});

break;
case (zs.slice(0,11)=='00100000010')://list clik All ItemBurg.

        clrZero();
        show_burList();
        anlzTop(zs);
        rndOper();

break;
case (zs.slice(0,11)=='00010000010')://contBurg.

        clrZero();
        BurgCont();
        anlzTop(zs);
        rndOper();

               $('#hero1').removeAttr('style');
               $('#hero1').css('display','none');
               $('#out_consult_form').removeAttr('style');
               $('#out_consult_form').css('display','none');

break;
case (zs.slice(0,11)=='00005000010')://cont. покрытия

        clrZero();
        anlzTop(zs);
               $(".mainDispZero").removeAttr('style');
               $('.mainDispZero').css({'display':'block',top: topHero,'position':'absolute'});
        cont5('Смотрите оптовые цены.');
        topMrd();
        SetToTopVib();
               $('.mainDispZero').css({'display':'block'});

break;
case (zs.slice(0,11)=='00004000010')://cont. покрытия

        clrZero();
        anlzTop(zs);
               $(".mainDispZero").removeAttr('style');
               $('.mainDispZero').css({'display':'block',top: topHero,'position':'absolute'});
        cont4('Просмотрите сертификаты');
        topMrd();
        SetToTopVib();
               $('.mainDispZero').css({'display':'block'});

break;
case (zs.slice(0,11)=='00003000010')://cont. покрытия

        clrZero();
        anlzTop(zs);
              $(".mainDispZero").removeAttr('style');
              $('.mainDispZero').css({'display':'block',top: topHero,'position':'absolute'});
        cont3('Наиболее оптимальное применение');
        topMrd();
        SetToTopVib();
              $('.mainDispZero').css({'display':'block'});

break;
case (zs.slice(0,11)=='00002000010')://cont. объекты

        clrZero();  //установка в исходное морды
        anlzTop(zs);  //определяет куда ставить кнопку выбора в топ или вниз. включает  SetToTopVib() или  SetToBotVib()

              $(".mainDispZero").removeAttr('style');
              $('.mainDispZero').css({'display':'block',top: topHero,'position':'absolute'});
        cont2('Практическая инструкция');
        topMrd();
        SetToTopVib();
              $('.mainDispZero').css({'display':'block'});

break;
case (zs.slice(0,11)=='00001000010')://cont. материалы

        clrZero();
        anlzTop(zs);
              $(".mainDispZero").removeAttr('style');
              $('.mainDispZero').css({'display':'block',top: topHero,'position':'absolute'});
        cont1('Преимущества и особенности');
        topMrd();
        SetToTopVib();
              $('.mainDispZero').css({'display':'block'});

break;






 // ТОЛЬКО  для отображения  контента List Tolet при клике по кнопкам МОР START
//=
               case (parseInt(zs.substr(1,1))==1 && parseInt(zs.substr(4,1))>0)://cont. покрытия


                    clrZero();
                    anlzTop(zs);


                    topMrd();
                    SetToTopVib();
                                  $(".mainDispZero").removeAttr('style');
                                   $('.mainDispZero').css({'display': 'block','position': 'absolute','left': '0px','width': '100%','top': topContent*100/WinBreit+'%'});
console.log("topContent*100/WinBreit+'%'",topContent*100/WinBreit+'%');
let zs2=zs.substr(2);
                     zs='02' + zs2;
                     sessionStorage.setItem('zs', zs);
                break;



 // ТОЛЬКО  для отображения  контента из МОР  по ссылкам END


 // ТОЛЬКО  для отображения  контента  товара r  при клике по  ссылке на описание товара на ListToletSTART
//=
               case (parseInt(zs.substr(1,1))==2 && parseInt(zs.substr(4,1))>0)://cont. покрытия

                    clrZero();
                    anlzTop(zs);
                                   $(".mainDispZero").removeAttr('style');
                                   $('.mainDispZero').css({'display':'block',top: topHero,'position':'absolute'});

                    topMrd();
                    SetToTopVib();
                                   $('.mainDispZero').css({'display':'block'});
$('.txtopermsg').html('Преимущества и особенности');
                break;




 // ТОЛЬКО  для отображения  контента  товара r  при клике по  ссылке на описание товара на ListToletEND //



case (zs.slice(0,11)=='000001000')://cart.

     clrZero();
     anlzTop(zs);

break;
case (zs.slice(0,11)=='000000100')://order.

     clrZero();
     anlzTop(zs);

break;
case (zs.slice(0,11)=='000000010')://zak.

     clrZero();
     anlzTop(zs);

break;
case (zs.slice(0,11)=='000000001')://mag.
     clrZero();
     anlzTop(zs);


}// End Switch //
}//End Razbor//

 function anlzTop(astr){
          topMrd();
                console.log("astr ", astr.substr(9),astr.substr(10),astr.substr(11));
          astr.substr(9,1)==="1"?SetToTopVib():"";
          astr.substr(10,1)==="1"?setToBotVib():"";
                 $('.txtopermsg').html(astr.substr(11));
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
 zs=sessionStorage.getItem('zs');
 if (urllE=='https://moguta.elakor-floor.ru/dostavka')
{
              document.querySelector('span.AttentYl').style = 'width: 36vw !important; display: block;padding: 6%; position: relative; left: 2vw;top: 3vh;margin-top: 1vh;';
                 document.querySelector('span.AttentGrn').style = 'position: relative;left: -5vw; width: 31vw !important;display: block;padding: 2.7vw;margin-bottom: 4vh; top: 14px;';
 document.querySelector('.tblclr').style = 'width: 94%;border: 6px ridge #BA4C08;сellspacing: 0px;margin-bottom: 1em;margin-left: 3%;box-shadow: 5px 2px 17px 3px rgba(0,0,0,0.3);text-align: center;border-collapse: collapse;';
 }


if (urllE=='https://moguta.elakor-floor.ru/about-')
{
              document.querySelector('span.AttentGrn').style = 'width: 47% !important;padding: 7% 8% 2% 4% !important;display: block !important;height: 75px !important;float: left !important;position: static !important;margin: 125px 0px 7px 49px !important;'; document.querySelector('span.AttentYl').style = 'margin: 9% -620% 5% 17px !important;padding: 3% 11% 5% 9% !important;display: block !important;height: 116px !important;position: static !important;float: left !important;';
     if(document.querySelectorAll('p')!==null)
     {
              let elem = document.querySelectorAll('p');
              let stl = 'font-size: 16px; width: 100%; padding: 9px 3px 0px 24px;margin: 0;';
                      for (let i = 0; i <elem.length; i++) {
                        elem[i].style = stl;
                        elem[i].style.margin = null;
                      }
                 elem[15].style = 'font-size: 16px; width: 100%; padding: 111px 3px 0px 23px;margin: 0;';
     }
}
if (urllE=="https://moguta.elakor-floor.ru/protokoly-ispytaniy")
{
            document.querySelector('h1').style = "";
            let stl = "color:let(--colrBaz);text-decoration: underline;font-size: 12px;line-height: 29px;font-weight: 700;";
            let elem = $('.mainDispZero p a');
                    for (let i = 0; i <elem.length; i++) {
                      elem[i].style = stl; elem[i].style.margin = null;

}
}

if (UrlImgProt>10)
{
   $('img').attr('style', 'width:' + WinBreit + 'px');
   $('h1') .attr('style', 'background-color: rgba(0, 112, 0, 1);  color: rgb(0 0 0); text-align: center;');
   $('.tlfpng').removeAttr('style');
}






if (urllE=="https://moguta.elakor-floor.ru/contacts")
{
            $(".new-products-title").removeAttr('style');
            $(".new-products-title").css({'color': '#1a1a18','padding': '0vw','margin': '-1px 0px 7px 0vw','textAlign': 'center'});
           topMrd();
        SetToTopVib();
        rndOper();
}
if (urllE=="https://moguta.elakor-floor.ru/prays-list")
{
            let idTov = 0;
            $('h1').css('width', '92vw');
   $(".prc_cell").each(function(index, element)
   {
                let ptnhr = element.lastChild.href; //последний линк  a href
                let ptn = ptnhr.indexOf('=');
                ptn>0? idTov = ptnhr.slice(ptn + 1): idTov = 0;
                idTov>59? element.id = idTov: ""; //idTov отсчет  c 60
        if(element.lastChild.className=='btgreenPrL')
        {
                      element.lastChild.text = "";
                      element.lastChild.className = "btgreenPrLPlus " + "cl" + idTov;
                      element.lastChild.outerHTML = "<button class='btgreenPrLPlus'></button>"; /*element.lastChild.tagName="button";*/
        }
  });

}
}





 function show_burList()
{

        $('.hdr_burger,.hdr_menu').toggleClass('active');

        let hhn = parseInt($('nav').height());
        let wwn = parseInt($('nav').width());
        let ssn = hhn*wwn;
        let paddLi = Math.round(ssn/37000); // вписывает кнопку Прайс-листа в рамку страницы
        $('.hdr_li').css('padding', paddLi +'px')
        $('#stal').css('display', 'none');
        event.target.className=='hdr_burger active'? $('.view_consult_form').css('display', 'none'): $('.view_consult_form').css('display', 'block');
        event.target.className=='hdr_burger active'? $('.hero1').css('display', 'none'): $('.hero1').css('display', 'block');
        event.target.className=='hdr_burger active'? $('#pb1').css('display', 'none'): $('#pb1').css('display', 'block');
if(event.target.className=='hdr_burger active')
{
     SetToTopVib();
        $('#hero1').removeAttr('style');
        $('#hero1').css('display','none');
        $('#out_consult_form').removeAttr('style');
        $('#out_consult_form').css('display','none');
}
else{
    Form1();
    }
           $('.hdr_menu').is('.active')? $('.hdr_menu').css('display', 'block'): $('.hdr_menu').css('display', 'none');
           $('.hdr_menu').is('.active')? $('.txtopermsg').html('Сделайте Ваш выбор'): $('.txtopermsg').html(' Закажите Ваш пол burger');
           $('#hero1').removeAttr('style');


}



function rndOper()
{
          const min = Math.ceil(0);
          const max = Math.floor(5);
          let rnd= Math.floor(Math.random() * (max - min + 1)) + min; //Максимум и минимум включаются
          $('.txtopermsg').html(OperRand[rnd]);
}



function clrZero()
 {

      $('.hdr_burger').is('.active')? $('.hdr_burger').removeClass('.active'): $('.hdr_burger').css('display', 'block');
      $('.hdr_menu').is('.active')? $('.hdr_menu').removeClass('.active'): $('.hdr_menu').css('display', 'none');
      $('#stal').css('display', 'none');
      $('.view_consult_form').is('.active')? $('.view_consult_form').removeClass('.active'): $('.view_consult_form').css('display', 'block');
      $('.view_consult_form').removeAttr('style');
      $('.slogan').css({color: '#edffe5',top: botLosung+2+"px"});
      $(".close-ring-button").click();
      $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
      $('main').addClass('mainDispZero');
      $('.tlfpng').css('marginLeft', '21px');
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
          $('#hero1').removeAttr('style');
        event.target.className==' active'? $('.view_consult_form').css('display', 'none'): $('.view_consult_form').css('display', 'block');
        event.target.className=='hdr_burger active'? $('.hero1').css('display', 'none'): $('.hero1').css('display', 'block');
        event.target.className=='hdr_burger active'? $('#pb1').css('display', 'none'): $('#pb1').css('display', 'block');
            $('.hdr_burger').removeClass('active');
            $('.hdr_menu').removeClass('active');
            $('.hdr_menu').css('display','none');
            $('#hero1').css('display', 'none');

 topMrd();

}


    function setToBotVib()
{


  const newdiv = document.createElement("div");
  const newdivContent = document.createTextNode("Выбор материалов и готовых решений");
  newdiv.appendChild(newdivContent);
  newdiv.setAttribute ('id','pb1');
  document.querySelector("#cf_open").append(newdiv);
  newdiv.className="pressed-button";
       $('#pb1').remove();
       $("#pb1").addClass('pb1Zero');
       $("#pb1").css({'display': 'block', 'top': knOfZak,'position': 'absolute'});
       $(".slogan").removeAttr('style');
       $(".slogan").css({display: 'block',position: 'absolute',top: '33.1462px',left: '64px'});
       $('.txtopermsg').removeAttr('style');
       $('.txtopermsg').css({'display': 'block', 'position': 'absolute', 'top': topOper,'left':'3px'});



         $('#pb1').click(function ButVib_clikfrom_nodebot(event)
         {
                     zerMord = '0';
                     listMOP = '1';
                     listBurg = '0';
                     contBurg = '0';
                     contCont = '0';
                     contCart = '0';
                     contOrder = '0';
                     contZak = '0';
                     contMag = '0';
                     topVib = '1';
                     botVib = '0';
                     operMsg = 'bootСделайте Ваш выбор';
                     zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;
                                sessionStorage.setItem('zs', zs);
                                razbor();
        });

}

function topMrd()
{
    let urllE = location.href;
    let win = 0;
    let PosClik = '';
            $('.tbl_hdr_inner').removeAttr('style');
            $('div.slogan').removeAttr('style');
            $('div.conteiner').removeAttr('style');
            $('.txtopermsg').removeAttr('style');
            $('div.conteiner').removeAttr('style');
            $('.tbl_hdr_inner').css({'display': 'block', 'height': height_hdr});
            $('div.slogan').css({'display': 'block', 'position': 'absolute', 'top': topLosung, left: '64px'});
            $('.txtopermsg').css({'display': 'block', 'position': 'absolute', 'top': topOper,'left':'3px'});
            $('div.conteiner').css({'display': 'block', 'position': 'absolute', 'top': bottom_hdr});
}


function SetToTopVib()
{

        const newdiv = document.createElement("div");
        const newdivContent = document.createTextNode("Выбор материалов и готовых решений");
         $('#pb1').remove();
        newdiv.appendChild(newdivContent);
        newdiv.setAttribute ('id','pb1');
        document.querySelector("header").append(newdiv);
        newdiv.className="pressed-button";

                $("#pb1").addClass('pb1Top');
                $("#pb1").css({'display': 'block', 'top': topLosung});
                $('div.slogan').removeAttr('style');
                $('div.slogan').css({'background': 'rgb(0, 128, 0)', 'color': 'rgb(0, 128, 0)','display':'none'});
                $('.txtopermsg').removeAttr('style');
                $('.txtopermsg').css({'display': 'block', 'position': 'absolute', 'top': topOper,'left':'3px'});


                        $('#pb1').click(function TopVib_clikfrom_nodetop(event)
                        {
                                 zerMord = '0';
                                 listMOP = '1';
                                 listBurg = '0';
                                 contBurg = '0';
                                 contCont = '0';
                                 contCart = '0';
                                 contOrder = '0';
                                 contZak = '0';
                                 contMag = '0';
                                 topVib = '1';
                                 botVib = '0';
                                 operMsg = 'topСделайте Ваш выбор';
                                 zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;
                        sessionStorage.setItem('zs', zs);
                        razbor();
                       });

}







function Form1()
{
          $(".mainDispZero").removeAttr('style');
          $(".hero1").removeAttr('style');
          $("div.hero1").removeAttr('style');
          $('.mainDispZero').css({'display': 'none'});
          $('#haupt').css({'display': 'none'});
          $('div.hero1').css({'display': 'block', 'position': 'absolute'});
        $('#dop_info').css({'display': 'none'});
         $('#osn_info').css({'display': 'block'});
      setToBotVib();

}



function stalin()
{
        $('#cnt2').removeAttr('style');
        $('main').removeClass('mainMaterList mainPokrList mainPokr mainMater mainDisp mainDispZero');
        $('main').addClass('mainDispZero');
        $(".view_consult_form").removeAttr('style');
        $(".view_consult_form").css('display', 'none');

      $('.txtopermsg').html('Сделайте Ваш выбор');
      $('.txtopermsg').css('display', 'block');
      $('#stal').removeAttr('style');

 SetToTopVib();
      $('#stal').css({'display': 'block', 'position': 'absolute', 'top': parseInt(bottom_hdr)-31+"px"});
      $('#liGru').css({'position': 'absolute', top: '-17px', left: '30px'});
      $('#liNalpol').css({'position': 'absolute', top: '-2px', left: '24px'});
      $('#liSpa').css({'position': 'absolute', top: '-2px', left: '127px'});
      $('#liLak').css({'position': 'absolute', top: '35px', left: '74px'});
      $('#liKras').css({'position': 'absolute', top: '35px', left: '185px'});
      $('#cnt2').css({'display': 'block', 'top': bottom_hdr});

}



$('#Log').click(function Log_Clik(event)
{
        zs="10000000001Закажите Ваш пол под ключ"
        sessionStorage.setItem('zs', zs);
         window.location.href = 'https://moguta.elakor-floor.ru/';
        razbor();
});




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
    sessionStorage.setItem('zs', zs);
    razbor();
   });


 $('.hdr_list').click(function burList_clikAllitem(event)
{
         zerMord = '0';
         listMOP = '0';
         listBurg = '0';
         contBurg = '1';
         contCont = '0';
         contCart = '0';
         contOrder = '0';
         contZak = '0';
         contMag = '0';
         topVib = '1';
         botVib = '0';
         operMsg = 'Сделайте Ваш выбор';
         zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;
       sessionStorage.setItem('zs', zs);
       razbor();
});

 $('.tabl_stal_all_submenu').click(function MOP_List_clikAllitem(event)//кнопки выбора МОР...
 {
         zerMord = '0';
         listMOP = '0';
         listBurg = '0';
         contBurg = '0';
         contCont = '1';
         contCart = '0';
         contOrder = '0';
         contZak = '0';
         contMag = '0';
         topVib = '1';
         botVib = '0';
         operMsg = 'Сделайте Ваш выбор';
  console.log("garaz",event.target.id);

switch (true)
{

case (event.target.id == "liGru"):

        zs= zerMord+ '1' + listBurg+ contBurg+ '1'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+ 'Сделайте Ваш выбор грунтовки';
        sessionStorage.setItem('zs', zs);
        $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/grunty-gruntovki';

break;
case (event.target.id=="liLak"):
       zs= zerMord+ '1' + listBurg+ contBurg+ '1'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+   'Сделайте Ваш выбор лака';
       sessionStorage.setItem('zs', zs);
       $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/laki';

break;
case (event.target.id=="liKras"):
      zs= zerMord+ '1' + listBurg+ contBurg+ '1'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  'Сделайте Ваш выбор эмали';
      sessionStorage.setItem('zs', zs);
      $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/emali-kraski';

break;
case (event.target.id=="liNalpol"):
     zs= zerMord+ '1' + listBurg+ contBurg+ '1'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+   'Сделайте Ваш выбор наливного пола';
     sessionStorage.setItem('zs', zs);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/nalivnye-poly';

break;
case (event.target.id=="liSpa"):
     zs= zerMord+ '1' + listBurg+ contBurg+ '1'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  'Сделайте Ваш выбор шпатлевки';
     sessionStorage.setItem('zs', zs);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/materialy-elakor/shpatlevki';

break;
case (event.target.id=="liGar"):
     zs= zerMord+ '2' + listBurg+ contBurg+ '2'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+   'Сделайте Ваш выбор пола для гаража';
     sessionStorage.setItem('zs', zs);
     $('#ListTov').addClass('mainMater');

            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-garaja';

break;
case (event.target.id=="liSkl"):
     zs= zerMord+ '2' + listBurg+ contBurg+ '2'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+   'Сделайте Ваш выбор пола для склада';
     sessionStorage.setItem('zs', zs);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-sklada';

break;
case (event.target.id=="liCeh"):
     zs= zerMord+ '2' + listBurg+ contBurg+ '2'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+   'Сделайте Ваш выбор пола для цеха';
     sessionStorage.setItem('zs', zs);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-tseha';

break;
case (event.target.id=="liOf"):
     zs= zerMord+ '2' + listBurg+ contBurg+ '2'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  'Сделайте Ваш выбор пола для офиса';
     sessionStorage.setItem('zs', zs);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-ofisa';

break;
case event.target.id=="liMag":
     zs= zerMord+ '2' + listBurg+ contBurg+ '2'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  'Сделайте Ваш выбор пола для магазина';
     sessionStorage.setItem('zs', zs);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/obekty/poly-dlya-magazina';

break;
case (event.target.id=="liOkr"):
     zs= zerMord+ '1' + listBurg+ contBurg+ '3'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  'Сделайте Ваш выбор окрасочного покрытия';
     sessionStorage.setItem('zs', zs);
      sessionStorage.setItem('zk', 1);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/okrasochnye-poly';

break;
case (event.target.id=="liNal"):
     zs= zerMord+ '1' + listBurg+ contBurg+ '3'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+ 'Сделайте Ваш выбор наливного пола';
     sessionStorage.setItem('zs', zs);
     sessionStorage.setItem('zk', 2);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/nalivnye-poly';

break;
case (event.target.id=="liNap"):
     zs= zerMord+ '1' + listBurg+ contBurg+ '3'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  'Сделайте Ваш выбор наполненного покрытия';
     sessionStorage.setItem('zs', zs);
     sessionStorage.setItem('zk', 3);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/napolnennye-pokrytiya';

break;
case (event.target.id=="liSpez"):
     zs= zerMord+ '1' + listBurg+ contBurg+ '3'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  'Сделайте Ваш выбор полимерного покрытия';
    sessionStorage.setItem('zs', zs);
    sessionStorage.setItem('zk', 4);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya';

break;
case (event.target.id=="liProp"):
     zs= zerMord+ '1' + listBurg+ contBurg+ '3'+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  'Сделайте Ваш выбор пропитки для бетона';
    sessionStorage.setItem('zs', zs);
    sessionStorage.setItem('zk', 5);
     $('#ListTov').addClass('mainMater');
            window.location.href = 'https://moguta.elakor-floor.ru/pokrytiya/propitki-dlya-betona';

            break;
}

});






 $('.btgreenPrLPlus').click(function PlusLp(event)
{console.log("plus", event.target);
    // Модифицирует ПрайсЛист: выбранный товар выводится на отдельный лист, ориенти руется вертикально, увеличивается, вставляется знак лупы минус. Изображения в классах в фоне

        let tt = event.target.parentElement.parentElement.textContent;
        let arDat = tt.split('\n');
        let nz = arDat[1];
        let c1 = arDat[2];
        let c2 = arDat[3];
        let c3 = arDat[4];
        let c4 = arDat[5];
        let c5 = arDat[6];
        let c6 = arDat[7];
        let idm = event.target.parentElement.id;
        let LinkCart = "https://moguta.elakor-floor.ru/catalog?inCartProductId=" + idm;
        WinVert = window.pageYOffset;
        console.log("garazVert",WinVert);
        $("#pb1").toggleClass('pb1Zero pb1Top');
        $('.lp').css({'background': '#380000', 'color': 'beige', 'display': 'block', 'width': '310px', 'position': 'relative', 'top': '0px'}); /*<tr><td colspan=2 class="prc_cellLp">'+ nz +'</td></tr>*/
        let htmlLP = '<table class="tblLup" ><tr><td class="prc_lupC">' + 'Объем' + '</td><td class="prc_lupC">' + 'Цена за 1 кг' + '</td></tr><tr><td class="prc_lup">' + '10-39кг' + '</td><td class="prc_lupC">' + c1 + '</td></tr><tr><td class="prc_lup">' + '40-199кг' + '</td><td class="prc_lupC">' + c2 + '</td></tr><tr><td class="prc_lup">' + '200-499кг' + '</td><td class="prc_lupC">' + c3 + '</td></tr><tr><td class="prc_lup">' + '500-1тн' + '</td><td class="prc_lupC">' + c4 + '</td></tr><tr><td class="prc_lup">' + '1-3тн' + '</td><td class="prc_lupC">' + c5 + '</td></tr><tr><td class="prc_lup">' + 'от 3тн' + '</td><td class="prc_lupC">' + c6 +'</td></tr></table> <div><button id="minLup" class="btgreenPrLMinus"></button> </div>' + '<div class="sale">' + '<a href=' + LinkCart +'><button id="SaBut" class="pressed-button">Купить</button></a></div>';
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
          { $('.mainDispZero').css('display', 'block');
          $('.tblLup').css('display', 'none');
          $('#minLup').css('display', 'none');
          $('#SaBut').css('display', 'none');
             window.scrollTo(0, WinVert);
          }
        );



      }
    );

  $('.tabmenuR a').click(function tabmenu(event)
{

        let element = $(this),
        activeClassName = 'active',
        target = element.attr('href').split('_')[1];
        $('.tabcontent').removeClass(activeClassName);
        $('#'+target).addClass(activeClassName);
     zerMord = '0';
     listMOP = '0';
     listBurg = '0';
     contBurg = '0';
     contCont =target.substr(7);
     contCart = '0';
     contOrder = '0';
     contZak = '0';
     contMag = '0';
     topVib = '1';
     botVib = '0';
     operMsg = 'Лучшее решение - своевременное приобретение необходимого';
     zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;
        sessionStorage.setItem('zs', zs);

        razbor();
        topMrd();
        SetToTopVib();
}
);


    function cont5(txt)
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
   $('.txtopermsg').html(txt);

      };
   function cont4(txt)
      {
        $("#pb1").toggleClass('pb1Zero pb1Top');
        $('#PokKT').css('display', 'block');
        $('#abCen').css('display', 'block');
        $('#DContent4').addClass('active');
        $('#DContent5').removeClass('active');
        $('#DContent3').removeClass('active');
        $('#DContent2').removeClass('active');
        $('#DContent1').removeClass('active');
          $('.txtopermsg').html(txt);
      };










   function cont3(txt)
      {
        $("#pb1").toggleClass('pb1Zero pb1Top');
        $('#PokKT').css('display', 'block');
        $('#abCen').css('display', 'block');
        $('#DContent3').addClass('active');
        $('#DContent5').removeClass('active');
        $('#DContent4').removeClass('active');
        $('#DContent2').removeClass('active');
        $('#DContent1').removeClass('active');
          $('.txtopermsg').html(txt);
      };








   function cont2(txt)
      {
               $("#pb1").toggleClass('pb1Zero pb1Top');
        $('#PokKT').css('display', 'block');
        $('#abCen').css('display', 'block');
        $('#DContent2').addClass('active');
        $('#DContent5').removeClass('active');
        $('#DContent4').removeClass('active');
        $('#DContent3').removeClass('active');
        $('#DContent1').removeClass('active');
        $("#pb1").toggleClass('pb1Zero pb1Top');
          $('.txtopermsg').html(txt);

      };











    function cont1(txt)
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
          $('.txtopermsg').html(txt);

      };

$('#ListTov').click(function FromListTovToTovar(event){
 zerMord = '0';
 listMOP = '2';
 listBurg = '0';
 contBurg = '0';
 contCont ='1';
 contCart = '0';
 contOrder = '0';
 contZak = '0';
 contMag = '0';
 topVib = '1';
 botVib = '0';
 operMsg = 'Лучшее решение - своевременное приобретение необходимого';
 zs= zerMord+ listMOP+ listBurg+ contBurg+ contCont+ contCart+ contOrder+ contZak+ contMag+ topVib+ botVib+  operMsg;

sessionStorage.setItem('zs', zs);

});



    $('#ZakPokr').click(function ZakPokr(event)
      {
          let kod=zs.slice(1,11);

       zs="z" + kod + "Минимальный заказ 200 кв.м." ;
        sessionStorage.setItem('zs', zs);
        razbor();
      }
    );
        $("#cf_open").click(function ofzakaz(event)
      {
        sessionStorage.setItem('calMOP', 0)
        clrZero();
        $('#pb1').css('display', 'none');
        $('#osn_info').css('display', 'none');
        $('#dop_info').css('display', 'block');
           $('#hero1').css('display', 'block');
      }
    );


});

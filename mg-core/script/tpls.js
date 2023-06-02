

$(document).ready(function(){


// Условие для viewport шириной не менее ...... пикселей
const tel_320 = window.matchMedia(" only screen and (min-width:300px) and (max-width:399px)  ");
const tel_440 = window.matchMedia("only screen and (min-width:400px) and (max-width: 549px) ");
const tel_640 = window.matchMedia("only screen and (min-width:550px) and (max-width: 769px) ");
const tel_768 = window.matchMedia("only screen and (min-width:770px) and (max-width: 999px) ");
const tel_1024 = window.matchMedia("only screen and (min-width:1000px) and (max-width: 1200px) ");
const tel_1440 = window.matchMedia("only screen and (min-width:1201px) ");
let $key1;

function temp(e) {

  switch (true) {

    case (tel_320.matches):
$key1='el_320';
sessionStorage.setItem('tpl', $key1);

    break;
    case (tel_440.matches):
$key1='el_440';
sessionStorage.setItem('tpl', $key1);
    break;
        case (tel_640.matches):
$key1='el_640';
sessionStorage.setItem('tpl', $key1);
    break;
        case (tel_768.matches):
$key1='el_768';
sessionStorage.setItem('tpl', $key1);
    break;
        case (tel_1024.matches):
$key1='el_1024';
sessionStorage.setItem('tpl', $key1);
    break;
        case (tel_1440.matches):
$key1='el_1440';
sessionStorage.setItem('tpl', $key1);
    break;
  default:
$key1='el_320';
sessionStorage.setItem('tpl', $key1);
    break;

    }

$.ajax({
      type: "POST",
      url: "/ajaxrequest",
      dataType: 'text',
      data: {
        mguniqueurl: 'action/receptWdth',
        pluginHandler: 'tpls',
        key1: $key1,
      	  },
      success: function(response) {
        console.log("gut",response);
if(sessionStorage.getItem('tplo')==$key1){console.log("sesskey ", 'true');
}else{
sessionStorage.setItem('tplo', sessionStorage.getItem('tpl'));
    location.reload();
    }
      },
       error: function(req, text, error){ // отслеживание ошибок во время выполнения ajax-запроса
        console.log('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
      },
    });



    /**/


}

// Слушать события

tel_320.addListener(temp);
tel_440.addListener(temp);
tel_640.addListener(temp);
tel_768.addListener(temp);
tel_1024.addListener(temp);
tel_1440.addListener(temp);

temp();



})
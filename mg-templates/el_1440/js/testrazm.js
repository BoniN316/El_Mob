
var s,i,x;
x=document.querySelector('link');
for(i=0;i<x.length;i++)
{x[i].href+='?'+new Date().getTime();
}
for(i=0;i<x.length;i++)
{x[i].href+='?'+new Date().getTime();
}
function Zakkons()
{
document.location="https://moguta.elakor-floor.ru/zakazat-konsultatsiyu";
}

function mobmenGrid()
{localStorage.setItem('grid', 1);
let wdthgr=document.documentElement.clientWidth;/* ширина*/
if(wdthgr<450){
document.getElementById('BlockCatTov').style="display:none;";
document.getElementById('bl_cont_centr').style="grid-row:6!important;margin: -17px 0px 0px 10px;";
document.getElementById('main_futer').style="grid-row:7!important;";


}
if(wdthgr>451 && wdthgr<600 ){
document.getElementById('BlockCatTov').style="display:none;";
document.getElementById('bl_cont_centr').style="grid-row:5;";
document.getElementById('main_futer').style="grid-row:6;";
document.querySelector('main').style="margin: 24px 0px 0px 0px;";

}
if(wdthgr>579 && wdthgr<999 ){
document.getElementById('BlockCatTov').style="display:none;";
document.getElementById('bl_cont_centr').style="grid-row:5;";
document.getElementById('main_futer').style="grid-row:6;";
document.querySelector('main').style="margin: 24px 0px 0px 0px;";

}
}

function mobmenMain()
{localStorage.setItem('grid', 0);
let wdthgr=document.documentElement.clientWidth;
if(wdthgr<450){
document.getElementById('BlockCatTov').style="display:grid;"
document.getElementById('bl_cont_centr').style="grid-row:40!important;";
document.getElementById('main_futer').style="grid-row:41!important;";
document.querySelector('main').style="margin:0px;";
}
if(wdthgr>451 && wdthgr<579 ){
document.getElementById('BlockCatTov').style="display:grid;";
document.getElementById('bl_cont_centr').style="grid-row:30;";
document.getElementById('main_futer').style="grid-row:31;";
document.querySelector('main').style="margin:0px;";
document.getElementById('tblft').style="width: 221%;";
}
if(wdthgr>579 && wdthgr<630 ){
document.getElementById('BlockCatTov').style="display:grid;";
document.getElementById('bl_cont_centr').style="grid-row:31;";
document.getElementById('main_futer').style="grid-row:32;";
document.querySelector('main').style="margin:0px;";
document.getElementById('tblft').style="width: 221%;";
}




}
let wdthgg=document.documentElement.clientWidth;/* ширина*/
let grd=localStorage.getItem('grid');
if (grd==1 && wdthgg<1000){document.addEventListener("DOMContentLoaded",mobmenGrid)};
if (grd==0 ){ document.addEventListener("DOMContentLoaded",mobmenMain)};







document.addEventListener("DOMContentLoaded", function(event)
{
if(rzdprod===true) {
var elem=document.querySelectorAll('img');
console.log("querySelectorAll('img')  ",document.querySelectorAll('img') );
var stl="";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}
var hdr;
var hdrr;
hdr=document.getElementById("LMN");//object
hdrr=hdr;//in attrib
hdrr=hdrr.href;//linkstr from obj
//console.log("hdrr//",hdrr);
var wdt_pn=hdrr.indexOf("/css/")+5;//48
var wdt_pk=hdrr.indexOf(".css")-3;
//console.log(wdt_pn,wdt_pk);
var wdt_str=hdrr.substr(wdt_pn,wdt_pk-wdt_pn);//full

if (wdt_str=="st") {
 wRazr=1900;
//console.log("wRazr",wRazr);
} else {
var strRaz=wdt_str.indexOf("_");//selector

wRazr=wdt_str.substr(0,strRaz);//primnamerazm _from cssLink de facto

}

if(document.querySelectorAll('No_H-mob_men')!==null){document.querySelectorAll('No_H-mob_men').style="display:none;";  }//endif

var urllE=location.href;
var wRazr;
var wdthH=document.documentElement.clientWidth;/* ширина*/
var vhghtT=document.documentElement.clientHeight;
var rzdprod;
var rzdpokr;

if (document.getElementById('rzdMat')!==null)
{rzdprod=true;
 rzdpokr=false;
}
if (document.getElementById('rzdPokr')!==null) {
rzdprod=false;
 rzdpokr=true;
}

console.log("rzdpokr=", rzdpokr, "rzdprod=",rzdprod);
if(wdthH,1000){//перезагрузкадля мобильников
if(document.querySelectorAll('label.menu__btn')===null || document.querySelectorAll('label.menu__btn')===undefined){document.location.reload(true);}//endif
}

var tip;
var dpr=window.devicePixelRatio;
var iswdt=wdthH/1;
wdth=parseFloat(iswdt.toFixed());
iswdt=vhghtT/1;
vhght=parseFloat(iswdt.toFixed());
console.log("w/",wdth,"h/",vhght);
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(window.navigator.userAgent)) {
tip="mob";
console.log("mob",window.navigator.userAgent);

} else{
tip="pk";
    console.log("pk",window.navigator.userAgent);}

//выборка материало, покрытий
//выборка материало, покрытий
//выборка материало, покрытий
//выборка материало, покрытий
//выборка материало, покрытий
//выборка материало, покрытий




//zakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakaz
//zakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakaz
//zakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakaz
//zakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakaz
//zakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakaz
//zakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakazzakaz

if (urllE=="https://moguta.elakor-floor.ru/zakazat-konsultatsiyu" && wdth<450) {
var elem=document.querySelectorAll('li')
console.log("document.getElementsByTagName('li')  ", document.getElementsByTagName('li') );
var stl="width: 290px;";
for (let i = 2; i <elem.length; i++) {
 elem[i].style=stl;
}
var elem=document.querySelectorAll('div.bread-crumbs')
var stl="margin: 14% 0% 0% 3%;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl
}
}




//prays-listprays-listprays-listprays-listprays-listprays-list
//prays-listprays-listprays-listprays-listprays-listprays-list
//prays-listprays-listprays-listprays-listprays-listprays-list
//prays-listprays-listprays-listprays-listprays-listprays-list
//prays-listprays-listprays-listprays-listprays-listprays-list
//prays-listprays-listprays-listprays-listprays-listprays-list
//prays-listprays-listprays-listprays-listprays-listprays-list
//prays-listprays-listprays-listprays-listprays-listprays-list

if (urllE=="https://moguta.elakor-floor.ru/prays-list" && wdth<450) {
var elem=document.querySelectorAll('strong')
console.log("document.querySelectorAll('strong')  ", document.querySelectorAll('strong') );
var stlo1="margin: 13px 0% 0% 9px;display: block;";
var stl2="margin: 13px 0% 0% -18px;display: block;";
 elem[0].style=stlo1;
 elem[1].style=stlo1;
for (let i = 2; i <elem.length; i++) {
 elem[i].style=stl2;
}

var elem=document.querySelectorAll('a.btgreenPrL')
var stl="display: none;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}
}

if (urllE=="https://moguta.elakor-floor.ru/prays-list" && wdth>450 && wdth<600 ) {
var elem=document.querySelectorAll('strong')
var stl="margin: 13px 0% 0% -31px;display: block;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl
}



document.querySelector('h3').style="font-size:17px;";

}
if (urllE=="https://moguta.elakor-floor.ru/prays-list" && wdth>700 && wdth<1000 ) {
var elem=document.querySelectorAll('p');
 var findElement;
 for (let i = 0; i <elem.length; i++) {
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor

var elem=document.querySelectorAll('strong')
var stl="margin: 13px 0% 0% -31px;display: block;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl
}

if (urllE=="https://moguta.elakor-floor.ru/prays-list") {
var elem=document.querySelectorAll('h3')
var stl="font-size:17px;margin: 2% 0% 3% 5%;padding: 1% 0% 2% 0%;width: 595px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl
}
}
if (urllE=="https://moguta.elakor-floor.ru/prays-list") {
var elem=document.querySelectorAll('td')
var stl="padding: 3px 7px 0px 0px !important;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl
}
}
}


//dostavkadostavkadostavkadostavkadostavkadostavkadostavkadostavka
//dostavkadostavkadostavkadostavkadostavkadostavkadostavkadostavka
//dostavkadostavkadostavkadostavkadostavkadostavkadostavkadostavka
//dostavkadostavkadostavkadostavkadostavkadostavkadostavkadostavka
//dostavkadostavkadostavkadostavkadostavkadostavkadostavkadostavka
//dostavkadostavkadostavkadostavkadostavkadostavkadostavkadostavka
if (urllE=="https://moguta.elakor-floor.ru/dostavka") {
function dostE(){
 if (x350_400.matches){
document.querySelector('span.AttentGrn').style="width: 131% !important;margin: 23% 0% 17% 9px !important;padding: 23% 11% 2% 5% !important;display: block !important;height: 116px !important;position: static !important;";
document.querySelector('span.AttentYl').style="width: 84px !important;margin: 23% -129% 5% 282px !important;padding: 10% 38% 38% 16% !important;display: block !important;height: 97px !important;";
console.log("x350_400  ",x350_400);

var elem=document.querySelectorAll('div.bread-crumbs')
var stl="margin: 14% 0% 0% 3%;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl
}

 }
 if (x400_480.matches){
document.querySelector('span.AttentYl').style="width: 134px !important;margin: -118px -250px 5px 0px !important;padding: 7% 22% 0% 10% !important;display: block !important;height: 90px !important;";
document.querySelector('span.AttentGrn').style="width: 155%;margin: 16px 0px 17px -15px;padding: 9% 11% 0% 5%;display: block;height: 90px;position: static;float: left;";
document.querySelector('table.tblclr').style="width: 145% !important;margin: 24% 0% 17% 0px !important;padding: 9% 11% 0% 5% !important;display: block !important;height: 97px !important;position: static !important;float: left !important;";


 }
 if (x500_580.matches){
document.querySelector('span.AttentYl').style="width: 159px;margin: -95% -257% 5% 0px;padding: 2% 10% 4% 8%;display: block;height: 83px ";
document.querySelector('span.AttentGrn').style="width: 161%;margin: 6px 0px 17px 10px;padding: 9% 11% 0% 5%;display: block;height: 79px;position: static;float: left; ";
document.querySelector('table.tblclr').style="width: 188% !important;border: 9px ridge rgb(186, 76, 8) !important;margin-bottom: 1em !important;margin-left: -4px !important;box-shadow: rgba(0, 0, 0, 0.3) 5px 2px 17px 3px !important;text-align: center !important;border-collapse: collapse !important;float: left;font-size: 92%;";

 }




 if (x580_630.matches){

 var elem=document.querySelectorAll('p');
 var findElement;
 for (let i = 0; i <elem.length; i++) {
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor




if(document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl')
var stl="width: 174px;margin: -27% 0% 0% 273px;padding: 2% 5% 0% 4%;display: block;height: 101px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}
}
if(document.querySelectorAll('span.AttentGrn')!==null){
var elem=document.querySelectorAll('span.AttentGrn')
var stl="width: 32%;margin: 53px 0px 17px 1px;padding: 2% 11% 2% 5%;display: block;height: 90px;position: static;float: left;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}
}

if(document.querySelectorAll('table.tblclr')!==null){
var elem=document.querySelectorAll('table.tblclr')
var stl="width: 161% !important;border: 9px ridge rgb(186, 76, 8) !important;box-shadow: rgba(0, 0, 0, 0.3) 5px 2px 17px 3px !important;text-align: center !important;border-collapse: collapse !important;float: left;font-size: 109%;margin: 2% 0% 0%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}
}
 }//end match


 if (x630_700.matches){

 var elem=document.querySelectorAll('p');
 var findElement;
 for (let i = 0; i <elem.length; i++) {
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor



if(document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl')
var stl="width: 174px;margin: -19% 0% 0% 341px;padding: 3% 3% 0% 0%;display: block;height: 94px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
if(document.querySelectorAll('span.AttentGrn')!==null){
var elem=document.querySelectorAll('span.AttentGrn')
var stl="width: 31%;margin: -8px 11px 93px 1px;padding: 3% 8% 2% 4%;display: block;height: 90px;position: static;float: left;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif

if(document.querySelectorAll('table.tblclr')!==null){
var elem=document.querySelectorAll('table.tblclr')
var stl="width: 120% !important;border: 9px ridge rgb(186, 76, 8) !important;box-shadow: rgba(0, 0, 0, 0.3) 5px 2px 17px 3px !important;text-align: center !important;border-collapse: collapse !important;float: left;font-size: 109%;margin: -2% 0% 0% 0px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
 }//end match




 if (x750_800.matches){

 var elem=document.querySelectorAll('p');
 var findElement;
 for (let i = 0; i <elem.length; i++) {
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor


if(document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl')
var stl="width: 174px;margin: -7% 0% 0% 369px;padding: 3% 3% 0% 0%;display: block;height: 110px;font-size: 15px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
if(document.querySelectorAll('span.AttentGrn')!==null){
var elem=document.querySelectorAll('span.AttentGrn')
var stl="width: 23%;margin: -7px 0px 17px 1px;padding: 3% 6% 1% 5%;display: block;height: 112px;position: static;float: left;font-size: 15px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif

if(document.querySelectorAll('table.tblclr')!==null){
var elem=document.querySelectorAll('table.tblclr')
var stl="width: 110% !important;border: 9px ridge rgb(186, 76, 8) !important;box-shadow: rgba(0, 0, 0, 0.3) 5px 2px 17px 3px !important;text-align: center !important;border-collapse: collapse !important;float: left;font-size: 109%;margin: 4% 0% 0%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
 }//end match


 if (x800_850.matches){

 var elem=document.querySelectorAll('p');
 var findElement;
 for (let i = 0; i <elem.length; i++) {
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor


if(document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl')
var stl="width: 174px; margin: -26% 0% 0% 369px; padding: 3% 3% 0% 0%; display: block; height: 110px; font-size: 15px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
if(document.querySelectorAll('span.AttentGrn')!==null){
var elem=document.querySelectorAll('span.AttentGrn')
var stl="width: 23%;margin:83px  0px 17px 1px;padding: 3% 6% 1% 5%;display: block;height: 112px;position: static;float: left;font-size: 15px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif

if(document.querySelectorAll('table.tblclr')!==null){
var elem=document.querySelectorAll('table.tblclr')
var stl="width: 110% !important;border: 9px ridge rgb(186, 76, 8) !important;box-shadow: rgba(0, 0, 0, 0.3) 5px 2px 17px 3px !important;text-align: center !important;border-collapse: collapse !important;float: left;font-size: 109%;margin: 4% 0% 0%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
 }//end match

 if (x850_1000.matches){

 var elem=document.querySelectorAll('p');
 var findElement;
 for (let i = 0; i <elem.length; i++) {
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor


if(document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl')
var stl="width: 174px;margin: -35% 0% 0% 373px;padding: 3% 3% 0% 2%;display: block;height: 110px;font-size: 15px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
if(document.querySelectorAll('span.AttentGrn')!==null){
var elem=document.querySelectorAll('span.AttentGrn')
var stl="width: 19%;margin: 13% 0% 17% -23px;padding: 3% 7% 0% 5%;display: block;height: 95px;position: static;float: left;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif

if(document.querySelectorAll('table.tblclr')!==null){
var elem=document.querySelectorAll('table.tblclr')
var stl="width: 100% !important;border: 9px ridge rgb(186, 76, 8) !important;box-shadow: rgba(0, 0, 0, 0.3) 5px 2px 17px 3px !important;text-align: center !important;border-collapse: collapse !important;float: left;font-size: 109%;margin: 4% 0% 0%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
 }//end match
}//endiffunctiondostavka
var x350_400 = window.matchMedia(" only screen and (min-width:350px) and (max-width:400px)  ");
var x400_480 = window.matchMedia("only screen and (min-width:401px) and (max-width: 481px) ");
var x500_580=window.matchMedia("only screen and (min-width:499px) and (max-width: 581px) ");
var x580_630 = window.matchMedia("only screen and (min-width:579px) and (max-width: 629px) ");
var x630_700 = window.matchMedia("only screen and (min-width:629px) and (max-width: 700px) ");
var x750_800 = window.matchMedia("only screen and (min-width:750px) and (max-width: 799px) ");
var x800_850 = window.matchMedia("only screen and (min-width:799px) and (max-width: 850px) ");
var x850_1000 = window.matchMedia("only screen and (min-width:849px) and (max-width: 1000px) ");
x350_400.addListener(dostE);
x400_480.addListener(dostE);
x500_580.addListener(dostE);
x580_630.addListener(dostE);
x630_700.addListener(dostE);
x750_800.addListener(dostE);
x800_850.addListener(dostE);
x850_1000.addListener(dostE);
dostE();
}//endifdostavka





// about-about-about-about-about-about-about-about-about-about-about-about-
// about-about-about-about-about-about-about-about-about-about-about-about-
// about-about-about-about-about-about-about-about-about-about-about-about-
// about-about-about-about-about-about-about-about-about-about-about-about-
// about-about-about-about-about-about-about-about-about-about-about-about-
// about-about-about-about-about-about-about-about-about-about-about-about-
// about-about-about-about-about-about-about-about-about-about-about-about-
// about-about-about-about-about-about-about-about-about-about-about-about-
if (urllE=="https://moguta.elakor-floor.ru/about-"){
function aboutE() {
  if (x350_400.matches) {
document.querySelector('span.AttentGrn').style="width: 47% !important;padding: 7% 8% 2% 4% !important;display: block !important;height: 75px !important;float: left !important;position: static !important;margin: 0px 0px 7px 49px !important;";
document.querySelector('span.AttentYl').style="margin: 9% -620% 5% 53px !important;padding: 3% 11% 5% 9% !important;display: block !important;height: 116px !important;position: static !important;float: left !important;";
console.log("x350_400  ",x350_400);
document.querySelector('main').style="display: block !important;width: 52% !important;";
if(document.querySelectorAll('p')!==null){
 var elem=document.querySelectorAll('p')
 var stl="";
  for (let i = 0; i <elem.length; i++) {

elem[i].style.width=null;
elem[i].style.margin=null;
 }}//end for
var elem=document.querySelectorAll('div.bread-crumbs')
var stl="margin: 14% 0% 0% 3%;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl
}

  }//endifmatch
 if (x400_480.matches){
document.querySelector('span.AttentGrn').style="width: 139%!important;margin: 184% 0% 17% -101px!important;padding: 9% 11% 0% 5%!important;display: block!important;height: 79px!important;position: static!important;float: left!important;";
document.querySelector('span.AttentYl').style="width: 129%!important;margin: 8% -621% 5% 13px!important;padding: 7% 8% 7% 5%!important;display: block!important;height: 99px!important;position: static!important;float: left!important;";
console.log("wdthH<579 ",wdth);

 }
  if (x500_580.matches){
document.querySelector('span.AttentGrn').style="width: 139%!important;margin: 184% 0% 17% -101px!important;padding: 9% 11% 0% 5%!important;display: block!important;height: 79px!important;position: static!important;float: left!important;";
document.querySelector('span.AttentYl').style="width: 129%!important;margin: 8% -621% 5% 13px!important;padding: 7% 8% 7% 5%!important;display: block!important;height: 99px!important;position: static!important;float: left!important;";
console.log("wdthH<579 ",wdth);

 }

if (x580_630.matches){

 var elem=document.querySelectorAll('p');
 var findElement;
 for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor
document.querySelector('span.AttentGrn').style="width: 20% !important;padding: 2% 15% 5% !important;display: block !important;height: 75px !important;float: right !important;position: static !important;margin: -99px 45px 0px 0px !important;";

document.querySelector('span.AttentYl').style="width: 27% !important;margin: 1% 0% 5% 24px !important;padding: 1% 8% 7% 5% !important;display: block !important;height: 80px !important;position: static !important;float: left !important;";


}

if (x630_700.matches){


elem=document.querySelectorAll('p');
findElement;
 for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor
document.querySelector('span.AttentGrn').style="width: 20% !important;padding: 2% 15% 5% !important;display: block !important;height: 75px !important;float: right !important;position: static !important;margin: -99px 45px 0px 0px !important;";

document.querySelector('span.AttentYl').style="width: 27% !important;margin: -6% 0% 5% 24px !important;padding: 7% 8% 7% 5% !important;display: block !important;height: 99px !important;position: static !important;float: left !important;";



}//endmatch


 if (x750_800.matches){





if(document.querySelectorAll('span.AttentYl')!==null){
elem=document.querySelectorAll('span.AttentYl')
stl="width: 174px;    margin: 4% 0% 1% 77px;    padding: 2% 3% 1% 0%;    display: block;    height: 94px;    float: left;    position: static;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}//endfor
}//endif
if(document.querySelectorAll('span.AttentGrn')!==null){
elem=document.querySelectorAll('span.AttentGrn')
stl="width: 36%; margin:21px 0px 17px 77px; padding:4% 0% 0%; display: block;height: 90px; position: static;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}//endfor
}//endif

}//endifmatch

if (x800_850.matches){


if(document.querySelectorAll('span.AttentYl')!==null){
elem=document.querySelectorAll('span.AttentYl')
stl="width: 174px;    margin: 4% 0% 1% 77px;    padding: 2% 3% 1% 0%;    display: block;    height: 94px;    float: left;    position: static;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}//endfor
}//endif
if(document.querySelectorAll('span.AttentGrn')!==null){
elem=document.querySelectorAll('span.AttentGrn')
stl="width: 36%; margin:21px 0px 17px 77px; padding:4% 0% 0%; display: block;height: 90px; position: static;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}//endfor
}//endif

 }//end match


if (x850_1000.matches){


if(document.querySelectorAll('span.AttentYl')!==null){
elem=document.querySelectorAll('span.AttentYl')
stl="width: 206px;padding: 2% 2% 1% 3%;display: block;height: 99px;float: left;position: static;margin: 3% -62% 5% 65px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}//endfor
}//endif
if(document.querySelectorAll('span.AttentGrn')!==null){
elem=document.querySelectorAll('span.AttentGrn')
stl="width: 36%;margin: 21px 0px 17px 469px;padding: 4% 0% 0%;display: block;height: 90px;position: static;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}//endfor
}//endif

 }//end match






}//endfunctionabout
var x350_400 = window.matchMedia(" only screen and (min-width:350px) and (max-width:400px)  ");
var x400_480 = window.matchMedia("only screen and (min-width:401px) and (max-width: 481px) ");
var x500_580=window.matchMedia("only screen and (min-width:499px) and (max-width: 581px) ");
var x580_630 = window.matchMedia("only screen and (min-width:579px) and (max-width: 629px) ");
var x630_700 = window.matchMedia("only screen and (min-width:629px) and (max-width: 700px) ");
var x750_800 = window.matchMedia("only screen and (min-width:750px) and (max-width: 799px) ");
var x800_850 = window.matchMedia("only screen and (min-width:799px) and (max-width: 850px) ");
var x850_1000 = window.matchMedia("only screen and (min-width:849px) and (max-width: 1000px) ");
x350_400.addListener(aboutE);
x400_480.addListener(aboutE);
x500_580.addListener(aboutE);
x580_630.addListener(aboutE);
x630_700.addListener(aboutE);
x750_800.addListener(aboutE);
x800_850.addListener(aboutE);
x850_1000.addListener(aboutE);
aboutE();



}//endifabout






// Установки элемнтов для описаний продукции
// Установки элемнтов для описаний продукции
// Установки элемнтов для описаний продукции
// Установки элемнтов для описаний продукции
// Установки элемнтов для описаний продукции
// Установки элемнтов для описаний продукции

// Установки элемнтов для описаний продукции
if(rzdprod===true)
{

function prodE() {

  if(xpkall.matches){ // для всех мобильниых

   if (document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl');
var stl="position: static;display: contents;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}
}//endif


if (document.querySelectorAll('div.AttentYl')!==null){
var elem=document.querySelectorAll('div.AttentYl');
var stl="position: static;display: contents;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}
}//endif
   if (document.querySelectorAll('p.AttentYl')!==null){
var elem=document.querySelectorAll('p.AttentYl');
var stl="position: static;display: contents;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}
}//endif




}//endmatch




  if (p360_499.matches) { // Если медиа запрос совпадает


if (document.querySelector('span.AttentBlu')!==null){
    document.querySelector('span.AttentBlu').style="text-align:center;margin: 4% 1% 0% 1% !important; width:83%; position: static;padding: 5% 3% 5% 3%;height: 67px;display: contents;";
}

if (document.querySelector('span.AttentGrn')!==null){
    document.querySelector('span.AttentGrn').style="text-align:center;margin: 4% 1% 0% 1% !important; width:83%; position: static;padding: 5% 3% 5% 3%;height: 89px;";
}

if (document.querySelectorAll("img")[3]!==undefined){
    document.querySelectorAll("img")[3].style="width:250px!important;height:250px!important;margin:19px!important;";
}
else
{
if (document.querySelectorAll("img")[2]!==undefined){
    document.querySelectorAll("img")[2].style="width:250px!important;height:250px!important;margin:19px!important;"
}
else
{document.querySelectorAll("img")[1].style="width:250px!important;height:250px!important;margin:19px!important;"
}
}

  }//endmatch

 if (p499_630.matches){


if (document.querySelector('ul.border')!==null){

var elem=document.querySelectorAll('ul.border');
var stl="width: 109%;margin: 0% 0% 0% 5%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl
}
}

if (document.querySelector('span.AttentBlu')!==null){
    document.querySelector('span.AttentBlu').style="position: static;display: block;width: 262px !important;margin: 3% 0% 0% 68px !important;padding: 3% 5% 3% 6% !important;float: left;height: 20%;";
}
if (document.querySelector('span.AttentGrn')!==null){
    document.querySelector('span.AttentGrn').style="text-align: center;margin: 4% 1% 0% 4% !important;width: 54%;position: static;padding: 5% 3%;height: 89px;";
}
if (document.querySelectorAll("img")!==undefined){
var elem=document.querySelectorAll('img')
var stl="margin: 22px;border-width: 3px;border-style: solid;width: 330px;height: 327px;float: left;border-color: #f7db6c;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl
}
}

if (document.querySelectorAll('p.pa')!==null){

var elem=document.querySelectorAll('p.pa')
var stl="margin: 0% 0% 0% 4%;padding: 0% 0% 0% 2%;width: 116%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl
}
}


 }//endmatch


 if (p631_700.matches){


if (document.querySelector('span.AttentBlu')!==null){
    document.querySelector('span.AttentBlu').style="text-align: left;float: left;width: 43%;height: 81px;margin: 0% 0% 0% 6%;padding: 0% 4% 0% 15%;";
}

if (document.querySelector('span.AttentGrn')!==null){
    document.querySelector('span.AttentGrn').style="text-align: left;float: left;width: 40%;margin: 2% 0% 0% 51%;padding: 0% 3% 10% 5%;";
}

if (document.querySelector('ul.border')!==null){

var elem=document.querySelectorAll('ul.border');
var stl="width: 109%;margin: 0% 0% 0% 5%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}

if (document.querySelectorAll('p.pa')!==null){

var elem=document.querySelectorAll('p.pa')
var stl="margin: 0% 0% 0% 4%;padding: 0% 0% 0% 2%;width: 116%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}

   if (document.querySelectorAll('img')!==null){
        console.log("document.querySelectorAll('img') ",  "781" );
var elem=document.querySelectorAll('img');
var stl="width:250px!important;height:250px!important;margin:19px!important;float:left";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}//endifimmg
}//endmatch

 if (p750_800.matches){


  var elem=document.querySelectorAll('p');
  var findElement;
  for (let i = 0; i <elem.length; i++) {
   //найти узел, который мы хотим удалить
   if(elem[i].innerHTML==""){
       findElement=elem[i];
 findElement.parentNode.removeChild(findElement);
       }//endif
  }//endfor

if (document.querySelector('span.AttentBlu')!==null){
    document.querySelector('span.AttentBlu').style="text-align: left;float: left;width: 43%;height: 81px;margin: 0% 0% 0% 6%;padding: 0% 4% 0% 15%;";
}

if (document.querySelector('span.AttentGrn')!==null){
    document.querySelector('span.AttentGrn').style="text-align: left;float: left;width: 40%;margin: 2% 0% 0% 51%;padding: 0% 3% 10% 5%;";
}

if (document.querySelector('ul.border')!==null){

var elem=document.querySelectorAll('ul.border');
var stl="width: 109%;margin: 0% 0% 0% 5%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}

if (document.querySelectorAll('p.pa')!==null){

var elem=document.querySelectorAll('p.pa')
var stl="margin: 0% 0% 0% 4%;padding: 0% 0% 0% 2%;width: 116%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}

   if (document.querySelectorAll('img')!==null){
         console.log("document.querySelectorAll('img') ",  "830" );
var elem=document.querySelectorAll('img');
var stl="width:250px!important;height:250px!important;margin:19px!important;float:left";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}//endifimmg
 }//end match

 if (p800_850.matches){


  var elem=document.querySelectorAll('p');
  var findElement;
  for (let i = 0; i <elem.length; i++) {
   //найти узел, который мы хотим удалить
   if(elem[i].innerHTML==""){
       findElement=elem[i];
 findElement.parentNode.removeChild(findElement);
       }//endif
  }//endfor

if (document.querySelector('span.AttentBlu')!==null){
    document.querySelector('span.AttentBlu').style="text-align: left;float: left;width: 43%;height: 81px;margin: 0% 0% 0% 6%;padding: 0% 4% 0% 15%;";
}

if (document.querySelector('span.AttentGrn')!==null){
    document.querySelector('span.AttentGrn').style="text-align: left;float: left;width: 40%;margin: 2% 0% 0% 51%;padding: 0% 3% 10% 5%;";
}

if (document.querySelector('ul.border')!==null){

var elem=document.querySelectorAll('ul.border');
var stl="width: 90%;margin: 0% 0% 0% 5%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}

if (document.querySelectorAll('p.pa')!==null){

var elem=document.querySelectorAll('p.pa')
var stl="margin: 0% 0% 0% 4%;padding: 0% 0% 0% 2%;width: 116%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}

   if (document.querySelectorAll('img')!==null){
         console.log("document.querySelectorAll('img') ",  "878" );
var elem=document.querySelectorAll('img');
var stl="width:250px!important;height:250px!important;margin:19px!important;float:left";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}//endifimmg
 }//end match

 if (p850_1000.matches){


  var elem=document.querySelectorAll('p');
  var findElement;
  for (let i = 0; i <elem.length; i++) {
   //найти узел, который мы хотим удалить
   if(elem[i].innerHTML==""){
       findElement=elem[i];
 findElement.parentNode.removeChild(findElement);
       }//endif
  }//endfor

if (document.querySelector('span.AttentBlu')!==null){
    document.querySelector('span.AttentBlu').style="text-align: left;float: left;width: 43%;height: 81px;margin: 0% 0% 0% 6%;padding: 0% 4% 0% 15%;";
}

if (document.querySelector('span.AttentGrn')!==null){
    document.querySelector('span.AttentGrn').style="text-align: left;float: left;width: 40%;margin: 2% 2% 0% 12%;padding: 1% 7% 9% 7%;height: 1px;";
}

if (document.querySelector('ul.border')!==null){

var elem=document.querySelectorAll('ul.border');
var stl="width: 90%;margin: 0% 0% 0% 5%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}

if (document.querySelectorAll('p.pa')!==null){

var elem=document.querySelectorAll('p.pa')
var stl="margin: 0% 0% 0% 4%;padding: 0% 0% 0% 2%;width: 116%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}
}

   if (document.querySelectorAll('img')!==null){

var elem=document.querySelectorAll('img');

var stl="width: 250px !important;height: 250px!important;float: left;margin: -122px 0px 0px 145px!important;";
for (let i = 0; i <elem.length; i++) {

if(i===1) {elem[i].style=stl;}
else{
 if(i>1) {elem[i].setAttribute('style', 'width: 450px!mportant;height: 450px!important;margin: 19px 55px -3px 146px!important;');
 console.log("elem[i].style  ",i,elem[i].alt);
}

}
}//endfor
}//endifimmg



 }//end match






}//endfunk
var xpkall= window.matchMedia(" only screen and (min-width:350px) and (max-width:999px)  ");
var p360_499 = window.matchMedia(" only screen and (min-width:350px) and (max-width:499px)  ");
var p499_630 = window.matchMedia(" only screen and (min-width:499px) and (max-width:630px)  ");
var p631_700 = window.matchMedia(" only screen and (min-width:631px) and (max-width:700px)  ");
var p750_800 = window.matchMedia(" only screen and (min-width:749px) and (max-width:799px)  ");
var p800_850 = window.matchMedia(" only screen and (min-width:799px) and (max-width:850px)  ");
var p850_1000 = window.matchMedia(" only screen and (min-width:851px) and (max-width:1000px)  ");
prodE();
p360_499.addListener(prodE);
p499_630.addListener(prodE);
p631_700.addListener(prodE);
p750_800.addListener(prodE);
p800_850.addListener(prodE);
p850_1000.addListener(prodE);
xpkall.addListener(prodE);

}// конец продуктовконец продуктовконец продуктовконец продуктовконец продуктовконец продуктовконец продуктовконец продуктов





//установки элементов для раздела покрытий
//установки элементов для раздела покрытий
//установки элементов для раздела покрытий
//установки элементов для раздела покрытий

//установки элементов для раздела покрытий

if(rzdpokr===true){
    console.log("rzdpokr  ", rzdpokr );
function pokrE() {


  if(xpkall.matches){ // для всех мобильниых

   if (document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl');
var stl="position: static;display: contents;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}
}//endif


if (document.querySelectorAll('div.AttentYl')!==null){
var elem=document.querySelectorAll('div.AttentYl');
var stl="position: static;display: contents;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}
}//endif
   if (document.querySelectorAll('p.AttentYl')!==null){
var elem=document.querySelectorAll('p.AttentYl');
var stl="position: static;display: contents;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;

}
}//endif

}//endmatch






if (pkr360_499.matches) { // Если медиа запрос совпадает

var elem=document.querySelectorAll('span.AttentGrn')
var stl="margin: 3% 33% 2% 24px !important;padding: 3% 6% 0% 7%;display: block;height: 151px;position: static;width: 168px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl
}

}//endif
if (pkr499_630.matches) {

}//endif



if (pkr631_700.matches) {
 var elem=document.querySelectorAll('p');
 var findElement;
 for (let i = 0; i <elem.length; i++) {
  //найти узел, который мы хотим удалить
  if(elem[i].innerHTML==""){
      findElement=elem[i];
findElement.parentNode.removeChild(findElement);
      }//endif
 }//endfor



   if (document.querySelectorAll('div.AttentYl')!==null){
var elem=document.querySelectorAll('div.AttentYl');
var stl="margin: 4% 0% 1% 0px !important;padding: 3% 15% 36% 3% !important;width: 268px !important;float: right !important;position: static;display:contents;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}
   if (document.querySelectorAll('img')!==null){
       console.log("document.querySelectorAll('img') ",  "1051" );
var elem=document.querySelectorAll('img');
var stl="width:250px!important;height:250px!important;margin:19px!important;float:left";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}

}//endifmatch


if (pkr750_800.matches){

   if (document.querySelectorAll('img')!==null){
         console.log("document.querySelectorAll('img') ",  "1063" );
var elem=document.querySelectorAll('img');
var stl="width:250px!important;height:250px!important;margin:19px!important;float:left";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}//endifimmg




if(document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl')
var stl="width: 174px;margin: -4% 0% 0% 273px;padding: 3% 3% 0% 0%;display:contents;height: 94px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
if(document.querySelectorAll('span.AttentGrn')!==null){
var elem=document.querySelectorAll('span.AttentGrn')
var stl="width: 64%;margin: 63px 0px 17px 1px;padding: 9% 11% 0% 5%;display: block;height: 90px;position: static;float: left;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif

if(document.querySelectorAll('table.tblclr')!==null){
var elem=document.querySelectorAll('table.tblclr')
var stl="width: 186% !important;border: 9px ridge rgb(186, 76, 8) !important;box-shadow: rgba(0, 0, 0, 0.3) 5px 2px 17px 3px !important;text-align: center !important;border-collapse: collapse !important;float: left;font-size: 109%;margin: -75% 0% 0% 0%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif


if (document.querySelectorAll('span.AttentYl')!==null){document.querySelectorAll('span.AttentYl').style="margin: 2% 0% 1% 0px !important;	padding: 3% 4% 15% 3% !important;"}
if (document.querySelectorAll('img.img1antistat')!==null){
var elem=document.querySelectorAll('img.img1antistat');
var stl="width: 522px !important;height: 436px !important;margin: 8px -58px 0px 7px;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}
if (document.querySelectorAll('div.AttentYl.img2antistat')!==null){
var elem=document.querySelectorAll('div.AttentYl.img2antistat');
var stl="margin: 4% 0% 1% 34px !important;padding: 3% 16% 65% 3% !important;width: 369px !important;float: left;position: static;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}

if (document.querySelectorAll('img.img3antistat')!==null){
var elem=document.querySelectorAll('img.img3antistat');
var stl="width: 114%;margin: 1% 0% 0% -2%;padding: 0% 0% 0% 0%;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}
if (document.querySelectorAll('img.img5antistat')!==null){
var elem=document.querySelectorAll('img.img5antistat');
var stl="width: 116%;margin: -3% 0% 0% 0%;padding: 0% 0% 0% 0%;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}
 }//end match


if (pkr800_850.matches){

   if (document.querySelectorAll('img')!==null){
         console.log("document.querySelectorAll('img') ",  "1136" );
elem=document.querySelectorAll('img');
stl="width:250px!important;height:250px!important;margin:19px!important;float:left";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}//endifimmg



 }//end match

if (pkr850_1000.matches){

   if (document.querySelectorAll('img')!==null){
         console.log("document.querySelectorAll('img') ",  "1150" );
elem=document.querySelectorAll('img');
stl="width: 250px !important;height: 250px !important;float: left;margin: -88px 0px 0px 145px !important;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;
}//endfor
}//endifimmg


/*if(document.querySelectorAll('span.AttentYl')!==null){
var elem=document.querySelectorAll('span.AttentYl')
var stl="width: 174px;margin: -4% 0% 0% 273px;padding: 3% 3% 0% 0%;display: block;height: 94px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif*/
if(document.querySelectorAll('span.AttentGrn')!==null){
var elem=document.querySelectorAll('span.AttentGrn')
var stl="text-align: left;float: left;width: 48%;margin: 2% 2% 0% 6%;padding: 1% 7% 9%;height: 10px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif

if(document.querySelectorAll('ul.border')!==null){
var elem=document.querySelectorAll('ul.border')
var stl="width: 788px;margin: 94px 0px 0px 40px;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif
if(document.querySelectorAll('div.product-top-in.product-top-left.product-images')!==null){
var elem=document.querySelectorAll('product-top-in.product-top-left.product-images')
var stl="width: 250px;margin: 29% 0% 0% 37%;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl

}//endfor
}//endif

 }//end match
















}//конец  функ pokrE
var xpkall= window.matchMedia(" only screen and (min-width:350px) and (max-width:999px)  ");
var pkr360_499 = window.matchMedia(" only screen and (min-width:350px) and (max-width:499px)  ");
var pkr499_630 = window.matchMedia(" only screen and (min-width:499px) and (max-width:630px)  ");
var pkr631_700 = window.matchMedia(" only screen and (min-width:631px) and (max-width:700px)  ");
var pkr750_800 = window.matchMedia(" only screen and (min-width:749px) and (max-width:799px)  ");
var pkr800_850 = window.matchMedia(" only screen and (min-width:799px) and (max-width:850px)  ");
var pkr850_1000 = window.matchMedia(" only screen and (min-width:851px) and (max-width:1000px)  ");
pokrE();
pkr360_499.addListener(pokrE);
pkr499_630.addListener(pokrE);
pkr631_700.addListener(pokrE);
pkr750_800.addListener(pokrE);
pkr800_850.addListener(pokrE);
pkr850_1000.addListener(pokrE);
xpkall.addListener(pokrE);



}//конец  раздела покрытий

//гаражи,склады,магазины
//гаражи,склады,магазины
//гаражи,склады,магазины
//гаражи,склады,магазины
//гаражи,склады,магазины
//гаражи,склады,магазины
//гаражи,склады,магазины

if (document.getElementById('Obt')!==null && document.getElementById('Obt').id==="Obt" ){
if (document.querySelectorAll('p')){
var elem=document.querySelectorAll('p');
var stl="margin: 0px 0% 0px 6% !important;display: block;width:89% !important;height: auto;";
for (let i = 0; i <elem.length; i++) { // выведет 0, затем 1, затем 2
 elem[i].style=stl;
}

}

if (document.querySelectorAll('div#GarGRN1.AttentGrn')){

var elem=document.querySelectorAll('div#GarGRN1.AttentGrn');
var stl="width: 120%;margin: 20px;padding: 19px;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;

}
}
if (document.querySelectorAll('div#GarGRN2.AttentGrn')){

var elem=document.querySelectorAll('div#GarGRN2.AttentGrn');
var stl="width: 120%;margin: 20px;padding: 19px;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;

}


}
if (document.querySelectorAll('div#GarGRN3.AttentGrn')){

var elem=document.querySelectorAll('div#GarGRN3.AttentGrn');
var stl="width: 120%;margin: 20px;padding: 19px;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;

}


}
if (document.querySelectorAll('div#GarGRN4.AttentGrn')){

var elem=document.querySelectorAll('div#GarGRN4.AttentGrn');
var stl="width: 120%;margin: 20px;padding: 19px;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;

}


}
if (document.querySelectorAll('div#GarGRN5.AttentGrn')){

var elem=document.querySelectorAll('div#GarGRN5.AttentGrn');
var stl="width: 120%;margin: 20px;padding: 19px;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;

}


}
if (document.querySelectorAll('div#GarGRN6.AttentGrn')){

var elem=document.querySelectorAll('div#GarGRN6.AttentGrn');
var stl="width: 120%;margin: 20px;padding: 19px;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;

}


}
if (document.querySelectorAll('p.AttentYl')){

var elem=document.querySelectorAll('p.AttentYl');
var stl="margin: 2px 0% 21px 30% !important;display: block;width: 40% !important;height: auto;float: left;position: static;";
for (let i = 0; i <elem.length; i++) {
 elem[i].style=stl;

}


}

}//endif garaz




































var hdr;
var hdrr;
hdr=document.getElementById("LMN");//object
hdrr=hdr;//in attrib
hdrr=hdrr.href;//linkstr from obj
//console.log("hdrr//",hdrr);
var wdt_pn=hdrr.indexOf("/css/")+5;//48
var wdt_pk=hdrr.indexOf(".css")-3;
//console.log(wdt_pn,wdt_pk);
var wdt_str=hdrr.substr(wdt_pn,wdt_pk-wdt_pn);//full

if (wdt_str=="st") {
 wRazr=1900;
//console.log("wRazr",wRazr);
} else {
var strRaz=wdt_str.indexOf("_");//selector

wRazr=wdt_str.substr(0,strRaz);//primnamerazm _from cssLink de facto

}



















if (tip="mob"){



var modeWD="";






if (wdth<345 && vhght<345) {modeWD="320_343";}
 else{
   if (wdth<361 && vhght<420 ) {modeWD="360_390";}
    else{
   if (wdth<361 && vhght<550 ) {modeWD="360_512";}
    else{
     if (wdth<376) {modeWD="375_667";}
      else{
       if (wdth<385) {modeWD="384_640";}
        else{
         if (wdth<416) {modeWD="411_440";}
          else{
           if (wdth<490) {modeWD="480_500";}
            else{
           if (wdth<510 && vhght<490) {modeWD="500_480";}
              else{
             if (wdth<540 && vhght<590) {modeWD="533_580";}
              else{
               if (wdth<585 && vhght<540) {modeWD="580_533";}
                else{
                 if (wdth<610 ) {modeWD="600_630";}
                  else{
                   if  (wdth<630) {modeWD="600_630";}
                    else{
                     if (wdth<644) {modeWD="640_680";}
                      else{
                      if  (wdth==732 && vhght==412) {modeWD="736_414";}
                        else{
                       if  (wdth<735 ) {modeWD="731_750";}
                        else{
                        if  (wdth<738 && vhght<420 ) {modeWD="736_414";}
                         else{
                         if  (wdth<770) {modeWD="768_1024";}
                          else{
                           if  (wdth<805 ) {modeWD="800_1280";}
                            else{
                             if  (wdth<970) {modeWD="960_600";}
                              else{
                               if (wdth<1025 && vhght<770) {modeWD="1024_768";}
                                else{
                                if (wdth<1025 && vhght<1370) {modeWD="1024_1366";}
                                 else{
                                  if (wdth<1370) {modeWD="1360_700";}
                                    else{
                                     if  (wdth<1450) {modeWD="1440_900";}
                                      else{
                                       if  (wdth<1550) {modeWD="1440_900";}
                                        else{
                                         if  (wdth<1610) {modeWD="1600_900";}
                                          else{
                                         if  (wdth<2000) {modeWD="style";}
                                          else{
                                           if  (wdth>2000) {modeWD="3000_2500";}


  }  }  }  }  }  }  }  } }  }  }  }  }  }  }  }  }  }  }  }  }}}}}}


 switch (modeWD)
{
     case  modeWD="360_512":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/360_512.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("360*512","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
 case  modeWD="640_360AA":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/736_414.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("fAA","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="736_414":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/736_414.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="500_480":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/500_480.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="580_533":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/580_533.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="1024_768":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1024_768.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("mob1024/768","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="1600_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1600_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="3000_2500":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/3000_2500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f3000","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="1360_700":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1360_700.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

   console.log("f1360","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
    case  modeWD="320_343":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/320_343.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}






console.log("f320","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );
  break;
   case  modeWD="360_390":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/360_390.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f360","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
 case  modeWD="375_667":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/375_667.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f375","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;
   case  modeWD="384_640":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/384_640.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f384","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;
   case  modeWD="1280_800":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1280_800.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f1280","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="1440_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1440_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f1440","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

case  modeWD="style":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

 console.log("fstyle","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="800_1280":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/800_1280.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f800","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="1024_1366":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1024_1366.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

 console.log("f1024","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="600_630":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/600_630.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f600630","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

   case  modeWD="960_600":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/960_600.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

  break;


     case  modeWD="640_680":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/640_680.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}





 console.log("640680","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


     case  modeWD="533_580":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/533_580.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f533580","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="480_500":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/480_500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f480500","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


   	 case  modeWD="731_750":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/731_750.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f731750","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;

   case  modeWD="411_440":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/411_440.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f411","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

 case  modeWD="768_1024":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/768_1024.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f7681024","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
  /* default:
 hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");




console.log("wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;*/
      }
let inh= document.getElementsByClassName("ftleft")[0];
let p = document.createElement('p');
p.innerHTML = modeWD;
p.innerHTML+=dpr;
p.innerHTML+="/";
p.innerHTML+=wdthH;
p.innerHTML+="_";
p.innerHTML+=vhghtT;
p.innerHTML+="/";
p.innerHTML+=wdth;


inh.append(p);
console.log("priexali--  ",inh );
}
if (tip="pk"){

/*pkpkpkpkpkpkpkpkpkkpkpkpkpkpkpkpkpkpkkpkpkpkpkpkpkpkkpkppkpkpkpkkpkpkpkpkpkpkpkkpkpkpkpkpkpkpkpkpkpkpkpkpkkpkpkpkpkpkpkpkpkpkpkpkppkpkpkpkpkpkpkpkpkppkpkpkpkpkpk*/

var modeWD="";






if (wdth<345 && vhght<345) {modeWD="320_343";}
 else{
   if (wdth<361&& vhght<420) {modeWD="360_390";}
    else{
   if (wdth<361 && vhght<550) {modeWD="360_512";}
    else{
     if (wdth<376) {modeWD="375_667";}
      else{
       if (wdth<385) {modeWD="384_640";}
        else{
         if (wdth<416) {modeWD="411_440";}
          else{
           if (wdth<490) {modeWD="480_500";}
            else{
           if (wdth<510 && vhght<490) {modeWD="500_480";}
              else{
             if (wdth<540 && vhght<590) {modeWD="533_580";}
              else{
               if (wdth<585 && vhght<540) {modeWD="580_533";}
                else{
                 if (wdth<610 ) {modeWD="600_630";}
                  else{
                   if  (wdth<630) {modeWD="600_630";}
                    else{
                     if (wdth<644) {modeWD="640_680";}
                      else{
                      if  (wdth==732 && vhght==412) {modeWD="736_414";}
                        else{
                       if  (wdth<735 ) {modeWD="731_750";}
                        else{
                        if  (wdth<738 && vhght<420 ) {modeWD="736_414";}
                         else{
                         if  (wdth<770) {modeWD="768_1024";}
                          else{
                           if  (wdth<805 ) {modeWD="800_1280";}
                            else{
                             if  (wdth<970) {modeWD="960_600";}
                              else{
                               if (wdth<1025 && vhght<770) {modeWD="1024_768";}
                                else{
                                if (wdth<1025 && vhght<1370) {modeWD="1024_1366";}
                                 else{
                                  if (wdth<1370) {modeWD="1360_700";}
                                    else{
                                     if  (wdth<1450) {modeWD="1440_900";}
                                      else{
                                       if  (wdth<1550) {modeWD="1440_900";}
                                        else{
                                         if  (wdth<1610) {modeWD="1600_900";}
                                          else{
                                         if  (wdth<2000) {modeWD="style";}
                                          else{
                                           if  (wdth>2000) {modeWD="3000_2500";}


  }  }  }  }  }  }  }  } }  }  }  }  }  }  }  }  }  }  }  }  }}}}}}


 switch (modeWD)
{
        case  modeWD="360_512":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/360_512.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("fAA","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

     case  modeWD="1360_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1360_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="736_414":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/736_414.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="500_480":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/500_480.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="580_533":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/580_533.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="1024_768":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1024_768.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="1600_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1600_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="3000_2500":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/3000_2500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f3000","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="1360_700":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1360_700.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

   console.log("f1360","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
    case  modeWD="320_343":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/320_343.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}






console.log("f320","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );
  break;
   case  modeWD="360_390":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/360_390.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f360","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
 case  modeWD="375_667":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/375_667.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f375","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;
   case  modeWD="384_640":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/384_640.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f384","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;
   case  modeWD="1280_800":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1280_800.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f1280","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="1440_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1440_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f1440","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

case  modeWD="style":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

 console.log("fstyle","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="800_1280":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/800_1280.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f800","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="1024_1366":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1024_1366.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

 console.log("f1024","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="600_630":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/600_630.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f600630","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
   case  modeWD="960_600":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/960_600.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f600960","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


     case  modeWD="640_680":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/640_680.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}





 console.log("640680","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


     case  modeWD="533_580":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/533_580.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f533580","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="480_500":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/480_500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f480500","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


   	 case  modeWD="731_750":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/731_750.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f731750","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;

   case  modeWD="411_440":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/411_440.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f411","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

 case  modeWD="768_1024":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/768_1024.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f7681024","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
  /* default:
 hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");




console.log("wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;*/
      }
}










});
/*resresresresrresrresrrresresresresresresresresreresresresresresresreresresresresresresreresresresresresresreresresresresreesresresresresresreesresresresresreesresresresresreesresresres*/

window.onresize = function  readytst() {
var wRazr;
var wdth;
var vhght;
var wdth=document.documentElement.clientWidth;/* ширина*/
var vhghtT=document.documentElement.clientHeight;

var tip;
var dpr=window.devicePixelRatio;
wdth=parseFloat(wdth.toFixed());
vhght=parseFloat(vhghtT.toFixed());
console.log("w/",wdth,"h/",vhght);
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(window.navigator.userAgent)) {
tip="mob";
console.log("mob",window.navigator.userAgent);

} else{
tip="pk";
    console.log("pk",window.navigator.userAgent);}


var hdr;
var hdrr;
hdr=document.getElementById("LMN");//object
hdrr=hdr;//in attrib
hdrr=hdrr.href;//linkstr from obj
//console.log("hdrr//",hdrr);
var wdt_pn=hdrr.indexOf("/css/")+5;//48
var wdt_pk=hdrr.indexOf(".css")-3;
//console.log(wdt_pn,wdt_pk);
var wdt_str=hdrr.substr(wdt_pn,wdt_pk-wdt_pn);//full

if (wdt_str=="st") {
 wRazr=1900;
//console.log("wRazr",wRazr);
} else {
var strRaz=wdt_str.indexOf("_");//selector

wRazr=wdt_str.substr(0,strRaz);//primnamerazm _from cssLink de facto

}
if (tip="mob"){



var modeWD="";






if (wdth<345 && vhght<345) {modeWD="320_343";}
 else{
   if (wdth<361 && vhght<420 ) {modeWD="360_390";}
    else{
   if (wdth<361 && vhght<550 ) {modeWD="360_512";}
    else{
     if (wdth<376) {modeWD="375_667";}
      else{
       if (wdth<385) {modeWD="384_640";}
        else{
         if (wdth<416) {modeWD="411_440";}
          else{
           if (wdth<490) {modeWD="480_500";}
            else{
           if (wdth<510 && vhght<490) {modeWD="500_480";}
              else{
             if (wdth<540 && vhght<590) {modeWD="533_580";}
              else{
               if (wdth<585 && vhght<540) {modeWD="580_533";}
                else{
                 if (wdth<610 ) {modeWD="600_630";}
                  else{
                   if  (wdth<630) {modeWD="600_630";}
                    else{
                     if (wdth<644) {modeWD="640_680";}
                      else{
                      if  (wdth==732 && vhght==412) {modeWD="736_414";}
                        else{
                       if  (wdth<735 ) {modeWD="731_750";}
                        else{
                        if  (wdth<738 && vhght<420 ) {modeWD="736_414";}
                         else{
                         if  (wdth<770) {modeWD="768_1024";}
                          else{
                           if  (wdth<805 ) {modeWD="800_1280";}
                            else{
                             if  (wdth<970) {modeWD="960_600";}
                              else{
                               if (wdth<1025 && vhght<770) {modeWD="1024_768";}
                                else{
                                if (wdth<1025 && vhght<1370) {modeWD="1024_1366";}
                                 else{
                                  if (wdth<1370) {modeWD="1360_700";}
                                    else{
                                     if  (wdth<1450) {modeWD="1440_900";}
                                      else{
                                       if  (wdth<1550) {modeWD="1440_900";}
                                        else{
                                         if  (wdth<1610) {modeWD="1600_900";}
                                          else{
                                         if  (wdth<2000) {modeWD="style";}
                                          else{
                                           if  (wdth>2000) {modeWD="3000_2500";}


  }  }  }  }  }  }  }  } }  }  }  }  }  }  }  }  }  }  }  }  }}}}}}


 switch (modeWD)
{
     case  modeWD="360_512":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/360_512.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("360*512","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
 case  modeWD="640_360AA":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/736_414.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("fAA","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="736_414":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/736_414.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="500_480":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/500_480.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="580_533":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/580_533.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="1024_768":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1024_768.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("mob1024/768","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="1600_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1600_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="3000_2500":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/3000_2500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f3000","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="1360_700":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1360_700.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

   console.log("f1360","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
    case  modeWD="320_343":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/320_343.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}






console.log("f320","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );
  break;
   case  modeWD="360_390":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/360_390.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f360","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
 case  modeWD="375_667":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/375_667.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f375","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;
   case  modeWD="384_640":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/384_640.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f384","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;
   case  modeWD="1280_800":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1280_800.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f1280","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="1440_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1440_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f1440","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

case  modeWD="style":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

 console.log("fstyle","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="800_1280":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/800_1280.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f800","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="1024_1366":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1024_1366.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

 console.log("f1024","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="600_630":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/600_630.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f600630","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

   case  modeWD="960_600":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/960_600.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

  break;


     case  modeWD="640_680":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/640_680.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}





 console.log("640680","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


     case  modeWD="533_580":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/533_580.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f533580","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="480_500":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/480_500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f480500","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


   	 case  modeWD="731_750":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/731_750.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f731750","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;

   case  modeWD="411_440":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/411_440.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f411","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

 case  modeWD="768_1024":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/768_1024.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f7681024","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
  /* default:
 hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");




console.log("wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;*/
      }

}
if (tip="pk"){

/*pkpkpkpkpkpkpkpkpkkpkpkpkpkpkpkpkpkpkkpkpkpkpkpkpkpkkpkppkpkpkpkkpkpkpkpkpkpkpkkpkpkpkpkpkpkpkpkpkpkpkpkpkkpkpkpkpkpkpkpkpkpkpkpkppkpkpkpkpkpkpkpkpkppkpkpkpkpkpk*/

var modeWD="";






if (wdth<345 && vhght<345) {modeWD="320_343";}
 else{
   if (wdth<361 && vhght<420 ) {modeWD="360_390";}
    else{
   if (wdth<361 && vhght<550 ) {modeWD="360_512";}
    else{
     if (wdth<376) {modeWD="375_667";}
      else{
       if (wdth<385) {modeWD="384_640";}
        else{
         if (wdth<416) {modeWD="411_440";}
          else{
           if (wdth<490) {modeWD="480_500";}
            else{
           if (wdth<510 && vhght<490) {modeWD="500_480";}
              else{
             if (wdth<540 && vhght<590) {modeWD="533_580";}
              else{
               if (wdth<585 && vhght<540) {modeWD="580_533";}
                else{
                 if (wdth<610 ) {modeWD="600_630";}
                  else{
                   if  (wdth<630) {modeWD="600_630";}
                    else{
                     if (wdth<644) {modeWD="640_680";}
                      else{
                      if  (wdth==732 && vhght==412) {modeWD="736_414";}
                        else{
                       if  (wdth<735 ) {modeWD="731_750";}
                        else{
                        if  (wdth<738 && vhght<420 ) {modeWD="736_414";}
                         else{
                         if  (wdth<770) {modeWD="768_1024";}
                          else{
                           if  (wdth<805 ) {modeWD="800_1280";}
                            else{
                             if  (wdth<970) {modeWD="960_600";}
                              else{
                               if (wdth<1025 && vhght<770) {modeWD="1024_768";}
                                else{
                                if (wdth<1025 && vhght<1370) {modeWD="1024_1366";}
                                 else{
                                  if (wdth<1370) {modeWD="1360_700";}
                                    else{
                                     if  (wdth<1450) {modeWD="1440_900";}
                                      else{
                                       if  (wdth<1550) {modeWD="1440_900";}
                                        else{
                                         if  (wdth<1610) {modeWD="1600_900";}
                                          else{
                                         if  (wdth<2000) {modeWD="style";}
                                          else{
                                           if  (wdth>2000) {modeWD="3000_2500";}


  }  }  }  }  }  }  }  } }  }  }  }  }  }  }  }  }  }  }  }  }}}}}}


 switch (modeWD)
{
        case  modeWD="360_512":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/360_512.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("fAA","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

     case  modeWD="1360_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1360_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="736_414":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/736_414.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="500_480":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/500_480.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="580_533":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/580_533.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
      case  modeWD="1024_768":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1024_768.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="1600_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1600_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f1600","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="3000_2500":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/3000_2500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



console.log("f3000","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="1360_700":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1360_700.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

   console.log("f1360","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
    case  modeWD="320_343":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/320_343.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}






console.log("f320","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );
  break;
   case  modeWD="360_390":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/360_390.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f360","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
 case  modeWD="375_667":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/375_667.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f375","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;
   case  modeWD="384_640":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/384_640.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f384","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;
   case  modeWD="1280_800":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1280_800.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f1280","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="1440_900":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1440_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f1440","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

case  modeWD="style":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

 console.log("fstyle","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="800_1280":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/800_1280.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f800","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

      case  modeWD="1024_1366":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/1024_1366.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}

 console.log("f1024","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="600_630":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/600_630.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f600630","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
   case  modeWD="960_600":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/960_600.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f600960","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


     case  modeWD="640_680":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/640_680.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}





 console.log("640680","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


     case  modeWD="533_580":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/533_580.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f533580","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
     case  modeWD="480_500":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/480_500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");


if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}




 console.log("f480500","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;


   	 case  modeWD="731_750":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/731_750.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");

if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}


 console.log("f731750","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );


  break;

   case  modeWD="411_440":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/411_440.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f411","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;

 case  modeWD="768_1024":
  hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/768_1024.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");



if (!wRazr==wdth)  {

     if(!document.readyState == "complete") {document.location.reload;}/*перегружает текущую страницу*/

}



 console.log("f7681024","wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;
  /* default:
 hdr.setAttribute("href", "https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");




console.log("wRazr//",wRazr,"wdth//",wdth,"dpr//",dpr );

  break;*/
      }
}

}
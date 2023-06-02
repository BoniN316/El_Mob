
function ready(){
 var hdr=document.getElementById("LMN");
var wdth=document.documentElement.clientWidth;/* ширина*/
console.log(wdth);
var hght=document.documentElement.clientHeight; /* высота*/
var modeWD="";
var ffltr=document.getElementById('ffltr');
var leftmenbl= document.getElementById('LM');
var sint= document.getElementsByClassName('siteintro')[0];
var ph=document.getElementsByClassName('phone')[0];
var gmb=document.getElementsByClassName('wrpGmb')[0];

if (wdth<343) {modeWD="320_343";}
 else{
 if (wdth<361) {modeWD="360_390";}
 else{
if (wdth<376) {modeWD="375_667";}
 else{
 if (wdth<440) {modeWD="411_440";}
 else{
  if (wdth<500) {modeWD="480_500";}
 else{
	 if (wdth<569 ) {modeWD="533_580";}
 else{
     if (wdth<580) {modeWD="533_580";}
 else{
	if (wdth==600 && hght==960) {modeWD="600_630";}
 else{ 
  if  (wdth<630) {modeWD="600_630";}
 else{
	 if (wdth<641) {modeWD="640_680";} 
 else{
	 if  (wdth<667 ) {modeWD="Iph6L";}
 else{
     if  (wdth<680) {modeWD="640_680";}
 else{
 if  (wdth<732 ) {modeWD="6plsL";}
else{	
if  (wdth<774) {modeWD="768_1024";}
else{
	if (wdth<750) {modeWD="731_750";}
 else{
if  (wdth<801) {modeWD="800_1280";}
   else{
if (wdth<961) {modeWD="Ip600960L";}
 else{
 if  (wdth<1025) {modeWD="PLL";}
else{
	if  (wdth<1281) {modeWD="1280_800";}
else{
	if  (wdth<1441) {modeWD="1440_900";}
else{
 if  (wdth>1441) {modeWD="1900_1080";}/*основной*/
 }} }}}} }}}}}}}}}}}}}}


 switch (modeWD)
 {
	case  modeWD="320_343":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/320_343.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
    ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
  
   break
   case  modeWD="360_390":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/360_390.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
  
   break
 case  modeWD="375_667":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/375_667.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
           ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
sint.style="display:none!important;";

  break;
   case  modeWD="1280_800":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/1280_800.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
 gmb.style="display:none!important;";
   break;
	 case  modeWD="1440_900":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/1440_900.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");      
 gmb.style="display:none!important;";
   break;
   
case  modeWD="1900_1080":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   gmb.style="display:none!important;";   
   break;
   
      case  modeWD="800_1280":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/800_1280.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
           ffltr.style="display:none!important;";

           gmb.style="display:none!important;";
   break;
  
      case  modeWD="PLL":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/1024.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   gmb.style="display:none!important;";
   break
     case  modeWD="600_630":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/600_630.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
           ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
   gmb.style="display:none!important;";
   break
   case  modeWD="Ip600960L":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/600960L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
    ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
   gmb.style="display:none!important;";
   break
      case  modeWD="n435773P":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/435773P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
   gmb.style="display:none!important;";
   break
      case  modeWD="n435773L":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/435773L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   gmb.style="display:none!important;";
   break
      case  modeWD="ip384640P":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/384640P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
    ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
  gmb.style="display:none!important;";
  break
 case  modeWD="ip384640L":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/384640L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
     ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
  gmb.style="display:none!important;";
  break
     case  modeWD="640_680":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/640_680.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
    gmb.style="display:none!important;";
	break
   
      case  modeWD="Iph5P":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/MobileIph5P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
    gmb.style="display:none!important;";
	break
     case  modeWD="533_580":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/533_580.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
    ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
    gmb.style="display:none!important;";
	break
     case  modeWD="480_500":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/480_500.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
    ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
    gmb.style="display:none!important;";
	break
    case  modeWD="Iph6L":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/MobileIph6L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
    ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
    gmb.style="display:none!important;";
	break
     	 
   	 case  modeWD="731_750":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/731_750.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   gmb.style="display:none!important;";  

   break
     case  modeWD="360L":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobile360L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
    ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
    gmb.style="display:none!important;";
	break

   case  modeWD="411_440":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/411_440.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
    gmb.style="display:none!important;";
	break
  case  modeWD="6plsL":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobile480_500lusL.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
     ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
      gmb.style="display:none!important;";
	  break
 case  modeWD="768_1024":
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/768_1024.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
     ffltr.style="display:none!important;";
           leftmenbl.style="display:none!important;";
           sint.style="display:none!important;";
       gmb.style="display:none!important;";
	  break
   default:
 hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/style.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   gmb.style="display:none!important;";   
      break
      }
}



document.addEventListener("DOMContentLoaded", function(event)
{
    window.onresize = function() {
        ready();
    };
});






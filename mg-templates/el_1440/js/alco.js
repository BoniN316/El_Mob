var hdr=document.getElementsByName("LMN")[0]; 
/* alert(hdr.href); */
var wdth=document.body.clientWidth;/* ширина*/
var hght=screen.height; /* высота*/
var modeC="";
var ffltr=document.getElementById('ffltr');
var leftmenbl= document.getElementById('LM'); 
var sint= document.getElementsByClassName('siteintro')[0];
var ph=document.getElementsByClassName('phone')[0];
/*   alert(wdth+'/'+modeC+'/'+hght);   */
 
if (wdth==384 && hght==640) {modeC="ip384640P";} 
 else{
if (wdth==320 && hght==480) {modeC="ip4320P";} 
 else{
if (wdth==320 && hght<568) {modeC="Iph5P";} 
 else{	
 if (wdth==360 && hght==640) {modeC="ip360640P";} 
 else{
  if (wdth<377 && hght<668) {modeC="Iph6P";} 
 else{
	 if (wdth==384 && hght==640) {modeC="LG384640P";} 
 else{ 
  if  (wdth<415 && hght<737) {modeC="6plsP";}  
 else{
	 if  (wdth<436 && hght==773) {modeC="n435773P";}  
 else{
	if (wdth<481 && hght<321) {modeC="ip4320L";} 
 else{ 
 if (wdth<569 && hght<321) {modeC="Iph5L";} 
 else{ 
  if (wdth<600 && hght==360) {modeC="Ip598360";} 
 else{ 
 if (wdth<602 && hght==960) {modeC="Ip600960P";} 
 else{ 
 if (wdth==640 && hght==360) {modeC="ip360640L";} 
 else{
if (wdth==640 && hght==384) {modeC="ip384640L";} 
 else{	 
if  (wdth==667 && hght==375) {modeC="Iph6L";} 
 else{		 
 if  (wdth==736 && hght==414) {modeC="6plsL";} 
else{
if  (wdth<770 && hght==1024) {modeC="PLP";}
else{ 
if  (wdth==773 && hght<436) {modeC="n435773L";} 
   else{
if  (wdth==800 && hght==1280) {modeC="mob800";} 
   else{	   
if (wdth<962 && hght==600) {modeC="Ip600960L";} 
 else{
 if  (wdth==1024 && hght==768) {modeC="PLL";}
  
 }} }}}} }}}}}}}}}}}}}}
 /*   alert(wdth+'/'+modeC+'/'+hght);    */ 
 
 switch (modeC) {
	 case  modeC="Ip598360":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/Mob598L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
          if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break; 
	 case  modeC="LG384640P":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/384640P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
          if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break; 
	  case  modeC="mob800":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/Mobile800.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
          if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
	  case  modeC="PLL":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobilePLL.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
   break;
	 case  modeC="Ip600960P":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/600960P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
          if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
   case  modeC="Ip600960L":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/600960L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
    if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
	  case  modeC="n435773P":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/435773P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
   if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
	  case  modeC="n435773L":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/435773L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
   break;	 
	  case  modeC="ip384640P":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/384640P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
    if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
 case  modeC="ip384640L":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/384640L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");
    if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
 break;
	 case  modeC="ip360640L":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/360640L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
   if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
   case  modeC="ip360640P":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/360640P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
   if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
	  case  modeC="Iph5P":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/MobileIph5P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
 if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
	 case  modeC="Iph5L":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/MobileIph5L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
    if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break; 
	 case  modeC="Iph6P":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/MobileIph6P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
    if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
    case  modeC="Iph6L":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/MobileIph6L.css"); 
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
   if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
	 	 case  modeC="ip4320P":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobileIph4P.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
   if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
   	 case  modeC="ip4320L":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobileIph4L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
   if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
	 case  modeC="360L":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobile360L.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css"); 
    if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
	    
   case  modeC="6plsP":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobileiph6plusP.css");
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
   if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
   break;
  case  modeC="6plsL":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobileiph6plusL.css"); 
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
     if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
      break;
 case  modeC="PLP":  
  hdr.setAttribute("href","https://elakor-floor.ru/mg-templates/elakor/css/mobilePLP.css"); 
  hdr.setAttribute("rel","stylesheet");
  hdr.setAttribute("type","text/css");  
    if (ffltr){ ffltr.style="display:none!important;";}
    if (leftmenbl){ leftmenbl.style="display:none!important;";}
           if (sint){ sint.style="display:none!important;";}
      break;
   default:
       
      break; 
	  }
	 
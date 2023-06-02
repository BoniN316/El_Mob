
    var widthC=document.documentElement.clientWidth;/* ширина*/
    var height=screen.height; /* высота*/
    // alert ("Разрешение окна клиента: "+widthC+"x"+height);
	var hg;
    var k;
	var ur=window.location.pathname;
    var pos=0;
	pos=ur.indexOf('obekty');
    if (pos>0) {k=55;}
    else
   {k=15;}
// alert(pos + "/" + k); 


var ffltr=document.getElementById('ffltr');
var leftmenbl= document.getElementById('LM'); 
var sint= document.getElementsByClassName('siteintro')[0];
var ph=document.getElementsByClassName('phone')[0];
if (widthC<361) {
	
	ffltr.style="display:none!important;";
    leftmenbl.style="display:none!important;";
    sint.style="display:none!important;";
	
	
	}
else{
  if(widthC<420){
                  ph.style="margin-left:0px;!important;";
				  
}}
  if (ffltr){
   if (widthC<900)
 {
     ffltr.style="display:none!important;";
                   leftmenbl.style="display:none!important;";
                    sint.style="display:none!important;";
                   // alert ("Разрешение окна клиента: "+widthC+"x"+height); 
 }
                   
if (widthC<1000)
 {
     ffltr.style="display:none!important;";
                   
                   // alert ("Разрешение окна клиента: "+widthC+"x"+height); 
 }

				   
                   }

var baner = document.getElementById("Bnr");
  if (baner){
var widthC=document.body.clientWidth;
hg=Math.ceil(150000/widthC) +k;
baner.style="width:95%!important;height:" + hg + "px!important;";



     pos=ur.indexOf('obekty');
     if (pos>0) {k=55;}
     else
     {k=15;}
     hg=Math.ceil( 150000 /widthC)+k;
  //alert(k);
     baner.style="width:95%!important;height:" + hg + "px!important;";
  if (widthC<700) {baner.style="display:none !important;"}};




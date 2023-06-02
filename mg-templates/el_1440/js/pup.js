var delay = 2000;//задержкапоказа окна
var urllE=location.href;
var urllT="http://teohim.ru";
var goteo;//"1 =yes"флаг разрешения на переход в теохим
var gotehClos;
goteo=localStorage.getItem ('goteo');// получение флага  перехода из хранилища браузера
gotehClos=localStorage.getItem ('gotehClos');// получаем флавг НЕПЕРЕХОДА

if (gotehClos==0 && goteo==1) {//если есть флаг непереходав в ноле, то
localStorage.setItem('goteo', 0);//обнуляем разрешение на переход
goteo=0;

}

if (goteo==1) {//переход возможен только при единице
setTimeout("document.getElementById('modalZ').style.display='block'", delay);
setTimeout("document.getElementById('PUPclose').style.display='block'", delay);
}











function closePup() {
document.getElementById('modalZ').style.display='none';//jnrk.xftv показ окна перехода на теоним
document.getElementById('PUPclose').style.display='none';
localStorage.setItem('goteo', 0);// ставвим флаги в ноль
localStorage.setItem('gotehClos', 0);//ствим флаги ив ноль

}
function goteoh() {
localStorage.setItem('gotehClos', 1);// при клике на банере справа вверху снимаем запрет на переход
//console.log("gotehClos///", localStorage.getItem('gotehClos'));
}





function ZamLink(x) {
var urllE=location.href;
var urllT="http://teohim.ru";
switch (urllE) {
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki":
 document.location.href ="http://www.teohim.ru/polymer/gruntovka-betona/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki":
 document.location.href ="http://www.teohim.ru/polymer/lak-betona/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski":
 document.location.href ="http://www.teohim.ru/polymer/poliuretanovye-kraski-emali/";
  break
 case urllE="https://elakor-floor.ru/materialy/nalivnye-poly":
 document.location.href ="http://www.teohim.ru/nalivnye/";
  break
 case urllE="https://elakor-floor.ru/materialy/shpatlevki":
 document.location.href ="http://www.teohim.ru/polymer/info/polimernaja-shpaklevka/";
  break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki":
 document.location.href ="http://www.teohim.ru/polymer/gruntovka-betona/";
  break
  case urllE="https://elakor-floor.ru/materialy":
document.location.href ="http://www.teohim.ru/vybor/";
  break
 case urllE="https://elakor-floor.ru/pokrytiya/okrasochnye-poly":
 document.location.href ="http://www.teohim.ru/polymer/";
  break
 case urllE="https://elakor-floor.ru/pokrytiya/nalivnye-poly":
 document.location.href ="http://www.teohim.ru/cena/";
  break
 case urllE="https://elakor-floor.ru/pokrytiya/napolnennye-pokrytiya":
 document.location.href ="http://www.teohim.ru/polymer/";
  break
 case urllE="https://elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya":
 document.location.href ="http://www.teohim.ru/polymer/";
  break
 case urllE="https://elakor-floor.ru/obekty/poly-dlya-garaja":
 document.location.href ="http://www.teohim.ru/polymer/info/polimernyj-pol-garazh/";
  break
 case urllE="https://elakor-floor.ru/obekty/poly-dlya-sklada":
document.location.href ="http://www.teohim.ru/prompol/poly-sklad/";
  break
 case urllE="https://elakor-floor.ru/obekty/poly-dlya-tseha":
 document.location.href ="http://www.teohim.ru/prompol/poly-ceh/";
  break
 case urllE="https://elakor-floor.ru/obekty/poly-dlya-ofisa":
 document.location.href ="http://www.teohim.ru/prompol/poly-office/";
   break
 case urllE="https://elakor-floor.ru/obekty/poly-dlya-magazina":
 document.location.href ="http://www.teohim.ru/prompol/poly-magazin/";
   break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/grunt-2k-40":
 document.location.href ="http://www.teohim.ru/polymer/mtr/glubokaja-gruntovka/";
  break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/poliuretanovaja-gruntovka":
 document.location.href ="http://www.teohim.ru/polymer/mtr/gruntovka-glubokogo-proniknovenija/";
  break
  case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/grunt-betonokontakt":
document.location.href ="http://www.teohim.ru/beton/mtr/betonokontakt/";
  break
  case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/dvuhkomponentnyy-grunt":
document.location.href ="http://www.teohim.ru/polymer/mtr/dvuhkomponentnyj-grunt/";
  break
  case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/pischevoy-grunt":
 document.location.href ="http://www.teohim.ru/polymer/mtr/eko-grunt/";
  break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/grunt-metall":
 document.location.href ="http://www.teohim.ru/metal/metal-grunt/";
  break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/antistaticheskiy-grunt_pu":
 document.location.href ="http://www.teohim.ru/polymer/mtr/antistaticheskij-grunt/";
  break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/pu_grunt_2k100":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretanovyj-grunt-dvuhkomponentnyj/";
  break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/ed_grunt_2k60":
 document.location.href ="http://www.teohim.ru/polymer/mtr/jepoksidnaja-gruntovka/";
  break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/elakor-pu-grunt":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretanovyj-grunt/";
  break
 case urllE="https://elakor-floor.ru/materialy/grunty-gruntovki/grunt-2k-100":
 document.location.href ="http://www.teohim.ru/polymer/mtr/epoksidnyj-grunt/";
  break
 case urllE="http://www.teohim.ru/polymer/mtr/gruntovka-glubokogo-proniknovenija/":
 document.location.href ="http://www.teohim.ru/polymer/mtr/gruntovka-glubokogo-proniknovenija/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/elakor-mb2":
 document.location.href ="http://www.teohim.ru/polymer/akrilovyj-lak/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/elakor-pu-toner-dlya-laka":
 document.location.href ="http://www.teohim.ru/polymer/mtr/toner-propitka/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lak-60":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretanovyi-lak/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/epoksidnyy-lak":
 document.location.href ="http://www.teohim.ru/polymer/mtr/epoksidnyj-lak/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/dvuhkomponentnyj-lak":
 document.location.href ="http://www.teohim.ru/wood/lak-dereva/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/pischevoy-lak":
 document.location.href ="http://www.teohim.ru/polymer/mtr/eko-lak-60/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lak-metall":
 document.location.href ="http://www.teohim.ru/metal/metal-lak-60/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/pu_lak_kam":
 document.location.href ="http://www.teohim.ru/polymer/mtr/lak-kamnja-kirpicha/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/pu_lak_polumat_1k":
 document.location.href ="http://www.teohim.ru/polymer/mtr/pu-1k-lak-polumatovyj/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/pu_lak_mat_1k":
 document.location.href ="http://www.teohim.ru/polymer/mtr/pu-1k-lak-matovyj/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/pu_lak_uni_1k":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretanovyi-lak-dlja-pola/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lux_lakr_poluglanz":
 document.location.href ="http://www.teohim.ru/polymer/mtr/r-lak-polugljancevyj/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lux_lakr_polumat":
 document.location.href ="http://www.teohim.ru/polymer/mtr/r-lak-polumatovyj/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lux_lakr_mat":
 document.location.href ="http://www.teohim.ru/polymer/mtr/r-lak-matovyj/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lux_lakr_glubmat":
 document.location.href ="http://www.teohim.ru/polymer/mtr/r-lak-gluboko-matovyj/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lak_parket":
 document.location.href ="http://www.teohim.ru/wood/parketnyj-lak/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lux_lak_wood":
 document.location.href ="http://www.teohim.ru/wood/lak-dereva/";
  break
 case urllE="https://elakor-floor.ru/materialy/laki/lux_lakv_vod_366":
 document.location.href ="http://www.teohim.ru/polymer/mtr/matovyj-lak/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/elakor-pu-emal-60":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretanovaja-kraska/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/dvuhkomponentnaya-emal":
 document.location.href ="http://www.teohim.ru/polymer/mtr/dvuhkomponentnaja-kraska/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/pischevaya-emal":
 document.location.href ="http://www.teohim.ru/polymer/mtr/eko-emal-60/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/emal-metall":
 document.location.href ="http://www.teohim.ru/metal/metal-emal-60/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/kraska-asfalta":
 document.location.href ="http://www.teohim.ru/polymer/mtr/kraska-asfalta/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/pu_emal_2k100":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretan-emal-fakturnaja/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/pu_emal_kraska":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretan-emal-polumat/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/antistaticheskaya-emal-ed-emal-2k-80":
 document.location.href ="http://www.teohim.ru/downloads/epoxide-emal2k80.pdf";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/kras_wood":
 document.location.href ="http://www.teohim.ru/wood/kraska-dlja-dereva/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/el_mb2":
 document.location.href ="http://www.teohim.ru/polymer/akrilovaja-kraska/";
  break
 case urllE="https://elakor-floor.ru/materialy/emali-kraski/elakor-pu-emal-60_361":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretan-emal-polumat/";
  break
 case urllE="https://elakor-floor.ru/materialy/nalivnye-poly/epoksidnyy-nalivnoy-pol":
 document.location.href ="http://www.teohim.ru/nalivnye/epoksidnyj-nalivnoj-pol/";
  break
 case urllE="http://www.teohim.ru/nalivnye/epoksidnyj-nalivnoj-pol/":
 document.location.href ="http://www.teohim.ru/nalivnye/poliuretanovyj-nalivnoj-pol/";
  break
 case urllE="https://elakor-floor.ru/materialy/nalivnye-poly/antistaticheskiy-nalivnoy-pol":
 document.location.href ="http://www.teohim.ru/nalivnye/antistaticheskij-nalivnoj-pol/";
  break
 case urllE="https://elakor-floor.ru/materialy/nalivnye-poly/belyy-nalivnoy-pol":
 document.location.href ="http://www.teohim.ru/nalivnye/belyj-nalivnoj-pol/";
  break
 case urllE="https://elakor-floor.ru/materialy/nalivnye-poly/prozrachnyy-nalivnoy-pol":
 document.location.href ="http://www.teohim.ru/nalivnye/prozrachnyj-nalivnoj-pol/";
  break
 case urllE="https://elakor-floor.ru/materialy/nalivnye-poly/elast-nalivnoy-pol_362":
 document.location.href ="http://www.teohim.ru/nalivnye/elastichnyj-nalivnoj-pol/";
  break
 case urllE="https://elakor-floor.ru/materialy/nalivnye-poly/elast-nalivnoy-pol_362_371":
 document.location.href ="http://www.teohim.ru/nalivnye/rezinovyj-nalivnoj-pol/";
  break
 case urllE="https://elakor-floor.ru/materialy/nalivnye-poly/pu_antistaticheskiy-nalivnoy-pol_367":
 document.location.href ="http://www.teohim.ru/nalivnye/antistaticheskij-nalivnoj-pol-pu/";
  break
 case urllE="https://elakor-floor.ru/materialy/shpatlevki/shpatlyovka-2k":
 document.location.href ="http://www.teohim.ru/polymer/mtr/shpaklevka-dlja-betona/";
  break
 case urllE="https://elakor-floor.ru/materialy/shpatlevki/epoksidnaya-shpatlevka":
 document.location.href ="http://www.teohim.ru/polymer/mtr/shpaklevka-epoksidnaja/";
  break
 case urllE="https://elakor-floor.ru/materialy/shpatlevki/poliuretanovyy-germetik":
 document.location.href ="http://www.teohim.ru/polymer/mtr/poliuretanovyj-germetik/";
  break
 case urllE="https://elakor-floor.ru/materialy/shpatlevki/poliuretanovyy-germetik_vert_363":
 document.location.href ="http://www.teohim.ru/price/";
  break
 case urllE="https://elakor-floor.ru/materialy/others/colr_pasta":
 document.location.href ="http://www.teohim.ru/polymer/mtr/kolerovochnaja-pasta/";
  break
 case urllE="https://elakor-floor.ru/materialy/shpatlevki/shpatlyovka-2k_bp":
 document.location.href ="http://www.teohim.ru/polymer/mtr/shpaklevka-dlja-betona/";
  break
 case urllE="https://elakor-floor.ru/materialy/shpatlevki/epoksidnaya-shpatlevka_bp":
 document.location.href ="http://www.teohim.ru/polymer/mtr/pu-shpaklevka-bp/";
  break
 case urllE="https://elakor-floor.ru/materialy/others/siler":
 document.location.href ="http://www.teohim.ru/beton/mtr/sealer/";
  break
 case urllE="https://elakor-floor.ru/materialy/others/elakor-mb3":
 document.location.href ="http://www.teohim.ru/beton/mtr/ochistka-betona/";
  break
 case urllE="https://elakor-floor.ru/materialy/others/gidrofobizator":
 document.location.href ="http://www.teohim.ru/beton/mtr/gidrofobizator/";
  break
 case urllE="https://elakor-floor.ru/materialy/others/ed_kompaund":
 document.location.href ="http://www.teohim.ru/polymer/mtr/epoksidnyj-kompaund/";
  break
 case urllE="https://elakor-floor.ru/materialy/others/elakor-mb1":
 document.location.href ="http://www.teohim.ru/beton/mtr/fljuat/";
  break
 case urllE="https://elakor-floor.ru/materialy/others/epoksidnaya-smola-dlya-zalivki-prozrachnaya":
 document.location.href ="http://www.teohim.ru/polymer/mtr/smola-art/";
  break
 case urllE="https://elakor-floor.ru/pokrytiya/propitki-dlya-betona/flyuat-propitka":
 document.location.href ="http://www.teohim.ru/beton/mtr/fljuat/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/okrasochnye-poly/poliuretanovoe-pokrytie":
 document.location.href ="http://www.teohim.ru/polymer/poliuretanovoe-pokrytie/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/okrasochnye-poly/epoksidnoe-pokrytie":
 document.location.href ="http://www.teohim.ru/polymer/epoksidnoe-pokrytie/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/okrasochnye-poly/pokrytie-asfalta":
 document.location.href ="http://www.teohim.ru/polymer/pokrytie-dlja-asfalta/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/nalivnye-poly/poliuretanovoe-nalivnoe-pokrytie":
 document.location.href ="http://www.teohim.ru/nalivnye/poliuretanovye-nalivnye-pokrytija/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/nalivnye-poly/epoksidnoe-nalivnoe-pokrytie":
 document.location.href ="http://www.teohim.ru/nalivnye/epoksidnye-nalivnye-pokrytija/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/nalivnye-poly/antistaticheskoe-nalivnoe-pokrytie":
 document.location.href ="http://www.teohim.ru/antistat/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya/dekorativnoe-pokrytie":
 document.location.href ="http://www.teohim.ru/polymer/tech/pokrytie-floki/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya/protivoskolzyaschee-pokrytie":
 document.location.href ="http://www.teohim.ru/vybor/protivoskolzjawie-pokrytija/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya/himstoykoe-pokrytie":
 document.location.href ="http://www.teohim.ru/polymer/himstojkoe-pokrytie/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya/bezyskrovoe-pokrytie":
 document.location.href ="http://www.teohim.ru/polymer/bezyskrovoe-pokrytie/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/spetsialnye-polimernye-pokrytiya/antistaticheskoe-pokrytie":
 document.location.href ="http://www.teohim.ru/antistat/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/propitki-dlya-betona/flyuat-propitka":
 document.location.href ="http://www.teohim.ru/beton/fljuat-propitka/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/propitki-dlya-betona/poliuretanovaya-propitka":
 document.location.href ="http://www.teohim.ru/polymer/poliuretanovaja-propitka/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/propitki-dlya-betona/epoksidnaya-propitka":
 document.location.href ="http://www.teohim.ru/polymer/epoksidnaya-propitka/";
  break
case urllE="https://elakor-floor.ru/pokrytiya/propitki-dlya-betona/propitka-glubokogo-proniknoveniya":
 document.location.href ="http://www.teohim.ru/polymer/cena/glubokaja-propitka/";
  break
case urllE="https://elakor-floor.ru/about-":
 document.location.href ="http://www.teohim.ru/elakor/";
  break
case urllE="https://elakor-floor.ru/contacts":
 document.location.href ="http://www.teohim.ru/contacts/";
  break
case urllE="https://elakor-floor.ru/dostavka":
 document.location.href ="http://www.teohim.ru/contacts/";
  break
case urllE="https://elakor-floor.ru/zakazat-konsultatsiyu":
 document.location.href ="http://www.teohim.ru/order/";
  break
case urllE="https://elakor-floor.ru/sertifikaty":
 document.location.href ="http://www.teohim.ru/sert/";
  break
case urllE="https://elakor-floor.ru/protokoly-ispytaniy":
 document.location.href ="http://www.teohim.ru/sert/";
  break
case urllE="https://elakor-floor.ru/obraztsy-betonov":
 document.location.href ="http://www.teohim.ru/beton/dobavki-betona/";
  break
case urllE="https://elakor-floor.ru/tablitsa-tsvetov":
 document.location.href ="http://www.teohim.ru/colors/";
  break
case urllE="https://elakor-floor.ru/poly/promyshlennye-poly":
 document.location.href ="http://www.teohim.ru/prompol/";
  break
case urllE="https://elakor-floor.ru/poly/betonnye-poly":
 document.location.href ="http://www.teohim.ru/beton/";
  break
case urllE="https://elakor-floor.ru/poly/polimernye-poly":
 document.location.href ="http://www.teohim.ru/polymer/";
  break
case urllE="https://elakor-floor.ru/poly/polimernye-poly/polimernye-poly-dlya-metalla":
 document.location.href ="http://www.teohim.ru/metal/";
  break
case urllE="https://elakor-floor.ru/poly/polimernye-poly/polimernye-poly-dlya-dereva":
 document.location.href ="http://www.teohim.ru/wood/";
  break
case urllE="https://elakor-floor.ru/materialy/dobavki-betona/elastobeton-a":
 document.location.href ="http://www.teohim.ru/beton/dobavki-betona/a1/";
  break
case urllE="https://elakor-floor.ru/materialy/dobavki-betona/elastobeton-b":
 document.location.href ="http://www.teohim.ru/beton/dobavki-betona/b/";
  break
case urllE="https://elakor-floor.ru/poly/betonnye-poly/vse_dobavki":
 document.location.href ="http://www.teohim.ru/beton/dobavki-betona/";
  break






  default:
document.location.href ="http://www.teohim.ru/price";
}

if (x=1) {
goteoh();
}


}




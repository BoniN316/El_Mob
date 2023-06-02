




if (isset($_COOKIE['width'])){
$wdth=$_COOKIE['width'];
}
if ($wdth<345) {$modeWD="320_343";}
 else{
     if ($wdth<361) {$modeWD="360_390";}
 else{
     if ($wdth<376) {$modeWD="375_667";}
 else{
     if ($wdth<385) {$modeWD="384_640";}
 else{
     if ($wdth<416) {$modeWD="411_440";}
 else{
     if ($wdth<490) {$modeWD="480_500";}
 else{
     if ($wdth<540) {$modeWD="533_580";}
 else{
     if ($wdth<580) {$modeWD="533_580";}
 else{
    if ($wdth<610) {$modeWD="600_630";}
 else{
    if  ($wdth<630) {$modeWD="600_630";}
 else{
     if ($wdth<644) {$modeWD="640_680";}
 else{
     if  ($wdth<735 ) {$modeWD="731_750";}
 else{
     if  ($wdth<770) {$modeWD="768_1024";}
 else{
    if  ($wdth<805 ) {$modeWD="800_1280";}
else{
    if  ($wdth<970) {$modeWD="600960L";}
else{
    if ($wdth<1025) {$modeWD="1024";}
 else{
    if  ($wdth<1290) {$modeWD="1280_800";}
else{
    if ($wdth<1370) {$modeWD="1360";}
 else{
    if  ($wdth<1450) {$modeWD="1440_900";}
else{
    if  ($wdth<2000) {$modeWD="style";}
else{
    if  ($wdth>2000) {$modeWD="3000_2500";}

 }}} }}}} }}}}}}}}}}}}}

switch ($modeWD){


      case  '3000_2500':
 echo'<link  href="https://elakor-floor.ru/mg-templates/elakor/css/3000_2500.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

    case  'style':

 echo'<link  href="https://elakor-floor.ru/mg-templates/elakor/css/style.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

   case  '1440_900':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/1440_900.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

  case  '1360':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/1360.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

case  '1280_800':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/1280_800.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

  case  '1024':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/1024.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

  case  '600960L':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/600960L.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

    case  '800_1280':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/800_1280.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;


case  modeWD='768_1024':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/768_1024.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;


     case  '731_750':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/731_750.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;


     case  '640_680':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/640_680.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

    case  '600_630':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/600_630.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

  case  '533_580':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/533_580.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

     case  '480_500':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/480_500.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

     case  '411_440':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/411_440.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

     case  '384_640':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/384_640.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

case  '375_667':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/375_667.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

    case  '360_390':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/360_390.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;


     case  '320_343':

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/320_343.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;


  default:

 echo '<link  href="https://elakor-floor.ru/mg-templates/elakor/css/style.css" id="LMN" rel="stylesheet" type="text/css" />';
  break;

}




}



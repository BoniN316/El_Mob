<?php
class Pactioner extends Actioner {
  private $pluginName = 'tpls';
    public function receptWdth() {
        $k1=$_POST['key1'];

        //echo $k1,$k2;
$_SESSION['tmpl']=$k1;



  }
}
 ?>
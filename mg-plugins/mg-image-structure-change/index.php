<?php

/*
  Plugin Name: Смена структуры хранения изображений товаров
  Description: Плагин для автоматического перемещения изображений товаров в нужные места для соответствия новой структуре хранения.
  Author: Osipov Ivan
  Version: 1.0.2
*/

new mgImageStructureChange;

class mgImageStructureChange{

  private static $lang = array(); // массив с переводом плагина 
  private static $pluginName = ''; // название плагина (соответствует названию папки)
  private static $path = ''; //путь до файлов плагина 
  private static $startTime = null;
  private static $maxExecTime = null;

  public function __construct(){    
    mgAddAction(__FILE__, array(__CLASS__, 'pageSettingsPlugin')); //Инициализация  метода выполняющегося при нажатии на кнопку настроек плагина  

    self::$pluginName = PM::getFolderPlugin(__FILE__);
    self::$lang = PM::plugLocales(self::$pluginName);
    self::$path = PLUGIN_DIR.self::$pluginName;
    self::$startTime = microtime(true);
    self::$maxExecTime = 30;
  }
  
  /**
   * Метод выполняющийся перед генераццией страницы настроек плагина
   */
  private static function preparePageSettings(){
    USER::AccessOnly('1,4','exit()');
    echo '   
      <link rel="stylesheet" href="'.SITE.'/'.self::$path.'/css/style.css" type="text/css" /> 
      <script type="text/javascript">
        includeJS("'.SITE.'/'.self::$path.'/js/script.js");  
      </script> 
    ';
  }

  /**
   * Выводит страницу настроек плагина в админке
   */
  static function pageSettingsPlugin(){
    USER::AccessOnly('1,4','exit()');

    $lang = self::$lang;
    $pluginName = self::$pluginName;          
    self::preparePageSettings();
    include('pageplugin.php');    
  }
  
  public static function moveImage($start = 0, $total_count = 0, $removeOld = true, $setTime = true){    
    $data = array(
      'successExec' => false,
    );
    
    if($setTime){
      self::$startTime = microtime(true);
      self::$maxExecTime = min(30, @ini_get("max_execution_time"));
      if (empty(self::$maxExecTime)) {
        self::$maxExecTime = 30;
      }
    }
    
    $realDocumentRoot = str_replace(DIRECTORY_SEPARATOR . 'mg-plugins' . DIRECTORY_SEPARATOR . self::$pluginName, '', dirname(__FILE__));
    $ds = DIRECTORY_SEPARATOR;
    $curdir = getcwd();
    
    if($total_count == 0){
      if($dbRes = DB::query('SELECT COUNT(id) as count FROM '.PREFIX.'product')){
        $res = DB::fetchAssoc($dbRes);
        $percent100 = $res['count'];
      }
    }else{
      $percent100 = $total_count;
    }
    
    $sql = '
      SELECT DISTINCT p.id as id, p.image_url as image_url, tmp.images as var_image
      FROM `'.PREFIX.'product` p 
        LEFT JOIN (
          SELECT pv.product_id, GROUP_CONCAT(DISTINCT pv.image ORDER BY pv.image ASC SEPARATOR \'|\') as images 
          FROM `'.PREFIX.'product_variant` pv 
          GROUP BY pv.product_id ) AS tmp ON p.id = tmp.product_id
      GROUP BY p.id
      LIMIT '.$start.', 100
    ';
    $dbRes = DB::query($sql);
    $row = mysqli_num_rows($dbRes); 
    $count = $start;
    
    if($row > 0){      
      while($item = DB::fetchAssoc($dbRes)){
        $item['image_url'] .= '|'.$item['var_image'];
        $images = explode("|", $item['image_url']);

        if(empty($images)){
          continue;
        }
        
        $dir = floor($item['id']/100).'00';        
        
        if(!file_exists($realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'].$ds.'thumbs')){

          if(!file_exists($realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'])){

            if(!file_exists($realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir)){

              if(!file_exists($realDocumentRoot.$ds.'uploads'.$ds.'product')){
                if(chdir($realDocumentRoot.$ds.'uploads'.$ds)){
                  mkdir('product', 0755);
                  chdir($curdir);
                }                 
              }

              if(chdir($realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds)){
                mkdir($dir, 0755);
                chdir($curdir);
              }               
            }

            if(chdir($realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds)){
              mkdir($item['id'], 0755);
              chdir($curdir);
            }             
          }

          if(chdir($realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'].$ds)){
            mkdir('thumbs', 0755);
            chdir($curdir);
          }          
        }

        foreach($images as $cell=>$image){
          if(copy($realDocumentRoot.$ds.'uploads'.$ds.$image, $realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'].$ds.$image)){

            if(
              copy($realDocumentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$image, $realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'].$ds.'thumbs'.$ds.'30_'.$image)
              && $removeOld){
              unlink($realDocumentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$image);
            }

            if(
              copy($realDocumentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'70_'.$image, $realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'].$ds.'thumbs'.$ds.'70_'.$image)
              && $removeOld){
              unlink($realDocumentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'70_'.$image);
            }

            if($removeOld){
              unlink($realDocumentRoot.$ds.'uploads'.$ds.$image);
            }            
          }else{
						$image = str_replace('70_', '', $image);
						
						if(copy($realDocumentRoot.$ds.'uploads'.$ds.$image, $realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'].$ds.$image)){

							if(
								copy($realDocumentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$image, $realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'].$ds.'thumbs'.$ds.'30_'.$image)
								&& $removeOld){
								unlink($realDocumentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$image);
							}

							if(
								copy($realDocumentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'70_'.$image, $realDocumentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$item['id'].$ds.'thumbs'.$ds.'70_'.$image)
								&& $removeOld){
								unlink($realDocumentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'70_'.$image);
							}

							if($removeOld){
								unlink($realDocumentRoot.$ds.'uploads'.$ds.$image);
							}
						}
          }
        }
        
        $count++;
        $execTime = microtime(true) - self::$startTime;
        
        if($execTime + 5 >= self::$maxExecTime){          
          $percent = floor(($count * 100) / $percent100);
          $data = array(
            'percent' => $percent,
            'nextItem' => $count,
            'total_count' => $percent100,
          );
                    
          return $data;
        }

      }
      
      if($count < 100){
        $data['successExec'] = true;
        return $data;
      }
      
      return self::moveImage($count, $percent100, $removeOld, false);
    }else{      
      $data['successExec'] = true;
      return $data;
    }
  }
}
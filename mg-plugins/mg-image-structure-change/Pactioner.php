<?php

/**
 * Класс Pactioner наследник стандарного Actioner
 * Предназначен для выполнения действий,  AJAX запросов плагина 
 *
 * @author Avdeev Mark <mark-avdeev@mail.ru>
 */
class Pactioner extends Actioner {
 
  private $pluginName = 'preview-photo';
  private $startTime = null;
  private $maxExecTime = null;

  public function startMoving(){
    $this->messageSucces = $this->lang['SUCCESS_EXEC'];
    $this->messageError = $this->lang['EXEC_ERROR'];    
    
    $start = intval($_POST['nextItem']);
    $total_count = intval($_POST['total_count']);
    $removeOld = (!empty($_POST['data']['remove_old']) && $_POST['data']['remove_old'] != 'false') ? true : false;
    
    $data = mgImageStructureChange::moveImage($start, $total_count, $removeOld);
    
    if(!$data['successExec']){
      
      if(!empty($data['error_message'])){
        $this->messageError = $data['error_message'];
        return false;
      }            
        
      $this->messageSucces = $this->lang['SUCCESS_STEP'].' '.$data['percent'].'%';
      $this->data['nextItem'] = $data['nextItem'];
      $this->data['total_count'] = $data['total_count'];
      return true;
    }
    
    $this->data['successExec'] = true;
    return true;
  } 
  
}

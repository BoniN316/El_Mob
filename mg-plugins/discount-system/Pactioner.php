<?php

/**
 * Класс Pactioner наследник стандарного Actioner
 * Предназначен для выполнения действий,  AJAX запросов плагина 
 *
 * @author Avdeev Mark <mark-avdeev@mail.ru>
 */
class Pactioner extends Actioner {

  private $pluginName = 'discount-system';        

  /**
   * Сохранение изменений в таблице
   * @return boolean
   */
  public function saveEntity() {
    //доступно только модераторам и админам.
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['ENTITY_SAVE'];
    $this->messageError = $this->lang['ENTITY_SAVE_NOT'];
    unset($_POST['pluginHandler']);
    unset($_POST['mguniqueurl']);
    $table = PREFIX.$this->pluginName.'-'.$_POST['name'];
    unset($_POST['name']);
    if ($_POST['id']) {
      if (DB::query('
        UPDATE `'.$table.'`
        SET '.DB::buildPartQuery($_POST).'
        WHERE id ='.DB::quote($_POST['id']))) {
        $this->data = $_POST;
        return true;
      } 
    }
    else {
      unset($_POST['id']);
      if (DB::buildQuery('INSERT INTO `'.$table.'` SET ', $_POST)) {
        $_POST['id'] = DB::insertId();
        $this->data = $_POST;
        return true;
    }
    }
    return false;
  }
  /**
   * Удаление сущности
   * @return boolean
   */
  public function deleteEntity() {
    //доступно только модераторам и админам.
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['ENTITY_DEL'];
    $this->messageError = $this->lang['ENTITY_DEL_NOT'];
    if ($_POST['name'] == 'cumulative') { 
      $sql = 'DELETE FROM `'.PREFIX.$this->pluginName.'-cumulative` WHERE `id`= '.DB::quote($_POST['id']);
    }
    elseif ($_POST['name']== 'volume') {
      $sql = 'DELETE FROM `'.PREFIX.$this->pluginName.'-volume` WHERE `id`= '.DB::quote($_POST['id']);
    }
    else {
      return false;
    }
    if (DB::query($sql)) {
      return true;
    }    
    return false;
  }
    
   /**
   * Сохраняет  опции плагина
   * @return boolean
   */
  public function saveBaseOption() {
    //доступно только модераторам и админам.
    USER::AccessOnly('1,4', 'exit()');
    $this->messageSucces = $this->lang['SAVE_BASE'];
    $this->messageError = $this->lang['NOT_SAVE_BASE'];
    if (!empty($_POST['data'])) {
      MG::setOption(array('option' => 'discount-system-option', 'value' => addslashes(serialize($_POST['data']))));
    }   
    return true;
  }

}
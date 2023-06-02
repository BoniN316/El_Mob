<!--
Доступны переменные:
  $pluginName - название плагина
  $lang - массив фраз для выбранной локали движка
  $options - набор данного плагина хранимый в записи таблиц mg_setting
  $entity - набор записей сущностей плагина из его таблицы
  $pagination - блок навигациицам 
-->
<div class="section-<?php echo $pluginName?>"><!-- $pluginName - задает название секции для разграничения JS скрипта -->

  <!-- Тут начинается верстка видимой части станицы настроек плагина-->
  <div class="widget-table-body">
    <div class="wrapper-entity-setting">

      <!-- Тут начинается  Верстка базовых настроек  плагина (опций из таблицы  setting)-->
      <div class="widget-table-action base-settings">
        <ul class="list-option"><!-- список опций из таблицы setting-->          
          <li><label>
            <span class="custom-text"><?php echo $lang['REMOVE_OLD_IMAGES']?>:</span> 
            <input type="checkbox" name="remove_old" class="tool-tip-right" value="false" title="<?php echo $lang['T_TIP_REMOVE_OLD_IMAGES']?>">
          </label></li>   
          <li>
            <p style="font-size: 12px;color:red;">
            Если вы использовали картинки товаров, из папки "uploads" где-либо помимо товаров(например, в категориях, на страницах, в описаниях), то при переносе изображений, не отмечайте эту опцию. 
            </p>
          </li>
        </ul>
        <div class="block-console" style="margin-top:20px;">          
          <textarea style="width:600px; height:200px;" disabled="disabled"> </textarea>     
        </div>
        <div class="clear"></div>
        <button class="tool-tip-bottom base-setting-save save-button custom-btn" data-id="" title="<?php echo $lang['START_EXEC']?>">
          <span><?php echo $lang['START_EXEC']?></span> <!-- кнопка применения настроек -->
        </button>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
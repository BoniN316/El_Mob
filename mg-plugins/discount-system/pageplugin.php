<!--
     Страница настройки плагина - установка условий предоставления скидок  и их размер
-->
<div class="section-<?php echo $pluginName ?>"><!-- $pluginName - задает название секции для разграничения JS скрипта -->
  <!-- Тут начинается верстка видимой части станицы настроек плагина-->
  <div class="widget-table-body">
    <div class="widget-table-action">
     <a href="javascript:void(0);" class="show-property-order tool-tip-top" title="<?php echo $lang['T_TIP_SHOW_PROPERTY'];?>"><span><?php echo $lang['SHOW_PROPERTY'];?></span></a>
  <div class="clear"></div>
 </div>
    
    <div class="property-order-container settings">    
      <div class="base-options">
          <ul>
              <li><span>Условие для нескольких скидок:</span>
                  <select name="max"  >
                      <?php foreach ($settings as $value => $option):?>
                      <option value="<?php echo $value ?>"  <?php echo ($options['max']==$value ? 'selected' : '');?>> <?php echo $option?></option>
                      <?php endforeach;?>
                  </select>
              </li>
          </ul> 
      </div>
       <div class="clear"></div>   
      <a href="javascript:void(0);" class="base-setting-save custom-btn"><span>Сохранить</span></a>
      </div>
                 
      <div class="table-block">
        <h2>Таблица накопительной скидки:</h2>
        <div class="link-result">Скидка предоставляется зарегестрированному пользователю, в зависимости от
        суммы всех оплаченных заказов данного пользователя.</div>
         <table class="cumulative-table">          
          <thead>
            <tr>             
              <th>
               Сумма оплаченных заказов более
              </th>      
              <th>
               Скидка
              </th>
              <th class="actions"><?php echo $lang['ACTIONS'];?>
              </th>
            </tr>
          </thead>                    
          <tbody class="cumulative-tbody">
            <?php 
              if (empty($cumulative)): ?>
                <tr class="no-results">
                  <td colspan="3" align="center">Нет накопительной скидки</td>
                </tr>
            <?php else: ?>
            <?php foreach ($cumulative as $row): ?>
                    <tr data-id="<?php echo $row['id']; ?>">
                      <td data-sum="<?php echo $row['summ']; ?>">
                          <input type="text" name="sum" value="<?php echo MG::numberFormat($row['summ'])?>"><span> <?php echo MG::getSetting('currency'); ?></span>
                      </td>   
                      <td>  
                          <input type="text" name="percent" class="percent-input" value="<?php echo $row['percent'] ?>"><span> %</span>
                      </td>   
                      <td class="actions">
                        <ul class="action-list" data-desc="cumulative"><!-- Действия над записями плагина -->
                          <li class="save-row tool-tip-bottom" 
                              data-id="<?php echo $row['id'] ?>" 
                              title="<?php echo $lang['SAVE']; ?>">
                            <a href="javascript:void(0);"></a>
                          </li>
                          <li class="delete-row" 
                              data-id="<?php echo $row['id'] ?>">
                            <a class="tool-tip-bottom" href="javascript:void(0);"  
                               title="<?php echo $lang['DELETE']; ?>"></a>
                          </li>
                        </ul>
                          <span class="change"></span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
                    <tr><td colspan="3"><a href="javascript:void(0)" data-desc="cumulative" class="add new-discount-rang custom-btn"><span>Добавить скидку</span></a></td></tr>
            </tbody>
          </table>
        <div class="clear"></div>
      </div>
      <div class="table-block">
      <h2>Таблица объемной скидки:</h2>
        <div class="link-result">Скидка предоставляется один раз любому пользователю, в зависимости от
        суммы заказа.</div>
         <table class="volume-table">          
          <thead>
            <tr>             
              <th>
               Сумма заказа более
              </th>      
              <th>
               Скидка
              </th>
              <th class="actions"><?php echo $lang['ACTIONS'];?>
              </th>
            </tr>
          </thead>                    
          <tbody class="volume-tbody"> 
            <?php 
              if (empty($volume)): ?>
                <tr class="no-results">
                  <td colspan="3" align="center">Нет единовременных скидок</td>
                </tr>
            <?php else: ?>
            <?php foreach ($volume as $row): ?>
                    <tr data-id="<?php echo $row['id']; ?>">
                      <td data-sum="<?php echo $row['summ']; ?>">
                          <input type="text" name="sum" value="<?php echo MG::numberFormat($row['summ'])?>"><span> <?php echo MG::getSetting('currency'); ?></span>
                      </td>   
                      <td>  
                          <input type="text" name="percent" class="percent-input" value="<?php echo $row['percent'] ?>"><span> %</span>
                      </td>   
                      <td class="actions">
                        <ul class="action-list" data-desc="volume"><!-- Действия над записями плагина -->
                          <li class="save-row tool-tip-bottom" 
                              data-id="<?php echo $row['id'] ?>" 
                              title="<?php echo $lang['SAVE']; ?>">
                            <a href="javascript:void(0);"></a>
                          </li>
                          <li class="delete-row" 
                              data-id="<?php echo $row['id'] ?>">
                            <a class="tool-tip-bottom" href="javascript:void(0);"  
                               title="<?php echo $lang['DELETE']; ?>"></a>
                          </li>
                        </ul>
                          <span class="change"></span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
                    <tr><td colspan="3"><a href="javascript:void(0)" data-desc="volume" class="add new-discount-rang custom-btn"><span>Добавить скидку</span></a></td></tr>
            </tbody>
          </table>
        <div class="clear"></div>
      </div>
      
  </div>
  </div>


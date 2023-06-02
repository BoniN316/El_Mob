
<div class="section-<?php echo $pluginName ?>">
    <div class="widget-table-wrapper">

        <!-- Тут начинается  Верстка таблицы наборов -->
        <div class="widget-table-body">


                <div class="add-new-button tool-tip-top" title="<?php echo $lang['T_TIP_ADD_NEW_SET']; ?>"><span><?php echo $lang['ADD_NEW_SET']; ?></span></div>
                 <a href="javascript:void(0);" class="show-property-order tool-tip-top" title="<?php echo $lang['T_TIP_SHOW_PROPERTY'];?>"><span><?php echo $lang['SHOW_PROPERTY'];?></span></a>
                <input type="text" name="searchSet" value="<?php echo $lang['FIND'];?>..." 
                  onfocus="if (this.value == '<?php echo $lang['FIND'];?>...') {this.value = '';}" onblur="if (this.value == '') 
                  {this.value = '<?php echo $lang['FIND'];?>...';}" 
                  class="custom-input search-input"/> 
                  <a href="#" class="searchSet tool-tip-top" title="<?php echo $lang['FIND'];?>"></a>
                <div class="filter" >
                    <span class="last-items"><?php echo $lang['SHOW_SET_COUNT']; ?></span>
                    <select class="last-items-dropdown countPrintSetGoods">
                        <?php
                        foreach (array(10, 20, 50, 100) as $value) {
                          $selected = '';
                          if ($value == $countPrintSetGoods) {
                            $selected = 'selected="selected"';
                          }
                          echo '<option value="'.$value.'" '.$selected.' >'.$value.'</option>';
                        }
                        ?>
                    </select>
                </div>

             <div class="property-order-container">    
          <form  class="base-setting" name="base-setting" method="POST">      
              <h2>На странице комплекта: </h2>
              <ul class="list-option">
                  <li><label><span>Выводить информацию о комплекте (без кнопки купить), если одного из комплектующих нет в наличии:</span> <input type="checkbox" name="output" value="<?php echo $options["output"]?>" <?php echo ($options["output"]&&$options["output"]!='false')?'checked=cheked':''?>></label></li>
                  <li><span>Вывод сообщения, если комплектующих нет в наличии</span> <input type="text" name="msg" value="<?php echo $options["msg"]?>"/></li>
                  </ul>
              <div class="clear"></div>
              <h2>На странице комплектующих: </h2>
              <ul class="list-option">
                  <li><label><span>Выводить информацию о комплекте (без кнопки купить) на странице комплектующего, если одного из товаров входящих в комплект нет в наличии:</span> <input type="checkbox" name="output2" value="<?php echo $options["output2"]?>" <?php echo ($options["output2"]&&$options["output2"]!='false')?'checked=cheked':''?>></label></li>
                  <li><span>Вывод сообщения на странице комплектующего, если комплектующих нет в наличии</span> <input type="text" name="msg2" value="<?php echo $options["msg2"]?>"/></li>
              </ul>
              <div class="clear"></div>
          </form>
          <div class="clear"></div>
        <a href="javascript:void(0);" class="base-setting-save custom-btn"><span>Сохранить</span></a>
        <div class="clear"></div>
      </div>


            <div class="main-settings-container">
                <table class="widget-table product-table">
                    <thead>
                        <tr>
                            <th class="id_set">№</th>
                            <th class="id product_id">№ в таблице товаров</th>
                            <th class="product-picture"><?php echo $lang['IMAGE_SET']; ?></th>
                            <th class="set-name">Название комплекта</th>
                            <th class="set-price">Цена</th>
                            <th class="rest">Количество</th>
                            <th class="actions"><?php echo $lang['ACTIONS']; ?></th>
                        </tr>
                    </thead>
                    <tbody class="product-tbody set-goods-tbody">
                        <?php
                        if (!empty($entity)) {
                          foreach ($entity as $data) {
                            ?>
                            <tr id="<?php echo $data['id_set'] ?>" data-id="<?php echo $data['id_set'] ?>" data-prodid="<?php echo $data['id_product'] ?>" class="product-row">
                                <td calss="set-<?php echo $data['id_set']; ?>" class="id_set">
                                    <?php echo $data['id_set']; ?>
                                </td>
                                <td id="<?php echo $data['id_product']; ?>" class="product_id">
                                    <?php echo $data['id_product']; ?>
                                </td>
                                <td class="product-picture image_url" >
                                    <?php
                                    $imagesUrl = explode("|", $data['image_url']);
                                    $src = SITE.'/mg-admin/design/images/no-img.png';
                                    $ds = DIRECTORY_SEPARATOR;                                    
                                    if (!empty($imagesUrl[0])) {
                                      $dir = floor($data['id_product']/100).'00';
                                      if(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'product'.$ds.$dir.$ds.$data['id_product'].$ds.$imagesUrl[0])){
                                        $src = SITE.'/uploads/product/'.$dir.'/'.$data['id_product'].'/'.$imagesUrl[0];
                                      }elseif(file_exists(URL::$documentRoot.$ds.'uploads'.$ds.'thumbs'.$ds.'30_'.$imagesUrl[0])) {
                                        $src = SITE.'/uploads/thumbs/30_'.$imagesUrl[0];
                                      }
                                    }
                                    ?>
                                    <img class="uploads" src="<?php echo $src ?>"/>
                                </td>
                                <td class="set-name" ><?php echo $data['title']; ?>
                                    <a class="link-to-site tool-tip-bottom" title="<?php echo $lang['SET_VIEW_SITE']; ?>" 
                                       href="<?php echo SITE ?>/<?php echo $data['category_url'] ? $data['category_url'] : 'catalog' ?>/<?php echo $data['product_url'] ?>"  target="_blank" >
                                        <img src="<?php echo SITE ?>/mg-admin/design/images/icons/link.png" alt="" /></a>
                                </td>
                                <td class="price">
                                    <?php echo (MG::numberFormat($data['price_course']).' '.MG::getSetting('currency')); ?>  
                                </td>
                                <td class="count">
                                    <?php echo ($data['count'] >= 0 ? $data['count'] : '∞'); ?>
                                </td>                                    
                                <td class="actions">
                                    <ul class="action-list">                
                                        <li class="edit-row" id="<?php echo $data['id_product'] ?>" data-set="<?php echo $data['id_set'] ?>">
                                            <a class="tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['EDIT']; ?>"></a></li>
                                        <li class="new tool-tip-bottom  <?php echo ($data['new']) ? 'active' : '' ?>" data-id="<?php echo $data['id_product'] ?>" 
                                            title="<?php echo ($data['new']) ? $lang['PRINT_IN_NEW'] : $lang['PRINT_NOT_IN_NEW']; ?>">
                                            <a href="javascript:void(0);"></a></li>
                                        <li class="recommend tool-tip-bottom  <?php echo ($data['recommend']) ? 'active' : '' ?>"
                                            data-id="<?php echo $data['id_product'] ?>" title="<?php echo ($data['recommend']) ? $lang['PRINT_IN_RECOMEND'] : $lang['PRINT_NOT_IN_RECOMEND']; ?>">
                                            <a href="javascript:void(0);"></a></li>
                                        <li class="clone-row" id="<?php echo $data['id_product'] ?>">
                                            <a class="tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['CLONE']; ?>"></a></li>
                                        <li class="visible tool-tip-bottom  <?php echo ($data['activity']) ? 'active' : '' ?>"
                                            data-id="<?php echo $data['id_product'] ?>" title="<?php echo ($data['activity']) ? $lang['ACT_V_ENTITY'] : $lang['ACT_UNV_ENTITY']; ?>">
                                            <a href="javascript:void(0);"></a></li>
                                        <li class="delete-order " id="<?php echo $data['id_product'] ?>">
                                            <a class="tool-tip-bottom" href="javascript:void(0);"  title="<?php echo $lang['DELETE']; ?>"></a></li>
                                    </ul> 
                                </td>
                            </tr>
                          <?php
                          }
                        } else {
                          ?>

                          <tr class="no-results"><td colspan="7"><?php echo $lang['SET_NONE'] ?></td></tr>

<?php } ?>
                    </tbody>
                </table>       
            </div>
<?php echo $pagination ?>
            <div class="clear"></div>
        </div>
        <!-- Тут заканчивается Верстка таблицы товаров -->

        <!-- Тут начинается Верстка модального окна -->

        <div class="b-modal hidden-form" id="mg-add-set-wrapper">
            <div class="product-table-wrapper">
                <div class="widget-table-title">
                    <h4 class="add-product-table-icon">Создать комплект товаров</h4>
                    <div class="b-modal_close tool-tip-bottom" title="<?php echo $lang['CLOSE_MODAL']; ?>"></div>
                </div>
                <div class="widget-table-body">
                    <div class="add-product-form-wrapper">
                        <h3>Комплект товаров!</h3>
                        <div class="add-img-form">
                            <div class="images-block">
                                <p class="add-img-text"><?php echo $lang['IMAGE_SET'] ?></p>
                                <div class="prod-gallery">
                                    <div class="small-img-wrapper"></div>
                                </div>                  
                                <div class="controller-gallery">
                                    <a href="javascript:void(0);" class="add-image"><span><?php echo $lang['ADD_IMG']; ?></span></a>                          
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-text-inputs">
                                <label for="title"><span class="custom-text"><?php echo $lang['NAME_SET']; ?>:</span>
                                    <input style="width:248px;" type="text" name="title" class="product-name-input tool-tip-right" title="<?php echo $lang['T_TIP_NAME_SET']; ?>" >
                                    <div class="errorField"><?php echo $lang['ERROR_SPEC_SYMBOL']; ?></div>

                                    <input type="hidden" name="link_electro" class="product-name-input">
                                    <a href="javascript:void(0);" class="add-link-electro">Добавить ссылку на электронный товар</a>
                                    <a href="javascript:void(0);" class="del-link-electro">Удалить</a>
                                </label>
                                <label><span class="custom-text"><?php echo $lang['URL_SET']; ?>:</span>
                                    <input style="width:248px;" type="text" name="url" class="product-name-input tool-tip-right" title="<?php echo $lang['T_TIP_URL_SET']; ?>">
                                    <div class="errorField"><?php echo $lang['ERROR_EMPTY']; ?></div></label>
                                <div class="category-filter">
                                    <span class="custom-text"><?php echo $lang['CAT_SET']; ?>:<a href="javascript:void(0);" class="add-category"><span>+</span></a></span>
                                    <select  style="width:270px;" class="last-items-dropdown custom-dropdown tool-tip-right" title="<?php echo $lang['T_TIP_CAT_SET']; ?>" id="productCategorySelect" name="cat_id">
                                        <option selected="selected" value="0"><?php echo $lang['ALL']; ?></option>
<?php echo $categoriesOptions ?>
                                    </select>
                                </div>

                                <div class="inside-category" style="display:none">
                                    <span class="custom-text"><?php echo $lang['SET_VIEW_IN_CAT']; ?>:</span>
                                    <select class ="tool-tip-top" title="<?php echo $lang['T_TIP_SELECTED_U_CAT']; ?>" name="inside_cat" multiple size="4">
<?php echo $categoriesOptions ?>
                                    </select>
                                    <div class="clear"></div>
                                    <a href="javascript:void(0);" class="clear-select-cat">
                                        <span><?php echo $lang['SET_CLEAR_CAT']; ?></span></a>
                                    <a href="javascript:void(0);" class="full-size-select-cat closed-select-cat">
                                        <span><?php echo $lang['SET_OPEN_CAT']; ?></span></a>
                                </div>                  

                                <div class="select-currency-block" style="display:none">
                                    <div class="currency-block">
                                        <div class="add-product-field">
                                            <span>Выберите валюту:</span>        
                                            <select name="currency_iso" class="product-name-input">
                                                <?php
                                                $currencyShort = MG::getSetting('currencyShort');
                                                $currencyRate = MG::getSetting('currencyRate');
                                                foreach ($currencyShort as $iso => $short):
                                                  ?>
                                                  <option value="<?php echo $iso; ?>" data-rate="<?php echo $currencyRate[$iso]; ?>"><?php echo $short; ?></option>
<?php endforeach; ?>                       
                                            </select>                    
                                        </div>                   
                                        <a class="apply-currency fl-right custom-btn" href="javascript:void(0);"><span>Применить</span></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>

                                <div class="variant-table-wrapper">
                                    <table class='variant-table'>
                                    </table>
                                    <a href="javascript:void(0);" class="add-position"><span><?php echo $lang['ADD_VARIANT']; ?></span></a>
                                </div>                 

                                <!-- Блок добавление товара в комплект -->
                                <h3>Товары комплекта:</h3>
                                <div class="search-block add">
                                    <div class="add-product-field-add">
                                        <span><?php echo $lang['SET_ADD_PRODUCT']; ?>: </span>               
                                        <input type="text" autocomplete="off" name="searchcat" class="search-field-add" placeholder="<?php echo $lang['RELATED_7']; ?>" >
                                        <div class="errorField" style="display: none;"><?php echo $lang['RELATED_1']; ?></div>

                                    </div>
                                    <div class="example-line"><?php echo $lang['RELATED_2']; ?>: <a href="javascript:void(0)" class="example-find" ><?php echo $exampleName ?></a></div>
                                    <div class="fastResult" style="position:inherit"></div>               
                                    <div class="errorField set"><?php echo $lang['ERROR_COUNT_SET']; ?></div>
                                </div>

                            </div>
                            <div class="clear"></div>
                            <div class="product-block">
                                <!-- Здесь будет отображена карточка товара -->
                            </div>
                            <!-- Товары комплекта -->
                            <div>
                                <div class="related-wrapper set">
                                    <div class="added-components">
                                        <span class="none-components"><?php echo ($lang['COMPONENTS_NONE']) ?></span>
                                        <div class="clear"></div>
                                    </div>
                                </div>

                                <span class="cost-set">Общая стоимость: <span class="cost-set-total"></span></span>
                                <span class="cost-set">Общий вес: <span class="weight-set-total"></span></span>
                                <!-- Блок добавление товара в комплект финиш -->
                            </div>
                            <!--Блок для редактирования галереии продуктов-->
                            <div class="userField"></div>
                            <div class="product-desc-wrapper">
                                <span class="custom-text" style="margin-bottom: 10px;"><?php echo $lang['DESCRIPTION_SET']; ?>:</span>
                                <div style="background:#FFF">
                                    <textarea class="product-desc-field" name="html_content" style="width:821px;"></textarea>
                                </div>
                            </div>



                            <div class="add-related-product-block">
                                <div class="add-related-button-wrapper">
                                    <a class="add-related-product tool-tip-bottom" href="javascript:void(0);" title="<?php echo $lang['RELATED_6']; ?>"><?php echo $lang['RELATED_5']; ?><span class="add-icon"></span></a>
                                    <div class="select-product-block">
                                        <div class="search-block related">
                                            <div class="add-product-field">

                                                <span><?php echo $lang['SET_ADD_RELATE']; ?>: </span>               
                                                <input type="text" autocomplete="off" name="searchcat" class="search-field" placeholder="<?php echo $lang['RELATED_7']; ?>" >
                                                <div class="errorField" style="display: none;"><?php echo $lang['RELATED_1']; ?></div>

                                            </div>
                                            <div class="example-line"><?php echo $lang['RELATED_2']; ?>: <a href="javascript:void(0)" class="example-find" ><?php echo $exampleName ?></a></div>
                                            <div class="fastResult" ></div>     
                                            <a class="cancel-add-related custom-btn" href="javascript:void(0);"><span><?php echo $lang['RELATED_3']; ?></span></a>
                                            <a class="random-add-related custom-btn" href="javascript:void(0);"><span>Случайный товар</span></a>

                                            <div class="clear"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="related-wrapper">
                                    <div class="added-related-product-block">    
                                        <a class="add-related-product in-block-message" href="javascript:void(0);"><span><?php echo $lang['RELATED_4']; ?></span></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>



                            <span class="yml-title">Показать настройки YML</span>
                            <div class="yml-wrapper" style="display:none">
                                <label>
                                    <span class="custom-text">Содержание поля sales_notes:
                                        <a href='javascript:void(0);' class='tool-tip-top desc-property' title="Используется для указания особых условий: комплектации, покупки, доставки для данного товара, а также для описания акций, скидок и распродаж." >?</a>
                                    </span><input type="text" name="yml_sales_notes" title="Будет подставлено в sales_notes. Допустимая длина - 50 символов." class="product-name-input meta-data tool-tip-bottom"></label>

                            </div>      

                            <div class="clear"></div>
                            <span class="seo-title"><?php echo $lang['SEO_BLOCK'] ?></span>
                            <div class="seo-wrapper">
                                <label><span class="custom-text"><?php echo $lang['META_TITLE']; ?>:</span><input type="text" name="meta_title" title="<?php echo $lang['T_TIP_META_TITLE']; ?>" class="product-name-input meta-data tool-tip-bottom"></label>
                                <label><span class="custom-text"><?php echo $lang['META_KEYWORDS']; ?>:</span><input type="text" name="meta_keywords" class="product-name-input meta-data tool-tip-bottom" title="<?php echo $lang['T_TIP_META_KEYWORDS']; ?>"></label>
                                <label>
                                    <ul class="meta-list">
                                        <li><span class="custom-text"><?php echo $lang['META_DESC']; ?>:</span></li>
                                        <li><span class="symbol-left"><?php echo $lang['LENGTH_META_DESC']; ?></span>: <span class="symbol-count"></span></li>
                                    </ul>
                                    <textarea class="product-meta-field tool-tip-bottom" name="meta_desc" title="<?php echo $lang['T_TIP_META_DESC']; ?>"></textarea>
                                </label>
                            </div>                

                            <div class="clear"></div>


                            <button class="save-set-button custom-btn  tool-tip-bottom" title="<?php echo $lang['T_TIP_SAVE_SET']; ?>"><span><?php echo $lang['SAVE']; ?></span></button>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Тут заканчивается Верстка модального окна -->
    </div>
</div>

<script>$(".added-related-product-block").sortable();</script>


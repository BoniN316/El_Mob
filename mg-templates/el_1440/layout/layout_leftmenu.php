<?php $colnum = 0; $col_subnum = 0;?>
<?php foreach ($data['categories'] as $category): ?>
    <?php if ($category['invisible'] == "1") { continue;} ?>

    <?php if (SITE.URL::getClearUri() === $category['link']) {
        $active = 'active';
    } else {
        $active = '';
    } ?>

    <?php
        //Счетчик для колонок с ограничением трех позиций
        $colnum += 1;
        //Текст для других
        $colothers = array('1'=>'Все материалы', '2'=>'Все покрытия', '3'=>'Все объекты');
        //если больше трех не вываодить
        if ($colnum > 3) { continue;};
    ?>

    <?php if (isset($category['child'])): ?>
        <?php /** если все вложенные категории неактивны, то не создаем вложенный список UL */ $slider = 'slider'; $noUl = 1; foreach($category['child'] as $categoryLevel1){$noUl *= $categoryLevel1['invisible']; } if($noUl){$slider='';}?>

            <div class="cols col<?php echo $colnum; ?>">
                <div class="cattitle <?php echo $active ?>">
                    <?php echo MG::contextEditor('category', $category['title'], $category["id"], "category"); ?>
                    <?php //echo $category['insideProduct']?'('.$category['insideProduct'].')':''; ?>
                </div>
                <?php  if($noUl){$slider=''; continue;} ?>
                <ul class="submenu">
                    <?php $col_subnum = 0;?>
                    <?php foreach ($category['child'] as $categoryLevel1): ?>

                        <?php $col_subnum += 1;
                            if ($col_subnum > 5) { continue;};?>


                        <?php if ($categoryLevel1['invisible'] == "1") { continue; } ?>

                        <?php if (SITE.URL::getClearUri() === $categoryLevel1['link']) {
                            $active = 'active';
                        } else {
                            $active = '';
                        } ?>

                        <?php if (isset($categoryLevel1['child'])): ?>
                            <?php /** если все вложенные категории неактивны, то не создаем вложенный список UL */ $slider = 'slider'; $noUl = 1; foreach($categoryLevel1['child'] as $categoryLevel2){$noUl *= $categoryLevel2['invisible']; } if($noUl){$slider='';}?>

                            <li class="<?php echo $active ?>">
                                <a  href="<?php echo $categoryLevel1['link']; ?>" title="$categoryLevel1['title']">
                                    <?php echo MG::contextEditor('category', $categoryLevel1['title'], $categoryLevel1["id"], "category"); ?>
                                    <?php //echo $categoryLevel1['insideProduct']?'('.$categoryLevel1['insideProduct'].')':''; ?>
                                </a>
                            </li>

                        <?php else: ?>
                            <li class="<?php echo $active ?>">
                                <a  href="<?php echo $categoryLevel1['link']; ?>" title="$categoryLevel1['title']">
                                    <?php echo MG::contextEditor('category', $categoryLevel1['title'], $categoryLevel1["id"], "category"); ?>
                                    <?php //echo $categoryLevel1['insideProduct']?'('.$categoryLevel1['insideProduct'].')':''; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <div class="others"><a href="<?php echo $category['link']; ?>" title="<?php echo $colothers[$colnum];?>"><?php echo $colothers[$colnum];?></a></div>
            </div>

    <?php else: ?>

            <div class="cols col<?php echo $colnum; ?>">
                <div class="cattitle <?php echo $active ?>">
                    <?php echo MG::contextEditor('category', $category['title'], $category["id"], "category"); ?>
                    <?php //echo $category['insideProduct']?'('.$category['insideProduct'].')':''; ?>
                </div>
                <p>Ничего не найдено</p>
                <ul>
                    <li class="<?php echo $active ?> <?php if(!empty($category['image_url'])): ?>cat-img<?php endif; ?>">
                        <a href="<?php echo $category['link']; ?>" title="<?php echo $category['title']; ?>">
                            <?php echo MG::contextEditor('category', $category['title'], $category["id"], "category"); ?>
                            <?php //echo $category['insideProduct']?'('.$category['insideProduct'].')':''; ?>
                        </a>
                    </li>
                </ul>

                <div class="others"><a href="<?php echo $category['link']; ?>" title="<?php echo $colothers[$colnum];?>"><?php echo $colothers[$colnum];?></a></div>
            </div>

    <?php endif; ?>
<?php endforeach; ?>
 <?php/** echo $active; **/?>
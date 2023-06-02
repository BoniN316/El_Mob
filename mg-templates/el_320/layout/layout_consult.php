<?php
echo '<link href="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.css" rel="stylesheet" />';
echo '<script type="text/javascript" src="'.PATH_SITE_TEMPLATE.'/js/fancybox/jquery.fancybox.js"></script>';

?>
<script>
    $(function(){
        $(document).on("submit", "#consult_form",function(e){
            //отменяем стандартное действие при отправке формы
            e.preventDefault();
            //берем из формы метод передачи данных
            var m_method=$(this).attr('method');
            //получаем адрес скрипта на сервере, куда нужно отправить форму
            var m_action=$(this).attr('action');
            //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
            //то есть в стандартном формате передачи данных формы
            var m_data=$(this).serialize();
            $.ajax({
                type: m_method,
                url: m_action,
                data: m_data,
                resetForm: 'true',
                success: function(result){
                  console.log(result);
                     if (result == 'OK') {
                        $("#out_consult_form").html('');
                        $("#out_consult_form").append('<p class="cf_success">Спасибо за заявку. Ваше сообщение будет рассмотрено нашими менеджерами в кратчайшие сроки!</p>');
                     }

                     else {
                        $('.cf_errors').html('');
                        $("#out_consult_form").prepend('<div class="cf_errors">'+result+'</div>');
                        $.fancybox.reposition();
                     }
                }
            });
        });

    });
</script>

<script>
    $(document).ready(function() {
         $('#cf_open').click(function(){
            $('#osn_info').css('display', 'none');
            $('#dop_info').css('display', 'block');
         });
        $("#cf_open").fancybox({
         helpers:  {
            title:  null
         },
         tpl         : {
            closeBtn : '<a title="Закрыть" class="fancybox-item fancybox-close" href="javascript:;"></a>'
         },
         afterClose: function(){
            $('.cf_errors').html('');
            $('#out_consult_form').css('display', 'block');
            $('#osn_info').css('display', 'block');
            $('#dop_info').css('display', 'none');
         }
        });

    });
</script>

<div id="out_consult_form">
    <form action="/consult.php" id="consult_form" method="POST">
      <div id="osn_info">
        <table>
            <tbody>
            <tr>
                <td class="cf_name">ПППлощадь, м.кв.</td>
                <td class="cf_value"><input type="text" value="" placeholder="0" maxlength="10" name="cf_area" id="cf_area" style="background: #08c438; border: 1px solid grey;"></td>
            </tr>
            <tr>
                <td class="cf_name">Назначение помещения</td>
                <td class="cf_value">
                    <select id="cf_naznach" name="cf_naznach">
                        <option value="">&nbsp;</option>
                        <option value="цех">&nbsp;&nbsp;&nbsp;цех</option>
                        <option value="склад">&nbsp;&nbsp;&nbsp;склад</option>
                        <option value="гараж">&nbsp;&nbsp;&nbsp;гараж</option>
                        <option value="другое">&nbsp;&nbsp;&nbsp;другое</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="cf_name">Нагрузки</td>
                <td class="cf_value">
                    <select id="cf_nagr" name="cf_nagr">
                        <option value="">&nbsp;</option>
                        <option value="пешеходные">&nbsp;&nbsp;&nbsp;пешеходные</option>
                        <option value="тележки-«роклы»">&nbsp;&nbsp;&nbsp;тележки-«роклы»</option>
                        <option value="погрузчики">&nbsp;&nbsp;&nbsp;погрузчики</option>
                        <option value="другое">&nbsp;&nbsp;&nbsp;другое</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="cf_name">Поверхность</td>
                <td class="cf_value">
                    <select id="cf_poverh" name="cf_poverh">
                        <option value="">&nbsp;&nbsp;&nbsp;</option>
                        <option value="бетонная стяжка">&nbsp;&nbsp;&nbsp;бетонная стяжка</option>
                        <option value="пескоцементная стяжка">&nbsp;&nbsp;&nbsp;пескоцементная стяжка</option>
                        <option value="другое">&nbsp;&nbsp;&nbsp;другое</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="cf_name">Марка М (Класс В)</td>
                <td class="cf_value">
                    <select id="cf_marka" name="cf_marka">
                        <option value="">&nbsp;</option>
                        <option value="М100 (В7,5)">&nbsp;&nbsp;&nbsp;М100 (В7,5)</option>
                        <option value="М150 (В12,5)">&nbsp;&nbsp;&nbsp;М150 (В12,5)</option>
                        <option value="М200 (В15)">&nbsp;&nbsp;&nbsp;М200 (В15)</option>
                        <option value="М250 (В20)">&nbsp;&nbsp;&nbsp;М250 (В20)</option>
                        <option value="М300 (В22,5)">&nbsp;&nbsp;&nbsp;М300 (В22,5)</option>
                        <option value="М350 (В25)">&nbsp;&nbsp;&nbsp;М350 (В25)</option>
                        <option value="М400 (В30)">&nbsp;&nbsp;&nbsp;М400 (В30)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="cf_name">Тип покрытия</td>
                <td class="cf_value">
                    <select id="cf_pokritie" name="cf_pokritie">
                        <option value="">&nbsp;&nbsp;&nbsp;</option>
                        <option value="Окрасочное покрытие">&nbsp;&nbsp;&nbsp;Окрасочное покрытие</option>
                        <option value="Наливной пол">&nbsp;&nbsp;&nbsp;Наливной пол</option>
                        <option value="Наполненное покрытие">&nbsp;&nbsp;&nbsp;Наполненное покрытие</option>
                        <option value="Полимерное покрытие">&nbsp;&nbsp;&nbsp;Полимерное покрытие</option>
                         <option value="Пропиточное покрытие">&nbsp;&nbsp;&nbsp; Пропиточное покрытие</option>
                        <option value="другое">&nbsp;&nbsp;&nbsp;другое</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="cf_name">Цвет</td>
                <td class="cf_value"><input type="text" value="" maxlength="30" id="cf_cvet" name="cf_cvet" style="background: #08c438; border: 1px solid grey;"></td>
            </tr>
            <tr>
                <td class="cf_name">Блеск</td>
                <td class="cf_value">
                    <select id="cf_blesk" name="cf_blesk">
                        <option value="">&nbsp;&nbsp;&nbsp;</option>
                        <option value="глянцевый">&nbsp;&nbsp;&nbsp;глянцевый</option>
                        <option value="полуглянцевый">&nbsp;&nbsp;&nbsp;полуглянцевый</option>
                        <option value="полуматовый">&nbsp;&nbsp;&nbsp;полуматовый</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="cf_name">Необходимость шпатлевания - «выглаживания» (заделка мелких раковин, трещин и т.п):</td>
                <td class="cf_value">
                    <select id="cf_shpat" name="cf_shpat">
                        <option value="">&nbsp;&nbsp;&nbsp;</option>
                        <option value="да">&nbsp;&nbsp;&nbsp;да</option>
                        <option value="нет">&nbsp;&nbsp;&nbsp;нет</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="cf_name cf_cols2">Особенности (падение предметов, сварка, агрессивные среды, антискользящие свойства или др.)</td>
            </tr>
            <tr>
                <td colspan="2" class="cf_value cf_cols2">
                    <textarea id="cf_osob" name="cf_osob" rows="15" style="width: 100%; padding: 0.5em; background: #08c438; border: 1px solid grey;"></textarea>
                </td>
            </tr>
            </tbody>
        </table>

        <a id="cf_open" class="pbutton bttech subbutton" href="#out_consult_form" class="btn_open pbutton bttech" title="Оформить заказ">Оформить заказ</a>
      </div>


     <div id="dop_info" style="display:none;">
        <table>
            <tbody>
            <tr>
                <td class="cf_name">Заказчик, контактное лицо:<span class="red-star">*</span></td>
                <td class="cf_value"><input type="text" value="" maxlength="30" id="cf_name" name="cf_name"></td>
            </tr>
            <tr>
                <td class="cf_name">Телефон:<span class="red-star">*</span></td>
                <td class="cf_value"><input type="text" value="" maxlength="30" id="cf_phone" name="cf_phone"></td>
            </tr>
            <tr>
                <td class="cf_name">Почта (e-mail):<span class="red-star">*</span></td>
                <td class="cf_value"><input type="text" value="" maxlength="30" id="cf_mail" name="cf_mail"></td>
            </tr>
            <tr>
                <td class="cf_name">Примечание к заказу: </td>
                <td class="cf_value"><textarea id="cf_prim" name="cf_prim" rows="2" cols="30" style="width: 100%; padding: 0.5em;"></textarea></td>
            </tr>
            <tr>
                <td class="cf_name">Заказчик, наименование, реквизиты:</td>
                <td class="cf_value"><textarea id="cf_req" name="cf_req" rows="9" cols="30" style="width: 100%; padding: 0.5em;"></textarea></td>
            </tr>
            <tr>
                <td class="cf_name">Введите текст с картинки:<span class="red-star">*</span></td>
                <td class="cf_value"><img src="captcha.html" width="140" height="36"><br><input type="text" name="capcha" class="captcha"></td>
            </tr>
            </tbody>
        </table>

        <button id="cf_submit" class="pbutton bttech subbutton btgreen">Отправить</button>
        <div class="cf_txt">( поля, отмеченные <span class="red-star">*</span> - обязательны для заполнения )</div>
     </div>

    </form>

</div>
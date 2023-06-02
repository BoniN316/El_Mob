<script>
    $(function(){
        $(document).on("submit", "#calculator_form",function(e){
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
                dataType: "json",
                cache: false,

				success: function(response) {
					$(".mg-layer").show();
					$(".mg-fake-cart").fadeIn("fast");
					$("body").addClass("mg-lock");

					if ('success' == response.status) {
						dataSmalCart = '';
						response.data.dataCart.forEach(printSmalCartData);
						$('.small-cart-table').html(dataSmalCart);
						$('.total .total-sum span').text(response.data.cart_price_wc);
						$('.pricesht').text(response.data.cart_price);
						$('.countsht').text(response.data.cart_count);
						cart_full();
					}
				}

            });
        });

		function printSmalCartData(element, index, array){

		dataSmalCart += '<tr>\
		    <td class="small-cart-name">\
		      <ul class="small-cart-list">\
		        <li><a href="' + mgBaseDir + '/' + ((element.category_url||element.category_url=='')?element.category_url:'catalog/')
		  + element.product_url + '">' + element.title + '</a><span class="property">'
		  + '</span></li>\
		        <li class="qty">x' + element.countInCart + ' <span>'
		  + element.priceInCart + '</span></li>\
		      </ul>\
		    </td>\
		    <td class="small-cart-remove"><a href="#" class="deleteItemFromCart" title="Удалить" data-delete-item-id="' + element.id
		  + '" data-property="' + element.property
		  + '">&#215;</a></td>\
		  </tr>';
		}

		//есле в корзине есть товар
		function cart_full() {
		  $('.mg-desktop-cart').addClass('cart_full');
		  $('.cart-list').removeClass('cart_hide');
		  $('.cart_p').addClass('cart_hide');
		}

    });
</script>

<div id="out_calculator_form">
    <form action="/calc.php" id="calculator_form" method="POST">
        <table>
            <tbody>
            <tr>
                <td class="cf_name">Площадь, м.кв.</td>
                <td class="cf_value"><input type="text" value="" placeholder="0" maxlength="10" name="cf_area" id="cf_area"</td>
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
                        <option value="пропитка">&nbsp;&nbsp;&nbsp;пропитка</option>
                        <option value="цветное покрытие">&nbsp;&nbsp;&nbsp;цветное покрытие</option>
                        <option value="кварцнаполненное">&nbsp;&nbsp;&nbsp;кварцнаполненное</option>
                        <option value="наливной пол">&nbsp;&nbsp;&nbsp;наливной пол</option>
                        <option value="другое">&nbsp;&nbsp;&nbsp;другое</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="cf_name">Цвет</td>
                <td class="cf_value"><input type="text" value="" maxlength="30" id="cf_cvet" name="cf_cvet"></td>
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
                    <textarea id="cf_osob" name="cf_osob" rows="15" style="width: 100%; padding: 0.5em;"></textarea>
                </td>
            </tr>

            <tr>
                <td class="cf_name">Вес(кг)</td>
                <td class="cf_value">
                    <div class="cart_form" style="top: -7px;">
                        <input type="text" value="1" data-max-count="-1" class="amount_input" name="cf_cols" id="cf_cols">
                        <div class="amount_change">
                          <a class="up" href="#">+</a>
                          <a class="down" href="#">-</a>
                        </div>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>

        <button id="cf_submit" class="pbutton bttech subbutton btgreen">Купить</button>
    </form>

</div>
/* 
 * Модуль  discountSystem, подключается на странице настроек плагина.
 */

var discountSystem = (function () {

  return {
    lang: [], // локаль плагина 
    init: function () {

      // установка локали плагина 
      admin.ajaxRequest({
        mguniqueurl: "action/seLocalesToPlug",
        pluginName: 'discount-system'
      },
      function (response) {
        discountSystem.lang = response.data;
      }
      );

      // Добавление новой строки с условиями скидки в таблицу
      $('.admin-center').on('click', '.section-discount-system table .new-discount-rang', function () {
        $(this).parents('tbody').find('.no-results').remove();
        $(this).parents('tr').before(discountSystem.addNewRow($(this).data('desc')));
        admin.initToolTip();
      });
      // Сохранение изменений и добавление новых записей
      $('.admin-center').on('click', '.section-discount-system table .save-row', function () {
        $(this).parents('tr').find('input').removeClass('error-input');
        var name = $(this).parents('ul').data('desc');
        var id = $(this).data('id');
        $(this).parents('tr').attr('data-id', 'saved');
        var sum = $(this).parents('tr').find('input[name=sum]').val();
        sum = sum.replace(/\s+/g, '');
        if (! ($.isNumeric(sum) && sum > 0)) {
          $(this).parents('tr').find('input[name=sum]').addClass('error-input');
          admin.indication('error', 'Введите корректное число!');
          return true;
        }
        var percent = $(this).parents('tr').find('input[name=percent]').val();
        percent = percent.replace(',', '.');
         if (!($.isNumeric(percent) && percent > 0)) {
          $(this).parents('tr').find('input[name=percent]').addClass('error-input');
          admin.indication('error', 'Введите корректное число!');
          return true;
        }
          admin.ajaxRequest({
            mguniqueurl: "action/saveEntity",
            pluginHandler: "discount-system",
            id: id,
            summ: sum,
            percent: percent,
            name: name
          },
            function (response) {
              admin.indication(response.status, response.msg);
              if (response.status == 'success') {
                $('.section-discount-system .'+name+'-table tr[data-id="saved"]').attr('data-id', response.data.id);
                $('.'+name+'-table tr[data-id='+response.data.id+']').find('.delete-row, .save-row').attr('data-id', response.data.id);
                //$('.'+name+'-table tr[data-id='+response.data.id+']').find('.actions .change').addClass('saved');
                $('.'+name+'-table tr[data-id='+response.data.id+']').find('.actions .change').html('Сохранено').removeClass("error").addClass("success");
                $('.'+name+'-table tr[data-id='+response.data.id+']').find('input').removeClass('error-input');
              }
            }
          )
          
      });
      // если что-то изменено, то появляется сообщение об ихменении, чтобы не забыть сохранить 
      $('.section-discount-system').on('keyup change', 'table td input', function () {
        $(this).parents('tr').find('.actions .change').html('Не сохранено').removeClass("success").addClass("error");
      })

      // Удаляет запись из таблицы
      $('.admin-center').on('click', '.section-discount-system .delete-row', function () {
        var id = $(this).data('id');
        if (!id) {
          $(this).parents('tr').remove();
        }
        var name = $(this).parents('ul').data('desc');
        discountSystem.deleteEntity(id, name);
      });



      // Сохраняет базовые настроки запись
      $('.admin-center').on('click', '.section-discount-system .base-setting-save', function () {

        var obj = '{';
        $('.section-discount-system .base-options select').each(function () {
          obj += '"' + $(this).attr('name') + '":"' + $(this).val() + '",';
        });
        obj += '}';

        //преобразуем полученные данные в JS объект для передачи на сервер
        var data = eval("(" + obj + ")");

        admin.ajaxRequest({
          mguniqueurl: "action/saveBaseOption", // действия для выполнения на сервере
          pluginHandler: 'discount-system', // плагин для обработки запроса
          data: data // id записи
        },
        function (response) {
          admin.indication(response.status, response.msg);
          admin.refreshPanel();
        }

        );

      });

      // Показывает панель с настройками.
      $('.admin-center').on('click', '.section-discount-system .show-property-order', function () {
        $('.property-order-container').slideToggle(function () {
          $('.filter-container').slideUp();
          $('.widget-table-action').toggleClass('no-radius');
        });
      });

    },
    /**
     * Сохраняет изменения в таблице скидкок
     * @param {type} id
     * @returns {Boolean}
     */
    saveEntityCumul: function (id, sum, percent) {


    },
    /**    
     * Удаляет  строку сущности в таблице накопительной скидки
     * @param {type} data - данные для вывода в строке таблицы
     */
    deleteEntity: function (id, name) {
      if (id) {
        if (!confirm(lang.DELETE + '?')) {
          return false;
        }
        admin.ajaxRequest({
          mguniqueurl: "action/deleteEntity", // действия для выполнения на сервере
          pluginHandler: 'discount-system', // плагин для обработки запроса
          id: id,
          name: name
        },
        function (response) {
          admin.indication(response.status, response.msg);
          if (response.status == 'success') {
            $('.section-discount-system .' + name + '-table tr[data-id=' + id + ']').remove();
          }
          if ($('.section-discount-system .' + name + '-table tbody tr').length <= 1) {
          var html = '<tr class="no-results">\
              <td colspan="3" align="center">' + discountSystem.lang['ENTITY_NONE'] + '</td>\
              </tr>';
          $('.section-discount-system .' + name + '-table tbody tr').before(html);
      }
        }
        );
      }
      
      ;
    },
    /**    
     * Отрисовывает  строку сущности в таблице скидочных диапозонов
     * @param {type} data - данные для вывода в строке таблицы
     */
    addNewRow: function (name) {
      var tr = '\
      <tr><td><input type="text" name="sum" value=""><span> ' + admin.CURRENCY + '</span></td>\
          <td><input type="text" name="percent" class="percent-input" value=""><span> %</span></td>\
        <td class="actions">\
         <ul class="action-list" data-desc="' + name + '">\
           <li class="save-row tool-tip-bottom" title="' + discountSystem.lang['SAVE_MODAL'] + '"><a href="javascript:void(0);"></a></li>\
           <li class="delete-row"><a class="tool-tip-bottom" href="javascript:void(0);"  title="' + discountSystem.lang['DELETE'] + '"></a></li>\
           </ul>\
           <span class="change"></span>\
        </td>\
     </tr>';
      return tr;
    }
  }
})();

discountSystem.init();

/**
 * Модуль для  плагина "Комплект товаров"
 */
var setGoods = (function () {
  return {
    errorVariantField: false,
    memoryVal: null, // HTML редактор для   редактирования страниц
    supportCkeditor: null,
    deleteImage: '', // список картинок помеченых на удаление, при сохранении товара, данный список передается на сервер и картинки удаляются физически
    /**
     * Инициализирует обработчики для кнопок и элементов раздела.
     */
    lang: [], // локаль плагина 
    init: function () {
      // установка локали плагина 
      admin.ajaxRequest({
        mguniqueurl: "action/seLocalesToPlug",
        pluginName: 'set-goods'
      },
      function (response) {
        setGoods.lang = response.data;
      });
      includeJS(admin.SITE + '/mg-core/script/jquery.bxslider.min.js');

      // Вызов модального окна при нажатии на кнопку создания комплекта
      $('.admin-center').on('click', '.section-set-goods .add-new-button', function () {
        setGoods.openModalWindow('add');
      });

      // Вызов модального окна при нажатии на кнопку копировнаия комлекта
      $('.admin-center').on('click', '.section-set-goods .clone-row', function () {
        setGoods.cloneSet($(this).attr('id'));
      });

      // Открывает список  дополнительных категорий
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .add-category', function () {
        $(this).toggleClass('opened-list');
        if ($(this).hasClass('opened-list')) {
          $('.inside-category').show();
        } else {
          $('.inside-category').hide();
        }
      });

      // снимает выделение со всех дополнительных категорий
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .clear-select-cat', function () {
        $('select[name=inside_cat] option').prop('selected', false);
      });

      // разворачивает список всех дополнительных категорий
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .full-size-select-cat.closed-select-cat', function () {
        $('select[name=inside_cat]').attr('size', $('select[name=inside_cat] option').length);
        $(this).removeClass('closed-select-cat').addClass('opened-select-cat');
        $(this).text(setGoods.lang.SET_CLOSE_CAT);
      });

      $('body').on('click', '.section-set-goods .yml-title', function () {
        $(this).toggleClass('opened').toggleClass('closed');
        $('.section-set-goods .yml-wrapper').slideToggle(300);
        if ($(this).hasClass('opened')) {
          $(this).html('Спрятать настройки YML');
        }
        else {
          $(this).html('Показать настройки YML');
        }
      });

      // сворачивает список всех дополнительных категорий
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .full-size-select-cat.opened-select-cat', function () {
        $('.section-set-goods select[name=inside_cat]').attr('size', 4);
        $(this).removeClass('opened-select-cat').addClass('closed-select-cat');
        $(this).text(setGoods.lang.SET_OPEN_CAT);
      });


      // Вызов формы для выбора валют.
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .btn-selected-currency', function () {
        var position = $(this).position();
        $('.section-set-goods .add-product-form-wrapper .select-currency-block').css('position', 'absolute');
        $('.section-set-goods .add-product-form-wrapper .select-currency-block').css('top', position.top - 15 + 'px');
        $('.section-set-goods .add-product-form-wrapper .select-currency-block').css('left', position.left + 25 + 'px');
        $('.section-set-goods .add-product-form-wrapper .select-currency-block').show();
      });

      // применение выбраной валюты
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .apply-currency', function () {
        setGoods.changeIso();
      });


      // Вызов модального окна при нажатии на кнопку изменения товаров.
      $('.admin-center').on('click', '.section-set-goods .edit-row', function () {
        setGoods.openModalWindow('edit', $(this).attr('id'), $(this).attr('data-set'));
      });

      // Удаление товара.
      $('.admin-center').on('click', '.section-set-goods .delete-order', function () {
        setGoods.deleteSet($(this).attr('id'));
      });


      // Нажатие на кнопку - рекомендуемый товар
      $('.admin-center').on('click', '.section-set-goods .recommend', function () {
        $(this).toggleClass('active');
        var id = $(this).data('id');

        if ($(this).hasClass('active')) {
          setGoods.recomendSet(id, 1);
          $(this).attr('title', lang.PRINT_IN_RECOMEND);
        }
        else {
          setGoods.recomendSet(id, 0);
          $(this).attr('title', lang.PRINT_NOT_IN_RECOMEND);
        }
        $('#tiptip_holder').hide();
        admin.initToolTip();
      });

      // Нажатие на кнопку - активный товар
      $('.admin-center').on('click', '.section-set-goods .visible', function () {
        $(this).toggleClass('active');
        var id = $(this).data('id');

        if ($(this).hasClass('active')) {
          setGoods.visibleSet(id, 1);
          $(this).attr('title', lang.ACT_V_SET);
        }
        else {
          setGoods.visibleSet(id, 0);
          $(this).attr('title', lang.ACT_UNV_SET);
        }
        $('#tiptip_holder').hide();
        admin.initToolTip();
      });

      // Нажатие на кнопку - новый товар
      $('.admin-center').on('click', '.section-set-goods .new', function () {
        $(this).toggleClass('active');
        var id = $(this).data('id');

        if ($(this).hasClass('active')) {
          setGoods.newSet(id, 1);
          $(this).attr('title', lang.PRINT_IN_NEW);
        }
        else {
          setGoods.newSet(id, 0);
          $(this).attr('title', lang.PRINT_NOT_IN_NEW);
        }
        $('#tiptip_holder').hide();
        admin.initToolTip();
      });


      // Обработка выбраной категории (перестраивает пользовательские характеристики).
      $('body').on('change', '.section-set-goods #productCategorySelect', function () {
        //достаем id редактируемого продукта из кнопки "Сохранить"
        var product_id = $(this).parents('.add-product-form-wrapper').find('.save-set-button').attr('id');
        var category_id = $(this).val();
        setGoods.generateUserProreprty(product_id, category_id);

      });

      // Обработчик для загрузки изображения на сервер, сразу после выбора.
      $('body').on('change', '.section-set-goods input[name="photoimg"]', function () {
        var img_container = $(this).parents('.product-upload-img');
        if ($(this).val()) {
          setGoods.addImageToProduct(img_container);
        }
      });

      // Добавляет ссылку на электронный товар
      $('body').on('click', '.section-set-goods .add-link-electro', function () {
        admin.openUploader('setGoods.getFileElectro');
      });

      // Удаляет ссылку на электронный товар
      $('body').on('click', '.section-set-goods .del-link-electro', function () {
        $('.section-set-goods input[name="link_electro"]').val('');
        $('.section-set-goods .del-link-electro').hide();
        $('.section-set-goods .add-link-electro').show();
      });


      // Удаляение изображения товара, как из БД так и физически с сервера.
      $('body').on('click', '.section-set-goods .cancel-img-upload.plugin', function () {
        var img_container = $(this).parents('.product-upload-img');
        setGoods.delImageProduct($(this).attr('id'), img_container);

      });

      // Сохранение продукта при нажатии на кнопку сохранить в модальном окне.
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .save-set-button', function () {
        setGoods.saveSet($(this).attr('id'));
      });


      // Добавить вариант товара
      $('body').on('click', '.section-set-goods  .product-table-wrapper .add-position', function () {
        setGoods.addVariant($('.variant-table'));
      });

      // Удалить вариант товара
      $('body').on('click', '.section-set-goods .product-table-wrapper .del-variant', function () {
        if ($('.variant-table tr').length == 3) {

          $('.section-set-goods .variant-table .hide-content').hide();
          $('.section-set-goods .variant-table').data('have-variant', '0');
          $('.section-set-goods .variant-table-wrapper').css('width', '415px');
          $('.section-set-goods .variant-table tr td').css('padding', '5px 18px 5px 0');
          $(this).parents('tr').remove();
        } else {
          $(this).parents('tr').remove();
        }

      });

      // при ховере на иконку картинки варианта  показывать  имеющееся изображение
      $('body').on('mouseover mouseout', '.section-set-goods .product-table-wrapper .img-variant', function (event) {
        if (event.type == 'mouseover') {
          $(this).parents('td').find('.img-this-variant').show();
        } else {
          $(this).parents('td').find('.img-this-variant').hide();
        }
      });


      // показывает строку поиска для связанных товаров
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .add-related-product', function () {
        $('.select-product-block').show();
      });

      // Удаляет связанный товар из списка связанных
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .add-related-product-block .remove-added-product', function () {
        $(this).parents('.product-unit').remove();
        setGoods.msgRelated();
      });
      // Удаляет добавленный товар из комплекта
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .added-components .remove-added-product', function () {
        var code = $(this).parents('.product-unit').data('code');
        if ($('.product-block .product-info .code-sp').text()== code) {
          var count = $(this).parents('.product-unit').find('input[name=count]').val();
          var countFirst = $('.product-block .product-info .count-sp').text(); 
          if (countFirst >=0 ) {
            var totalCount = parseInt(countFirst) + parseInt(count);
            $('.product-block .product-info .count-sp').text(totalCount);
          }           
        }
        $(this).parents('.product-unit').remove();
        setGoods.msgComponents();
      });

      // Закрывает выпадающий блок выбора связанных товаров
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .add-related-product-block .cancel-add-related', function () {
        $('.select-product-block').hide();
      });

      // Поиск товара при создании связанного товара.
      // Обработка ввода поисковой фразы в поле поиска.
      $('body').on('keyup', '.section-set-goods #mg-add-set-wrapper .search-block.related input[name=searchcat]', function () {
        admin.searchProduct($(this).val(), '#mg-add-set-wrapper .search-block.related .fastResult');
      });

      // Обработка ввода поисковой фразы в поле поиска для добавления товара в комплект
      $('body').on('keyup', '.section-set-goods #mg-add-set-wrapper .search-block.add input[name=searchcat]', function () {
        admin.searchProduct($(this).val(), '#mg-add-set-wrapper .search-block.add .fastResult');
      });

      // подбор случайного товара
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .random-add-related', function () {
        admin.ajaxRequest({
          mguniqueurl: "action/getRandomProd"
        },
        function (response) {
          admin.indication(response.status, response.msg);
          if (response.status != 'error') {
            setGoods.addrelatedProduct(0, response.data.product);
          }
        },
          false,
          false,
          true
          );
      });

      // Подстановка товара из примера в строку поиска связанного товара.
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .search-block.related  .example-find', function () {
        $('.section-set-goods .search-block.related input[name=searchcat]').val($(this).text());
        admin.searchProduct($(this).text(), '.section-set-goods #mg-add-set-wrapper .search-block.related .fastResult');
      });

      // Подстановка товара из примера в строку поиска добавления товара в комплект.
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .search-block.add  .example-find', function () {
        $('.section-set-goods .search-block.add input[name=searchcat]').val($(this).text());
        admin.searchProduct($(this).text(), '.section-set-goods #mg-add-set-wrapper .search-block.add .fastResult');
      });

      // Клик по найденым товарам поиска в форме добавления связанного товара.
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .search-block.related .fast-result-list a', function () {
        setGoods.addrelatedProduct($(this).data('element-index'));
      });

      // Клик по найденым товарам поиска в форме добавления товара в комплект
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .search-block.add .fast-result-list a', function () {
        setGoods.viewProduct($(this).data('element-index'));
      });
      // Клик по кнопке добавления товара в комплект
      $('body').on('click', '.section-set-goods #mg-add-set-wrapper .add-to-set', function () {
        setGoods.addComponentProduct(this);
      });

      // Обработчик для загрузки изображения на сервер, сразу после выбора.
      $('body').on('change', '.section-set-goods input[name="photoimg"]', function () {
        // отправка картинки на сервер
        var imgContainer = $(this).parents('td');
        var mguniqueurl = "action/addImage";
        var oldimage = null;
        var nowatermark = $(this).hasClass('img-variant') ? 1 : 0;
        if (nowatermark) {
          oldimage = $(this).parents('td').find('img').attr('filename');
          if (!oldimage) {
            oldimage = $(this).parents('td').find('img').data('filename');
          }
          mguniqueurl = "action/addImageNoWaterMark";
        }

        $(this).parent('form').ajaxForm({
          type: "POST",
          url: "ajax?oldimage=" + oldimage,
          data: {
            mguniqueurl: mguniqueurl,
            oldimage: oldimage,
          },
          cache: false,
          dataType: 'json',
          success: function (response) {

            admin.indication(response.status, response.msg);
            if (response.status != 'error') {
              var src = admin.SITE + '/uploads/' + response.data.img;
              imgContainer.find('img').attr('src', src).attr('filename', response.data.img);
            } else {
              var src = admin.SITE + '/mg-admin/design/images/no-img.png';
              imgContainer.find('img').attr('src', src).attr('filename', 'no-img.png');
            }
          }
        }).submit();
      });

      // Устанавливает количиство выводимых записей в этом разделе.
      $('.admin-center').on('change', '.section-set-goods .countPrintSetGoods', function () {
        var count = $(this).val();
        admin.ajaxRequest({
          mguniqueurl: "action/setCountPrintSetGoods",
          pluginHandler: "set-goods",
          count: count
        },
        function (response) {
          admin.refreshPanel();
        }
        );

      });
      // Удаляет выбраный продукт из поля для добавления в комплект
      $('body').on('click', '.section-set-goods .clear-product', function () {
        $(".section-set-goods .product-block").html('');
        $(".section-set-goods .product-block").hide();
      });


      //Добавить изображение для продукта
      $('body').on('click', '.section-set-goods .add-product-form-wrapper .add-image', function () {
        var src = admin.SITE + '/mg-admin/design/images/no-img.png';
        var row = setGoods.drawControlImage(src, true, '', '', '');
        $('.section-set-goods .small-img-wrapper').prepend(row).addClass("added-img");
        admin.initToolTip();
      });

      // для главной картинки меняем классы сохраняем в буфер и удаляем

      //Сделать основной картинку продукта
      $('body').on('click', '.section-set-goods .main-image', function () {
        var obj = $(this).parents('.product-upload-img');
        setGoods.upMainImg(obj);
      });

      //Показать окно с настройками title и alt для картинки
      $('body').on('click', '.section-set-goods .add-product-form-wrapper .seo-image', function (e) {
        var obj = $(this).parents('.product-upload-img');
        var offset = $(this).parents('.small-img-wrapper').offset();
        var relativeY = 0;
        if (offset != null) {
          relativeY = (e.pageY - offset.top);
        }
        obj.find('.seo-image-block').show().css('top', relativeY + 'px');

      });

      //Спрятать  окно с настройками title и alt для картинки
      $('body').on('click', '.section-set-goods .add-product-form-wrapper .apply-seo-image', function () {
        $('.section-set-goods .seo-image-block').hide();
      });

      // Пересчет цены, артикула, остатков и веса товара аяксом в форме добавления товара в комплект
      $('body').on('change', '.section-set-goods .property-form input, .section-set-goods .property-form select',
        function () {
          if ($(this).parents('p').find('input[type=radio]').length) {
            $(this).parents('p').find('input[type=radio]').prop('checked', false);
            $(this).prop('checked', true);
          }
          setGoods.refreshPropProduct();
          return false;
        });
        
        // Нажатие enter при вводе в строку поиска товара
      $('body').on('keypress', '.section-set-goods input[name=searchSet]', function(e){
        if(e.keyCode==13){  
          setGoods.getSearchSet($(this).val());       
          $(this).blur();
        }
      });
      // Подобрать наборы  по поиску, при клике на иконку поиска
      $('.admin-center').on('click', '.section-set-goods .searchSet', function(){
        if (!$(this).hasClass('resetSearchSet')) {
          var keyword =  $('input[name="searchSet"]').val();
          setGoods.getSearchSet(keyword);
        }
      });
      // сбросить результаты поиска
      $('.admin-center').on('click', '.section-set-goods .resetSearchSet', function(){
        $(this).removeClass('resetSearchClass');
        admin.refreshPanel();
      });
      // проверка количества товара в комплекте не больше максимального 
      $('.admin-center').on('keyup', '.section-set-goods .product-unit.components input[name=count]', function () {
        if (1 > $(this).val() || !$.isNumeric($(this).val())) {
          $(this).val('1');
        }
        if ($(this).data('max') >= 0) {
          var max = parseInt($(this).data('max'));
          if ($(this).val() > max) {
             $(this).val(max);
          } 
        }
        setGoods.calculateSummSet();
      });
        // Показывает панель с настройками.
      $('.admin-center').on('click', '.section-set-goods .show-property-order', function() {
        $('.section-set-goods .property-order-container').slideToggle(function() {
          $('.widget-table-action').toggleClass('no-radius');
        });
      });
         // Сохраняет базовые настроки запись
      $('.admin-center').on('click', '.section-set-goods .base-setting-save', function() {       
        var obj = '{';
        $('.section-set-goods .list-option input').each(function() {     
          obj += '"' + $(this).attr('name') + '":"' + admin.htmlspecialchars($(this).val()) + '",';
        });
        obj += '}';    

        //преобразуем полученные данные в JS объект для передачи на сервер
        var data =  eval("(" + obj + ")");

        admin.ajaxRequest({
          mguniqueurl: "action/saveBaseOption", // действия для выполнения на сервере
          pluginHandler: 'set-goods', // плагин для обработки запроса
          data: data // id записи
        },

        function(response) {
          admin.indication(response.status, response.msg);     
          admin.refreshPanel();
        }

        );
        
      });      
      
    },
    /**
     * Открывает модальное окно.
     * type - тип окна, либо для создания нового товара, либо для редактирования старого.
     */
    openModalWindow: function (type, id, set) {

      try {
        if (CKEDITOR.instances['html_content']) {
          CKEDITOR.instances['html_content'].destroy();
        }
      } catch (e) {
      }

      switch (type) {
        case 'edit':
        {
          setGoods.clearFileds();
          $('.section-set-goods .add-product-table-icon').text('Редактирование комплекта товаров');
          setGoods.editSet(id, set);
          break;
        }
        case 'add':
        {
          $('.section-set-goods .add-product-table-icon').text('Добавление нового комплекта товаров');
          setGoods.clearFileds();

          // получаем с сервера все доступные пользовательские параметры
          admin.ajaxRequest({
            mguniqueurl: "action/getUserProperty"
          },
          function (response) {
            // выводим поля для редактирования пользовательских характеристик
            userProperty.createUserFields(null, response.data.allProperty);
          },
            $('.section-set-goods .error-input').removeClass('error-input')
            );


          setGoods.msgRelated();
          setGoods.msgComponents();
          var src = admin.SITE + '/mg-admin/design/images/no-img.png'
          var row = setGoods.drawControlImage(src, false, '', '', '');
          $('.section-set-goods .small-img-wrapper').before(row);
          $('.section-set-goods .main-img-prod .main-image').hide();

          var catId = $('.section-set-goods .filter-container select[name=cat_id]').val();
          if (catId == 'null') {
            catId = 0;
          }
          // получаем набор общих характеристик и выводим их
          setGoods.generateUserProreprty(0, catId);

          break;
        }
        default:
        {
          setGoods.clearFileds();
          break;
        }
      }

      // Вызов модального окна.
      admin.openModal($('.b-modal'));

      $('.section-set-goods textarea[name=html_content]').ckeditor(function () {
        this.setData(setGoods.supportCkeditor);
      });
    },
    /**
     *  Изменяет список пользовательских свойств для выбранной категории в редактировании товара
     */
    generateUserProreprty: function (produtcId, categoryId) {

      admin.ajaxRequest({
        mguniqueurl: "action/getProdDataWithCat",
        produtcId: produtcId,
        categoryId: categoryId
      },
      function (response) {
        userProperty.createUserFields($('.userField'), response.data.thisUserFields, response.data.allProperty);
        admin.initToolTip();
      },
        $('.userField')
        );

    },
    /**
     *  Проверка заполненности полей, для каждого поля прописывается свое правило.
     */
    checkRulesForm: function () {
      $('.errorField').css('display', 'none');
      $('.section-set-goods .product-text-inputs input').removeClass('error-input');
      var error = false;

      // минимальное количество товара в наборе 2 позиции
      if ($('.section-set-goods .added-components .product-unit').length < 2) {
        $('.section-set-goods .search-block.add ').find('.errorField.set').css('display', 'block');
        $('.section-set-goods .search-block.add input.search-field-add').addClass('error-input');
        error = true;
      }
      // наименование не должно иметь специальных символов.
      if (!$('.section-set-goods .product-text-inputs input[name=title]').val()) {
        $('.section-set-goods .product-text-inputs input[name=title]').parent("label").find('.errorField').css('display', 'block');
        $('.section-set-goods .product-text-inputs input[name=title]').addClass('error-input');
        error = true;
      }

      // наименование не должно иметь специальных символов.
      if (!admin.regTest(2, $('.section-set-goods .product-text-inputs input[name=url]').val()) ||
        !$('.section-set-goods .product-text-inputs input[name=url]').val()) {
        $('.section-set-goods .product-text-inputs input[name=url]').parent("label").find('.errorField').css('display', 'block');
        $('.section-set-goods .product-text-inputs input[name=url]').addClass('error-input');
        error = true;
      }

      // артикул обязательно надо заполнить.
      if (!$('.section-set-goods .product-text-inputs input[name=code]').val()) {
        $('.section-set-goods .product-text-inputs input[name=code]').parent("label").find('.errorField').css('display', 'block');
        $('.section-set-goods .product-text-inputs input[name=code]').addClass('error-input');
        error = true;
      }

      // Проверка поля для стоимости, является ли текст в него введенный числом.
      if (isNaN(parseFloat($('.section-set-goods .product-text-inputs input[name=price]').val()))) {
        $('.section-set-goods .product-text-inputs input[name=price]').parent("label").find('.errorField').css('display', 'block');
        $('.section-set-goods .product-text-inputs input[name=price]').addClass('error-input');
        error = true;
      }

      // Проверка поля для старой стоимости, является ли текст в него введенный числом.
      $('.section-set-goods .product-text-inputs input[name=old_price]').each(function () {
        var val = $(this).val();
        if (isNaN(parseFloat(val)) && val != "") {
          $(this).parent("label").find('.errorField').css('display', 'block');
          $(this).addClass('error-input');
          error = true;
        }
      });

      // Проверка поля количество, является ли текст в него введенный числом.
      $('.section-set-goods .product-text-inputs input[name=count]').each(function () {
        var val = $(this).val();
        if (val == '\u221E' || val == '' || parseFloat(val) < 0) {
          val = "-1";
          $(this).val('∞');
        }
        if (isNaN(parseFloat(val))) {
          $(this).parent("label").find('.errorField').css('display', 'block');
          $(this).addClass('error-input');
          error = true;
        }
      });
      if (error == true) {
        return false;
      }

      return true;
    },
    /**
     * Сохранение изменений в модальном окне комплекта товаров
     * Используется и для сохранения редактированных данных и для сохраниеня нового комлпекта.
     * id - идентификатор продукта, может отсутсвовать если производится добавление нового комплекта.
     */
    saveSet: function (id) {

      // Если поля неверно заполнены, то не отправляем запрос на сервер.
      if (!setGoods.checkRulesForm()) {
        return false;
      }
      var recommend = $('.section-set-goods .save-set-button').data('recommend');
      var activity = $('.section-set-goods .save-set-button').data('activity');
      var newprod = $('.section-set-goods .save-set-button').data('new');
      var id_set = $('.section-set-goods .save-set-button').data('set');
      //определяем имеются ли варианты товара 
      var variants = setGoods.getVariant();
      if (setGoods.errorVariantField) {
        admin.indication('error', lang.ERROR_VARIANT);
        return false;
      }
      if ($('textarea[name=html_content]').val() == '') {
        if (!confirm(lang.ACCEPT_EMPTY_DESC + '?')) {
          return false;
        }
      }
      if (!variants) {
        // Пакет характеристик товара.
        var packedProperty = {
          mguniqueurl: "action/saveSet", // действия для выполнения на сервере
          pluginHandler: 'set-goods', // плагин для обработки запроса
          id: id,
          set: setGoods.getComponentsSet(),
          id_set: id_set,
          title: $('.section-set-goods .product-text-inputs input[name=title]').val(),
          link_electro: $('.section-set-goods .product-text-inputs input[name=link_electro]').val(),
          url: $('.section-set-goods .product-text-inputs input[name=url]').val(),
          code: $('.section-set-goods .product-text-inputs input[name=code]').val(),
          price: $('.section-set-goods .product-text-inputs input[name=price]').val(),
          old_price: $('.section-set-goods .product-text-inputs input[name=old_price]').val(),
          image_url: setGoods.createFieldImgUrl(),
          image_title: setGoods.createFieldImgTitle(),
          image_alt: setGoods.createFieldImgAlt(),
          delete_image: setGoods.deleteImage,
          count: $('.section-set-goods .product-text-inputs input[name=count]').val(),
          weight: $('.section-set-goods .product-text-inputs input[name=weight]').val(),
          cat_id: $('.section-set-goods .product-text-inputs select[name=cat_id]').val(),
          inside_cat: setGoods.createInsideCat(),
          description: $('.section-set-goods textarea[name=html_content]').val(),
          meta_title: $('.section-set-goods .seo-wrapper input[name=meta_title]').val(),
          meta_keywords: $('.section-set-goods .seo-wrapper input[name=meta_keywords]').val(),
          meta_desc: $('.section-set-goods .seo-wrapper textarea[name=meta_desc]').val(),
          currency_iso: $('.section-set-goods .add-product-form-wrapper select[name=currency_iso]').val(),
          recommend: recommend,
          activity: activity,
          new : newprod,
          userProperty: userProperty.getUserFields(),
          variants: null,
          related: setGoods.getRelatedProducts(),
          yml_sales_notes: $('.yml-wrapper input[name=yml_sales_notes]').val(),
        }
      } else {
        var packedProperty = {
          mguniqueurl: "action/saveSet",
          pluginHandler: 'set-goods',
          id: id,
          set: setGoods.getComponentsSet(),
          id_set: id_set,
          title: $('.section-set-goods .product-text-inputs input[name=title]').val(),
          link_electro: $('.section-set-goods .product-text-inputs input[name=link_electro]').val(),
          code: $('.section-set-goods .variant-table tr').eq(1).find('input[name=code]').val(),
          price: $('.section-set-goods .variant-table tr').eq(1).find('input[name=price]').val(),
          old_price: $('.section-set-goods .variant-table tr').eq(1).find('input[name=old_price]').val(),
          count: $('.section-set-goods .variant-table tr').eq(1).find('input[name=count]').val(),
          weight: $('.section-set-goods .variant-table tr').eq(1).find('input[name=weight]').val(),
          url: $('.section-set-goods .product-text-inputs input[name=url]').val(),
          image_url: setGoods.createFieldImgUrl(),
          image_title: setGoods.createFieldImgTitle(),
          image_alt: setGoods.createFieldImgAlt(),
          delete_image: setGoods.deleteImage,
          cat_id: $('.section-set-goods .product-text-inputs select[name=cat_id]').val(),
          inside_cat: setGoods.createInsideCat(),
          description: $('.section-set-goods textarea[name=html_content]').val(),
          meta_title: $('.section-set-goods .seo-wrapper input[name=meta_title]').val(),
          meta_keywords: $('.section-set-goods .seo-wrapper input[name=meta_keywords]').val(),
          meta_desc: $('.section-set-goods .seo-wrapper textarea[name=meta_desc]').val(),
          currency_iso: $('.section-set-goods .add-product-form-wrapper select[name=currency_iso]').val(),
          recommend: recommend,
          activity: activity,
          new : newprod,
          userProperty: userProperty.getUserFields(),
          variants: variants,
          related: setGoods.getRelatedProducts(),
          yml_sales_notes: $('.section-set-goods .section-set-goods .yml-wrapper input[name=yml_sales_notes]').val(),
        }

      }


      // отправка данных на сервер для сохранеиня
      admin.ajaxRequest(packedProperty,
        function (response) {
          admin.clearGetParam();
          admin.indication(response.status, response.msg);

          var row = setGoods.drawRowSet(response.data);

          // Вычисляем, по наличию характеристики 'id',
          // какая операция производится с продуктом, добавление или изменение.
          // Если id есть значит надо обновить запись в таблице.
          if (packedProperty.id) {
            $('.set-goods-tbody tr[data-prodid=' + packedProperty.id + ']').replaceWith(row);
          } else {
            // Если id небыло значит добавляем новую строку в начало таблицы.
            if ($('.set-goods-tbody tr:first').length > 0) {
              $('.set-goods-tbody tr:first').before(row);
            } else {
              $('.set-goods-tbody ').append(row);
            }

            var newCount = $('.widget-table-title .produc-count strong').text() - 0 + 1;
            if (response.status == 'success') {
              $('.widget-table-title .produc-count strong').text(newCount);
            }
          }


          $('.no-results').remove();

          // Закрываем окно
          admin.closeModal($('.b-modal'));
          admin.initToolTip();
        }
      );
    },
    cloneSet: function (id) {
      // получаем с сервера все доступные пользовательские параметры
      admin.ajaxRequest({
        mguniqueurl: "action/cloneSet",
        pluginHandler: 'set-goods',
        id: id
      },
      function (response) {
        admin.indication(response.status, response.msg);
        var row = setGoods.drawRowSet(response.data);

        // Если id небыло значит добавляем новую строку в начало таблицы.
        if ($('.set-goods-tbody tr:first').length > 0) {
          $('.set-goods-tbody tr:first').before(row);
        } else {
          $('.set-goods-tbody ').append(row);
        }

        var newCount = $('.widget-table-title .produc-count strong').text() - 0 + 1;
        if (response.status == 'success') {
          $('.widget-table-title .produc-count strong').text(newCount);
        }

      }
      );
    },
    /**
     * изменяет строки в таблице комплектов товаров при редактировании изменении.
     */
    drawRowSet: function (element) {
      // получаем URL имеющейся картинки товара, если она была
      var src = $('tr[data-prodid=' + element.id + '] .image_url .uploads').attr('src');

      if (element.image_url) {
        // если идет процесс обновления и картинка новая то обновляем путь к ней
        src = admin.SITE+'/uploads/'+element.image_url;
      } else {
        src = admin.SITE + '/mg-admin/design/images/no-img.png'
      }

      if (element.image_url == 'no-img.png') {
        src = admin.SITE + '/mg-admin/design/images/no-img.png'
      }

      // переменная для хранения класса для подсветки активности товара
      var classForTagActivity = 'activity-product-true';

      var recommend = element.recommend === '1' ? 'active' : '';
      var titleRecommend = element.recommend ? lang.PRINT_IN_RECOMEND : lang.PRINT_NOT_IN_RECOMEND;

      var $new = element.new === '1' ? 'active' : '';
      var titleNew = element.new ? lang.PRINT_IN_NEW : lang.PRINT_NOT_IN_NEW;

      var activity = element.activity === '1' ? 'active' : '';
      var titleActivity = element.activity ? lang.ACT_V_CAT : lang.ACT_UNV_CAT;


      // html верстка для  записи в таблице раздела
      var row = '\
            <tr id="' + element.id + '" data-id="' + element.id_set + '" data-prodid=' + element.id + ' class="product-row">\
              <td class="set-"' + element.id_set + ' class="id_set">' + element.id_set + '</td>\
              <td id="' + element.id + '" class="product_id">' + element.id + '</td>\
              <td class="picture">\
                <img class="uploads" style="max-width: 100%; height: 35px; margin: 5px 0;" src="' + src + '"/>\
              </td>\
              <td class="set-name">' + element.title + '<a class="link-to-site tool-tip-bottom" title="' + lang.SET_VIEW_SITE + '" \
                 href="' + mgBaseDir + '/' + (element.category_url ? element.category_url : "catalog") + '/' + element.product_url + '"  target="_blank" >\
                 <img src="' + mgBaseDir + '/mg-admin/design/images/icons/link.png" alt="" /></a></td>\
              <td class="price">\
                ' + admin.numberFormat(element.price_course) + ' ' + admin.CURRENCY + '\
              </td>\
              <td class="count">\
                ' + (element.count > 0 ? element.count : '∞') + '\
              </td>\
              <td class="actions">\
                <ul class="action-list">\
                  <li class="edit-row" id="' + element.id + '" data-set=' + element.id_set + '><a href="javascript:void(0);" title="' + setGoods.lang.EDIT + '"></a></li>\
                  <li class="tool-tip-bottom new ' + $new + '" data-id="' + element.id + '" title="' + titleNew + '" ><a href="javascript:void(0);"></a></li>\
                  <li class="tool-tip-bottom recommend ' + recommend + '" data-id="' + element.id + '" title="' + titleRecommend + '" ><a href="javascript:void(0);"></a></li>\
                  <li class="clone-row" id="' + element.id + '"><a href="javascript:void(0);" title="' + setGoods.lang.CLONE + '"></a></li>\
                  <li class="visible tool-tip-bottom ' + activity + '" data-id="' + element.id + '" title="' + titleActivity + '" ><a href="javascript:void(0);"></a></li>\
                  <li class="delete-order" id="' + element.id + '"><a href="javascript:void(0);"  title="' + setGoods.lang.DELETE + '"></a></li>\
                </ul>\
              </td>\
           </tr>';

      return row;
    },
    /**
     * Получает данные о продукте с сервера и заполняет ими поля в окне.
     */
    editSet: function (id, set) {
      admin.ajaxRequest({
        mguniqueurl: "action/getSetData",
        pluginHandler: 'set-goods', // плагин для обработки запроса
        id_product: id,
        id_set: set
      },
      setGoods.fillFileds()
        );
    },
    /**
     * Удаляет комплект товаров из БД товаров и плагина и таблицы в текущем разделе
     */
    deleteSet: function (id) {
      if (confirm(lang.DELETE + '?')) {
        admin.ajaxRequest({
          mguniqueurl: "action/deleteSet",
          pluginHandler: "set-goods",
          id: id,
        },
          function (response) {
            admin.indication(response.status, response.msg);
            $('.product-table tr[data-prodid=' + id + ']').remove();
            if ($(".product-table tr").length == 1) {
              var html = '<tr class="no-results">\
                <td colspan="10" align="center">' + setGoods.lang.SET_NONE + '</td>\
               </tr>';
              $(".product-table").append(html);
            }
            ;
          }
        );
      }
    },
    /**
     * Формирует HTML для добавления и удалени картинки
     */
    drawControlImage: function (url, main, filename, title, alt) {
      var mainclass = "main-img-prod";
      if (main == true) {
        mainclass = 'small-img';
      }
      return '\
        <div class="product-upload-img ' + mainclass + '" data-filename="' + filename + '">\
            <div class="seo-image-block" style="display:none">\
            <div class="alt-title-block">\
              <div class="add-image-field">\
                <span>title:</span>\
                <input type="text" name="image_title" value="' + title + '">\
                <span>alt:</span>\
                <input type="text" name="image_alt" value="' + alt + '">\
              </div>\
              <a class="apply-seo-image fl-right custom-btn" href="javascript:void(0);"><span>Применить</span></a>\
              <div class="clear"></div>\
            </div>\
          </div>\
             <div class="product-img-prev">\
             <div class="seo-img-btn">\
                <a href="javascript:void(0);" class="seo-image tool-tip-bottom" title="SEO настройка">\
                    <span></span>\
                </a>\
            </div>\
             <a href="javascript:void(0);" class="main-image tool-tip-bottom" title="По умолчанию"><span></span></a>\
              <div class="img-loader" style="display:none"></div>\
              <div class="prev-img"><img src="' + url + '" alt="' + filename + '" /></div>\
             <form class="imageform" method="post" noengine="true" enctype="multipart/form-data">\
                <a href="javascript:void(0);" class="add-img-wrapper">\
                <span>' + setGoods.lang['UPLOAD'] + '</span>\
                  <input type="file" name="photoimg" class="add-img tool-tip-top" title="' + setGoods.lang['UPLOAD_IMG'] + '">\
                </a>\
              </form>\
              <a href="javascript:void(0);" class="cancel-img-upload plugin tool-tip-top" title="' + setGoods.lang['T_TIP_DEL_IMG_SET'] + '"><span>' + setGoods.lang['DELETE'] + '</span></a>\
              <div class="clear"></div>\
            </div>\
      </div>';

    },
    /**
     * Заполняет поля модального окна данными
     */
    fillFileds: function () {
      return function (response) {
        
        setGoods.supportCkeditor = response.data.description;
        $('.section-set-goods .product-text-inputs input').removeClass('error-input');
        $('.section-set-goods .product-text-inputs input[name=title]').val(response.data.title);
        $('.section-set-goods .product-text-inputs input[name=link_electro]').val(response.data.link_electro),
        $('.section-set-goods .section-set-goods .del-link-electro').text(response.data.link_electro.substr(0, 50));
        $('.section-set-goods .section-set-goods .del-link-electro').attr('title', response.data.link_electro);
        if (response.data.link_electro) {
          $('.section-set-goods .section-set-goods .del-link-electro').show();
          $('.section-set-goods .section-set-goods .add-link-electro').hide();
        }
        $('.section-set-goods .product-text-inputs select[name=cat_id]').val(response.data.cat_id);
        $('.section-set-goods .product-text-inputs input[name=url]').val(response.data.url);

        setGoods.selectCategoryInside(response.data.inside_cat);
        setGoods.cteateTableVariant(response.data.variants);

        if (!response.data.variants) {

          $('.section-set-goods .product-text-inputs input[name=code]').val(response.data.code);
          $('.section-set-goods .product-text-inputs input[name=price]').val(response.data.price);
          $('.section-set-goods .product-text-inputs input[name=old_price]').val(response.data.old_price);
          $('.section-set-goods .product-text-inputs input[name=weight]').val(response.data.weight);
          //превращаем минусовое значение в знак бесконечности
          var val = response.data.count;
          if ((val == '\u221E' || val == '' || parseFloat(val) < 0)) {
            val = '∞';
          }
          $('.section-set-goods .product-text-inputs input[name=count]').val(val);
        }

        var rowMain = '';
        var rows = '';
        response.data.images_product.forEach(
          function (element, index, array) {
            var title = response.data.images_title[index] ? response.data.images_title[index] : '';
            var alt = response.data.images_alt[index] ? response.data.images_alt[index] : '';

            var src = admin.SITE + '/mg-admin/design/images/no-img.png';
            if (element) {
              var src = admin.SITE+'/uploads/'+element;
            }

            if (index != 0) {
              rows += setGoods.drawControlImage(src, true, element, title, alt);
            } else {
              rowMain = setGoods.drawControlImage(src, false, element, title, alt);
            }

          }
        );
        setGoods.drawSet(response.data.set);
        $('.section-set-goods .small-img-wrapper').before(rowMain);
        $('.section-set-goods .small-img-wrapper').prepend(rows);
        $('.section-set-goods .main-img-prod .main-image').hide();
        $('.section-set-goods textarea[name=html_content]').val(response.data.description);
        $('.section-set-goods .seo-wrapper input[name=meta_title]').val(response.data.meta_title);
        $('.section-set-goods .seo-wrapper input[name=meta_keywords]').val(response.data.meta_keywords);
        $('.section-set-goods .seo-wrapper textarea[name=meta_desc]').val(response.data.meta_desc);
        $('.section-set-goods .yml-wrapper input[name=yml_sales_notes]').val(response.data.yml_sales_notes);
        setGoods.drawRelatedProduct(response.data.relatedArr);
        $('.section-set-goods .save-set-button').attr('data-set', response.data.id_set);
        $('.section-set-goods .save-set-button').attr('id', response.data.id);
        $('.section-set-goods .save-set-button').data('recommend', response.data.recommend);
        $('.section-set-goods .save-set-button').data('activity', response.data.activity);
        $('.section-set-goods .save-set-button').data('new', response.data.new);
        $('.section-set-goods .cancel-img-upload.plugin').attr('id', response.data.id);
        $('.section-set-goods .userField').html('');

        try {
          $('.section-set-goods .symbol-count').text($('.seo-wrapper textarea[name=meta_desc]').val().length);
        } catch (e) {
          $('.section-set-goods .symbol-count').text('0');
        }

        var iso = response.data.currency_iso ? response.data.currency_iso : admin.CURRENCY_ISO;
        $('.section-set-goods #mg-add-set-wrapper .btn-selected-currency').text(setGoods.getShortIso(iso));
        $('.section-set-goods .add-product-form-wrapper select[name=currency_iso] option[value=' + iso + ']').prop('selected', 'selected')


        userProperty.createUserFields($('.userField'), response.data.prodData.thisUserFields, response.data.prodData.allProperty);

      }
    },
    /**
     * Чистит все поля модального окна
     */
    clearFileds: function () {

      $('.section-set-goods .product-text-inputs input[name=title]').val('');
      $('.section-set-goods .product-text-inputs input[name=link_electro]').val(''),
      $('.section-set-goods .product-text-inputs input[name=url]').val('');
      $('.section-set-goods .product-text-inputs input[name=code]').val('');
      $('.section-set-goods .product-text-inputs input[name=price]').val('');
      $('.section-set-goods .product-text-inputs input[name=old_price]').val('');
      $('.section-set-goods .product-text-inputs input[name=count]').val('');


      setGoods.selectCategoryInside('');

      var catId = $('.section-set-goods .filter-container select[name=cat_id]').val();
      if (catId == 'null') {
        catId = 0;
      }

      $('.section-set-goods select[name=inside_cat]').attr('size', 4);
      $('.section-set-goods .full-size-select-cat').removeClass('opened-select-cat').addClass('closed-select-cat');
      $('.section-set-goods .full-size-select-cat').text(lang.SET_OPEN_CAT);

      $('.section-set-goods .added-components').html('');
      $('.section-set-goods .cost-set .cost-set-total').text('');
      $('.section-set-goods .cost-set .weight-set-total').text('');
      $('.section-set-goods .cost-set').hide();
      $('.section-set-goods .product-text-inputs select[name=cat_id]').val(catId);

      $('.section-set-goods .prod-gallery').html('<div class="small-img-wrapper"></div>');
      $('.section-set-goods textarea[name=html_content]').val('');
      $('.section-set-goods .seo-wrapper input[name=meta_title]').val('');
      $('.section-set-goods .seo-wrapper input[name=meta_keywords]').val('');
      $('.section-set-goods .seo-wrapper textarea[name=meta_desc]').val('');
      $('.section-set-goods .yml-wrapper input[name=yml_sales_notes]').val(''),
      $('.section-set-goods .product-text-inputs .variant-table').html('');
      $('.section-set-goods .added-related-product-block').html('');
      $('.section-set-goods .added-related-product-block').css('width', "800px");
      $('.section-set-goods .userField').html('');
      $('.section-set-goods .symbol-count').text('0');
      $('.section-set-goods .save-set-button').attr('id', '');
      $('.section-set-goods .save-set-button').attr('data-set', '');
      $('.section-set-goods .save-set-button').data('recommend', '0');
      $('.section-set-goods .save-set-button').data('activity', '1');
      $('.section-set-goods .save-set-button').data('new', '0');
      $('.section-set-goods .select-product-block').hide();
      setGoods.cteateTableVariant(null);
      setGoods.deleteImage = '';

      $('.section-set-goods .del-link-electro').hide();
      $('.section-set-goods .add-link-electro').show();
      // Стираем все ошибки предыдущего окна если они были.
      $('.section-set-goods .errorField').css('display', 'none');

      $('.section-set-goods .add-product-form-wrapper .select-currency-block').hide();

      var short = setGoods.getShortIso(admin.CURRENCY_ISO);
      $('.section-set-goods #mg-add-set-wrapper .btn-selected-currency').text(short);
      $('.section-set-goods .add-product-form-wrapper select[name=currency_iso] option[value=' + admin.CURRENCY_ISO + ']').prop('selected', 'selected');
      $('.section-set-goods .error-input').removeClass('error-input');

      setGoods.supportCkeditor = '';

    },
    /**
     * Добавляет изображение продукта
     */
    addImageToProduct: function (img_container) {

      img_container.find('.img-loader').show();

      // отправка картинки на сервер
      img_container.find('.imageform').ajaxForm({
        type: "POST",
        url: "ajax",
        data: {
          mguniqueurl: "action/addImage"
        },
        cache: false,
        dataType: 'json',
        success: function (response) {
          admin.indication(response.status, response.msg);
          if (response.status != 'error') {
            var src = admin.SITE + '/uploads/' + response.data.img;
            img_container.find('.prev-img').html('<img src="' + src + '" alt="' + response.data.img + '" />');

          } else {
            var src = admin.SITE + '/mg-admin/design/images/no-img.png';
            img_container.find('.prev-img').html('<img src="' + src + '" alt="' + response.data.img + '" />');
          }
          img_container.find('.img-loader').hide();
        }
      }).submit();
    },
    /**
     *  собирает названия файлов всех картинок чтобы сохранить их в БД в поле image_url
     */
    createFieldImgUrl: function () {
      var image_url = "";
      $('.section-set-goods .prod-gallery .prev-img img').each(function () {
        if ($(this).attr('alt') && $(this).attr('alt') != 'undefined') {
          image_url += $(this).attr('alt') + '|';
        }
      });

      if (image_url) {
        image_url = image_url.slice(0, -1);
      }

      return image_url;
    },
    /**
     *  собирает все заголовки для картинок, чтобы сохранить их в БД в поле image_title
     */
    createFieldImgTitle: function () {
      var image_title = "";
      $('.section-set-goods .prod-gallery .prev-img img').each(function () {
        if ($(this).attr('alt') && $(this).attr('alt') != 'undefined') {
          var title = $(this).parents('.product-upload-img').find('input[name=image_title]').val();
          title = title.replace('|', '');
          image_title += title + '|';
        }
      });

      if (image_title) {
        image_title = image_title.slice(0, -1);
      }

      return image_title;
    },
    /**
     *  собирает все описания для картинок, чтобы сохранить их в БД в поле image_alt
     */
    createFieldImgAlt: function () {
      var image_alt = "";
      $('.section-set-goods .prod-gallery .prev-img img').each(function () {
        if ($(this).attr('alt') && $(this).attr('alt') != 'undefined') {
          var title = $(this).parents('.product-upload-img').find('input[name=image_alt]').val();
          title = title.replace('|', '');
          image_alt += title + '|';
        }
      });

      if (image_alt) {
        image_alt = image_alt.slice(0, -1);
      }

      return image_alt;
    },
    /**
     * Помещает  выбранную основной картинку в начало ленты  
     * removemain = true - была удалена главная и требуется поднять из лены первую на место главной
     */
    upMainImg: function (obj, removemain) {
      var oldMain = '';
      if (!removemain) {
        // для главной картинки меняем классы сохраняем в буфер и удаляем      
        oldMain = $('.main-img-prod');
        oldMain.find('.main-image').show();
        oldMain.removeClass('main-img-prod').addClass('small-img');
      }
      $('.main-img-prod').remove();


      // выбранную картинку удаляем из ленты, добавляем классы как для главной и помещаем на место главной
      var bufer = obj;
      obj.remove();
      bufer.removeClass('small-img').addClass('main-img-prod');
      bufer.find('.main-image').hide();

      $('.small-img-wrapper').before(bufer);
      $('.small-img-wrapper').prepend(oldMain);

    },
    /**
     * Удаляет изображение продукта
     */
    delImageProduct: function (id, img_container) {
      var imgFile = img_container.find('.prev-img img').attr('src');

      if (confirm(lang.DELETE_IMAGE + '?')) {
        setGoods.deleteImage += "|" + imgFile;
        // удаляем текущий блок управления картинкой        
        if ($('.prod-gallery .prev-img img').length > 1) {
          if (img_container.hasClass('main-img-prod')) {
            setGoods.upMainImg($('.small-img').eq(0), true);
          } else {
            img_container.remove();
          }
        } else {
          // если блок единственный, то просто заменяем в нем картнку на заглушку
          var src = admin.SITE + '/mg-admin/design/images/no-img.png';
          img_container.find('.prev-img img').attr('src', src).attr('alt', '');
          img_container.data('filename', '');
        }
        $('#tiptip_holder').hide();
      }
    },
    // Устанавливает статус продукта - рекомендуемый
    recomendSet: function (id, val) {
      admin.ajaxRequest({
        mguniqueurl: "action/recomendProduct",
        pluginHandler: "set-goods",
        id: id,
        recommend: val,
      },
        function (response) {
          admin.indication(response.status, response.msg);
        }
      );
    },
    // Устанавливает статус - видимый
    visibleSet: function (id, val) {
      admin.ajaxRequest({
        mguniqueurl: "action/visibleProduct",
        pluginHandler: "set-goods",
        id: id,
        activity: val,
      },
        function (response) {
          admin.indication(response.status, response.msg);
        }
      );
    },
    // вывод в новинках
    newSet: function (id, val) {
      admin.ajaxRequest({
        mguniqueurl: "action/newSet",
        pluginHandler: "set-goods",
        id: id,
        new : val,
      },
        function (response) {
          admin.indication(response.status, response.msg);
        }
      );
    },
    // Добавляет строку в таблицу вариантов
    cteateTableVariant: function (variants) {
      // строим первую строку заголовков        
      $('.section-set-goods .product-text-inputs .variant-table').html('');
      if (variants) {
        var position = '\
        <tr>\
          <th class="hide-content">' + lang.NAME_VARIANT + '</th>\
          <th>' + setGoods.lang['CODE_SET'] + '</th>\
          <th>' + setGoods.lang.PRICE_SET + '/<a href="javascript:void(0);" class="btn-selected-currency">' + admin.CURRENCY + '</a></th>\
          <th>' + setGoods.lang.OLD_PRICE_SET + '</th>\
          <th>' + setGoods.lang.WEIGHT + '</th>\
          <th>' + setGoods.lang.UNIT + '</th>\
          <th class="hide-content"></th>\
        </tr>\ ';
        $('.variant-table').append(position);
        // заполняем вариантами продукта
        variants.forEach(function (variant, index, array) {
          var src = admin.SITE + "/mg-admin/design/images/no-img.png";
          if (variant.image) {
            src = admin.SITE + '/uploads/' + variant.image;
          }

          if (variant.count < 0) {
            variant.count = '∞'
          }
          ;
          var position = '\
          <tr data-id="' + variant.id + '"  class="variant-row">\
             <td class="hide-content">\
              <label for="title_variant"><input style="width: 120px;" type="text" name="title_variant" value="' + variant.title_variant + '" class="product-name-input tool-tip-right" title="' + lang.NAME_SET + '" ><div class="errorField">' + lang.NAME_SET + '</div></label>\
            </td>\
            <td>\
              <label for="code"><input style="width: 50px;" type="text" name="code" value="' + variant.code + '" class="product-name-input tool-tip-right" title="' + lang.T_TIP_CODE_SET + '" ><div class="errorField">' + lang.ERROR_EMPTY + '</div></label>\
            </td>\
            <td>\
              <label for="price"><input style="width:60px;" type="text" name="price" value="' + variant.price + '" class="product-name-input qty tool-tip-right" title="' + lang.T_TIP_PRICE_SET + '" ><div class="errorField">' + lang.ERROR_NUMERIC + '</div></label>\
            </td>\
            <td>\
              <label for="old_price"><input style="width:60px;" type="text" name="old_price" value="' + variant.old_price + '" class="product-name-input qty tool-tip-right" title="' + lang.T_TIP_OLD_PRICE + '" ><div class="errorField">' + lang.ERROR_NUMERIC + '</div></label>\
            </td>\
            <td>\
              <label for="weight"><input style="width:30px;" type="text" name="weight" value="' + variant.weight + '" class="product-name-input qty tool-tip-right" title="' + lang.T_TIP_WEIGHT_SET + '" ><div class="errorField">' + lang.ERROR_NUMERIC + '</div></label>\
            </td>\
            <td>\
              <label for="count"><input style="width:30px;" type="text" name="count" value="' + variant.count + '" class="product-name-input qty tool-tip-right" title="' + lang.T_TIP_COUNT_SET + '" ><div class="errorField">' + lang.ERROR_NUMERIC + '</div></label>\
            </td>\
            <td class="hide-content">\
            <div class="variant-dnd"></div>\
            <div class="img-this-variant" style="display:none;">\
            <img src="' + src + '" style="width:50px; min-height:100%" data-filename="' + variant.image + '">\
            </div>\
              <form method="post" noengine="true" enctype="multipart/form-data" class="img-button">\
              <span class="add-img-clone"></span>\
                <input type="file" name="photoimg" class="add-img-var img-variant">\
              </form>\
            <a href="javascript:void(0);" class="del-variant">Удалить</a>\
            </td>\
          </tr>\ ';
          $('.variant-table').append(position);
          $('.variant-table-wrapper').css('width', '620px');
          $('.variant-table tr td').css('padding', '5px 10px 5px 0');
        });
        $('.variant-table').data('have-variant', '1');
      } else {
        var position = '\
        <tr>\
          <th style="display:none" class="hide-content">' + lang.NAME_VARIANT + '</th>\
          <th>' + setGoods.lang['CODE_SET'] + '</th>\
          <th>' + setGoods.lang.PRICE_SET + '/<a href="javascript:void(0);" class="btn-selected-currency">' + admin.CURRENCY + '</a></th>\
          <th>' + setGoods.lang.OLD_PRICE_SET + '</th>\
          <th>' + setGoods.lang.WEIGHT + '</th>\
          <th>' + setGoods.lang.UNIT + '</th>\
          <th style="display:none" class="hide-content"></th>\
        </tr>\ ';
        $('.variant-table').append(position);
        var position = '\
          <tr class="variant-row">\
            <td style="display:none" class="hide-content">\
              <label for="title_variant"><input style="width: 120px;" type="text" name="title_variant" value="" class="product-name-input tool-tip-right" title="' + setGoods.lang.NAME_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_EMPTY + '</div></label>\
            </td>\
            <td>\
              <label for="code"><input style="width: 50px;" type="text" name="code" value="" class="product-name-input tool-tip-right" title="' + setGoods.lang.T_TIP_CODE_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_EMPTY + '</div></label>\
            </td>\
            <td>\
              <label for="price"><input style="width:60px;" type="text" name="price" value="" class="product-name-input qty tool-tip-right" title="' + setGoods.lang.T_TIP_PRICE_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_NUMERIC + '</div></label>\
            </td>\
            <td>\
              <label for="old_price"><input style="width:60px;" type="text" name="old_price" value="" class="product-name-input qty tool-tip-right" title="' + setGoods.lang.T_TIP_OLD_PRICE + '" ><div class="errorField">' + setGoods.lang.ERROR_NUMERIC + '</div></label>\
            </td>\
            <td>\
              <label for="weight"><input style="width:30px;" type="text" name="weight" value="" class="product-name-input qty tool-tip-right" title="' + setGoods.lang.T_TIP_WEIGHT_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_NUMERIC + '</div></label>\
            </td>\
            <td>\
              <label for="count"><input style="width:30px;" type="text" name="count" value="∞" class="product-name-input qty tool-tip-right" title="' + setGoods.lang.T_TIP_COUNT_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_NUMERIC + '</div></label>\
            </td>\
            <td style="display:none" class="hide-content">\
            <div class="variant-dnd"></div>\
            <div class="img-this-variant" style="display:none;">\
            <img src="' + admin.SITE + '/mg-admin/design/images/no-img.png" data-filename="" style="width:50px; min-height:100%">\
            </div>\
              <form method="post" noengine="true" enctype="multipart/form-data" class="img-button">\
                <span class="add-img-clone"></span>\
                <input type="file" name="photoimg" class="add-img-var img-variant">\
              </form>\
            <a href="javascript:void(0);" class="del-variant">Удалить</a>\
            </td>\
          </tr>\ ';
        $('.variant-table').append(position);
        $('.variant-table-wrapper').css('width', '415px');
        $('.variant-table tr td').css('padding', '5px 18px 5px 0');
        $('.variant-table').data('have-variant', '0');
        $('.variant-table').sortable({
          opacity: 0.6,
          axis: 'y',
          handle: '.variant-dnd',
          items: "tr+tr"
        }
        );


      }
    },
    // Добавляет строку в таблицу вариантов
    addVariant: function (table) {
      if ($('.section-set-goods .variant-table').data('have-variant') == "0") {
        $('.section-set-goods .variant-table .hide-content').show();
        $('.section-set-goods .variant-table').data('have-variant', '1');
      }
      var position = '\
      <tr class="variant-row">\
         <td class="hide-content">\
          <label for="title_variant"><input style="width: 120px;"  type="text" name="title_variant" class="product-name-input tool-tip-right" title="' + setGoods.lang.NAME_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_EMPTY + '</div></label>\
        </td>\
        <td>\
          <label for="code"><input style="width: 50px;"  type="text" name="code" class="product-name-input tool-tip-right" title="' + setGoods.lang.T_TIP_CODE_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_EMPTY + '</div></label>\
        </td>\
        <td>\
          <label for="price"><input style="width:60px;" type="text" name="price" class="product-name-input qty tool-tip-right" title="' + setGoods.lang.T_TIP_PRICE_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_NUMERIC + '</div></label>\
        </td>\
        <td>\
          <label for="old_price"><input style="width:60px;" type="text" name="old_price" class="product-name-input qty tool-tip-right" title="' + setGoods.lang.T_TIP_OLD_PRICE + '" ><div class="errorField">' + setGoods.lang.ERROR_NUMERIC + '</div> </label>\
        </td>\
        <td>\
          <label for="weight"><input style="width:30px;" type="text" name="weight" value="" class="product-name-input qty tool-tip-right" title="' + setGoods.lang.T_TIP_WEIGHT_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_NUMERIC + '</div></label>\
        </td>\
        <td>\
          <label for="count"><input style="width:30px;" type="text" name="count" value="∞" class="product-name-input qty tool-tip-right" title="' + setGoods.lang.T_TIP_COUNT_SET + '" ><div class="errorField">' + setGoods.lang.ERROR_NUMERIC + '</div></label>\
        </td>\
        <td class="hide-content">\
          <div class="variant-dnd"></div>\
          <div class="img-this-variant" style="display:none">\
          <img src="' + admin.SITE + '/mg-admin/design/images/no-img.png"  data-filename=""  style="width:50px; min-height:100%">\
          </div>\
          <form method="post" noengine="true" enctype="multipart/form-data" class="img-button">\
            <span class="add-img-clone"></span>\
            <input type="file" name="photoimg" class="add-img-var img-variant">\
           </form>\
          <a href="javascript:void(0);" class="del-variant">Удалить</a>\
        </td>\
      </tr>\ ';
      table.append(position);
      $('.section-set-goods .variant-table-wrapper').css('width', '620px');
      $('.section-set-goods .variant-table tr td').css('padding', '5px 10px 5px 0');
      admin.initToolTip();

    },
    // возвращает пакет  вариантов собранный из таблицы вариантов
    getVariant: function () {
      setGoods.errorVariantField = false;

      if ($('.section-set-goods .variant-table').data('have-variant') == "1") {

        var result = [];
        $('.section-set-goods .variant-table .variant-row').each(function () {

          //собираем  все значения полей варианта для сохранения в БД

          var id = $(this).data('id');
          var currency_iso = $('.section-set-goods .add-product-form-wrapper select[name=currency_iso] option:selected').val();
          var obj = '{';
          $(this).find('input').removeClass('error-input');
          $(this).find('input').each(function () {

            if ($(this).attr('name') != 'photoimg') {

              var val = $(this).val();
              if ((val == '\u221E' || val == '' || parseFloat(val) < 0) && $(this).attr('name') == "count") {
                val = "-1";
              }

              if (val == "" && $(this).attr('name') != 'old_price') {
                $(this).addClass('error-input');
                setGoods.errorVariantField = true;
              }
              obj += '"' + $(this).attr('name') + '":"' + val + '",';
            }
          });
          obj += '"activity":"1",';
          obj += '"id":"' + id + '",';
          obj += '"currency_iso":"' + currency_iso + '",';

          var filename = $(this).find('img[filename]').attr('filename');
          if (!filename) {
            filename = $(this).find('img').data('filename')
          }
          obj += '"image":"' + filename + '",';

          obj += '}';
          //преобразуем полученные данные в JS объект для передачи на сервер
          result.push(eval("(" + obj + ")"));
        });

        return result;
      }
      return null;
    },
    // возвращает список id связанных товаров с редактируемым
    getRelatedProducts: function () {
      var result = '';
      $('.section-set-goods .add-related-product-block .product-unit').each(function () {
        result += $(this).data('code') + ',';
      });
      result = result.slice(0, -1);


      return result;
    },
    /**
     * Клик по найденым товарам поиске в форме добавления связанного товара
     */
    addrelatedProduct: function (elementIndex, product) {
      $('.search-block.related .errorField').css('display', 'none');
      $('.search-block.related input.search-field').removeClass('error-input');
      if (!product) {
        var product = admin.searcharray[elementIndex];
      }
      var html = setGoods.rowRelatedProduct(product);
      $('.section-set-goods .added-related-product-block .product-unit[data-id=' + product.id + ']').remove();
      $('.section-set-goods .related-wrapper .added-related-product-block').prepend(html);
      setGoods.widthRelatedUpdate('.added-related-product-block');
      setGoods.msgRelated();
      $('.search-block.related input[name=searchcat]').val('');
      $('.search-block.related .select-product-block').hide();
      $('.search-block.related .fastResult').hide();
    },
    /**
     * формирует верстку связанного продукта
     */
    rowRelatedProduct: function (product) {
      var html = '\
      <div class="product-unit" data-id=' + product.id + ' data-code="' + product.code + '">\
          <div class="product-img">\
              <a href="javascript:void(0);"><img src="' + product.image_url + '"></a>\
          </div>\
          <a href="' + mgBaseDir + '/' + product.category_url + "/" + product.product_url +
        '" data-url="' + product.category_url +
        "/" + product.product_url + '" class="product-name" target="_blank" title="' +
        product.title + '">' +
        product.title + '</a>\
          <span>' + product.price + ' ' + admin.CURRENCY + '</span>\
          <a class="remove-added-product custom-btn" href="javascript:void(0);"><span></span></a>\
      </div>\
      ';
      return html;
    },
    //выводит связанные товары 
    //relatedProducts - массив с товарами
    drawRelatedProduct: function (relatedArr) {
      relatedArr.forEach(function (product, index, array) {
        var html = setGoods.rowRelatedProduct(product);
        $('.section-set-goods .related-wrapper .added-related-product-block').append(html);
        setGoods.widthRelatedUpdate('.added-related-product-block');
      });
      setGoods.msgRelated();
    },
    //выводит товары набора 
    //set - массив с товарами
    drawSet: function (set) {
  
      set.forEach(function (product, index, array) {
        var price = parseFloat(product.variant ? product.price_course_variant : product.price_course);
        if (product.rate != 0) {
          price += parseFloat(price) * parseFloat(product.rate);
        }
        var html = '\
       <div class="product-unit components" data-id=' + product.id + ' data-code="' + (product.variant ? product.variant : product.code) + '">\
          <div class="product-img">\
              <a href="javascript:void(0);"><img src="' + product.image_url + '"></a>\
          </div> <a href="' + mgBaseDir + '/' + product.category_url + "/" + product.product_url +
          '" data-url="' + product.category_url +
          "/" + product.product_url + '" class="product-name" target="_blank" title="' +
          product.title + '">' +
          product.title + '</a>\<p>' + (product.variant ? product.title_variant : '') + '</p> \
              <span class="price-unit" data-price=' + price + '>'
          + admin.numberFormat(price) + '</span> <span>' + admin.CURRENCY + '</span>\
          <input type="text" data-max='+(product.max_variant ? product.max_variant : product.max)+' data-weight="'+product.weight+'" name="count" value="'+product.counts+'" /> <span> шт.</span>\
          <a class="remove-added-product components custom-btn" href="javascript:void(0);"><span></span></a>\
       </div>';
        $('.section-set-goods .related-wrapper .added-components').append(html);
//        setGoods.widthRelatedUpdate('.added-components');
      });
      setGoods.msgComponents();
    },
    //выводит ссылку в пустом блоке для добавления связаного товара
    msgRelated: function () {
      if ($('.section-set-goods .added-related-product-block .product-unit').length == 0) {
        $('.section-set-goods .related-wrapper .added-related-product-block').append('\
         <a class="add-related-product in-block-message" href="javascript:void(0);"><span>' + setGoods.lang.RELATED_4 + '</span></a>\
       ');
        $('.section-set-goods .added-related-product-block').width('800px');
      } else {
        $('.section-set-goods .added-related-product-block .add-related-product').remove();
      }
      ;
    },
    //выводит сообщение блоке для добавления товаров в комплект, если он пустой
    msgComponents: function () {
      if ($('.section-set-goods .added-components .product-unit').length == 0) {
        $('.section-set-goods .related-wrapper .added-components').html('\
         <span class="none-components">' + setGoods.lang.COMPONENTS_NONE + '</span>\
       ');
//        $('.section-set-goods .added-components').width('800px');
        $('.section-set-goods .cost-set .cost-set-total').text('');
        $('.section-set-goods .cost-set .weight-set-total').text('');
       // $('.section-set-goods .variant-table-wrapper input[name="price"]').val('');
        $('.section-set-goods .cost-set').hide();
      }
      else {
        $('.section-set-goods .added-components .none-components').remove();
        var total = 0;
        var totalWeight = 0;
        $('.section-set-goods .added-components .product-unit').each(function () {
          total += parseFloat($(this).find('.price-unit').data('price')) * ($(this).find('input[name="count"]').val());
          totalWeight += parseFloat($(this).find('input[name="count"]').data('weight')) * ($(this).find('input[name="count"]').val());
        });
        $('.section-set-goods .cost-set .cost-set-total').text(admin.numberFormat(total) + ' ' + admin.CURRENCY);
        //$('.section-set-goods .variant-table-wrapper input[name="price"]').val(total);
        $('.section-set-goods .cost-set .weight-set-total').text(totalWeight.toFixed(4)+' '+'кг');
        $('.section-set-goods .cost-set').show();
     }

    },
    //пересчитывает ширину блока с связанными товарами, для работы скрола.
    widthRelatedUpdate: function (block) {
      var widthCanvas = $(block).width();
      var widthUnit = $(block + '.product-unit').width();
      if (!widthUnit) {
        widthUnit = 105
      }
      ;
      $(block).css('width', (widthCanvas + widthUnit) + "px");
   },
    
    selectCategoryInside: function (selectedCatIds) {
      if (!selectedCatIds) {
        $('.section-set-goods .add-category').removeClass('opened-list');
        $('.section-set-goods .inside-category').hide();
      } else {
        $('.section-set-goods .add-category').addClass('opened-list');
        $('.section-set-goods .inside-category').show();
      }
      var htmlOptionsSelected = selectedCatIds.split(',');
      $('.section-set-goods select[name=inside_cat] option').prop('selected', false);
      function buildOption(element, index, array) {
        $('.section-set-goods .inside-category select[name="inside_cat"] [value="' + element + '"]').prop('selected', 'selected');
      }
      ;
      htmlOptionsSelected.forEach(buildOption);
    },
    /**
     * Возвращает список выбранных категорий для товара
     */
    createInsideCat: function () {
      var category = '';
      $('.section-set-goods select[name=inside_cat] option').each(function () {
        if ($(this).prop('selected')) {
          category += $(this).val() + ',';
        }
      });

      category = category.slice(0, -1);

      return category;
    },
    /**
     * Возвращает список выбранных категорий для товара
     */
    getFileElectro: function (file) {
      var dir = file.url;
      dir = dir.replace(mgBaseDir, '');
      $('.section-set-goods input[name="link_electro"]').val(dir);
      $('.section-set-goods .del-link-electro').text(dir.substr(0, 50));
      $('.section-set-goods .del-link-electro').attr('title', dir);
      $('.section-set-goods .del-link-electro').show();
      $('.section-set-goods .add-link-electro').hide();
    },
    /**
     * Смена валюты  
     */
    changeIso: function () {
      // var short_cur = $('.section-set-goods .btn-selected-currency').text();
      var short = $('.section-set-goods .add-product-form-wrapper select[name=currency_iso] option:selected').text();
      var rate = $('.section-set-goods .add-product-form-wrapper select[name=currency_iso] option:selected').data('rate');
      $('.section-set-goods #mg-add-set-wrapper .btn-selected-currency').text(short);
      $('.section-set-goods .add-product-form-wrapper .select-currency-block').hide();
            
    },
    /** 
     * Возвращает сокращение, из списка допустимых валют  
     * @param {type} iso
     * @returns {undefined}
     */
    getShortIso: function (iso) {
      var short = $('.section-set-goods .add-product-form-wrapper select[name=currency_iso] option[value=' + iso + ']').text();
      return short;
    },
    /**
     * Клик по найденым товарам поиске в форме добавления товара в комплект
     */
    viewProduct: function (elementIndex) {
      $('.search-block.add .errorField').css('display', 'none');
      $('.search-block.add input.search-field').removeClass('error-input');
      var product = admin.searcharray[elementIndex];      
      if (!product.category_url) {
        product.category_url = 'catalog';
      }
      var html = '<div class="clear-product"></div><div class="clear"></div>\
          <div class="image-sp"><img src="' + product.image_url + '"></div>';
      html +=
        '<div class="product-info"><div class="title-sp">' +
        '<a href="' + mgBaseDir + '/' + product.category_url + "/" + product.url +
        '" data-url="' + product.category_url +
        "/" + product.url + '" class="url-sp" target="_blank">' +
        product.title + '</a>' +
        '</div>';
      html += '<div class="id-sp" style="display:none">' + product.id + '</div>';
      html += '<div class="price-line">' + setGoods.lang.PRICE_SET + ' <span class="price-sp">' + Math.round(product.price_course * 100) / 100 + '</span>';
      html += '<span class="currency-sp"> ' + product.currency + '</span></div>';
      html += '<div class="code-line">' + setGoods.lang.CODE_SET + ' <span class="code-sp">' + product.code + '</span></div>';
      html += '<div class="weight-line">' + setGoods.lang.REMAIN + ' <span class="count-sp">' + (product.count >= 0 ? product.count : '∞') + '</span></div>';
      html += '<div class="weight-line">' + setGoods.lang.WEIGHT + ' <span class="weight-sp">' + product.weight + '</span></div>';
      html += '<div class="form-sp">' + product.propertyForm + '</div>';
      html += '</div>';
      html += '<div class="desc-sp">' + product.description + '</div>';
      html += '<div class="clear"></div><a href="javascript:void(0)" class="custom-btn add-to-set"><span>' + setGoods.lang.ADD + '</span></a>';
      $('.section-set-goods .product-block').html(html);
      $('.section-set-goods .product-block .form-sp form p, form .addToCart').remove()
      $('.section-set-goods .product-block').show();
      $('.search-block.add input[name=searchcat]').val('');
      $('.search-block.add .fastResult').hide();
    },
    /**
     * Пересчет цены, количества, веса товара аяксом в форме добавления в комплект
     */
    refreshPropProduct: function () {
      var request = $('.section-set-goods .property-form').formSerialize();
      // Пересчет цены.        
      $.ajax({
        type: "POST",
        url: mgBaseDir + "/product",
        data: "calcPrice=1&" + request,
        dataType: "json",
        cache: false,
        success: function (response) {
          if ('success' == response.status) {
            $('.section-set-goods  .product-block .price-sp').text(response.data.real_price);
            $('.section-set-goods  .product-block .code-sp').text(response.data.code);
            $('.section-set-goods  .product-block .weight-sp').text(response.data.weight);
            $('.section-set-goods  .product-block .count-sp').text(response.data.count >= 0 ? response.data.count : '∞');
            if ($('.section-set-goods .product-table-wrapper .variants-table input').length >0) {
              var img = $('.section-set-goods .product-table-wrapper .variants-table input[name=variant]:checked').parents('tr').find('img').attr('src');
              $('.section-set-goods  .product-block .image-sp img').attr('src', img);
            }
          }
        }
      });
    },
    /**
     * Функция добавления товара в комплект
     */
    addComponentProduct: function (button) {
      var id = $(button).parents('.product-block').find('.product-info .id-sp').text();
      var code = $(button).parents('.product-block').find('.product-info .code-sp').text();
      var image = $(button).parents('.product-block').find('.image-sp img').attr('src');
      var product = $(button).parents('.product-block').find('.title-sp a').data('url');
      var price = $(button).parents('.product-block').find('.price-sp').text();
      var title = $(button).parents('.product-block').find('.title-sp a').text();
      var maxCount = $(button).parents('.product-block').find('.count-sp').text();
      var weight = $(button).parents('.product-block').find('.product-info .weight-sp').text();
      maxCount = (maxCount=='∞') ? -1 : maxCount;
      if (maxCount == 0) {
        admin.indication('error', setGoods.lang.COMPONENTS_NONE_COUNT);
        return false;
      } else if (maxCount > 0) {
        $(button).parents('.product-block').find('.count-sp').text(maxCount-1);
      }          
      var variant = $(button).parents('.product-block').find('.block-variants input:checked').parents('tr').find('label').text();
      if( $('.added-components .product-unit[data-code="' + code + '"]').length > 0) {
        var count = $('.added-components .product-unit[data-code="' + code + '"]').find('input[name=count]').val();
        count = parseInt(count) + 1;
        if (maxCount > 0 || maxCount == -1 ) {
          $('.added-components .product-unit[data-code="' + code + '"]').find('input[name=count]').val(count);
          setGoods.calculateSummSet();          
        }
      } else {
      var html = '\
       <div class="product-unit components" data-id=' + id + ' data-code="' + code + '">\
          <div class="product-img">\
              <a href="javascript:void(0);"><img src="' + image + '"></a>\
          </div> <a href="' + mgBaseDir + '/' + product +
        '" data-url="' + product + '" class="product-name" target="_blank" title="' +
        title + '">' +
        title + '</a><p>' + variant + '</p> \
              <span class="price-unit" data-price=' + price + '>' + admin.numberFormat(price) + '</span> <span>' + admin.CURRENCY + '</span>\
              <input type="text" data-max='+maxCount+' data-weight = "'+weight+'" name="count" value="1" /> <span> шт.</span>\
          <a class="remove-added-product components custom-btn" href="javascript:void(0);"><span></span></a>\
       </div>';
      
      $('.related-wrapper .added-components').append(html);
//      setGoods.widthRelatedUpdate('.added-components');
      setGoods.msgComponents();
    }
    },
    // возвращает список артикулов товаров, входящих в комплект
    getComponentsSet: function () {
      var result = '';
      $('.section-set-goods .added-components .product-unit').each(function () {
        result += $(this).data('code') + '|' + $(this).find('input[name=count]').val() + ',';
      });
      result = result.slice(0, -1);
      return result;
   },
   /**
    * Поиск товаров
    */
    getSearchSet: function(keyword) { 
      keyword = $.trim(keyword);
      if(keyword == lang.FIND+"..."){
        keyword = '';
      }
      if(!keyword){
        admin.indication('error', 'Введите поисковую фразу');    
        return false
      };
      
      admin.ajaxRequest({
          mguniqueurl:"action/searchSet",
          pluginHandler: "set-goods",
          keyword:keyword,
          mode: 'groupBy',
      },
      function(response) {
        admin.indication(response.status, response.msg);     
        $('.set-goods-tbody tr').remove();
        response.data.forEach(
          function (element, index, array) {
             var row = setGoods.drawRowSet(element);
             $('.set-goods-tbody').append(row);
          });
          // Если в результате поиска ничего не найдено
          if(response.data.length==0){    
            var row = "<tr><td class='no-results' colspan='"+$('.product-table th').length+"'>"+lang.SEARCH_PROD_NONE+"</td></tr>"
            $('.set-goods-tbody').append(row);
          }
          $('.mg-pager').hide();
          $('.section-set-goods .searchSet').css("background","url("+admin.SITE +"/mg-plugins/set-goods/images/close-icon.png)");
          $('.section-set-goods .searchSet').attr("title","Сбросить результат поиска");
          admin.initToolTip();
          $('.section-set-goods .searchSet').addClass('resetSearchSet');
        }
      );
    },
    calculateSummSet: function() {
      var total = 0;
      var weight = 0;
      $('.section-set-goods .added-components .product-unit').each(function () {
          total += parseFloat($(this).find('.price-unit').data('price')) * ($(this).find('input[name="count"]').val());
          weight += parseFloat($(this).find('input[name="count"]').data('weight')) * ($(this).find('input[name="count"]').val());
      });
      $('.section-set-goods .cost-set .cost-set-total').text(admin.numberFormat(total) + ' ' + admin.CURRENCY);
      $('.section-set-goods .cost-set .weight-set-total').text(weight.toFixed(4)+' '+'кг');
     // $('.section-set-goods .variant-table-wrapper input[name="price"]').val(total);
    }
  }
  
})();

// инициализациямодуля при подключении
setGoods.init();
admin.sortable('.set-goods-tbody', 'set-goods');

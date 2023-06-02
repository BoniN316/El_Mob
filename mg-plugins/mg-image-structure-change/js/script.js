 /* 
 * Модуль подключается на странице настроек плагина.
 */

var mgImageStructureChange = (function() {
  
  return { 
    lang: [], // локаль плагина 
    pluginName: 'mg-image-structure-change',
    init: function() {      
      
      // установка локали плагина 
      admin.ajaxRequest({
          mguniqueurl: "action/seLocalesToPlug",
          pluginName: mgImageStructureChange.pluginName
        },
        function(response) {
          mgImageStructureChange.lang = response.data;        
        }
      );        
      
      // Сохраняет базовые настроки запись
      $('.admin-center').on('click', '.section-'+mgImageStructureChange.pluginName+' .base-setting-save', function() { 
        mgImageStructureChange.printLog(mgImageStructureChange.lang['START_EXEC_MOVE']);
        mgImageStructureChange.startMoving(0, 0);                
      });          
    },
        
    startMoving: function(nextItem, total_count){
      var obj = '{';
      $('.list-option input, .list-option select').each(function(){     
        obj += '"' + $(this).attr('name') + '":"' + $(this).val() + '",';
      });
      obj += '}';    

      //преобразуем полученные данные в JS объект для передачи на сервер
      var data =  eval("(" + obj + ")");
          
      if(nextItem == 0){
        setTimeout(function(){
          $('.mailLoader').before('<div class="my-view-action">'+mgImageStructureChange.lang.EXEC_PROCESS+'</div>');
        }, 300);
      }      
      
      admin.ajaxRequest({
        mguniqueurl: "action/startMoving", // действия для выполнения на сервере
        pluginHandler: mgImageStructureChange.pluginName, // плагин для обработки запроса
        nextItem: nextItem, // id записи    
        total_count: total_count,
        data: data
      },
      function(response){
        if(response.status == 'error'){
          mgImageStructureChange.printLog(response.msg);
          admin.indication(response.status, response.msg); 
          return false;
        }
        
        if(!response.data.successExec){
          mgImageStructureChange.printLog(response.msg);          
          mgImageStructureChange.startMoving(response.data.nextItem, response.data.total_count);
        }else{
          $('.my-view-action').remove();
          mgImageStructureChange.printLog(response.msg);
          admin.indication(response.status, response.msg); 
        }
      });            
    },
    printLog: function(text){
      $('.section-'+mgImageStructureChange.pluginName+' .block-console textarea').append("\r\n"+text);         
    },
  }
})();

mgImageStructureChange.init();
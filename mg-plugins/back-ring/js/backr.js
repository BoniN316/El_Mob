$(document).ready(function(){




        $.ajax({
            type: "POST",
                        url: mgBaseDir+"/ajax",
            dataType: 'json',
            data:{
                mguniqueurl: "action/saveEntity", // действия для выполнения на сервере
                pluginHandler: 'back-ring',
                value: comment.val(),
                nameEntity: phone.val(),
                invisible: 1,
            },
            success: function(response){
                if(response.status!='error'){
                    alert('Ваша заявка #'+response.data.row.id+' принята. Наши менеджеры свяжутся с вами!');
                    $('.wrapper-modal-back-ring').hide();
                    $('.send-ring-button').show();
                    $('.loading-send-ring').remove();
                }
            }
        });


});
$(function(){
                var top = 0;
                var bottom = 0;
                var height = 0;
                var maxheight = 0;
                var rheight = 0;
                var stop = 0;
                var flowtop = 0;
                var botheight = 0;
                var rwidth = 0;
                var lwidth = 0;

                var mtop = 0;

                function vars() {
                        $left = $('.leftblock');
                        $right = $('.flowfilter');
                        lwidth = $('.outleftblock').width();
                        rwidth = $('.outfilter').width();
                        $right.css('width', rwidth);
                        $left.css('width', lwidth);

                       // top =// parseInt($('.outleftblock').offset().top);
                        bottom = parseInt($('.outfooter').offset().top);
                        botheight = parseInt($('.outfooter').height());
                        height = $(window).height();
                        rheight = $right.height();

                        maxheight = (rheight > height) ? rheight : height;
                        stop = bottom+botheight-maxheight;
                        mtop = stop-top;
                }
                vars();

                function flow() {
                        flowtop = parseInt($(document).scrollTop());

                        if (flowtop < top) {
                                $right.css('top', '0px');
                                $right.css('margin-top', '0px');
                                $right.css('position', 'static');

                                $left.css('top', '0px');
                                $left.css('margin-top', '0px');
                                $left.css('position', 'static');
                        }
                        else if (flowtop > stop) {
                                $right.css('position', 'static');
                                $right.css('margin-top', mtop);
                                $right.css('top', 'auto');

                                $left.css('position', 'static');
                                $left.css('margin-top', mtop);
                                $left.css('top', 'auto');
                        }
                        else if (flowtop > top) {
                                $right.css('margin-top', 0);
                                $right.css('top', 0);
                                $right.css('position', 'fixed');

                                $left.css('margin-top', 0);
                                $left.css('top', 0);
                                $left.css('position', 'fixed');
                        }

                }

                $( window ).resize(function() {
                        vars();
                });

                $( window ).scroll(function() {
                        flow();
                });

        //filter
        $('.bt_podbor').click(function(){$('.filter-btn').click()});
        $('.bt_all').click(function(){$('.mg-viewfilter-all').click()});
        $('.bt_resets').click(function(){console.log('asfd'); $('.refreshFilter span').click()});

        $('.tabmenu a').click(function(){
                var id = $(this).attr('id');
                $('.tabmenu a').removeClass('active');
                $(this).addClass('active');
                $('.tabcontents .tabcontent').removeClass('active');
                $('#'+id+'-content').addClass('active');
        })

            //Количество товаров
            $('.amount_input').val(10);
            $('.amount_change .up').bind('click', function(){
                //bp-за вариантов товара делаем  бесконечное возможное количесво
                //

                var obj = $(this).parents('.cart_form').find('.amount_input');
                var val = obj.data('max-count');
                if ((val == '\u221E' || val == '' || parseFloat(val) < 0)) {
                    obj.data('max-count', 9999);
                }
                var i = obj.val();
                i = parseInt(i)+10;
                console.log(i);
                if (i > obj.data('max-count')) {
                    i = obj.data('max-count');
                }
                obj.val(i);
                return false;
            });

            $('.amount_change .down').bind('click', function(){
                var obj = $(this).parents('.cart_form').find('.amount_input');
                var val = obj.val();
                // if((val=='\u221E'||val==''||parseFloat(val)<0)){val = 0;}
                var i = val;
                i = parseInt(i)-10;
                if (i <= 0) {
                    i = 10;
                }
                obj.val(i)
                return false;
        });

})

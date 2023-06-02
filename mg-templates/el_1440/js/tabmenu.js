$(document).ready(function () {
 $('.tabmenu a').click(function(event){
    var element = $(this),
        activeClassName = 'active',
      target  = element.attr('href').split('_')[1];

  $('.tabcontent').removeClass(activeClassName);
   $('#'+target).addClass(activeClassName);

  
   element.parent('li').addClass(activeClassName);
console.log("element",element,"target",target);
});
});
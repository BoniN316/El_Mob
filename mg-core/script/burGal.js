$(document).ready(function(){

 $('img[name="l"]').addClass("Levo");
$('img[name="p"]').addClass("Pravo");



let current=0;
let kolvo=8; //количество картинок


let oi="#o1";



// массив картинок
tumb= new Array();
tumb[0]=new Image();   // картинка 1
tumb[1]=new Image(); // картинка 2
tumb[2]=new Image();
tumb[3]=new Image();
tumb[4]=new Image();
tumb[5]=new Image();
tumb[6]=new Image();
tumb[7]=new Image();
tumb[0].src="/uploads/ElakorFront-1.jpg";
tumb[1].src="/uploads/ElakorFront-2.jpg";
tumb[2].src="/uploads/ElakorFront-3.jpg";
tumb[3].src="/uploads/ElakorFront-4.jpg";
tumb[4].src="/uploads/ElakorFront-5.jpg";
tumb[5].src="/uploads/ElakorFront-6.jpg";
tumb[6].src="/uploads/ElakorFront-7.jpg";
tumb[7].src="/uploads/ElakorFront-8.jpg";

function vidvid(){
   if(current>0)
     {
          $('.Pravo').addClass('active');
$('.Levo').addClass('active');
       oi="#o" + current;
   $(oi).css('color',"rgb(204, 0, 0)");
     oi="#o" + (current-1);
    $(oi).css('color',"rgb(0, 0, 0)");
 oi="#o" + (current+1);
    $(oi).css('color',"rgb(0, 0, 0)");
    $('#rr').attr('src', tumb[current].src)
     }


  if (current==0)
     {
           $('.Levo').removeClass('active');
   $('.Pravo').addClass('active');
     }
         if (current==7)
            {
           $('.Pravo').removeClass('active');
              $('.Levo').addClass('active');
            }


}






$('.Pravo').click(function(event){
console.log("вправоизо1", current,kolvo );

               current++;
               console.log("вправо", current);


 if(current<=kolvo)
  {
current==kolvo?current=kolvo-1:"";
console.log("вправоизо2", current,kolvo );

/* $('.Levo').style=stvl;*/
  }

  if (current>=7)
     {
    current=7;
 $('.Pravo').removeClass('active');
  $('.Levo').addClass('active');
     }
     vidvid();
})




$('.Levo').click(function(event){

  if(current>=0){
  $('#rr').attr('src', tumb[current-1].src)
   current-1>=0?current--:current=current;
    console.log("levo  ",  current);
        $('.Levo').toggleClass('active');
    }

/*  if(current>7){
    current=7;
 $('#rr').attr('src', tumb[7].src)
    }*/

if(current<=0){
 $('.Levo').removeClass('active');
   $('.Pravo').addClass('active');
current=0;
 $('#rr').attr('src', tumb[0].src);
}

  vidvid();

})


$('#idtxtv').click(function(event){
   $("#rr").css('display',"none");
    $("#rlp").css('display',"none");
    $("#ftdiv").css('display',"none");
   $("#txdiv").css('display',"block");
   $("#idtxtv").css('display',"none");
   $("#idftv").css('display',"block");
 })


$('#idftv').click(function(event){
      $("#rr").css('display',"block");
      $("#rlp").css('display',"block");
      $("#ftdiv").css('display',"block");
      $("#txdiv").css('display',"none");
      $("#idtxtv").css('display',"block");
      $("#idftv").css('display',"none");
  current=1;
 $('#rr').attr('src', tumb[current-1].src)
/*    $('.Levo').style=stnvl;
      $('.Pravo').style=stvp; */
  current--;
 })
})
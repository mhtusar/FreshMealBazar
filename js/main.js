$(document).ready(function(){
    $('.food-slider').slick({
      

      responsive:[
        {
           breakpoint:992,
           settings:{
            slidesToShow:2,
           }
        },
        {
         breakpoint:768,
         settings:{
         slidesToShow:1,
         }
      }
     ]
  
    });
    

    $('.nav-trigger').click(function(){
      $('.site-content-wrapper').toggleClass('scaled');
   })
});
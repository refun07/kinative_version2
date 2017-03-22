
$(function() {
 "use strict";
   /*
  **********************************************************
  * OPAQUE NAVBAR SCRIPT
  **********************************************************
  */// 
 
  $(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.opaque-navbar').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
});

 
 

//wow
new WOW().init();
 


  

  



  

  
 


});


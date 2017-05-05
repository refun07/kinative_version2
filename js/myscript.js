
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

 
 //magnificpop up
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        disableOn:0,
        fixedContentPos: false
    });
 

//wow
new WOW().init();
 


  

  



  

  
 


});



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

 //scroll to top
 //scroll to top
$("a[href='#top']").click(function() {
     $("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
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
 

//embedded video
function play(){document.getElementById('vidwrap').innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/XsRYcVvGoEI" frameborder="0" allowfullscreen></iframe>';}

  

  



  

  
 


});


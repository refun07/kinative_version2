<!-- =================Start of footer============== -->
<footer id="end" class="footer">
    <div class="container">
      <div class="row">
        <div class=" col-lg-4 col-md-5 col-xs-12 mt" > 
          <p class="kinative_para f-weight400 mt"> © <?php echo date('Y'); ?> Copyright <a href="#">Kinative</a>, All Rights Reserved  </p>
        </div>
        <!-- navbar-header -->
        
       <div class=" col-lg-5 col-lg-offset-3 col-md-7  col-xs-12  social_icons mt">
        <p class="light_para_s f-rw inline-block">Follow Us:</p>
           <div class="footer-icons inline-block">
                <a  target="_blank" href="https://www.facebook.com/kinatives/" class="facebook img-circle"><i class="fa fa-facebook-f"></i></a>
                <a target="_blank" href="#" class="google-plus img-circle"><i class="fa fa-google-plus"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCeBWEO6YROscj5QDvrdsnbg" class="twitter img-circle"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/kinative" class="linkedin img-circle"><i class="fa fa-linkedin"></i></a>
                 
           </div>
              <p class="light_para_s f-rw inline-block ml25">Back to top:</p>
              <p class="light_para_s f-rw inline-block top-box"><a class="top" href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i></a></p>
      </div>
    </div>
  </footer>
  <!-- =================End of footer============== -->
  
  
  <!-- jQuery Include --> 
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  
  <script src="libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect --> 
  
  <script src="libraries/bootstrap/bootstrap.min.js"></script> <!-- Core Bootstrap v3.2.0 --> 
  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script type="text/javascript" src="libraries/magnific/jquery.magnific-popup.js"></script> 
  <script src="libraries/wow.min.js"></script> 
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js'></script>
  <!-- Customized Scripts --> 
  <script src="js/myscript.js"></script>
  
  <script>
    $(function(){
      //datepicker
  $( "#datepicker" ).datepicker();
  $( "#datepicker2" ).datepicker();
  $( "#datepicker3" ).datepicker();
  
  
  
    });
    let radio_one = document.querySelector('.radio-one');
    let radio_two = document.querySelector('.radio-two');
    let radio_three = document.querySelector('.radio_three');
  
    let radio_one_show = document.querySelector('.radio-one-show'); 
    let radio_two_show = document.querySelector('.radio-two-show'); 
    let radio_three_show = document.querySelector('.radio-three-show'); 
    
     function radioOne(){
       radio_two_show.style.display = 'none';
       radio_three_show.style.display = 'none';
       radio_one_show.style.display = 'block';
     }
     function radioTwo(){ 
       radio_one_show.style.display = 'none';
       radio_three_show.style.display = 'none';
       radio_two_show.style.display = 'block';
     }
  
     function radioThree(){
       radio_one_show.style.display = 'none';
       radio_two_show.style.display = 'none';
       radio_three_show.style.display = 'block';
     }
   
  </script>
  </body>
  </html>
  
  <!-- Footer -->
<!-- Remove the container if you want to extend the Footer to full width. -->


<footer id="footer">
  <div class="footer-top py-5 bg-black">
    <div class="container">
      <div class="row ">

        <div class="col-lg-3 col-md-6 col-sm-6 footer-contact">
          <h3 class="text-white pb-2">Shkolla e Programimit<span>.</span></h3>
          <p class="text-white">Shkolla e Programimit merret me organizimin <br> e trajnimeve ne fushen e shkencave kompjuterike dhe inxhinierise.<br> Ne jemi te fokusuar ne programimin e aplikacioneve bazuara ne web
          </p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 footer-links">
          <h3 class="text-white pb-3">Menu</h3>
          <ul class="list-unstyled">
            <li><i class="icofont-arrow-right text-primary pe-2"></i> <a href="#" class="link-light text-decoration-none">Ballina</a></li>
            <li><i class="icofont-arrow-right text-primary pe-2"></i> <a href="#shkolla" class="link-light text-decoration-none">Shkolla</a></li>
            <li><i class="icofont-arrow-right text-primary pe-2"></i> <a href="#sherbimet" class="link-light text-decoration-none">Sherbimet</a></li>
            <li><i class="icofont-arrow-right text-primary pe-2"></i> <a href="#trajnimet" class="link-light text-decoration-none">Trajnimet</a></li>
            <li><i class="icofont-arrow-right text-primary pe-2"></i> <a href="#statistikat" class="link-light text-decoration-none">Statistikat</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 footer-links">
          <h3 class="text-white pb-3">Trajnimet Tona</h3>
          <ul class="list-unstyled">
            <li><a href="#" class="link-light text-decoration-none">Full Stack Development</a></li>
            <li><a href="#" class="link-light text-decoration-none">Php OOP & Mysql</a></li>
            <li><a href="#" class="link-light text-decoration-none">Hyrje ne Laravel</a></li>
            <li><a href="#" class="link-light text-decoration-none">Hyrje ne React Js</a></li>
            <li><a href="#" class="link-light text-decoration-none">Hyrje ne Bootstrap</a></li>
            <li><a href="#" class="link-light text-decoration-none">Hyrje ne Angular</a></li>
            
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 footer-links">
          <h3 class="text-white pb-3">Adresa</h3>
          <ul class="list-unstyled">
            <li><i class="icofont-location-pin text-white"></i>
              <span class="text-white ps-2">Rruga Xhemajl Mustafa,Prishtine</span>
              </li>
            <li>
              <i class="icofont-phone text-white"></i>
              <span class="text-white ps-2">+38345000000</span>
            </li>
            <li>
              <i class="icofont-email text-white"></i>
              <span class="text-white ps-2">shkollaeprogramimit@gmail.com</span>
            </li>
            
          </ul>

          
        </div>
        

        


      </div>
    </div>
  </div>


</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
  <i class="icofont-simple-up"></i>
</a>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>

(function($) {

"use strict";

var fullHeight = function() {

  $('.js-fullheight').css('height', $(window).height());
  $(window).resize(function(){
    $('.js-fullheight').css('height', $(window).height());
  });

};
fullHeight();

var carousel = function() {
  $('.featured-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    margin:30,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true,
    dots: true,
    autoplayHoverPause: false,
    items: 1,
    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{
        items:3
      }
    }
  });

};
carousel();

})(jQuery);
    </script>

    
  </body>
</html>

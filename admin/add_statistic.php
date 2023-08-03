<?php 
use Admin\Lib\Statistic;
?>

    <?php include "inc/header.php";?>
    <?php include "inc/sidebar.php";?>
<body>
    
    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                        <?php
                        if (isset($_POST['add_statistic'])) {
                        $statistic=new Statistic();
                        $statistic->setParagraph($_POST['paragraph']);
                        $statistic->setNumber($_POST['number']);
                        // $statistic->setIcon($_POST['icon']);
                        if($statistic->create()){
                            $session->message("Statistika u shtua me sukses");
                                header("Location: ./view_statistics.php");
                        }
                        }
                        ?>
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#reviews">Shto Statistik</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                     <form id="acount-infor" method="post" action="#" class="acount-infor">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" name="paragraph" class="form-control" placeholder="Shkruaj emrin e statistikes">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" name="number" class="form-control" placeholder="Shkruaj numrin e statistikes">
                                                            </div>
                                                            <!-- <div class="input-group">
  <input type="text" class="form-control" name="icon" id="icon" >
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#icon-picker">
      <i class="icofont icofont-ui-add"></i> Select Icon
    </button>
  </div>
</div>

<div class="modal fade" id="icon-picker" tabindex="-1" role="dialog" aria-labelledby="icon-picker-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="icon-picker-label">Select Icon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <?php
            $icons = array(
              'icofont-users-alt-5',
              'icofont-chart-bar-graph',
              'icofont-laptop',
              // add more icons as needed
            );
            foreach ($icons as $icon) { ?>
              <div class="col-sm-2 text-center">
                <a href="#" class="icon-picker-icon" data-icon="<?php echo $icon; ?>">
                  <i class="icofont <?php echo $icon; ?>" data-dismiss="modal"></i>
                </a>
              </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // When an icon picker icon is clicked, update the value of the input field
  $('.icon-picker-icon').click(function() {
    var icon = $(this).data('icon');
    $('#icon').val(icon);
  });
</script> -->


                                                            <input class="btn btn-primary waves-effect waves-light" id="login" value="Krijo Statistiken" type="submit" name="add_statistic"/>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
          
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    
    <!-- tawk chat JS
		============================================ -->
   
</body>

</html>
<?php
use Admin\Lib\Services;
?>
<!doctype html>
<html class="no-js" lang="en">


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
                        $services= new Services();
                        if(isset($_GET['id'])){
                        $services=$services->find_id($_GET['id']);
                        }
                        if(isset($_POST['edit_services'])){
                        $services->setTitle($_POST['title']);
                        $services->setParagraph($_POST['paragraph']);
                        if($services->update()){
                            $session->message("Sherbimi u modifikua me sukses");
                            header("Location: view_services.php"); 
                        }
                        }
                        ?>
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#reviews">Perditeso Sherbimin</a></li>
                                
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">              
                                <div class="product-tab-list tab-pane fade active in" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                     <form id="acount-infor" method="post" action="#" enctype="multipart/form-data" class="acount-infor">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="title" value="<?php echo $services->getTitle();?>">
                                                            </div>
                                                            <div class="form-group">
                                                            <textarea class="form-control"  name="paragraph"  style="height: 100px"><?php echo $services->getParagraph();?></textarea>
                                                            </div> 
                                                            <input class="btn btn-primary waves-effect waves-light" id="login" value="Perditeso" type="submit" name="edit_services"/>
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
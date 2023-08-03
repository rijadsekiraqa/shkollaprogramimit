<?php
use Admin\Lib\Slider;
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
                        $slider= new Slider();
                        if(isset($_GET['id'])){
                        $slider=$slider->find_id($_GET['id']);
                        }
                        if(isset($_POST['edit_slider'])){
                        $slider->setH5($_POST['h5']);
                        $slider->setP($_POST['p']);
                        if(!empty($_FILES['image']['name'])){
                            $slider->setPhotoImage($_FILES['image']);
                        }
                        if($slider->update()){
                            $session->message("Slideri u perditesua me sukses");
                            header("Location: view_sliders.php"); 
                        }
                        }
                        ?>
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#reviews">Perditesimi i Sliderit</a></li>
                                
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
                                                                <input type="text" class="form-control" name="h5" value="<?php echo $slider->getH5();?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="p" value="<?php echo $slider->getP();?>">
                                                            </div>
                                                            <div class="form-group">
                                                            <label class="small mb-1" for="email">Profile Photo :</label>
                                                            <img class="photoimg" src="uploads/<?php if(!empty($slider->getPhoto()))
                                                            { echo $slider->getPhoto();} ?>" />
                                                            </div>
                                                            <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text" id="image">Profile Photo:</span>
                                                            </div>
                                                            <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                                            <label class="custom-file-label" for="image">Choose Profile Photo</label>
                                                            </div>
                                                            </div>  
                                                            <input class="btn btn-primary waves-effect waves-light" id="login" value="Perditeso" type="submit" name="edit_slider"/>
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
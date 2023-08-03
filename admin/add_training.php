<?php
use Admin\Lib\Training;
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
                        if (isset($_POST['add_training']) && isset($_FILES['image'])) {
                        $training=new Training();
                        $training->setTitle($_POST['title']);
                        $training->setParagraph($_POST['paragraph']);
                        $training->setReview($_POST['review']);
                        $training->setPrice($_POST['price']);
                        $training->setPhotoImage($_FILES['image']);
                        $training->setDataefillimit($_POST['datafillimit']);
                        if($training->create()){
                            $session->message("Trajnimi u shtua me sukses");
                                header("Location: view_trainings.php");
                        }
                        }
                        ?>
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Shto Trajnim</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="#" method="post" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" name="title" type="text" class="form-control" placeholder="Shkruaj Titullin">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="paragraph" type="text" class="form-control" placeholder="Shkruaj Paragrafin">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" name="review" type="text" class="form-control" placeholder="Shkruaj numrin e vendeve te lira">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" name="price" type="text" class="form-control" placeholder="Shkruaj Qmimin">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="datafillimit" type="text" class="form-control" placeholder="Shkruaj Daten e Fillimit">
                                                                </div>
                                                                <div class="input-group">
                                                                <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text" id="image">Ngarkoni nje foto te trajnimit</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label" for="image"></label>
                                                                </div>
                                                                </div>
                                                                <input class="btn btn-primary waves-effect waves-light" id="login" value="Shto" type="submit" name="add_training"/>
                                                            </div>
                                                        </div>
                                                    </form>
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

    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    
</body>

</html>
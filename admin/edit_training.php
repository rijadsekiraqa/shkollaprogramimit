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
                        $training= new Training();
                        if(isset($_GET['id'])){
                        $training=$training->find_id($_GET['id']);
                        }
                        if(isset($_POST['edit_training'])){
                        $training->setTitle($_POST['title']);
                        $training->setParagraph($_POST['paragraph']);
                        $training->setReview($_POST['review']);
                        $training->setPrice($_POST['price']);
                        $training->setDataefillimit($_POST['datafillimit']);
                        if(!empty($_FILES['image']['name'])){
                            $training->setPhotoImage($_FILES['image']);
                        }
                        if($training->update()){
                            $session->message("Trajnimi u perditesua me sukses");
                            header("Location: view_trainings.php"); 
                        }
                        }
                        ?>
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#reviews">Perditeso Trajnimin</a></li>
                                
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
                                                                <label class="mb-1" for="firstname">Titulli</label>
                                                                <input type="text" class="form-control" name="title" value="<?php echo $training->getTitle();?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1" for="paragraph">Paragrafi</label>
                                                                <input type="text" class="form-control" name="paragraph" value="<?php echo $training->getParagraph();?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1" for="review">Vendet e Lira</label>
                                                                <input type="number" class="form-control" name="review" value="<?php echo $training->getReview();?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1" for="Price">Qmimi</label>
                                                                <input type="number" class="form-control" name="price" value="<?php echo $training->getPrice();?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1" for="date">Data Fillimit</label>
                                                                <input type="text" class="form-control" name="datafillimit" value="<?php echo $training->getDataefillimit();?>">
                                                            </div>
                                                            <div class="form-group">
                                                            <label class="mb-1" for="photo">Profile Photo</label>
                                                            <img class="photoimg" src="uploads/<?php if(!empty($training->getPhoto()))
                                                            { echo $training->getPhoto();} ?>" />
                                                            </div>
                                                            <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text" id="image">Profile Photo:</span>
                                                            </div>
                                                            <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                                            <label class="custom-file-label" for="image"></label>
                                                            </div>
                                                            </div>  
                                                            <input class="btn btn-primary waves-effect waves-light" id="login" value="Perditeso Trajnimin" type="submit" name="edit_training"/>
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
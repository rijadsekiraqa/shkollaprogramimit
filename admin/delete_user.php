<?php
use Admin\Lib\User;
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
                        <div class="row justify-content-center">
                        <?php
                        $user= new User();
                        if(isset($_GET['id'])){
                        $user=$user->find_id($_GET['id']);
                        }
                        if(isset($_POST['delete_user'])){
                            if($user->delete()){
                                $session->message("Perdoruesi u fshi me sukses");
                                header("Location: view_users.php");
                            }
                        }
                        ?>
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#reviews">Fshirja e Perdoruesit</a></li>
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
                                                                <label class="mb-1" for="firstname">Emri</label>
                                                                    <input type="text" class="form-control" name="firstname" value="<?php echo $user->getFirstname();?>" name="firstname" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                <label class="mb-1" for="lastname">Mbiemri</label>
                                                                    <input type="text" class="form-control" name="lastname"  value="<?php echo $user->getLastname();?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                <label class="mb-1" for="phone">Telefoni</label>
                                                                    <input type="text" type="number" name="phone" class="form-control" value="<?php echo $user->getPhone();?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                <label class="mb-1" for="email">Email :</label>
                                                                    <input type="text" class="form-control" name="email" value="<?php echo $user->getEmail();?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                <label class="mb-1" for="password">Password</label>
                                                                    <input name="password" type="password" name="password" class="form-control" value="<?php echo $user->getPassword();?>" readonly>
                                                                </div>
                                                                <input class="btn btn-primary waves-effect waves-light" id="login" value="Fshije" type="submit" name="delete_user"/>
                                                                
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
    <!-- <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script> -->
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
    
</body>

</html>

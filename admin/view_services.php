<?php use Admin\Lib\Services; ?>


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
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Lista e Sherbimeve</h4>
                            <h5 class="bg-primary">
                            <?php
                              if(!empty($session->message)){
                                echo $session->message;
                              }
                            ?>
                            </h5>
                            <div class="add-product">
                                <a href="add_services.php">Shto Sherbim</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>Titulli</th>
                                        <th>Paragrafi</th>
                                        <th>Vepro</th>
                                       
                                    </tr>
                                    <?php
                            
                                $services= new Services();
                                foreach ($services->find_all() as $sherbimet) {
                                echo "<tr>";
                                echo "<td>" . $sherbimet->getTitle() ."</td>";
                                echo "<td>" . $sherbimet->getParagraph() ."</td>";
                                echo "<td>
                                 <a href='edit_services.php?id=" . $sherbimet->getId() . "'>
                                <button data-toggle='tooltip' title='Edit' class='pd-setting-ed'>
                                <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                                 </button>
                                </a>
                                <a href='delete_services.php?id=" . $sherbimet->getId() . "'>
                                    <button data-toggle='tooltip' title='Trash' class='pd-setting-ed'>
                                        <i class='fa fa-trash-o' aria-hidden='true'></i>
                                    </button>
                                </a>
                            </td>";
                            echo "</tr>";
                            }
                            ?>
                                    
                                   
                                        
                                   
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <?php include "inc/footer.php";?> -->
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
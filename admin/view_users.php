<?php use Admin\Lib\User; ?>
<?php include "inc/header.php";?>
<?php include "inc/sidebar.php";?>

<body>
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
                            <h4>Lista e Perdoruesve</h4>
                            <h5 class="bg-primary">
                            <?php
                              if(!empty($session->message)){
                                echo $session->message;
                              }
                            ?>
                          </h5>
                            <div class="add-product">
                                <a href="add_user.php">Shto Perdorues</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>Emri</th>
                                        <th>Mbiemri</th>
                                        <th>Telefoni</th>
                                        <th>Email</th>
                                        <th>Vepro</th>
                                        
                                    </tr>
                                    <?php
                            
                            $user = new User();
                                foreach ($user->find_all() as $anetar) {
                                echo "<tr>";
                                echo "<td>" . $anetar->getFirstname() ."</td>";
                                echo "<td>" . $anetar->getLastname() ."</td>";
                                echo "<td>" . $anetar->getPhone()."</td>";
                                echo "<td>" . $anetar->getEmail() ."</td>";
                                echo "<td>
                                 <a href='edit_user.php?id=" . $anetar->getId() . "'>
                                <button data-toggle='tooltip' title='Edit' class='pd-setting-ed'>
                                <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                                 </button>
                                </a>
                                <a href='delete_user.php?id=" . $anetar->getId() . "'>
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
      


    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
   
</body>

</html>
  <?php include "inc/header.php"; ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="max-height: 800px;">
      <div class="carousel-indicators">
      <?php
					$slider = new \Admin\Lib\Slider();
					$count = 0;
					foreach ($slider->find_all() as $s) {
						if ($count == 0) {
							echo "<button type='button' data-bs-target='#carouselExampleCaptions' class='active' data-bs-slide-to='" . $count . "'></button>";
						} else {
							echo "<button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='" . $count . "'></button>";
							}
						$count++;
					}
					?>
      </div>
      <div class="carousel-inner">
      <?php
					$count = 0;
					foreach ($slider->find_all() as $s) {
						if ($count == 0) {
							echo '<div class="carousel-item active">';
						} else {
							echo '<div class="carousel-item">';
						}
						echo "<img class='d-block w-100 img-fluid' style='width: 1400px; height: 570px;' src='admin/uploads/" . $s->getPhoto() . "' alt='post image' />";
						echo '<div class="carousel-caption d-md-block">';
						echo '<h5>' . $s->getH5() . '</h5>';
						echo '<p>' . $s->getP() . '</p>';
						echo '</div>';
						echo '</div>';
						$count++;
					}
					?>
        
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <section class="ftco-services ftco-no-pb" id="shkolla">
      <div class="container-wrap">
        <div class="row g-0">
        <?php
  $description = new \Admin\Lib\Description();
  $counter = 0;
  $i = 0;
  foreach($description->find_all() as $d){
    if($i < 4){
    $bg_color_class = ($counter % 2 == 0) ? 'bg-primary' : 'bg-light';
    $text_color_class = ($counter % 2 == 0) ? 'text-white' : 'text-black';
    echo "<div class='col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate $bg_color_class'>
            <div class='media block-6 d-block text-center'>
              <div class='icon d-flex justify-content-center align-items-center'>
                <i class='icofont-ebook'></i>
              </div>
              <div class='media-body p-2 mt-3'>
                <h3 class='text-uppercase $text_color_class'>{$d->getTitle()}</h3>
                <p class='$text_color_class'>
                {$d->getParagraph()}
                </p>
              </div>
            </div>
          </div>";
    $counter++;
    $i++;
        } else {
          break;
        }
                }
?>
      
  
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb" id="sherbimet">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img">
              <img src="images/about.jpg" class="img-fluid">
            </div>
          </div>
          <div class="col-md-7 wrap-about py-5 pe-md-4 ftco-animate">
            <div class="row mt-5">
            <?php
                $services= new \Admin\Lib\Services();
                $i = 0;
                foreach($services->find_all() as $s){
                if($i < 6){
                  echo "<div class='col-lg-6'>
                <div class='services-2 d-flex'>
                  <div class='icon mt-2 d-flex justify-content-center align-items-center bg-primary'>
                    <i class='icofont-safety'></i>
                  </div>
                  <div class='text ps-3'>
                    <h3>{$s->getTitle()}</h3>
                    <p>{$s->getParagraph()}</p>
                  </div>
                </div>
              </div>";
                $i++;
        } else {
          break;
        }
                }
                ?>
          
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-sections pb-5" id="trajnimet">
    <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="heading-section pt-5 mb-5 pb-md-4">Trajnimet Tona</h2>
      </div>
      <div class="col-md-12">
        <div class="featured-carousel owl-carousel">
          <?php
            $training = new \Admin\Lib\Training();
            foreach ($training->find_all() as $t) {
              echo "<div class='item'>
                      <div class='blog-entry'>
                        <img class='img-fluid' style='width:352px; height:275px;' src='admin/uploads/" . $t->getPhoto() . "' alt='post image' />
                        <div class='meta-date text-center p-2 bg-primary'>
                          <span class='day'>{$t->getDataefillimit()}</span>
                        </div>
                        <div class='info-bx text-center'>
                          <h3 class='heading text-center pt-3'><a href='#'>{$t->getTitle()}</a></h3>
                          <p class='text-center text-muted'>{$t->getParagraph()}</p>
                        </div>
                        <div class='cours-more-info'>
                          <div class='review'>
                            <p class='text-start'>Vende te lira: </p>
                            <span>15</span>
                          </div>
                          <div class='price'>
                            <h5>{$t->getPrice()}</h5>
                          </div>
                        </div>
                      </div>
                    </div>";
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
    <section id="statistikat" class="counts bg-primary">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2 class="heading-section mb-5 pb-md-4 text-white">Statistikat</h2>
        </div>
        
        <div class="row">
          <?php
               $statistic= new \Admin\Lib\Statistic();
                $i = 0;
                foreach($statistic->find_all() as $s){
                  if ($i < 4) {
              echo "<div class='col-lg-3 col-md-6'>
            <div class='count-box text-center bg-white'>
              <i class='icofont-users-alt-5 bg-primary'></i>
              <span class='text-primary' data-toggle='counter-up'>{$s->getNumber()}</span>
              <p>{$s->getParagraph()}</p>
            </div>
          </div>";
          $i++;
        } else {
          break;
        }
      }
                ?>
         
        </div> 
      </div>
    </section>

    <?php include "inc/footer.php"; ?>
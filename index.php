  <?php echo file_get_contents("header.html"); ?>

  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Portraits</h2>
                  <a href="portraits.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="images/portraits/Callie/Callie1.jpg" alt="Image"> <!--COVER PHOTO-->
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Miscellaneous</h2>
                  <a href="miscellaneous.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="images/Miscellaneous/8QM-MSJx.jpg" alt="Image">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Sports</h2>
                  <a href="sports.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="images/Sports/catch.jpg" alt="Image">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Architecture</h2>
                  <a href="architecture.php" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="images/Architecture/_MG_1570.JPG" alt="Image">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Nature</h2>
                  <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="images/Nature/bGtGHnE5.jpg" alt="Image">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Videos</h2>
                  <a href="single.html" class="btn btn-outline-white py-2 px-4">Go to videos</a>
                </div>
                <img src="images/portraits/The-Boys/hz-IQerJ.jpg" alt="Image">
              </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
  </div>

  <div class="row mb-5 site-section">
    <div class="col-12">
      <h2 class="site-section-heading text-center text-white">Recent Content</h2>
    </div>
  </div>

  <!-- BEGIN GALLERY -->
  <div class="container-fluid">
    <div class="row" id="lightgallery">
        <?php
        $file_dir = '/images/Most_Recent_Work';
        $directory = getcwd().$file_dir; // FOLDER OF RECENT WORK
        if (!is_dir($directory)) {
          exit('Invalid diretory path');
        }

        foreach (scandir($directory) as $file) {
            if ($file !== '.' && $file !== '..') {
                $image = $file_dir.'/'.$file;
                echo "<div class=\"col-sm-6 col-md-4 col-lg-3 col-xl-2 item\" data-aos=\"fade\" data-src=$image data-sub-html=\"\">";
                echo "<a href=\"#\"><img src=$image alt=\"\" class=\"img-fluid\"></a>";
                echo "</div>";
            }
        }
        ?>
    </div>
  </div>
  <!-- END GALLERY -->

  <?php echo file_get_contents("footer.html"); ?>

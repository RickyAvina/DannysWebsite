<?php echo file_get_contents("header.html"); ?>

  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">

      <div class="row justify-content-center">

        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Shoot 2</h2>
            </div>
          </div>
        </div>

      </div>
      <div class="row" id="lightgallery">
        <?php
        $image_loc = "/images/portraits/Alesna-Mineta-Collab";

        $directory = getcwd().$image_loc;
        if (!is_dir($directory)) {
          exit('Invalid diretory path');
        }

        foreach (scandir($directory) as $file) {
            if ($file !== '.' && $file !== '..') {
                $image = $image_loc."/".$file;
                echo "<div class=\"col-sm-6 col-md-4 col-lg-3 col-xl-2 item\" data-aos=\"fade\" data-src=$image data-sub-html=\"\">";
                echo "<a href=\"#\"><img src=$image alt=\"\" class=\"img-fluid\"></a>";
                echo "</div>";
            }
        }
        ?>

      </div>
    </div>
  </div>

  <?php echo file_get_contents("footer.html"); ?>

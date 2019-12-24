<?php echo file_get_contents("header.html"); ?>

  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">

      <div class="row justify-content-center">

        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Portrait Gallery</h2>
            </div>
          </div>
        </div>

      </div>
      <div class="row" id="lightgallery">
        <?php
        $image_loc = "/images/portraits";

        $directory = getcwd().$image_loc;
        if (!is_dir($directory)) {
          exit('Invalid diretory path');
        }

        $images = array();

        function readDirs($path){
          global $images;
          $dirHandle = opendir($path);

          while($item = readdir($dirHandle)) {
            $newPath = $path."/".$item;
            if(is_dir($newPath) && $item != '.' && $item != '..') {
                readDirs($newPath);
            }
            else {
              $info = pathinfo($item);
              if ($info["extension"] == "jpg") {
                $image = substr($newPath, strlen(getcwd()));
                $images[] = $image;
              }
            }
          }
        }

        $path = $image_loc;
        readDirs($directory);

        // randomize
        shuffle($images);

        foreach($images as $im) {
          echo "<div class=\"col-sm-6 col-md-4 col-lg-3 col-xl-2 item\" data-aos=\"fade\" data-src=$im data-sub-html=\"\">";
          echo "<a href=\"#\"><img src=$im alt=\"\" class=\"img-fluid\"></a>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </div>

  <?php echo file_get_contents("footer.html"); ?>

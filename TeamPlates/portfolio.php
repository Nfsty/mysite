<?php 
	/*
	Template Name: Примеры работ
	*/ 
	get_header();
?>
  <!-- Наши работы -->
  <div class="portfolio" style="background-image: url(<?= CFS()->get('portfolio_bg');  ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="gallery">

            <?php
              $loop = CFS()->get('portfolio'); 
              foreach ($loop as $row) {
                ?>
              <a href="<?= $row['portfolio_img'];  ?>" data-caption="<?= $row['portfolio_description'];  ?>">
                <img src="<?= $row['portfolio_img'];  ?>" alt="<?= $row['portfolio_title'];  ?>">
              </a>
              <?php
              }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(); ?>

  <!-- <script src="js/baguetteBox.min.js"></script> -->

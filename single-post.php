<?php 
	get_header();
?>
  <!-- Страница одной двери -->
  <div class="door-template">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-12">
          <div class="door-gallery">

          <?php
              $loop = CFS()->get('gallery'); 
              foreach ($loop as $row) {
                ?>
              <a href="<?= $row['gallery_photo'];  ?>" data-caption="<?= $row['gallery_description'];  ?>">
                <img src="<?= $row['gallery_photo'];  ?>" alt="<?= $row['gallery_title'];  ?>">
              </a>
              <?php
              }
            ?>

  
          </div>
        </div>
        <div class="col-6 col-lg-12 door-description">
          <h2><?php the_title(); ?></h2>
          <!-- <h2>Название <span>Под заказ</span></h2> -->
          <?php the_content(); ?>
          <h3><?= CFS()->get('doors_price'); ?> &#8381;</h3>
          <?= do_shortcode(CFS()->get('door_form_shortcode')); ?>

          <a class="btn" href="/<?= CFS()->get('info_slug'); ?>"><?= CFS()->get('info_title'); ?></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
  <?php get_footer(); ?>
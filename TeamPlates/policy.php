<?php 
	/*
	Template Name: Политика конфиденциальности
	*/ 
	get_header();
?>
  <!-- Текст политики конфиденциальности -->
  <div class="policy" style="background-image: url <?php echo get_template_directory_uri(); ?> (img/background.jpg)">
    <div class="container">
      <div class="row">
        <h2> <?php the_title(); ?> </h2>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
  
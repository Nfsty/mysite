<?php
/*
   Template Name: Полезная информация
   */
get_header();
?>
<!-- Полезная информация -->
<div class="information_page">
	<div class="container">
		<!-- Вентили запорные -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(7, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">

			<?php
			$posts = get_posts([
				'numberposts' => -1,
				'category' => 7,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filter' => true
			]);

			foreach ($posts as $post) {
				setup_postdata($post);
				?>

				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail(''); ?>
					<h3> <?php the_title(); ?></h3>
				</div>

				<?php
			}
			wp_reset_postdata();
			?>

		</div>
		<!-- Приборы учета -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(9, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">

			<?php
			$posts = get_posts([
				'numberposts' => -1,
				'category' => 9,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filter' => true
			]);

			foreach ($posts as $post) {
				setup_postdata($post);
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail(''); ?>
					<h3> <?php the_title(); ?></h3>
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>
		<!-- Затворная арматура -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category(8, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php
			$posts = get_posts([
				'numberposts' => -1,
				'category' => 8,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppress_filter' => true
			]);

			foreach ($posts as $post) {
				setup_postdata($post);
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail(''); ?>
					<h3> <?php the_title(); ?></h3>
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>

	</div>
	<?php get_footer(); ?>
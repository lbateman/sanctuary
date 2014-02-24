<?php
/*
Template Name: Home
*/
?>

<?php
/**
 * @package sanctuary
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- Custom Fields for the Homepage: Group 1 -->
		<section class="group1">
			<h3><?php the_field('description_1'); ?></h3>
			<h4><?php the_field('modifier_1'); ?></h4>
			<img src="<?php the_field('background_image_1'); ?>" alt="" />
		</section> <!-- End of group1 -->
			
		<!-- Custom Fields for the Homepage: Group 2 -->
		<section class="group2">
			<h3><?php the_field('description_2'); ?></h3>
			<h4><?php the_field('modifier_2'); ?></h4>
			<img src="<?php the_field('background_image_2'); ?>" alt="" />
		</section> <!-- End of group2 -->
		
		<!-- Custom Fields for the Homepage: Group 3 -->
		<section class="group3">
			<h3><?php the_field('description_3'); ?></h3>
			<h4><?php the_field('modifier_3'); ?></h4>
			<img src="<?php the_field('background_image_3'); ?>" alt="" />
		</section> <!-- End of group3 -->
		
		<!-- Custom Fields for the Homepage: Group 4 -->
		<section class="group4">
			<h3><?php the_field('description_4'); ?></h3>
			<h4><?php the_field('modifier_4'); ?></h4>
			<img src="<?php the_field('background_image_4'); ?>" alt="" />
		</section> <!-- End of group4 -->
			
		<!-- Custom Fields for the Homepage: Group 5 -->
		<section class="group5">
			<h3><?php the_field('description_5'); ?></h3>
			<h4><?php the_field('modifier_5'); ?></h4>
			<img src="<?php the_field('background_image_5'); ?>" alt="" />
		</section> <!-- End of group5 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>

<?php
/**
 * The Template for displaying all cabin posts.
 *
 * @package sanctuary
 */

get_header(); ?>

	<div id="primary" class="content-area clear">
		<main id="main" class="site-main clear" role="main">

			<!-- Cabin Images (left column) -->
			<div class="cabin-images">
				<!-- Hero image markup -->
				<div class="cabin-hero">
					<img src="<?php the_field('hero_image'); ?>" alt="" />
					<?php $hero = wp_get_attachment_image_src(get_field('hero_image'), 'full'); ?>
					<img src="<?php echo $hero['url']; ?>" alt="<?php echo $hero['alt']; ?>" />
				</div> <!-- End of hero image -->
				
				<!-- Cabin gallery markup -->
				<div class="cabin-gallery">
					<?php $images = get_field('thumbnail_gallery');
						if ($images): ?>
							<div class="cabin-images">
								<ul class="cabin-thumbnails">
									<?php foreach ($images as $image): ?>
										<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></li>
									<?php endforeach; ?>
								</ul>
							</div> <!-- End of gallery -->
						<?php endif; ?>
				</div> <!-- End of cabin gallery -->
			</div> <!-- End of cabin images -->
			
			<!-- Cabin description markup (right column) -->
			<div class="cabin-description">
				<h3><?php the_field('cabin_name'); ?></h3>
				<p><?php the_field('cabin_description'); ?></p>
				<h4><?php the_field('art_making_features_header'); ?></h4>
					<?php if (have_rows('art_making_features')): ?>
						<div class="art-features">
							<?php while (have_rows('art_making_features')): the_row(); ?>
								<div class="art-feature">
									<p><?php the_sub_field('art_making_feature'); ?></p>
								</div> <!-- End of art-feature -->
							<?php endwhile; ?>
						</div> <!-- End of art-featureS -->
					<?php endif; ?>
				<h4><?php the_field('standard_cabin_features_header'); ?></h4>
					<?php if (have_rows('standard_cabin_features')): ?>
						<div class="standard-features">
							<?php while (have_rows('standard_cabin_features')): the_row(); ?>
								<div class="standard-feature">
									<p><?php the_sub_field('standard_feature'); ?></p>
								</div> <!-- End of standard-feature -->
							<?php endwhile; ?>
						</div> <!-- End of standard-featureS -->
					<?php endif; ?>
				<h5><?php the_field('price_header'); ?> <a href="<?php the_field('price_header_link'); ?>">(application process):</a></h5>
					<?php if (have_rows('price_information')): ?>
						<?php while (have_rows('price_information')): the_row(); ?>
							<p><?php the_sub_field('price_line'); ?></p>
						<?php endwhile; ?>
					<?php endif; ?>
				<button type="button"><a href="http://sanctuary.leahbateman.com/"><?php the_field('call_to_action'); ?></a></button>
			</div> <!-- End of cabin description -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
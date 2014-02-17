<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sanctuary
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<!-- Custom Fields for the Homepage -->
	<p><?php the_field('description'); ?></p>
	<p><?php the_field('modifier'); ?></p>
	<img src="<?php the_field('background_image'); ?>" alt="" />
	
		<!-- Custom Fields for the Cabin Page -->
	<img src="<?php the_field('hero_image'); ?>" alt="" />
	<?php $image = wp_get_attachment_image_src(get_field('thumbnail_image'), 'full'); ?>
	<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('thumbnail_image')) ?>" />
	<p><?php the_field('cabin_name'); ?></p>
	<p><?php the_field('cabin_description'); ?></p>
	<p><?php the_field('art_making_features'); ?></p>
	<p><?php the_field('standard_cabin_features'); ?></p>
	<p><?php the_field('price_information'); ?></p>
	<p><?php the_field('call_to_action'); ?></p>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sanctuary' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<!--	<?php edit_post_link( __( 'Edit', 'sanctuary' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?> -->
</article><!-- #post-## -->

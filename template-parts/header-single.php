<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Personal_Portfolio
 */

?>
		<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' ); ?>
		<header id="masthead" class="site-header" role="banner" style="background-image: url('<?php echo $thumbnail['0']; ?>')">
			<div class="site-branding">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-4">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
					</div>
				</div>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->
	<div id="content" class="site-content">

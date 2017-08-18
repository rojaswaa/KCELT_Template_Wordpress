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

?><!DOCTYPE html>
		<header id="masthead" class="site-header box-shadow" role="banner" style="background-image: url('<?php echo z_taxonomy_image_url($cat->term_id); ?>')">
			<div class="site-branding">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-4 text-right">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
							<a href="<?php echo get_category_link($cat->term_id); ?>"><h2><?php single_cat_title(); ?></h2></a>
						</div>
					</div>
				</div>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->

	<div id="content" class="site-content">

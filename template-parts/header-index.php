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
		<header id="masthead" class="site-header" role="banner" style="background-image: url('<?php header_image(); ?>')">
			<div class="site-branding">
				<!--<img src="" class="img-responsive img-header" alt="" />-->
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-4">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
							<h2 class="site-title"><?php bloginfo( 'description' ); ?></h2>
						</div>
					</div>
				</div>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->
	<div id="content" class="site-content">

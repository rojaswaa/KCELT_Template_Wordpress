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
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'personal-portfolio' ); ?></a>
	
	<nav class="navbar navbar-default navbar-fixed-top navbar-toggleable-md" role="navigation">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo home_url(); ?>">
			  <img src="<?php echo get_template_directory_uri(); ?>/img/k_name_plate.jpg" class="d-inline-block align-top"/>
				</a>
		</div>

			<?php
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker())
				);
			?>
			
		</div>
	</nav><!-- #site-navigation -->
	<?php 
	if ( is_front_page() && is_home() ) {
		get_template_part( 'template-parts/header-index', get_post_format() );
		} 
	
	elseif ( is_single()){
		get_template_part( 'template-parts/header-single', get_post_format() );					
		} 
	
	elseif ( is_category()){
		get_template_part( 'template-parts/header-category', get_post_format() );	
		} 
	
	else {
		get_template_part( 'template-parts/header-index', get_post_format() );
	}
	?>

	<div id="content" class="site-content">

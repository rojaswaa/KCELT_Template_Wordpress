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

	<a class="skip-link screen-reader-text sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'personal-portfolio' ); ?></a>
	
	<nav class="navbar navbar-default navbar-fixed-top navbar-toggleable-md" role="navigation">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
	  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-1">
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
					'container_class'   => 'collapse navbar-collapse navbar-left navbar-collapse-1',
					'container_id'      => 'main-navbar',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker())
				);
			?>
			<div class="padding-form-left navbar-text navbar-right collapse navbar-collapse navbar-collapse-1 text-center">
				<a href="//kcelt.org/wp-login.php"><span class="glyphicon glyphicon-lock"></span> Login</a>
			</div>
			
			<form role="search" method="get" id="searchform" class="navbar-form navbar-right collapse navbar-collapse navbar-collapse-1 text-center" action="//localhost:8888/wordpress/">
				<div class="form-group hidden-sm">
					<input type="text" value="" name="s" id="s" class="form-control" placeholder="Search" />
				</div>
				<input type="submit" id="searchsubmit" value="Search" class="btn btn-primary hidden-sm"/>
			</form>
		</div>
	</nav><!-- #site-navigation -->
	
	<?php 
	if ( is_front_page() && is_home() ) {
			get_template_part( 'template-parts/header-index', get_post_format() );
		}
	
		elseif ( is_category()){
			get_template_part( 'template-parts/header-category', get_post_format() );	
		} 
	
		elseif ( in_category(array (257,258,261,262,265,266,269,273,276,277,280,281,284,285,288,289,293,294,297,298,301,302,305,306))){
		}
		
		elseif ( is_single()){
			get_template_part( 'template-parts/header-single', get_post_format() );					
		} 
		
		else {
			get_template_part( 'template-parts/header-index', get_post_format() );
		}
	?>

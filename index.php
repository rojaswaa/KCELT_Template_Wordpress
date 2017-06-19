<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Personal_Portfolio
 */

get_header(); ?>
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'template-parts/featured'); ?>			
			<div id="content-container" class="container">
				<?php if ( is_front_page() && is_home() ) {
						echo('<h2>Whats New?</h2>');
						echo('<div class="row">');
					}
				
				else {}?>
				
				<?php if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();
	
					if ( is_front_page() && is_home() ) {
							get_template_part( 'template-parts/content', get_post_format() );	
					} 
					elseif ( is_single()){
							get_template_part( 'template-parts/content-post', get_post_format() );
		

							} else {

							get_template_part( 'template-parts/content', 'none' );

							}
							

						endwhile;
						else :
						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
			</div>
			<?php get_template_part( 'template-parts/competencies'); ?>
			

		</main><!-- #main -->


<?php
get_footer();

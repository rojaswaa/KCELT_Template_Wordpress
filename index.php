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
			<div id="loop-wrapper">
				<?php get_template_part( 'template-parts/index-loop', '' ); ?>
			</div><!-- #loop -->
			<div id="competencies-wrapper">
				<?php get_template_part( 'template-parts/competencies'); ?>
			</div><!-- #compentecies -->
			<div class="clearfix"></div><!-- #clearfix -->
			<?php get_sidebar();?>
		</main><!-- #main -->
<?php
get_footer();

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Personal_Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-post', get_post_format() );
				// If comments are open or we have at least one comment, load up the comment template.
			
			if ( in_category(array (257,258,261,262,265,266,269,273,276,277,280,281,284,285,288,289,293,294,297,298,301,302,305,306))){
				
			}
			else {
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			}
			

			endwhile; // End of the loop.
			?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

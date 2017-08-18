<?php
/*
 * Template Name: External Resource
 * Template Post Type: post, page, product
 */
 
 get_header();  ?>

<?php
	while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/ext-resource-display', '' );
	// If comments are open or we have at least one comment, load up the comment template.

	endwhile; // End of the loop.
?>			
<?php
get_footer();

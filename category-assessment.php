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
	<?php 
	$teaching = new WP_Query ( //Requesting Teaching Guides of given category
		array (
			'cat' => 258,
			'order' => ASC,
				)
			);
			
	$external = new WP_Query ( //Requesting External Resources of given category
		array (
			'cat' => 259,
			'order' => ASC,
				)
			);
			
	$stories = new WP_Query ( //Requesting Stories of given category
		array (
			'cat' => 260,
			'order' => ASC,
				)
			);?>
	<!--Loop#1 -  for Teaching Guides-->
	<section class="container" id="teaching-guides-posts">
		<p><?php echo category_description($cat->term_id); ?></p>
		<h3>Teaching Guides</h3>
		
		<?php if ($teaching->have_posts()) : while($teaching->have_posts()) : $teaching->the_post();?>
		<article class="row" id="teaching-guide-posts">	
			<?php get_template_part( 'template-parts/teaching-guides', get_post_format() );?>	
		</article>
		<?php endwhile; else:?>
				<p> working for you</p>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
	</section>	
	
	<!--Loop#2 -  for Teaching Guides-->
	<section class="container" id="external">
		<h3>External Resources</h3>
		
		<?php if ($external->have_posts()) : while($external->have_posts()) : $external->the_post();?>
		<article class="row" id="teaching-guide-posts">	
			<?php get_template_part( 'template-parts/external-resources', get_post_format() );?>	
		</article>
		<?php endwhile; else:?>
				<p> working for you</p>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
	</section>
		
	<!--Loop#2 -  For Stories-->
	<section class="container" id="stories">
		<h3>Stories</h3>
		
		<?php if ($stories->have_posts()) : while($stories->have_posts()) : $stories->the_post();?>
		<article class="row" id="stories-posts">	
			<?php get_template_part( 'template-parts/stories', get_post_format() );?>	
		</article>
		<?php endwhile; else:?>
				<p> working for you</p>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
	</section>

		</main><!-- #main -->
<?php
get_footer();
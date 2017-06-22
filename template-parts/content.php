<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Personal_Portfolio
 */

?>

<section id="posts" class="container">
	<h3> What's New</h3>
	<div class="row">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' ); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-4'); ?>>
			<div class="card-wrapper z-depth-1">
				<header class="entry-header">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail('main-page-thumbnail' , array('class' => 'img-responsive')); ?>
					</a>
				</header><!-- .entry-header -->
				<div class="entry-content text-center" data-mh="feature-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a>
				</div><!-- .entry-content -->
				<div class="clear"></div><!-- Clear DIV -->	
				<div class="text-center entry-btn">
					<a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">Read More</a>
				</div><!-- Buttom wrapper -->	
			</div><!-- Card Wrapper -->	
		</article><!-- #post-## -->	
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Personal_Portfolio
 */

?>
<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' ); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-6 col-md-4'); ?>>
			<div class="card-wrapper z-depth-1">
				<header class="entry-header">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail('main-page-thumbnail' , array('class' => 'img-responsive')); ?>
					</a>
				</header><!-- .entry-header -->

				<div class="entry-content text-center" data-mh="feature-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a></br>
					 <?php the_author(); ?> 
				</div><!-- .entry-content -->
				<div class="clear"></div>
				<div class="text-center entry-btn">
					<a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">Read More</a>
				</div>
			</div>
		</article><!-- #post-## -->

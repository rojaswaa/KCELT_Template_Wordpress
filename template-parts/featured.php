<?php 
$args = array(
	'category_name'   			=> 'featured',
	'posts_per_page'         	=> '5',
	'orderby'                	=> 'date'
); ?>

<!--The Query-->
<?php 
// the query
$featured = new WP_Query( $args ); ?>
<div class="container">
	<h2>Featured</h2>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
 	<div id="post-<?php the_ID(); ?>" class="carousel-inner" role="listbox">
   		<?php if ( $featured->have_posts() ) : ?>
		<!-- the loop -->
		<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
		<!-- pagination here -->
    	<div class="item">
      		<?php the_post_thumbnail('featured', ['class' => 'img-responsive']);?>
			<div class="carousel-caption">
				<h2><?php the_title(); ?></h2>
				<a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">Read More</a>
			</div>
    	</div>
    	<?php endwhile; ?>
		<!-- end of the loop -->
		<!-- pagination here -->
		<?php wp_reset_postdata(); ?>
 	</div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
</div>
</div>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
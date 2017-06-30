
	<div class="media-left hidden-xs">
		<?php the_post_thumbnail(array('class' => 'img-responsive media media-object thumbnail')); ?>
	</div>
	<div class="media-body">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4 class="media-heading"><?php the_title(); ?></h4></a>
		<p><?php the_excerpt();?></p>
		<div class="text-center entry-btn">
			<a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">Read More</a>
		</div><!-- Buttom wrapper -->
	</div>
	

	


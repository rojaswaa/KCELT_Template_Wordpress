<div class="media-left hidden-xs">
		<?php the_post_thumbnail(array('class' => 'img-responsive media media-object thumbnail'));?>
</div>
<div class="media-body">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" target="_blank">
		<h4 class="media-heading"><?php the_title(); ?></h4>
	</a>
	<p><?php the_excerpt();?></p>
</div>
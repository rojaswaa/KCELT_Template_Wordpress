<?php 

$args_cat= array(
		'hide_empty' => false, //Show Competencies even thought they may not have posts associate
		'parent' => 0, // Only shows Parents Categories (Competencies)
		'orderby' => 'ID', //Organize display of competencies by ID 
		'exclude' => array(1, 257) //Excluding Folowwing Categories: Uncategorized and Featured
	

); ?>

<section id="competencies" class="container">
	<h2 class="text-center">Faculty Competencies</h2>
	<div class="row">
		<?php foreach (get_categories($args_cat) as $cat) : ?>
		<article class="col-xs-12 col-sm-6 col-md-4">
			<div class="card-wrapper z-depth-1">
				<div class="competency-header">
					<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" class="img-responsive" />	
				</div>
				<div class="competency-title text-center">
					<a href="<?php echo get_category_link($cat->term_id); ?>"><h3><?php echo $cat->cat_name; ?></h3></a>
					<p><?php echo category_description($cat->term_id); ?></p>
				</div>
				<div class="clear"></div>
				<div class="text-center entry-btn">
					<a class="btn btn-primary" href="<?php echo get_category_link($cat->term_id); ?>" role="button">Explore</a>
				</div>
			</div>
			
		</article>
		<?php endforeach; ?>
	</div>
</section>




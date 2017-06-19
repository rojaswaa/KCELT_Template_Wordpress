<?php 

$args_cat= array(
		'hide_empty' => false, //Show Competencies even thought they may not have posts associate
		'orderby' => 'ID', //Organize display of competencies by ID 
		'exclude' => array(1, 256) //Excluding Folowwing Categories: Uncategorized and Featured
	

); ?>

<section id="competencies" class="container">
	<h2>Faculty Competencies</h2>
	<div class="row">
		<?php foreach (get_categories($args_cat) as $cat) : ?>
		<article class="col-xs-6 col-md-3">
			<div class="competency-header">
				<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" class="img-responsive" />	
			</div>
			<div class="competency-title">
				<a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a>
			</div>
		</article>
		<?php endforeach; ?>
	</div>
</section>




<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Personal_Portfolio
 */
?>
<?php
	if ( in_category('259')){
 		echo('<iframe class="external-resource-final" src=""></iframe>');		
	}
	
	elseif (in_category('258')){
		echo('<div class="push-top"></div>');
	}

	else{
	
	}
?>
<?php the_content(); ?>



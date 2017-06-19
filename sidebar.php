<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Personal_Portfolio
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="container">
	<div id="secondary" class="widget-area row" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div>


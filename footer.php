<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Personal_Portfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'personal-portfolio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'personal-portfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'personal-portfolio' ), 'personal-portfolio', '<a href="https://automattic.com/" rel="designer">Wilson Rojas</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	if ($('#wpadminbar')[0]){
	$('nav').addClass('nav-padding');
	$('#wpadminbar').css('position:none');
}
</script>	
</body>
</html>

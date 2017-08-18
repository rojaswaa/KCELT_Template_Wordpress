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
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-content-wrapper">
			<div class="container">
				<div id ="footer-brand" class="text-center">
					<p>Center for Excellence in Learning &amp; Teaching<br>
					Cedar Hall 2098, 6301 Kirkwood&nbsp; Blvd. SW<br>
					Cedar Rapids, Iowa 52406<br>
					Phone: 319-398-7180<br>
					Fax: 319-398-1058<br/>
					<a href="mailto:kcelt@kirkwood.edu" class="signature">kcelt@kirkwood.edu</a><br>
					<a href="http://www.kirkwood.edu/kcelt"  class="signature">www.kirkwood.edu/kcelt</a></p>
				</div>
			</div><!--div footer container-->
		
			<div class="site-info container text-center">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'personal-portfolio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'personal-portfolio' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: KCELT 2.0 by %2$s.', 'personal-portfolio' ), 'personal-portfolio', '<a href="//www.WilsonMRojas.com/" rel="designer">Wilson Rojas</a>' ); ?>
			</div><!-- .site-info -->	
		</div><!-- #footer-content-wrapper -->	
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
<script>
	if ($('#wpadminbar')[0]){
	$('nav').addClass('nav-padding');
	$('#wpadminbar').css('position:none');
}
</script>	
</body>
</html>

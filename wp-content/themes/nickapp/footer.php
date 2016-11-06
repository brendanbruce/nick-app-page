<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NickApp
 */

?>

	</div><!-- #content -->



		<footer class="container">
			<div class="row">
				<div class="col-md-12 text-right">
					<a href="http://www.nick.com/legal/nick-terms-of-use/" target="_blank">Terms</a>
					<a href="http://www.nick.com/legal/nickelodeon-privacy-policy/" target="_blank">Privacy</a>
				</div>
			</div>
		</footer>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nickapp' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'nickapp' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'nickapp' ), 'nickapp', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="row jumbotron">
				<h1>Books by Louise Schleiner</h1>
				<div class="col-xs-4" style="background-color: #444; width: 200px; height: 300px; margin-right: 40px; margin-bottom: 10px;"></div>
				<div class="col-xs-4" style="background-color: #444; width: 200px; height: 300px; margin-right: 40px; margin-bottom: 10px;"></div>
				<div class="col-xs-4" style="background-color: #444; width: 200px; height: 300px; margin-right: 40px; margin-bottom: 10px;"></div>
			</div><!-- .jumbotron -->

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
    
	<?php wp_footer(); ?>

</body>
</html>
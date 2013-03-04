<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Webproject
 * @since Webproject 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'webproject_credits' ); ?>
			<!-- <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'webproject' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'webproject' ), 'WordPress' ); ?></a> -->
			<!-- <span class="sep"> | </span> -->
			<?php printf( __( '© 2013 MPLS TATTOO MUSEUM' ), 'Webproject', '© 2013 MPLS TATTOO MUSEUM' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
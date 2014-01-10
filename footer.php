<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package messenger_pigeons
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

<footer id="colophon" class="site-footer full-width extra-padding" role="contentinfo">
	<div class="site-info container">
		<div class="gutters row">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div id="footer-1" class="widget-area col grid_4" role="complementary">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
				<div id="footer-2" class="widget-area col grid_4" role="complementary">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				<div id="footer-3" class="widget-area col grid_4" role="complementary">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			<?php endif; ?>
		</div><!-- .row -->
		<div class="row credits">
			<?php bloginfo( 'name' ); ?> &copy; <?php echo Date('Y'); ?>
			<div class="right">
				Designed by <a href="#">Messenger Pigeons</a>
			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>

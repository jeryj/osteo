<?php
/**
 * Template Name: Full Width
 *
 * When you just want a simple, full width content page.
 *
 * @package messenger_pigeons
 */

get_header(); ?>
	<div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

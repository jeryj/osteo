<?php
/**
 * Template Name: Contact
 *
 * When you just want a simple, full width content page.
 *
 * @package messenger_pigeons
 */

get_header(); ?>
    <div id="primary" class="content-area full-width">
        <main id="main" class="site-main row" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

            <?php endwhile; // end of the loop. ?>

            <?php
                // output contact form
                $contact_form = get_option('contact_form');
                echo ( !empty($contact_form) ? do_shortcode('[gravityform id='.$contact_form.' title=false ajax=true]') : null);
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

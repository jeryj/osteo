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

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php
        // check if gravity forms is active
        // do we want to show the contact form in the footer?
        $show_contact_form = get_option('show_contact_in_footer');
        // will return as '1', so use == instead of ===
        // we also want to make sure we're not on the contact page template already
        if($show_contact_form == true && !is_page_template('page-templates/contact.php')) :
            // need this for gravity forms active check
            include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
            // if it's true, let's see if there's actually a form and if gravity forms is installed
            $contact_form = get_option('contact_form');
            if(!empty($contact_form) && is_plugin_active('gravityforms/gravityforms.php') ) :?>
                <div class="contact section">
                    <section class="row-pad">
                        <h2 class="section-title xm-top">Contact Us</h2>
                        <?php echo do_shortcode('[gravityform id='.$contact_form.' title=false ajax=true]');?>
                    </section>
                </div>
            <?endif;
        endif; // end of show_contact_form === true?>

	<div class="site-info section xp-vertical">
		<div class="row">
			<div id="footer-1" class="widget-area center" role="complementary">
				<?php
					dynamic_sidebar( 'footer-1' );

					$phone_number = get_option('phone_number');
					$footer_contact_title = get_option('footer_contact_title');
					$footer_contact_image = get_option('footer_contact_image');
					echo (!empty($footer_contact_title) ? '<h3>'.$footer_contact_title.'</h3>' : '');
					if (!empty($footer_contact_image)) {
						$footer_img = wp_get_attachment_image_src( $footer_contact_image, 'thumbnail' );
						if($footer_img) {
							echo '<p><img class="circle" src="'.$footer_img[0].'"/></p>';
						}
					}
					// echo '<p><a class="btn btn-large" href="'.get_bloginfo("url").'/contact">Contact</a>'.(!empty($phone_number) ? '<br /><br/><i class="icon-phonelight"></i> '.$phone_number : '').'</p>';
				?>
			</div>
			<div id="footer-2" class="widget-area center" role="complementary">
				<?php
					dynamic_sidebar( 'footer-2' );
					// Social Media
					$social_facebook = get_option('social_facebook');
					$social_twitter = get_option('social_twitter');
					$social_googleplus = get_option('social_googleplus');
					$social_linkedin = get_option('social_linkedin');
					if(!empty($social_facebook) || !empty($social_twitter) || !empty($social_googleplus) || !empty($social_linkedin)) {
						echo '<ul class="social-icons">'
								.(!empty($social_facebook ) ? '<li><a href="'.$social_facebook.'"><i class="fa-facebook"></i></a></li>' : '')
								.(!empty($social_twitter ) ? '<li><a href="'.$social_twitter.'"><i class="fa-twitter"></i></a></li>' : '')
								.(!empty($social_googleplus ) ? '<li><a href="'.$social_googleplus.'"><i class="fa-google-plus"></i></a></li>' : '')
								.(!empty($social_linkedin ) ? '<li><a href="'.$social_linkedin.'"><i class="fa-linkedin"></i></a></li>' : '')
							.'</ul>';
					}
				?>
			</div>
			<div id="footer-3" class="widget-area" role="complementary">
				<?php
				    dynamic_sidebar( 'footer-3' );
					 // Address
                    echo contactInfo();
				?>
			</div>
		</div><!-- .row -->
		<div class="row credits">
			<?php bloginfo( 'name' ); ?> &copy; <?php echo Date('Y'); ?>
			<aside class="created-by">
				Designed by <a href="http://www.messengerpigeons.com" target="_blank">Messenger Pigeons</a>
			</aside>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>

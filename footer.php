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
		$contact_form = get_option('contact_form');
		if(!empty($contact_form)) :?>
    		<div class="contact section">
                <section class="row-pad">
    				<h2 class="section-title xm-top">Contact Us</h2>
    				<?php echo do_shortcode('[gravityform id='.$contact_form.' title=false ajax=true]');?>
    			</section>
            </div>
		<? endif;
        $get_started = get_option('get_started_tagline');
        $get_started_link = get_option('get_started_link');
        if(!empty($get_started) && !empty($get_started_link)) {?>
            <div class="section get-started">
                <section class="row-pad">
                    <h2 class="section-title"><?php echo $get_started?></h3>
                    <a class="btn btn-large" href="<?php echo $get_started_link;?>">Get Started</a>
                    <?php $login_url = get_option('login_page' );
                    (!empty($login_url) ? $login_url = get_permalink($login_url) : $login_url = '#');?>
                    <p>Already a customer? <a href="<?php echo $login_url;?>" class="login">Login Now</a></p>
                </section>
            </div>
        <?}?>
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
				   $address_line_1 = get_option('address_line_1');
				   $address_line_2 = get_option('address_line_2');
				   $city_st_zip = get_option('city_st_zip');
				   $contact_email = get_option('contact_email');

					if(!empty($address_line_1) || !empty($city_st_zip) || !empty($phone_number)) {
						echo '<ul class="contact-info i-list">'
							 .(!empty($address_line_1 ) ? '<li><i class="icon-property"></i>'.$address_line_1 : '')
							 .(!empty($address_line_2 ) ? '<br/>'.$address_line_2 : '')
							 .(!empty($city_st_zip ) ? '<br/>'.$city_st_zip : '')
                             .(!empty($address_line_1 ) || !empty($address_line_2 ) || !empty($city_st_zip ) ? '</li>' : '')
							 .(!empty($phone_number ) ? '<li><i class="icon-phonelight"></i>'.$phone_number.'</li>' : '')
							 .(!empty($contact_email ) ? '<li><i class="icon-email"></i>'.$contact_email.'</li>' : '')
							.'</ul>';
					}
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

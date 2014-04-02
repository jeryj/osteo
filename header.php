<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package messenger_pigeons
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<header id="masthead" class="site-header full-width padding-top" role="banner">
	<div class="container">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><i class="fa-bars btn"></i></h3>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'messenger_pigeons' ); ?>"><?php _e( 'Skip to content', 'messenger_pigeons' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->

<div id="page" class="full-width extra-padding-bottom">

		<?php // Check for Featured Images / Sliders

			// Get entry for SliderID field on post/page
			$sliderID = get_post_meta($post->ID, "_sliderID", true);

			if ( !empty($sliderID) || has_post_thumbnail( $post->ID ) ) { ?>
				<div class="banner extra-margin-bottom">

				<?php // Check if there's a slider
					if ( empty($sliderID) ) {
						if ( has_post_thumbnail( $post->ID ) ) {
							the_post_thumbnail('featured-image');
						}
					} else {
						if ( function_exists( 'soliloquy' ) ) { soliloquy( $sliderID ); }
					} ?>
				</div>
	<?php   }
		?>
	<div id="content" class="site-content container">

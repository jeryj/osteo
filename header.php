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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?// Typekit Museo Sans Rounded ?>
<script src="//use.typekit.net/uuo4jyp.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js"></script>
<![endif]-->
<script src="<?php bloginfo('template_directory');?>/js/picturefill.min.js" async></script>

<?php wp_head(); ?>
</head>

<body <?php body_class('no-js'); ?>>
<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header section" role="banner">
    <div class="row">
        <figure class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                LOGO
            </a>
        </figure>
        <div class="menu-toggle">
            <div class="bar"></div>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'messenger_pigeons' ); ?>"><?php _e( 'Skip to content', 'messenger_pigeons' ); ?></a></div>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-wrap' ) ); ?>
        </nav><!-- #site-navigation -->
    </div>

</header><!-- #masthead -->

<div id="page" class="full-width extra-padding-bottom section">
	<div id="content" class="site-content xp-vertical xm-vertical row">

<?php
/**
 * messenger_pigeons functions and definitions
 *
 * @package messenger_pigeons
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'messenger_pigeons_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function messenger_pigeons_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on messenger_pigeons, use a find and replace
	 * to change 'messenger_pigeons' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'messenger_pigeons', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1500, 500, true );

    /**
     * Add custom Image sizes
     *
     * @link http://codex.wordpress.org/Function_Reference/add_image_size
     */

    // ex: add_image_size('featured-image', 1500, 500, true);

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'messenger_pigeons' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

}
endif; // messenger_pigeons_setup
add_action( 'after_setup_theme', 'messenger_pigeons_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function messenger_pigeons_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'messenger_pigeons' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer One', 'messenger_pigeons' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Two', 'messenger_pigeons' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Three', 'messenger_pigeons' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'messenger_pigeons_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function messenger_pigeons_scripts() {
	wp_enqueue_style( 'messenger_pigeons-font-awesome', get_template_directory_uri() . '/icons/css/font-awesome.css' );
	wp_enqueue_style( 'messenger_pigeons-style', get_stylesheet_uri() );
	wp_enqueue_script( 'messenger_pigeons-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
    wp_enqueue_script( 'messenger_pigeons-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'messenger_pigeons-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	/* Disable Pre-loaded Jquery from Worpdress and use Google instead.
	If Developing without internet, comment out this section */
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), false, '1.10.2');
		wp_enqueue_script('jquery');
	}
}
add_action( 'wp_enqueue_scripts', 'messenger_pigeons_scripts' );



/* Allow shortcodes in widgets */
add_filter('widget_text', 'do_shortcode');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/shortcodes/bloginfo.php';

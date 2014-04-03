<?php
/**
 * floodwebportfolio functions and definitions
 *
 * @package floodwebportfolio
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'floodwebportfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function floodwebportfolio_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on floodwebportfolio, use a find and replace
	 * to change 'floodwebportfolio' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'floodwebportfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'floodwebportfolio' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'floodwebportfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // floodwebportfolio_setup
add_action( 'after_setup_theme', 'floodwebportfolio_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function floodwebportfolio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'floodwebportfolio' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'floodwebportfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function floodwebportfolio_scripts() {
	wp_enqueue_style( 'floodwebportfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'floodwebportfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'floodwebportfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '1.0.0', true );

    wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array(), '1.0.0', true );

    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), '1.0.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'floodwebportfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load GoogleFonts
 */

function load_fonts() {

    wp_register_style('googleFontsLato','http://fonts.googleapis.com/css?family=Lato:300,400,700');
    wp_enqueue_style( 'googleFontsLato');

}

add_action('wp_print_styles', 'load_fonts');



/**
 * Create Cabin Post Types
 */

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
    register_post_type( 'Portfolio Post',
        array(
            'labels' => array(
                'name' => __( 'Portfolio Post' ),
                'singular_name' => __( 'Portfolio Post' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Portfolio Post' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Portfolio Post' ),
                'new_item' => __( 'New Portfolio Post' ),
                'view' => __( 'View Portfolio Post' ),
                'view_item' => __( 'View Portfolio Post' ),
                'search_items' => __( 'Search Portfolio Posts' ),
                'not_found' => __( 'No Portfolio Posts found' ),
                'not_found_in_trash' => __( 'No Portfolio Posts found in Trash' ),
                'parent' => __( 'Parent Portfolio Post' ),
            ),

            'public' => true,
            'menu_position' => 4,
            'rewrite' => array('slug' => 'portfoliopost'),
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
            'taxonomies' => array('category', 'post_tag'),
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'capability_type' => 'post',
            'hierarchical' => true,
            'menu_icon' => get_stylesheet_directory_uri() . '/img/portfoliopost-icon.png',
        )
    );
}
<?php
/**
 * Taking Care functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Taking_Care
 */

if ( ! function_exists( 'taking_care_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function taking_care_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Taking Care, use a find and replace
	 * to change 'taking-care' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'taking-care', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Custom image sizes
	add_image_size( 'home-chapter-tile', 480, 480, array('center', 'center') ); // cropped

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'taking-care' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'taking_care_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'taking_care_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function taking_care_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'taking_care_content_width', 640 );
}
add_action( 'after_setup_theme', 'taking_care_content_width', 0 );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function taking_care_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'taking-care' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'taking-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'taking_care_widgets_init' );

/* ========================================================================================================================

Custom Post Types - include custom post types and taxonimies here e.g.

e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

======================================================================================================================== */

/* STORY custom post type */

add_action('init', 'register_story', 1); // Set priority to avoid plugin conflicts
function register_story() { // A unique name for our function
 	$labels = array( // Used in the WordPress admin
		'name' => _x('Stories', 'post type general name'),
		'singular_name' => _x('Story', 'post type singular name'),
		'add_new' => _x('Add New', 'Story'),
		'add_new_item' => __('Add New Story'),
		'edit_item' => __('Edit Story'),
		'new_item' => __('New Story'),
		'view_item' => __('View Story'),
		'search_items' => __('Search Stories'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash')
	);
	$args = array(
		'labels' => $labels, // Set above
		'public' => true, // Make it publicly accessible
		'rewrite' => array('slug' => '/stories'),
		'hierarchical' => false, // No parents and children here
		'menu_position' => 5, // Appear right below "Posts"
		'has_archive' => true, // Activate the archive
		'supports' => array('title','editor','comments','thumbnail')
	);

	register_post_type( 'story', $args ); // Create the post type, use options above
	
	register_taxonomy_for_object_type('category', 'story');
	register_taxonomy_for_object_type('post_tag', 'story');
	
	flush_rewrite_rules();
}


/**
 * Enqueue scripts and styles.
 */
function taking_care_styles() {
	wp_enqueue_style( 'tc-google-fonts', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700', false );
	wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/font-awesome.min.css', false );
	wp_enqueue_style( 'taking-care-style', get_stylesheet_uri(), false ); 

	// slick CSS
	if ( is_page_template('page-chapter-slideshow.php') ) {
		wp_enqueue_style( 'slick-carousel-style', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css', false ); 	
	}
}
add_action( 'wp_enqueue_scripts', 'taking_care_styles' );


function taking_care_scripts() {
	wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/js/lib/jquery.waypoints.min.js', array('jquery'), '2017', true );
	wp_enqueue_script( 'taking-care-utilities', get_template_directory_uri() . '/js/utilities.js', array('jquery'), '2017', true );
	wp_enqueue_script( 'taking-care-navigation', get_template_directory_uri() . '/js/mom.js', array('jquery', 'jquery-waypoints', 'taking-care-utilities'), '2017', true );
	wp_enqueue_script( 'taking-care-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// scripts for Chapter page template
	if ( is_page_template('page-chapter.php') ) {
		wp_enqueue_script( 'taking-care-chapter', get_template_directory_uri() . '/js/chapter.js', array('jquery', 'imagesloaded', 'jquery-masonry', 'taking-care-utilities'), '2017', true );	
	}

	// scripts for Stories page template
	if ( is_page_template('page-stories.php') ) {
		wp_enqueue_script( 'taking-care-stories', get_template_directory_uri() . '/js/stories.js', array('jquery', 'imagesloaded', 'jquery-masonry', 'taking-care-utilities'), '2017', true );	
	}

	// scripts for Chapter slideshow template
	if ( is_page_template('page-chapter-slideshow.php') ) {
		wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), '2017', true );
		wp_enqueue_script( 'taking-care-chapter-slideshow', get_template_directory_uri() . '/js/slideshow.js', array('jquery', 'slick', 'taking-care-utilities'), '2017', true );	
	}
}
add_action( 'wp_enqueue_scripts', 'taking_care_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

<?php
/**
 * wordpressCDX functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpressCDX
 */

/** 
 * wordpresscdx -и функцию там назвал тему вот поэтому пожключение сделал 
 * с таким названием как название темы.
 */

function wordpresscdx_enqueue_scripts(){
	
	wp_enqueue_style('wordpresscdx-general', get_template_directory_uri() . '/assets/css/general.css');


	wp_enqueue_script('wordpresscdx-script', get_template_directory_uri(). '/assets/js/script.js', array('jquery'), '1.0', true );

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'wordpresscdx_enqueue_scripts' );



function wordpresscdx_theme_init(){
	register_nav_menus(array(
		'header_nav' => 'Header Navigation',    // for example Hard code
		'footer_nav' => 'Footer Navigation'
	));


	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	load_theme_textdomain('wordpresscdx', get_template_directory(). '/languages');
}
add_action('after_setup_theme', 'wordpresscdx_theme_init', 0);




function wordpresscdx_register_post_type(){
	$args = array(
		'label' => esc_html__('Cars', 'wordpresscdx'),
		'labels' => array(
			'name'                  => esc_html_x( 'Books', 'Post type general name', 'textdomain' ),
		'singular_name'         => esc_html_x( 'Book', 'Post type singular name', 'textdomain' ),
		'menu_name'             => esc_html_x( 'Books', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => esc_html_x( 'Book', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => esc_html__( 'Add New', 'textdomain' ),
		'add_new_item'          => esc_html__( 'Add New Book', 'textdomain' ),
		'new_item'              => esc_html__( 'New Book', 'textdomain' ),
		'edit_item'             => esc_html__( 'Edit Book', 'textdomain' ),
		'view_item'             => esc_html__( 'View Book', 'textdomain' ),
		'all_items'             => esc_html__( 'All Books', 'textdomain' ),
		'search_items'          => esc_html__( 'Search Books', 'textdomain' ),
		'parent_item_colon'     => esc_html__( 'Parent Books:', 'textdomain' ),
		'not_found'             => esc_html__( 'No books found.', 'textdomain' ),
		'not_found_in_trash'    => esc_html__( 'No books found in Trash.', 'textdomain' ),
		'featured_image'        => esc_html_x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => esc_html_x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => esc_html_x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => esc_html_x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => esc_html_x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => esc_html_x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => esc_html_x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => esc_html_x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => esc_html_x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => esc_html_x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
		),
		'supports' => array('title', 'editor', 'author', 'thumbnail'),
		'public' => true,
		'public_queryable' => true, //сдеелает во фронте отображение по ссылке
		'show_ui' => true, // включит в админ панеле внешний интерфейс
		'show_in_menu' => true, //включит ссылку на новый посттайп
		'has_archive' => true,
	
	);
	register_post_type('car', $args);

}
add_action('init', 'wordpresscdx_register_post_type');









if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wordpresscdx_setup() {

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




	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wordpresscdx_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'wordpresscdx_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordpresscdx_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wordpresscdx_content_width', 640 );
}
add_action( 'after_setup_theme', 'wordpresscdx_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordpresscdx_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wordpresscdx' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wordpresscdx' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wordpresscdx_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


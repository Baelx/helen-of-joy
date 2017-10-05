<?php
/**
 * helen-joy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package helen-joy
 */

if ( ! function_exists( 'helen_of_joy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function helen_of_joy_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on helen-joy, use a find and replace
	 * to change 'helen-of-joy' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'helen-of-joy', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'helen-of-joy' ),
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
	add_theme_support( 'custom-background', apply_filters( 'helen_of_joy_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'helen_of_joy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function helen_of_joy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'helen_of_joy_content_width', 640 );
}
add_action( 'after_setup_theme', 'helen_of_joy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function helen_of_joy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'helen-of-joy' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'helen-of-joy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'helen_of_joy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function helen_of_joy_scripts() {
	wp_enqueue_style( 'helen-of-joy-style', get_stylesheet_uri() );

	wp_enqueue_script( 'helen-of-joy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'helen-of-joy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'helen_of_joy_scripts' );

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

/**
 * Change "posts" menu title to "blog posts"
 */
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog Posts';
    $submenu['edit.php'][5][0] = 'Blog Posts';
    $submenu['edit.php'][10][0] = 'Add Blog Posts';
    $submenu['edit.php'][15][0] = 'Status'; // Change name for categories
    $submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Blog Posts';
        $labels->singular_name = 'Blog Post';
        $labels->add_new = 'Add Blog Post';
        $labels->add_new_item = 'Add Blog Post';
        $labels->edit_item = 'Edit Blog Posts';
        $labels->new_item = 'Blog Post';
        $labels->view_item = 'View Blog Post';
        $labels->search_items = 'Search Blog Posts';
        $labels->not_found = 'No Blog Posts found';
        $labels->not_found_in_trash = 'No Blog Posts found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );

function my_page_menu_args( $args ) {
    $args['show_home'] = false;
    return $args;
}
add_filter( 'wp_page_menu_args', 'my_page_menu_args' );

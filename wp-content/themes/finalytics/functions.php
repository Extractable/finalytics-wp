<?php
/**
 * Finalytics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Finalytics
 */

if ( ! defined( 'finalytics_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'finalytics_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function finalytics_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Finalytics, use a find and replace
		* to change 'finalytics' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'finalytics', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'finalytics' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'finalytics_custom_background_args',
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
add_action( 'after_setup_theme', 'finalytics_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function finalytics_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'finalytics_content_width', 640 );
}
add_action( 'after_setup_theme', 'finalytics_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function finalytics_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'finalytics' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'finalytics' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

  /**
   * Header right widget zone
   */

  register_sidebar( array(
    'name' => esc_html__( 'Header', 'finalytics' ),
    'id' => 'sidebar-2',
    'description' => esc_html__( 'Add widgets here.', 'finalytics' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  /**
   *
   * Footer widget zones
   *
   */

  /**
   * Footer widget zone 1
   */

  register_sidebar( array(
    'name' => esc_html__( 'Footer zone 1', 'finalytics' ),
    'id' => 'sidebar-3',
    'description' => esc_html__( 'Add widgets here.', 'finalytics' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  /**
   * Footer widget zone 2
   */

  register_sidebar( array(
    'name' => esc_html__( 'Footer zone 2. Info column', 'finalytics' ),
    'id' => 'sidebar-4',
    'description' => esc_html__( 'Add widgets here.', 'finalytics' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  /**
   * Footer widget zone 3
   */

  register_sidebar( array(
    'name' => esc_html__( 'Footer zone 3. Info column', 'finalytics' ),
    'id' => 'sidebar-5',
    'description' => esc_html__( 'Add widgets here.', 'finalytics' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  /**
   * Footer widget zone 4
   */

  register_sidebar( array(
    'name' => esc_html__( 'Footer zone 4. Info column', 'finalytics' ),
    'id' => 'sidebar-6',
    'description' => esc_html__( 'Add widgets here.', 'finalytics' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  /**
   * Footer widget zone 5
   */

  register_sidebar( array(
    'name' => esc_html__( 'Footer zone 5. Info column', 'finalytics' ),
    'id' => 'sidebar-7',
    'description' => esc_html__( 'Add widgets here.', 'finalytics' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  /**
   * Footer copyright zone
   */

  register_sidebar( array(
    'name' => esc_html__( 'Footer copyright zone', 'finalytics' ),
    'id' => 'sidebar-8',
    'description' => esc_html__( 'Add widgets here.', 'finalytics' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  /**
   * Custom Post Template zone
   */

  register_sidebar( array(
    'name' => esc_html__( 'Custom Post zone', 'finalytics' ),
    'id' => 'sidebar-9',
    'description' => esc_html__( 'Add widgets here.', 'finalytics' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'finalytics_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function finalytics_scripts() {
  // Styles
  wp_enqueue_style('finalytics-beerslider', get_template_directory_uri() . '/css/beer-slider/BeerSlider.css', [], finalytics_VERSION, 'all');
  wp_enqueue_style('finalytics-style', get_stylesheet_uri(), array(), finalytics_VERSION );
  wp_enqueue_style('finalytics-style-main', get_template_directory_uri() . '/static/css/main.min.css', [], finalytics_VERSION, 'all');

  //JS
	wp_enqueue_script( 'finalytics-beerslider', get_template_directory_uri() . '/js/beer-slider/BeerSlider.js', array(), finalytics_VERSION, true );
	wp_enqueue_script( 'finalytics-navigation', get_template_directory_uri() . '/js/navigation.js', array(), finalytics_VERSION, true );
  wp_enqueue_script('scripts', get_template_directory_uri() . '/static/js/main.min.js', ['jquery'], finalytics_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'finalytics_scripts' );

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

include_once( get_template_directory() . '/inc/plugins/acf/acf-social-widget.php');

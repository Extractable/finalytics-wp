<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Finalytics
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function finalytics_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'finalytics_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function finalytics_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'finalytics_pingback_header' );

/**
 * Add a custom post type - Use cases
 */

// Custom post type function - Use cases
function create_posttype() {

  register_post_type( 'use_cases',
    // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Use cases' ),
        'singular_name' => __( 'Use case' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'use_cases'),
      'show_in_rest' => true,

    )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Use cases', 'Post Type General Name', 'finalytics' ),
    'singular_name'       => _x( 'Use case', 'Post Type Singular Name', 'finalytics' ),
    'menu_name'           => __( 'Use cases', 'finalytics' ),
    'parent_item_colon'   => __( 'Parent Use case', 'finalytics' ),
    'all_items'           => __( 'All Use cases', 'finalytics' ),
    'view_item'           => __( 'View Use case', 'finalytics' ),
    'add_new_item'        => __( 'Add New Use case', 'finalytics' ),
    'add_new'             => __( 'Add New', 'finalytics' ),
    'edit_item'           => __( 'Edit Use case', 'finalytics' ),
    'update_item'         => __( 'Update Use case', 'finalytics' ),
    'search_items'        => __( 'Search Use case', 'finalytics' ),
    'not_found'           => __( 'Not Found', 'finalytics' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'finalytics' ),
  );

// Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'use_cases', 'finalytics' ),
    'description'         => __( 'Use cases', 'finalytics' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array( 'category' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest' => true,

  );

  // Registering your Custom Post Type
  register_post_type( 'use_cases', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

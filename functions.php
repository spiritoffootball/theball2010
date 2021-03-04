<?php /*
================================================================================
The Ball 2010 Child Theme Functions
================================================================================
AUTHOR: Christian Wach <needle@haystack.co.uk>
--------------------------------------------------------------------------------
NOTES

Theme amendments and overrides.

--------------------------------------------------------------------------------
*/



// Set our version here.
define( 'THEBALL2010_VERSION', '1.0.1' );



/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}



/**
 * Augment the Base Theme's setup function.
 *
 * @since 1.0
 */
function theball2010_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be added to the /languages/ directory of the child theme.
	 */
	load_theme_textdomain(
		'theball2010',
		get_stylesheet_directory() . '/languages'
	);

}

// Add after theme setup hook.
add_action( 'after_setup_theme', 'theball2010_setup' );



/**
 * Add child theme's CSS file(s).
 *
 * @since 1.0
 */
function theball2010_enqueue_styles() {

	// Enqueue file.
	wp_enqueue_style(
		'theball2010_css',
		get_stylesheet_directory_uri() . '/assets/css/style-overrides.css',
		[ 'theball_screen_css' ],
		THEBALL2010_VERSION, // Version.
		'all' // Media.
	);

}

// Add a filter for the above.
add_filter( 'wp_enqueue_scripts', 'theball2010_enqueue_styles', 105 );



/**
 * Override image of The Ball.
 *
 * @since 1.0
 *
 * @param str $default The existing markup for the image file.
 * @return str $default The modified markup for the image file.
 */
function theball2010_theball_image( $default ) {

	// Ignore default and set our own.
	return '<a href="' . get_home_url( null, '/' ) . '" title="' . __( 'Home', 'theball2010' ) . '" class="ball_image">' .
			'<img src="' . get_stylesheet_directory_uri() . '/assets/images/interface/the_ball_2010.png" ' .
				 'alt="' . esc_attr( __( 'The Ball 2010', 'theball2010' ) ) . '" ' .
				 'title="' . esc_attr( __( 'The Ball 2010', 'theball2010' ) ) . '" ' .
				 'style="width: 100px; height: 100px;" ' .
				 'id="the_ball_header" />' .
			'</a>' ;

}

// Add a filter for the above.
add_filter( 'theball_image', 'theball2010_theball_image', 10, 1 );



/**
 * Override supporters footer template file.
 *
 * @since 1.0
 *
 * @param str $default The default path to the template file.
 * @return str $default The modified path to the template file.
 */
function theball2010_supporters_file( $default ) {

	// Return our theme's supporters list file.
	return get_stylesheet_directory() . '/assets/includes/supporters_2010.php';

}

// Add a filter for the above.
add_filter( 'theball_supporters', 'theball2010_supporters_file', 10, 1 );



/**
 * Override video width.
 *
 * @since 1.0
 */
function theball2010_video_width( $default ) {

	// Return full width.
	return 640;

}

// Add a filter for the above.
add_filter( 'sofvm_video_width', 'theball2010_video_width', 10, 1 );



/**
 * Override video height.
 *
 * @since 1.0
 */
function theball2010_video_height( $default ) {

	// Return full height.
	return 360;

}

// Add a filter for the above.
add_filter( 'sofvm_video_height', 'theball2010_video_height', 10, 1 );



/**
 * Sort posts in ascending date order (props ' Default Sort Ascend' plugin)
 *
 * @since 1.0
 */
function theball2010_sort_ascend( $query ) {

	// Get vars
	$q = $query->query_vars;

	// Is the order empty or not otherwise defined?
	if ( empty( $q['order'] ) OR ( strtoupper( $q['order'] ) != 'DESC' AND strtoupper( $q['order'] ) != 'ASC' ) ) {

		// Make it ascending
		$q['order'] = 'ASC';

	}

	// Overwrite existing
	$query->query_vars = $q;

}

// Add an action for the above.
//add_action( 'pre_get_posts', 'theball2010_sort_ascend' );



/**
 * Override active menu item for a custom post type.
 *
 * @since 1.0
 */
function theball2010_change_page_menu_classes( $menu ) {

	// Access post.
	global $post;

	// Is this our video post type?
	if ( get_post_type( $post ) == 'sofvm_video' ) {

		// Remove all current_page_parent classes.
		$menu = str_replace( 'current_page_parent', '', $menu );

		// Add the current_page_parent class to the page we want.
		$menu = str_replace( 'menu-item-3145', 'menu-item-3145 current_page_parent', $menu );

	}

	// --<
	return $menu;

}

// Add a filter for the above.
add_filter( 'wp_nav_menu', 'theball2010_change_page_menu_classes', 10, 1 );



/**
 * Override users in "Team" template file.
 *
 * @since 1.0.1
 *
 * @param array $users The default set of users.
 * @return array $users The modified set of users.
 */
function theball2010_team_members( $default ) {

	// 2010 users
	return [ 7, 2, 3, 4, 8 ];

}

// Add a filter for the above.
add_filter( 'theball_team_members', 'theball2010_team_members', 10, 1 );




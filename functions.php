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
define( 'THEBALL2010_VERSION', '2.0.0' );



/**
 * Load theme class if not yet loaded and return instance.
 *
 * @since 1.0.1
 *
 * @return SOF_The_Ball_Theme $theme The theme instance.
 */
function sof_the_ball_2010_theme() {

	// Declare as static.
	static $theme;

	// Instantiate plugin if not yet instantiated.
	if ( ! isset( $theme ) ) {
		include get_stylesheet_directory() . '/includes/class-theme.php';
		$theme = new SOF_The_Ball_2010_Theme();
	}

	// --<
	return $theme;

}

// Init immediately.
sof_the_ball_2010_theme();



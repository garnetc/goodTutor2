<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * * @package Luzuk Premium
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function luzuk_lite_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'render'    => 'luzuk_lite_infinite_scroll_render',
		'footer'    => 'site-footer',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'luzuk_lite_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function luzuk_lite_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    luzuk_lite_archive_post();
		else :
		    luzuk_lite_archive_post();
		endif;
	}
}

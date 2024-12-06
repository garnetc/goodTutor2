<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * * @package Luzuk Premium
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses luzuk_lite_header_style()
 */
function luzuk_lite_custom_header_setup() {
	add_theme_support( 'custom-logo', array(
		'width'       => 155,
		'height'      => 44,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	add_theme_support( 'custom-header', array(
		'default-image'			=> '',
		'default-text-color'	=> '#000',
		'width'					=> 1900,
		'height'				=> 200,
		'flex-width'			=> true,
		'flex-height'			=> true,
		// 'wp-head-callback'		=> 'luzuk_lite_header_style',
	) );
}
add_action( 'after_setup_theme', 'luzuk_lite_custom_header_setup' );

if ( ! function_exists( 'luzuk_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see luzuk_lite_custom_header_setup().
 */
function luzuk_lite_header_style() {
	//$header_text_color = get_header_textcolor();

	// If we get this far, we have custom styles. Let's do this.
	/* ?>
	<style type="text/css">
	<?php if ( ! display_header_text() ) : ?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php else : ?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php */
}
endif;

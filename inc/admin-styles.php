<?php
/**
 * Custom Admin & Login Styles for NEWMAP-EIB Theme
 *
 * @package EdoNewMap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue custom stylesheet on WP Admin pages.
 *
 * @param string $hook Current admin page hook.
 */
function newmap_admin_styles( $hook ) {
	$css_file = get_template_directory() . '/assets/css/admin.css';
	$ver      = file_exists( $css_file ) ? filemtime( $css_file ) : '1.0.0';

	// Enqueue Google Font DM Sans for admin UI
	wp_enqueue_style(
		'newmap-admin-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// Enqueue Admin Theme Stylesheet
	wp_enqueue_style(
		'newmap-admin',
		get_template_directory_uri() . '/assets/css/admin.css',
		array(),
		$ver
	);

	// Inject dynamic logo URL as CSS variable for inline usage if needed
	$logo_url   = get_template_directory_uri() . '/assets/images/Logo-sidebar1.png';
	$custom_css = ":root { --nm-admin-logo-url: url('" . esc_url( $logo_url ) . "'); }";
	wp_add_inline_style( 'newmap-admin', $custom_css );
}
add_action( 'admin_enqueue_scripts', 'newmap_admin_styles' );

/**
 * Enqueue custom stylesheet on WP Login page.
 */
function newmap_login_styles() {
	$css_file = get_template_directory() . '/assets/css/admin.css';
	$ver      = file_exists( $css_file ) ? filemtime( $css_file ) : '1.0.0';

	// Enqueue Google Font DM Sans for login UI
	wp_enqueue_style(
		'newmap-admin-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// Enqueue Login Theme Stylesheet
	wp_enqueue_style(
		'newmap-login',
		get_template_directory_uri() . '/assets/css/admin.css',
		array(),
		$ver
	);

	// Inject dynamic login logo path as CSS variable
	$logo_url   = get_template_directory_uri() . '/assets/images/Logo-sidebar1.png';
	$custom_css = ":root { --nm-admin-login-logo: url('" . esc_url( $logo_url ) . "'); }";
	wp_add_inline_style( 'newmap-login', $custom_css );
}
add_action( 'login_enqueue_scripts', 'newmap_login_styles' );

/**
 * Filter login header logo link URL to redirect to home.
 */
function newmap_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'newmap_login_logo_url' );

/**
 * Filter login header logo title text.
 */
function newmap_login_logo_title() {
	return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'newmap_login_logo_title' );

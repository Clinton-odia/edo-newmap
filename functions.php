<?php

/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on _s, use a find and replace
		* to change '_s' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('_s', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// Register theme navigation menus.
	register_nav_menus(
		array(
			'menu-1'      => esc_html__('Primary Menu', '_s'),
			'footer-menu' => esc_html__('Footer Quick Links', '_s'),
			'about-menu'  => esc_html__('About Us Submenu', '_s'),
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
			'_s_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', '_s_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width()
{
	$GLOBALS['content_width'] = apply_filters('_s_content_width', 640);
}
add_action('after_setup_theme', '_s_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', '_s'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', '_s'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', '_s_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function _s_scripts()
{
	wp_enqueue_style('_s-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('_s-style', 'rtl', 'replace');

	wp_enqueue_script('_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
// add_action( 'wp_enqueue_scripts', '_s_scripts' );

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
 * Custom Post Types (Projects, Notices, Departments)
 */
require get_template_directory() . '/inc/cpt-registers.php';

/**
 * Custom Meta Boxes & Meta Fields
 */
require get_template_directory() . '/inc/meta-fields.php';

// function my_awesome_scripts()
// {
// 	wp_enqueue_style("style", get_template_directory_uri() . "/assets/main.css", [], false);
// 	wp_enqueue_script("script", get_template_directory_uri() . "/assets/main.min.js", [], false);
// }
// add_action("wp_enqueue_scripts", "my_awesome_scripts");

function edofewma_scripts() {
    // 1. VENDOR CSS (Loaded directly from assets/css/)
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0' );
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0' );
    wp_enqueue_style( 'flaticon-css', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0' );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome-all.css', array(), '1.0' );
    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/css/owl.css', array(), '1.0' );
    wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '1.0' );
    wp_enqueue_style( 'nice-select-css', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0' );

    // 2. MAIN THEME CSS (Bundled by Webpack from SCSS)
    // We add 'bootstrap-css' as a dependency so our styles load AFTER bootstrap
    wp_enqueue_style( 'edofewma-main-style', get_template_directory_uri() . '/assets/main.css', array('bootstrap-css'), '1.0.0' );

    // 3. SCRIPTS (Keep your existing JS setup)
    wp_enqueue_script('jquery');
    // ... your JS enqueues here ...
	// Vendor Scripts (Order is important!)
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery', 'popper-js'), '1.0', true );
    
    // Plugins
    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'appear-js', get_template_directory_uri() . '/assets/js/appear.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'nice-select-js', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'bxslider-js', get_template_directory_uri() . '/assets/js/bxslider.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'nav-tool-js', get_template_directory_uri() . '/assets/js/nav-tool.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'scrollbar-js', get_template_directory_uri() . '/assets/js/scrollbar.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'validation-js', get_template_directory_uri() . '/assets/js/validation.js', array('jquery'), '1.0', true );

    // 3. MAIN CUSTOM SCRIPT
    // We load this LAST because it uses all the plugins above
    wp_enqueue_script( 'edofewma-script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'owl-js', 'bootstrap-js'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'edofewma_scripts' );

/**
 * Security Hardening & Compliance (TOR §4E)
 */
// 1. Hide WordPress Version generator tag
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

// 2. Disable XML-RPC Pingbacks & Attacks
add_filter('xmlrpc_enabled', '__return_false');
add_filter('wp_headers', function($headers) {
    unset($headers['X-Pingback']);
    return $headers;
});

// 3. Block User Enumeration Scans via /?author=N
if (!is_admin()) {
    if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) {
        wp_redirect(home_url(), 301);
        exit;
    }
}
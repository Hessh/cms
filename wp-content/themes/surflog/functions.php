<?php

/**
 * Surflog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Surflog
 */

if (!function_exists('surflog_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function surflog_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Surflog, use a find and replace
		 * to change 'surflog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('surflog', get_template_directory() . '/languages');

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'top-menu' => __('Top Menu', 'theme')
		));

		add_theme_support('menus');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('surflog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'surflog_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function surflog_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('surflog_content_width', 640);
}
add_action('after_setup_theme', 'surflog_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function surflog_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'surflog'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'surflog'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'surflog_widgets_init');


/** Selfmade function for linking sites with styles */
add_action('wp_enqueue_scripts', 'surflog_enqueue_style');

function surflog_enqueue_style()
{
	/*
	wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css', false);
	wp_enqueue_style('header-front-page', get_stylesheet_directory_uri() . '/assets/css/header-front-page.css', false);
	wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', false);
	wp_enqueue_style('front-page', get_stylesheet_directory_uri() . '/assets/css/front-page.css', false);
	wp_enqueue_style('blog', get_stylesheet_directory_uri() . '/assets/css/blog.css', false);
	wp_enqueue_style('article', get_stylesheet_directory_uri() . '/assets/css/article-page.css', false);
	wp_enqueue_style('product', get_stylesheet_directory_uri() . '/assets/css/product-page.css', false);
	wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', false);
	*/

	if (is_front_page()) {

		wp_enqueue_style('core', get_stylesheet_directory_uri() . '/style.css', false);
		wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css', false);
		wp_enqueue_style('front-page', get_stylesheet_directory_uri() . '/assets/css/front-page.css', false);
		
		wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', false);
		wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', false);
	} else if (is_home()) {

		wp_enqueue_style('core', get_stylesheet_directory_uri() . '/style.css', false);
		wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css', false);
		wp_enqueue_style('blog', get_stylesheet_directory_uri() . '/assets/css/blog.css', false);
		
		wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', false);
		wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', false);
	} else if (is_page_template('article-page.php')) {

		wp_enqueue_style('core', get_stylesheet_directory_uri() . '/style.css', false);
		wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css', false);
		wp_enqueue_style('article', get_stylesheet_directory_uri() . '/assets/css/article-page.css', false);
		wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', false);
		wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', false);
	} else if (is_page_template('product-page.php')) {

		wp_enqueue_style('core', get_stylesheet_directory_uri() . '/style.css', false);
		wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css', false);
		wp_enqueue_style('product', get_stylesheet_directory_uri() . '/assets/css/product-page.css', false);
		
		wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', false);
		wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', false);
	} else if (is_page_template('extra-page.php')) {

		wp_enqueue_style('core', get_stylesheet_directory_uri() . '/style.css', false);
		wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css', false);
		wp_enqueue_style('extra', get_stylesheet_directory_uri() . '/assets/css/extra-page.css', false);
		
		wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', false);
		wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', false);
	} else if (is_page_template('404.php')) {

		wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css', false);
		wp_enqueue_style('core', get_stylesheet_directory_uri() . '/style.css', false);
		wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', false);
		wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', false);

	} else {

		wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css', false);
		wp_enqueue_style('core', get_stylesheet_directory_uri() . '/style.css', false);
		wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', false);
		wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', false);
	}
}

/**
 * Enqueue scripts.
 */
function surflog_scripts()
{
	wp_enqueue_script('surflog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('surflog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	} else if (is_home()) {
		wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', null, null, true);
	}
}
add_action('wp_enqueue_scripts', 'surflog_scripts');


/** Spesifies the lenght of the text in a thumbnail, and adds "..." */
function wp_excerpt_length($length)
{
	return 20;
}

function wpdocs_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

add_filter('excerpt_length', 'wp_excerpt_length', 999);


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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

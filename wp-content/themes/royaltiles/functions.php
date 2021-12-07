<?php

/**
 * RoyalTiles functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RoyalTiles
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('royaltiles_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function royaltiles_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on RoyalTiles, use a find and replace
		 * to change 'royaltiles' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('royaltiles', get_template_directory() . '/languages');

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'royaltiles'),
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
				'royaltiles_custom_background_args',
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

		/**
		 * WooCommerce suppor
		 */
		add_theme_support('woocommerce');
		add_theme_support('wc-product-gallery-zoom');
		add_theme_support('wc-product-gallery-lightbox');
		add_theme_support('wc-product-gallery-slider');
	}
endif;
add_action('after_setup_theme', 'royaltiles_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function royaltiles_content_width()
{
	$GLOBALS['content_width'] = apply_filters('royaltiles_content_width', 640);
}
add_action('after_setup_theme', 'royaltiles_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function royaltiles_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'royaltiles'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'royaltiles'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Shop Sidebar', 'royaltiles'),
			'id'            => 'shop-sidebar',
			'description'   => esc_html__('Add widgets here.', 'royaltiles'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'royaltiles_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function royaltiles_scripts()
{

	$min = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG === false) ? '.min' : '';

	$main_css = 'assets/css/main' . $min . '.css';
	$main_js = 'assets/js/main' . $min . '.js';
	$vendor_js = 'assets/js/vendor' . $min . '.js';

	wp_enqueue_style('royaltiles-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('royaltiles-style', 'rtl', 'replace');

	wp_register_style('teko-font-style', 'https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&display=swap', '', _S_VERSION, false);
	wp_enqueue_style('teko-font-style');
	wp_register_style('poppins-font-style', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', '', _S_VERSION, false);
	wp_enqueue_style('poppins-font-style');



	wp_enqueue_script('royaltiles-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	$main_css_file = 'assets/css/main' . $min . '.css';
	wp_register_style('royaltiles-main-style', get_template_directory_uri() . '/' . $main_css_file);
	wp_enqueue_style('royaltiles-main-style');

	//Enqueue js script
	/* Vendor JS */
	wp_register_script('royaltiles-vendor-script', get_template_directory_uri() . '/' . $vendor_js, array('jquery',), _S_VERSION, true);
	wp_enqueue_script('royaltiles-vendor-script');

	$main_js_file = 'assets/js/main' . $min . '.js';
	wp_register_script('royaltiles-main-script', get_template_directory_uri() . '/' . $main_js_file, array('jquery', 'royaltiles-vendor-script'), _S_VERSION, true);
	wp_enqueue_script('royaltiles-main-script');






	// wp_register_script ( 'royaltiles-vendor-script', get_template_directory_uri() . '/assets/js/vendor.min.js' );
	// wp_enqueue_script ( 'royaltiles-vendor-script' );

	// wp_register_script ( 'royaltiles-main-js', get_template_directory_uri() . '/assets/js/main.js' );
	// wp_enqueue_script ( 'royaltiles-main-js' );








	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'royaltiles_scripts');

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
 * WooCommerce Customizations.
 */
require get_template_directory() . '/inc/woo-customizations.php';

/**
 * Custom Post Type.
 */
require get_template_directory() . '/inc/cpt.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function custom_product_tax_list($atts)
{

	// Inside the function we extract custom taxonomy parameter of our shortcode
	$args = shortcode_atts(array(
		'tax' => 'product_cat',
	), $atts);

	// arguments for function wp_list_categories
	$terms = get_terms(array(
		'taxonomy' => $args['tax'],
		'hide_empty' => true,
	));

	// We wrap it in unordered list 
	if (is_array($terms) && !empty($terms)) {
		echo '<ul>';

		foreach ($terms as $cat) :
			printf('<li><a href="%s">%s</a></li>', get_term_link($cat->term_id, $args['tax']), $cat->name);
		endforeach;


		echo '</ul>';
	}
}
// Custom taxonomy dropdown option
add_shortcode('royaltiles_custom_product_tax', 'custom_product_tax_list');
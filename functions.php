<?php
/**
 * lasheville-v1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lasheville-v1
 */

if (!function_exists('lasheville_v1_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function lasheville_v1_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on lasheville-v1, use a find and replace
         * to change 'lasheville-v1' to the name of your theme in all the template files.
         */
        load_theme_textdomain('lasheville-v1', get_template_directory() . '/languages');

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
            'menu-1' => esc_html__('Primary', 'lasheville-v1'),
        ));

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
        add_theme_support('custom-background', apply_filters('lasheville_v1_custom_background_args', array(
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
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));

        /**
		 * Add Gutenberg Features
		 */
		add_theme_support('align-wide');

		add_theme_support('editor-color-palette', array(
			array(
				'name' => __( 'primary', 'lasheville-v1' ),
				'slug' => 'primary',
				'color' => '#50B1B6',
			),
			array(
				'name' => __( 'secondary', 'lasheville-v1' ),
				'slug' => 'secondary',
				'color' => '#426d80',
			),
			array(
				'name' => __( 'dark secondary', 'lasheville-v1' ),
				'slug' => 'dark-secondary',
				'color' => '#556471',
			),
			array(
				'name' => __( 'light', 'lasheville-v1' ),
				'slug' => 'light',
				'color' => '#e8e1d4',
			),
			array(
				'name' => __( 'dark', 'lasheville-v1' ),
				'slug' => 'dark',
				'color' => '#565e67',
			),
			array(
				'name' => __( 'light gray', 'lasheville-v1' ),
				'slug' => 'light-gray',
				'color' => '#E9E9E9',
			),
			array(
				'name' => __( 'gray', 'lasheville-v1' ),
				'slug' => 'gray',
				'color' => '#C2C0BF',
			),
			array(
				'name' => __( 'dark gray', 'lasheville-v1' ),
				'slug' => 'dark-gray',
				'color' => '#565E66',
			),
			array(
				'name' => __( 'white', 'lasheville-v1' ),
				'slug' => 'white',
				'color' => '#fff',
			),
			array(
				'name' => __( 'black', 'lasheville-v1' ),
				'slug' => 'black',
				'color' => '#000',
			)
		));

		add_theme_support( 'disable-custom-colors' );

		/* 1.333 type scale / perfect fourth */
		add_theme_support('editor-font-sizes', array(
			array(
				'name' => __( 'Small', 'lasheville-v1' ),
				'size' => 12,
				'slug' => 'small'
			),
			array(
				'name' => __( 'Regular', 'lasheville-v1' ),
				'size' => 16,
				'slug' => 'regular'
			),
			array(
				'name' => __( 'Large', 'lasheville-v1' ),
				'size' => 38,
				'slug' => 'large'
			),
			array(
				'name' => __( 'Huge', 'lasheville-v1' ),
				'size' => 51,
				'slug' => 'huge'
			),
			array(
				'name' => __( 'Extra Huge', 'lasheville-v1' ),
				'size' => 67,
				'slug' => 'extra-huge'
			)
		));

		add_theme_support('responsive-embeds');

		add_theme_support('disable-custom-font-sizes');

		add_theme_support('editor-styles');
		add_editor_style('editor-style.css');

    }
endif;
add_action('after_setup_theme', 'lasheville_v1_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lasheville_v1_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('lasheville_v1_content_width', 640);
}
add_action('after_setup_theme', 'lasheville_v1_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lasheville_v1_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'lasheville-v1'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'lasheville-v1'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'lasheville_v1_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function lasheville_v1_scripts()
{
    wp_enqueue_style('lasheville-v1-style', get_stylesheet_uri());

	wp_enqueue_style('lasheville-v1-theme', get_template_directory_uri() . '/theme.css');

    wp_enqueue_script('lasheville-v1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('lasheville-v1-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'lasheville_v1_scripts');

function lv_gutenberg_scripts() {

	wp_enqueue_script(
		'lv-editor',
		get_stylesheet_directory_uri() . '/js/editor.js',
		array( 'wp-blocks', 'wp-dom' ),
		filemtime( get_stylesheet_directory() . '/js/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'lv_gutenberg_scripts' );

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
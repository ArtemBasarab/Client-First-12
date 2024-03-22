<?php
/**
 * Client First 12 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Client_First_12
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function clntfrst_setup() {

	load_theme_textdomain( 'clntfrst', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	

	register_nav_menus(
		array(
			'header' => esc_html__( 'Header Menu', 'clntfrst' ),
			'footer' => esc_html__( 'Footer Menu', 'clntfrst' ),
		)
	);

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

	add_theme_support(
		'custom-background',
		apply_filters(
			'clntfrst_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'clntfrst_setup' );

function clntfrst_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clntfrst_content_width', 640 );
}
add_action( 'after_setup_theme', 'clntfrst_content_width', 0 );

function clntfrst_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'clntfrst' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'clntfrst' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clntfrst_widgets_init' );

/**
 * init styles and scripts
 */

function clntfrst_scripts() {

	if(is_front_page()) {
		wp_enqueue_style( 'clntfrst-homepage', get_template_directory_uri() . '/assets/css/home-page.css', [], '1.0.0', 'all' );
		wp_enqueue_script( 'clntfrst-homepage', get_template_directory_uri() . '/assets/js/home-page.js', [], '1.0.0', true );
		}
	if(is_single()) {
		wp_enqueue_style( 'clntfrst-single', get_template_directory_uri() . '/assets/css/single-post.css', [], '1.0.0', 'all' );
		wp_enqueue_script( 'clntfrst-burger-btn', get_template_directory_uri() . '/assets/js/parts/burger_btn.js', [], '1.0.0', true );
	}

	if(is_page('privacy-policy')) {
		wp_enqueue_style( 'clntfrst-privacy-policy-page' , get_template_directory_uri() . '/assets/css/privacy-policy-page.css' , [], '1.0.0', 'all' );
		wp_enqueue_script( 'clntfrst-burger-btn', get_template_directory_uri() . '/assets/js/parts/burger_btn.js', [], '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'clntfrst_scripts' );

/**
 * init required plugins
 */
require get_template_directory() . '/inc/required-plugins-list.php';


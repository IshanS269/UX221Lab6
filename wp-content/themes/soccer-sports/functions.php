<?php

/**
 * Soccer Sports functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Soccer Sports
 */

define( 'SOCCER_SPORTS_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'soccer_sports_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function soccer_sports_setup() {

		// Add theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
}
add_action( 'after_setup_theme', 'soccer_sports_setup' );

/**
 * Enqueue scripts and styles
 */
function soccer_sports_scripts() {
	$version = wp_get_theme( 'soccer-sports' )->get( 'Version' );
	// Stylesheet
	wp_enqueue_style( 'soccer-sports-styles', get_theme_file_uri( '/style.css' ), array(), $version );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $version, 'all' );

	if ( file_exists( get_template_directory() . '/assets/css/theme-style.css' ) ) {
		wp_enqueue_style( 'soccer-sports-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',  array(), $version );
	}

	$deps = array( 'soccer-sports-animate' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	if (is_rtl()) {
	    wp_enqueue_style( 'rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css' );
	}

	// Scripts
	$deps = array( 'jquery' );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/assets/js/animate.min.js', $deps, $version );

}
add_action( 'wp_enqueue_scripts', 'soccer_sports_scripts' );

/**
 * Add editor styles
 */
function soccer_sports_editor_style() {
    wp_enqueue_style( 'soccer-sports-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), '1.0' );
}
add_action( 'enqueue_block_editor_assets', 'soccer_sports_editor_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function soccer_sports_block_assets()
{
    wp_enqueue_style( 'soccer-sports-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css' );
}
add_action( 'enqueue_block_assets', 'soccer_sports_block_assets' );

/**
 * Load core file
 */
require get_theme_file_path( '/inc/core/init.php' );

/**
 * Tgm
 */
require get_theme_file_path( '/inc/Tgm/tgm.php' );

require get_template_directory() .'/inc/core/main.php';

/**
 * Getstart
 */

require get_template_directory() .'/inc/core/customizer-notice/soccer-sports-customizer-notify.php';

load_template( trailingslashit( get_template_directory() ) . '/inc/core/class-upgrade-pro.php' );
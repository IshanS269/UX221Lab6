<?php 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! function_exists( 'skt_nutritionist_coach_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function skt_nutritionist_coach_setup() {
	$GLOBALS['content_width'] = apply_filters( 'skt_nutritionist_coach_content_width', 640 );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'custom-logo', array(
		'height'      => 64,
		'width'       => 213,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'skt-nutritionist-coach' )				
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
} 
endif; // skt_nutritionist_coach_setup
add_action( 'after_setup_theme', 'skt_nutritionist_coach_setup' );

function skt_nutritionist_coach_widgets_init() { 	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'skt-nutritionist-coach' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-nutritionist-coach' ),
		'id'            => 'fc-1-ntc',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'skt-nutritionist-coach' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-nutritionist-coach' ),
		'id'            => 'fc-2-ntc',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'skt-nutritionist-coach' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-nutritionist-coach' ),
		'id'            => 'fc-3-ntc',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'skt-nutritionist-coach' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-nutritionist-coach' ),
		'id'            => 'fc-4-ntc',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );	
}
add_action( 'widgets_init', 'skt_nutritionist_coach_widgets_init' );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function skt_nutritionist_coach_get_fonts_url() {
	$font_families = array(
		'Poppins:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
		'Playfair Display:400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
		'Assistant:200,300,400,500,600,700,800',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'skt_nutritionist_coach_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}


add_action( 'wp_enqueue_scripts', 'skt_nutritionist_coach_enqueue_styles' );
function skt_nutritionist_coach_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 

add_action( 'wp_enqueue_scripts', 'skt_nutritionist_coach_child_styles', 99);
function skt_nutritionist_coach_child_styles() {
  wp_enqueue_style( 'skt-nutritionist-coach-child-style', get_stylesheet_directory_uri()."/css/responsive.css" );
} 

function skt_nutritionist_coach_admin_style() {
  wp_enqueue_script('skt-nutritionist-coach-admin-script', get_stylesheet_directory_uri()."/js/skt-nutritionist-coach-admin-script.js");
}
add_action('admin_enqueue_scripts', 'skt_nutritionist_coach_admin_style');

function skt_nutritionist_coach_admin_about_page_css_enqueue($hook) {
   if ( 'appearance_page_skt_nutritionist_coach_guide' != $hook ) {
        return;
    }
    wp_enqueue_style( 'skt-nutritionist-coach-about-page-style', get_stylesheet_directory_uri() . '/css/skt-nutritionist-coach-about-page-style.css' );
}
add_action( 'admin_enqueue_scripts', 'skt_nutritionist_coach_admin_about_page_css_enqueue' );

/**
 * Show notice on theme activation
 */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'skt_nutritionist_coach_activation_notice' );
}
function skt_nutritionist_coach_activation_notice(){
    ?>
    <div class="notice notice-info is-dismissible"> 
        <div class="skt-coach-notice-container">
        	<div class="skt-coach-notice-img"><img src="<?php echo esc_url( SKT_NUTRITIONIST_COACH_SKTTHEMES_THEME_URI . 'images/icon-skt-templates.png' ); ?>" alt="<?php echo esc_attr('SKT Templates');?>" ></div>
            <div class="skt-coach-notice-content">
            <div class="skt-coach-notice-heading"><?php echo esc_html__('Thank you for installing SKT Nutritionist Coach!', 'skt-nutritionist-coach'); ?></div>
            <p class="largefont"><?php echo esc_html__('SKT Nutritionist Coach comes with 150+ ready to use Elementor templates. Install the SKT Templates plugin to get started.', 'skt-nutritionist-coach'); ?></p>
            </div>
            <div class="skt-coach-clear"></div>
        </div>
    </div>
    <?php
}

if ( ! function_exists( 'skt_nutritionist_coach_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function skt_nutritionist_coach_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

define('SKT_NUTRITIONIST_COACH_SKTTHEMES_URL','https://www.sktthemes.org');
define('SKT_NUTRITIONIST_COACH_SKTTHEMES_PRO_THEME_URL','https://www.sktthemes.org/shop/health-coach-wordPress-theme/');
define('SKT_NUTRITIONIST_COACH_SKTTHEMES_FREE_THEME_URL','https://www.sktthemes.org/shop/nutritionist-coach-wordpress-theme');
define('SKT_NUTRITIONIST_COACH_SKTTHEMES_THEME_DOC','https://www.sktthemesdemo.net/documentation/skt-coach-doc/');
define('SKT_NUTRITIONIST_COACH_SKTTHEMES_LIVE_DEMO','https://sktperfectdemo.com/themepack/nutritioncoach/');
define('SKT_NUTRITIONIST_COACH_SKTTHEMES_THEMES','https://www.sktthemes.org/themes');
define('SKT_NUTRITIONIST_COACH_SKTTHEMES_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

function skt_nutritionist_coach_remove_parent_function(){	 
	remove_action( 'admin_notices', 'skt_coach_activation_notice');
	remove_action( 'admin_menu', 'skt_coach_abouttheme');
	remove_action( 'customize_register', 'skt_coach_customize_register');
	remove_action( 'wp_enqueue_scripts', 'skt_coach_custom_css');
}
add_action( 'init', 'skt_nutritionist_coach_remove_parent_function' );

function skt_nutritionist_coach_remove_parent_theme_stuff() {
    remove_action( 'after_setup_theme', 'skt_coach_setup' );
}
add_action( 'after_setup_theme', 'skt_nutritionist_coach_remove_parent_theme_stuff', 0 );

function skt_nutritionist_coach_unregister_widgets_area(){
	unregister_sidebar( 'fc-1' );
}
add_action( 'widgets_init', 'skt_nutritionist_coach_unregister_widgets_area', 11 );

require_once get_stylesheet_directory() . '/inc/about-themes.php';  
require_once get_stylesheet_directory() . '/inc/customizer.php';
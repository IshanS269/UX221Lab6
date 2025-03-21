<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_soccer_sports_dismissed_notice_handler', 'soccer_sports_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function soccer_sports_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function soccer_sports_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {?>

            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_soccer-sports-guide-page') {
             $soccer_sports_comments_theme = wp_get_theme(); ?>
            <div class="soccer-sports-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="soccer-sports-notice">
				<div class="soccer-sports-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'soccer-sports'); ?>">
				</div>
				<div class="soccer-sports-notice-content">
					<div class="soccer-sports-notice-heading"><?php esc_html_e('Thanks for installing ','soccer-sports'); ?><?php echo esc_html( $soccer_sports_comments_theme ); ?></div>
					<p><?php printf(__('To avail the benefits of the premium edition, kindly click on <a href="%s">More Options</a>.', 'soccer-sports'), esc_url(admin_url('themes.php?page=soccer-sports-guide-page'))); ?></p>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'soccer_sports_deprecated_hook_admin_notice' );

function soccer_sports_admin_enqueue_scripts() {
	wp_enqueue_style( 'soccer-sports-admin-style', esc_url( get_template_directory_uri() ).'/assets/css/main.css' );
	wp_enqueue_script( 'soccer-sports-admin-script', get_template_directory_uri() . '/assets/js/soccer-sports-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'soccer-sports-admin-script', 'soccer_sports_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'soccer_sports_admin_enqueue_scripts' );

add_action( 'admin_menu', 'soccer_sports_getting_started' );
function soccer_sports_getting_started() {
	add_theme_page( esc_html__('Get Started', 'soccer-sports'), esc_html__('Get Started', 'soccer-sports'), 'edit_theme_options', 'soccer-sports-guide-page', 'soccer_sports_test_guide');
}

if ( ! defined( 'SOCCER_SPORTS_DOCS_FREE' ) ) {
define('SOCCER_SPORTS_DOCS_FREE',__('https://demo.misbahwp.com/docs/soccer-sports-free-docs/','soccer-sports'));
}
if ( ! defined( 'SOCCER_SPORTS_DOCS_PRO' ) ) {
define('SOCCER_SPORTS_DOCS_PRO',__('https://demo.misbahwp.com/docs/soccer-sports-pro-docs/','soccer-sports'));
}
if ( ! defined( 'SOCCER_SPORTS_BUY_NOW' ) ) {
define('SOCCER_SPORTS_BUY_NOW',__('https://www.misbahwp.com/products/soccer-wordpress-theme','soccer-sports'));
}
if ( ! defined( 'SOCCER_SPORTS_SUPPORT_FREE' ) ) {
define('SOCCER_SPORTS_SUPPORT_FREE',__('https://wordpress.org/support/theme/soccer-sports','soccer-sports'));
}
if ( ! defined( 'SOCCER_SPORTS_REVIEW_FREE' ) ) {
define('SOCCER_SPORTS_REVIEW_FREE',__('https://wordpress.org/support/theme/soccer-sports/reviews/#new-post','soccer-sports'));
}
if ( ! defined( 'SOCCER_SPORTS_DEMO_PRO' ) ) {
define('SOCCER_SPORTS_DEMO_PRO',__('https://demo.misbahwp.com/soccer-sports/','soccer-sports'));
}
if( ! defined( 'SOCCER_SPORTS_THEME_BUNDLE' ) ) {
define('SOCCER_SPORTS_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','soccer-sports'));
}

function soccer_sports_test_guide() { ?>
	<?php $soccer_sports_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( SOCCER_SPORTS_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'soccer-sports' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'soccer-sports' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( SOCCER_SPORTS_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'soccer-sports' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( SOCCER_SPORTS_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'soccer-sports' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','soccer-sports'); ?><?php echo esc_html( $soccer_sports_theme ); ?>  <span><?php esc_html_e('Version: ', 'soccer-sports'); ?><?php echo esc_html($soccer_sports_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $soccer_sports_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$soccer_sports_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $soccer_sports_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'soccer-sports' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','soccer-sports'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( SOCCER_SPORTS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'soccer-sports' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( SOCCER_SPORTS_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'soccer-sports' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( SOCCER_SPORTS_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'soccer-sports' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'soccer-sports' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $89."','soccer-sports'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','soccer-sports'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','soccer-sports'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( SOCCER_SPORTS_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'soccer-sports' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','soccer-sports'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','soccer-sports'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','soccer-sports'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','soccer-sports'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>
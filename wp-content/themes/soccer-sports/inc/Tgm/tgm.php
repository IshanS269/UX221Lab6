<?php

require get_theme_file_path( '/inc/Tgm/class-tgm-plugin-activation.php' );
/**
 * Recommended plugins.
 */
function soccer_sports_register_recommended_plugins() {
	$plugins = array(		
		array(
			'name'      => esc_html__( 'WooCommerce', 'soccer-sports' ),
			'slug'      => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'soccer_sports_register_recommended_plugins' );
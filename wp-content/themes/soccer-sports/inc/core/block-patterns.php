<?php
/**
 * Block Patterns
 *
 * @since 1.0.0
 */

/**
 * Registers pattern categories for Soccer Sports
 *
 * @since 1.0.0
 *
 * @return void
 */
function soccer_sports_register_pattern_category() {
	$block_pattern_categories = array(
		'banner'      => array( 'label' => __( 'Soccer Sports Patterns', 'soccer-sports' ) ),
		'product'  => array( 'label' => __( 'Product', 'soccer-sports' ) ),
	);

	$block_pattern_categories = apply_filters( 'soccer_sports_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}		
	}
}
add_action( 'init', 'soccer_sports_register_pattern_category', 9 );



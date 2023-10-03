<?php
/*
 * Functions
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function fab_awpha_render_fab() {

	// Get options
	$fab_options 	= get_option( 'fab_awpha', array() );
	//enabled
	$enabled		= $fab_options['enabled'];
	// not_in
	$not_in_string	= $fab_options['not_in'];
	$not_in			= array_map('trim', explode(',', $not_in_string));

	if ( $enabled && is_page() && !is_page( $not_in ) ) {
		fab_awpha_template_v2( $fab_options );
	}
}
add_action( 'wp_footer', 'fab_awpha_render_fab' );

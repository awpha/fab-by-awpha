<?php
/*
 * Enqueue styles and scripts
 * fab_awpha
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function fab_awpha_enqueue_scripts() {

	// Get options
	$fab_options 	= get_option( 'fab_awpha', array() );
	//enabled
	$enabled		= $fab_options['enabled'];
	// not_in
	$not_in_string	= $fab_options['not_in'];
	$not_in			= array_map('trim', explode(',', $not_in_string));

	if ( $enabled && is_page() && !is_page( $not_in ) ) {
		// STYLES
		wp_enqueue_style( 'fab_awpha_materialv2', FAB_AWPHA_PLUGIN_URL . 'public/css/fab.material.v2.css', array(), '1.0.0' );
		// SCRIPTS
		//wp_enqueue_script( 'fab_awpha', FAB_AWPHA_PLUGIN_URL . 'public/js/fab_awpha.js', array(), '1.0.0', true );
	}
}
add_action('wp_enqueue_scripts', 'fab_awpha_enqueue_scripts');
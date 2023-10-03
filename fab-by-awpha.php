<?php
/*
 * Plugin Name: FAB (Floating Action Button)
 * Plugin URI: http://awpha.com.br
 * Description: Display a FAB (Floating Action Button) on your pages.
 * Version: 1.0.0
 * Author: Awpha
 * Author URI: http://awpha.com.br
 * License: GPLv2 or later
 * Domain Path: /languages/
 * Text Domain: fab_awpha
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Global variables
 */
define( 'FAB_AWPHA_PLUGIN_PATH', plugin_dir_path( __FILE__ ) ); // define the absolute plugin path for includes
define( 'FAB_AWPHA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );   // define the plugin url for use in enqueue

/**
 * Includes - keep it modular
 */
include( FAB_AWPHA_PLUGIN_PATH . 'includes/functions.php' );         // 
include( FAB_AWPHA_PLUGIN_PATH . 'includes/templates/fab_material_v2.php' );         // 
include( FAB_AWPHA_PLUGIN_PATH . 'includes/admin.php' );             // 
include( FAB_AWPHA_PLUGIN_PATH . 'includes/enqueue.php' );           //

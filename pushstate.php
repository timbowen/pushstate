<?php
/*
 * Plugin Name: pushstate
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: pushstate
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-pushstate.php' );
require_once( 'includes/class-pushstate-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-pushstate-admin-api.php' );
require_once( 'includes/lib/class-pushstate-post-type.php' );
require_once( 'includes/lib/class-pushstate-taxonomy.php' );

/**
 * Returns the main instance of pushstate to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object pushstate
 */
function pushstate () {
	$instance = pushstate::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = pushstate_Settings::instance( $instance );
	}

	return $instance;
}

pushstate();
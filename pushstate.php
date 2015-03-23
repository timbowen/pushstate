<?php
/*
 * Plugin Name: AJAX Pushstate
 * Version: 0.9
 * Plugin URI: http://www.joinerylabs.com/
 * Description: Asynchronous loading for Wordpress.
 * Author: Trip Grass
 * Author URI: http://www.joinerylabs.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: ajax-pushstate
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Trip Grass
 * @since 0.9.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-pushstate.php' );
require_once( 'includes/class-pushstate-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-pushstate-post-type.php' );
require_once( 'includes/lib/class-pushstate-taxonomy.php' );
if(is_admin()){
	require_once( 'includes/lib/class-pushstate-admin.php' );
}
else{
	require_once( 'includes/lib/class-pushstate-front.php' );
}

/**
 * Returns the main instance of pushstate to prevent the need to use globals.
 *
 * @since  0.9.0
 * @return object pushstate
 */
function pushstate () {
	$instance = pushstate::instance( __FILE__, '0.9.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = pushstate_Settings::instance( $instance );
	}

	return $instance;
}

pushstate();

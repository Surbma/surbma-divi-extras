<?php

/*
Plugin Name: Surbma - Divi Extras
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Useful modifications for the Divi Theme.

Version: 2.1.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-divi-extras
Domain Path: /languages/
*/

// Localization
function surbma_divi_extras_init() {
	load_plugin_textdomain( 'surbma-divi-extras', false, dirname( plugin_basename( __FILE__ ) . '/languages/' ) );
}
add_action( 'init', 'surbma_divi_extras_init' );

// Enqueue the css file
function surbma_divi_extras_enqueue_scripts() {
	wp_enqueue_style( 'surbma-divi-extra-styles', plugins_url( '', __FILE__ ) . '/css/surbma-divi-extras.css', false, '2.1.0' );
}
add_action( 'wp_enqueue_scripts', 'surbma_divi_extras_enqueue_scripts', 9999 );

// Remove comment form allowed tags
function surbma_divi_extras_remove_comment_form_allowed_tags( $defaults ) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}
add_filter( 'comment_form_defaults', 'surbma_divi_extras_remove_comment_form_allowed_tags' );


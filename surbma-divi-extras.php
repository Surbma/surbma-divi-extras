<?php

/*
Plugin Name: Surbma - Divi Extras
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Useful modifications for the Divi Theme.

Version: 2.5.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-divi-extras
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_divi_extras_init() {
	load_plugin_textdomain( 'surbma-divi-extras', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_divi_extras_init' );

// Enqueue the css file
function surbma_divi_extras_enqueue_scripts() {
	if ( wp_basename( get_bloginfo( 'template_directory' ) ) == 'Divi' ) {
		wp_enqueue_style( 'surbma-divi-extra-styles', plugins_url( '', __FILE__ ) . '/css/surbma-divi-extras.css', false, '2.4.0' );

		$accent_color = esc_html( et_get_option( 'accent_color' ) );
		$custom_css = "li.featured-menu a,li.featured-menu a:hover{background-color:{$accent_color};}";
		wp_add_inline_style( 'surbma-divi-extra-styles', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'surbma_divi_extras_enqueue_scripts', 9999 );

// Remove comment form allowed tags
function surbma_divi_extras_remove_comment_form_allowed_tags( $defaults ) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}
add_filter( 'comment_form_defaults', 'surbma_divi_extras_remove_comment_form_allowed_tags' );


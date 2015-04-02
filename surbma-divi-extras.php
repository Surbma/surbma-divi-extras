<?php

/*
Plugin Name: Surbma - Divi Extras
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Useful modifications for the Divi Theme.

Version: 2.2.4

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-divi-extras
Domain Path: /languages/
*/

// Localization
function surbma_divi_extras_init() {
	load_plugin_textdomain( 'surbma-divi-extras', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_divi_extras_init' );

// Enqueue the css file
function surbma_divi_extras_enqueue_scripts() {
	wp_enqueue_style( 'surbma-divi-extra-styles', plugins_url( '', __FILE__ ) . '/css/surbma-divi-extras.css', false, '2.1.1' );

	$accent_color = esc_html( et_get_option( 'accent_color', '#2EA3F2' ) );
	$custom_css = "body .gform_wrapper .gform_footer .button,body .gform_wrapper .gform_page_footer .button{color: {$accent_color};border-color: {$accent_color};}";
	wp_add_inline_style( 'surbma-divi-extra-styles', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'surbma_divi_extras_enqueue_scripts', 9999 );

// Remove comment form allowed tags
function surbma_divi_extras_remove_comment_form_allowed_tags( $defaults ) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}
add_filter( 'comment_form_defaults', 'surbma_divi_extras_remove_comment_form_allowed_tags' );


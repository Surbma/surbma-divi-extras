<?php

/*
Plugin Name: Surbma - Divi Extras
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Useful modifications for the Divi Theme.

Version: 3.1.1

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-divi-extras
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) die( 'Good try! :)' );

// Localization
function surbma_divi_extras_init() {
	load_plugin_textdomain( 'surbma-divi-extras', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_divi_extras_init' );

// Enqueue the css file
function surbma_divi_extras_enqueue_scripts() {
	if ( wp_basename( get_bloginfo( 'template_directory' ) ) == 'Divi' ) {
		wp_enqueue_style( 'surbma-divi-extra-styles', plugins_url( '', __FILE__ ) . '/css/surbma-divi-extras.css', false, '3.1.1' );

		$accent_color = esc_attr( et_get_option( 'accent_color', '#2ea3f2' ) );
		$menu_spacing = esc_attr( ceil( et_get_option( 'menu_height', '66' ) / 2 ) - 15 );

		$custom_css = "#main-header .featured-menu a,#main-header .featured-menu a:hover{background-color:{$accent_color} !important;}";
		$custom_css .= "@media only screen and (min-width:981px){body.et_header_style_left #et-top-navigation{padding-top:{$menu_spacing}px;}#main-header:not(.et-fixed-header) #top-menu .featured-menu>a{margin-bottom:{$menu_spacing}px;}}";
		if ( et_get_option( 'show_search_icon' ) != '1' ) {
			$custom_css .= "@media all and (max-width:980px){.et_header_style_left #logo, .et_header_style_split #logo {max-width:80%;}}";
		}

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

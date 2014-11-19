<?php

/*
Plugin Name: Surbma - Divi extras
Plugin URI: http://surbma.hu/bovitmenyek/
Description: Extra módosítások a Divi sablonhoz
Version: 1.3.0
Author: Surbma
Author URI: http://surbma.hu/
License: GPL2
*/

function surbma_divi_extras_enqueue_scripts() {
	wp_enqueue_style( 'surbma-divi-extras', plugins_url( '', __FILE__ ) . '/surbma-divi-extras.css', false, '1.3.0' );
}
add_action( 'wp_enqueue_scripts', 'surbma_divi_extras_enqueue_scripts', 9999 );

//* Remove comment form allowed tags
function surbma_divi_remove_comment_form_allowed_tags( $defaults ) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}
add_filter( 'comment_form_defaults', 'surbma_divi_remove_comment_form_allowed_tags' );


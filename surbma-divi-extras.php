<?php

/*
Plugin Name: Surbma - Divi extrák
Description: Extra módosítások a Divi sablonhoz
Version: 1.1.0
Author: Surbma
Author URI: http://surbma.hu/
License: GPL2
*/

function surbma_divi_extras_enqueue_scripts() {
	wp_enqueue_style( 'surbma-divi-extras', plugins_url( '', __FILE__ ) . '/surbma-divi-extras.css', false, '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'surbma_divi_extras_enqueue_scripts', 9999 );


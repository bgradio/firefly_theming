<?php

### STYLES AND SCRIPTS ###
function firefly_register_styles_scripts() {
	wp_register_style( 'firefly-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'firefly-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'firefly_register_styles_scripts' );

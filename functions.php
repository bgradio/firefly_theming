<?php
### DEFINES ###
define( 'FIREFLY_TEMPLATE_DIR', get_template_directory() );
define( 'FIREFLY_STYLESHEET_DIR', get_stylesheet_directory() );
define('INCLUDES', FIREFLY_TEMPLATE_DIR . '/includes');

### INCLUDES ###

require_once INCLUDES . '/widgets.php';

### MENUS ###
function firefly_register_menus() {
    register_nav_menus(
        array(
            'main-nav' => __( 'Main Navigation' ),
            'footer-nav,' => __( 'Footer Navigation' )
        )
    );
}

add_action( 'init', 'firefly_register_menus' );

### STYLES AND SCRIPTS ###
function firefly_register_styles_scripts() {
	wp_register_style( 'firefly-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'firefly-style', get_stylesheet_uri() );

    wp_enqueue_script( 'anime', get_template_directory_uri() . '/js/anime.min.js' );
    wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-3.3.1.min.js' );
    wp_enqueue_script( 'firefly-script', get_template_directory_uri() . '/js/script.js' );
}

add_action( 'wp_enqueue_scripts', 'firefly_register_styles_scripts' );

### CUSTOMS ###
function firefly_footer_copyright() {
    $site = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';
    $firefly_copyright_text = sprintf(__('Copyright &copy; %1$s %2$s.', 'firefly-theming'), date('Y'), $site );

    $firefly_copyright = '<div class="ft__copyright">' . $firefly_copyright_text . '</div>';
    echo $firefly_copyright;
}

add_action( 'firefly_footer_copyright_bar', 'firefly_footer_copyright', 20 );

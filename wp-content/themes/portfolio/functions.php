<?php


function load_stylesheets() {
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap-css');

    wp_register_style('loading-bar-css', get_template_directory_uri() . '/assets/vendors/loading-bar/css/loading-bar.min.css', array(), false, 'all' );
    wp_enqueue_style('loading-bar-css');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all' );
    wp_enqueue_style('style');
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );


function load_scripts() {
    wp_deregister_script('jquery');

    wp_register_script('jQuery', get_template_directory_uri() . '/assets/vendors/bootstrap/js/jquery.js', '', 1, true );
    wp_enqueue_script('jQuery');

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.min.js', '', 1, true );
    wp_enqueue_script('bootstrap-js');

    wp_register_script('loading-bar-js', get_template_directory_uri() . '/assets/vendors/loading-bar/js/loading-bar.min.js', '', 1, true );
    wp_enqueue_script('loading-bar-js');
}

add_action('wp_enqueue_scripts', 'load_scripts');


add_theme_support('menus');

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
    array(
        'menu-1' => __( 'Primary', 'theme' ),
        'footer' => __( 'Footer Menu', 'theme' ),
        'social' => __( 'Social Links Menu', 'theme' ),
    )
);
<?php
// Tell WordPress we support menus
function usr_setup_menus() {
    register_nav_menu('primary-menu', __('Primary Menu'));
}

add_action('init', 'usr_setup_menus');

// Tell WordPress we support some extra features
function usr_setup_theme_supported_features() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script') );
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'usr_setup_theme_supported_features');

// Add our CSS stylesheets
function usr_enqueue_style() {
    //wp_enqueue_style( 'bulma', 'https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css' );
    wp_enqueue_style('usr', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'usr_enqueue_style');

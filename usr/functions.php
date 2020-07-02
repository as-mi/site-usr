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
    // Add Bootstrap
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    // These are scripts, but they're required for Bootstrap
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery', 'popper'));

    // Add our own style
    wp_enqueue_style('usr', get_stylesheet_uri(), array('bootstrap'));
}

add_action('wp_enqueue_scripts', 'usr_enqueue_style');

// Add a default full-size background image
$args = array(
    'default-color' => '0000ff',
    'default-image' => get_template_directory_uri() . '/assets/images/darker_background.jpg',
    'default-repeat' => 'no-repeat',
	'default-position-x' => 'center',
    'default-position-y' => 'center',
    'default-size' => 'cover',
	'default-attachment' => 'fixed',
);
add_theme_support('custom-background', $args);

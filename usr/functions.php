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
    add_theme_support( 'post-thumbnails' ); 
}

add_action('after_setup_theme', 'usr_setup_theme_supported_features');

// Add our CSS stylesheets
function usr_enqueue_style() {
    // Add PureCSS modules
    wp_enqueue_style('purecss', 'https://unpkg.com/purecss@2.0.3/build/pure-min.css');

    // Add Flickity
    wp_enqueue_style('flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css');

    // Add own stylesheet
    wp_enqueue_style('main', get_stylesheet_uri(), array('purecss'));

    // Add extra stylesheet depending on page
    if(is_front_page()){
        wp_enqueue_style('front-page', get_template_directory_uri() . '/assets/css/front-page.css', array('purecss', 'main', 'flickity'));
    }
    if(is_page('cons-dir')){
        wp_enqueue_style('cons-dir', get_template_directory_uri() . '/assets/css/cons-dir.css', array('purecss', 'main'));
    }
    if(is_page('structura')){
        wp_enqueue_style('structura', get_template_directory_uri() . '/assets/css/structura.css', array('purecss', 'main'));
    }
    if(is_page('despre')){
        wp_enqueue_style('despre', get_template_directory_uri() . '/assets/css/despre.css', array('purecss', 'main'));
    }
    if(is_page('statut')){
        wp_enqueue_style('statut', get_template_directory_uri() . '/assets/css/statut.css', array('purecss', 'main'));
    }
    if(is_page_template('page-templates/prez-pers.php')){
        wp_enqueue_style('prez-pers', get_template_directory_uri() . '/assets/css/prez-pers.css', array('purecss', 'main', 'flickity'));
    }
}

add_action('wp_enqueue_scripts', 'usr_enqueue_style');

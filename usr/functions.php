<?php

require_once(get_template_directory() . '/inc/admin/settings.php');
if (!session_id()) {
    session_start();
}
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
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'usr_setup_theme_supported_features');

// Add our CSS stylesheets
function usr_enqueue_style() {
    // Add PureCSS modules
    wp_enqueue_style('purecss', get_template_directory_uri() . '/assets/css/pure-min.css');
    wp_enqueue_style('pure-grid', get_template_directory_uri() . '/assets/css/grids-responsive-min.css');

    // Add own stylesheet
    wp_enqueue_style('main', get_stylesheet_uri(), array('purecss'));
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/scripts/flickity.pkgd.min.js');

    // Add extra stylesheet depending on page
    if(is_front_page()){
        wp_enqueue_style('front-page', get_template_directory_uri() . '/assets/css/front-page.css', array('purecss', 'main'));
    }
    else if(is_page('cons-dir')){
        wp_enqueue_style('cons-dir', get_template_directory_uri() . '/assets/css/cons-dir.css', array('purecss', 'main'));
    }
    else if(is_page('structura')){
        wp_enqueue_style('structura', get_template_directory_uri() . '/assets/css/structura.css', array('purecss', 'main'));
    }
    else if (is_page('despre')) {
        wp_enqueue_style('despre', get_template_directory_uri() . '/assets/css/about.css', array('purecss', 'pure-grid', 'main'));
    }
    else if(is_page('statut')){
        wp_enqueue_style('statut', get_template_directory_uri() . '/assets/css/statut.css', array('purecss', 'main'));
    }
    else if(is_page('parteneri')){
        wp_enqueue_style('parteneri', get_template_directory_uri() . '/assets/css/parteneri.css', array('purecss', 'main'));
    }
    else if(is_page('contact')){
        wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array('purecss', 'main'));
    }
    else if(is_page_template('page-templates/prez-pers.php')){
        wp_enqueue_style('prez-pers', get_template_directory_uri() . '/assets/css/prez-pers.css', array('purecss', 'main'));
    }
    else{
        wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css', array('purecss', 'main'));
    }
}

add_action('wp_enqueue_scripts', 'usr_enqueue_style');

// Add custom post types to WordPress
function usr_post_types(){
    register_post_type( 'projects', array(
        "public" => true,
        "show_in_rest" => true,
        "labels" => array(
          "name" => "Proiecte",
          "add_new_item" => "Add Project"
        ),
        "menu_icon" => "dashicons-book-alt"
      ));

      register_post_type( 'parteners', array(
        "public" => true,
        "show_in_rest" => true,
        "labels" => array(
          "name" => "Parteneri",
          "add_new_item" => "Add Partner"
        ),
        "menu_icon" => "dashicons-businessperson",
        'supports' => [ 'title', 'editor', 'thumbnail' ],
        'taxonomies' => ['post_tag']
      ));

      register_post_type( 'zones', array(
        "public" => true,
        "show_in_rest" => true,
        "label" => "Zone",
        "menu_icon" => "dashicons-admin-site",
        'supports' => [ 'title', 'editor', 'thumbnail' ],
        'taxonomies' => ['post_tag']
      ));
}

add_action('init', 'usr_post_types');

<?php

// Theme supports
function tholsson_theme_support()
{
    // Support for featured image
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'tholsson_theme_support');

// Enqueue styles
function tholsson_register_styles()
{
    $uri = get_template_directory_uri();
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('tholsson_bootstrap', $uri . '/css/bootstrap.css');
    wp_enqueue_style('tholsson_font-awesome', $uri . '/css/font-awesome.css');
    wp_enqueue_style('tholsson_style', $uri . '/css/style.css', array(), $version);
}
add_action('wp_enqueue_scripts', 'tholsson_register_styles');

// Enqueue scripts
function tholsson_register_scripts()
{
    $uri = get_template_directory_uri();
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('tholsson_script', $uri . '/js/script.js', array('jquery'), $version, true);
}
add_action('wp_enqueue_scripts', 'tholsson_register_scripts');

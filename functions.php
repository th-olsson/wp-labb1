<?php

// Theme supports
function tholsson_theme_support()
{
    // Support for featured image
    add_theme_support('post-thumbnails');
}


// Menus
function tholsson_menus()
{
    $locations = array(
        'nav' => "Top Navigation Bar",
        'subpages' => 'Subpages Menu',
        'sidebar' => 'Sidebar Menu'
    );

    register_nav_menus($locations);
}
add_action('init', 'tholsson_menus');
add_action('after_setup_theme', 'tholsson_theme_support');

// Register sidebars
function tholsson_register_sidebars()
{
    // Footer
    register_sidebars(3, array('name' => 'Footer %d', 'before_widget' => '', 'after_widget' => ''));
    // Sidebar
    register_sidebar(
        array(
            'name' => 'Sidebar Menu',
            'id' => 'sidebar-menu',
            'before_widget' => '',
            'after_widget' => '',
            'before_sidebar' => '<aside id="secondary" class="col-xs-12 col-md-3"><div id="sidebar">',
            'after_sidebar' => '</div></aside>'
        )
    );
}
add_action('widgets_init', 'tholsson_register_sidebars');

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

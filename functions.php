<?php

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');
register_nav_menu('header', 'En tête du menu');

function wpbootstrap_styles_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);
    wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

function eatwell_menu_class($classes) {
    $classes[] = 'nav-item';
    return $classes;
}

function eatwell_menu_link_class($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_filter('nav_menu_css_class', 'eatwell_menu_class');
add_filter('nav_menu_link_attributes', 'eatwell_menu_link_class');

add_filter('widget_text', 'do_shortcode');

function create_post_type() {
    register_post_type('blog', [
        'labels' => [
            'name' => __('Blog'),
            'singular_name' => __('Blog'),
        ],
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'blog'],
        'menu_icon' => 'dashicons-clipboard',
    ]);
}
add_action('init', 'create_post_type');

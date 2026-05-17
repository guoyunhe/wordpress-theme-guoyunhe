<?php

if (!defined('GUOYUNHE_THEME_VERSION')) {
    define('GUOYUNHE_THEME_VERSION', wp_get_theme()->get('Version'));
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    load_theme_textdomain('guoyunhe', get_template_directory() . '/languages');

    register_nav_menus([
        'mobile-menu' => __('Mobile Menu', 'guoyunhe'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('guoyunhe-style', get_stylesheet_uri(), [], GUOYUNHE_THEME_VERSION);
});

add_action('wp_head', function () {
    $admin_bar_height = is_admin_bar_showing() ? '32px' : '0px';
    echo '<style>:root { --wp-admin-bar-height: ' . esc_attr($admin_bar_height) . '; }</style>';
}, 1);

add_action('widgets_init', function () {
    register_sidebar([
        'name' => __('Primary Sidebar', 'guoyunhe'),
        'id' => 'primary-sidebar',
        'description' => __('Widgets in this area will be shown on the main blog page sidebar.', 'guoyunhe'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
});

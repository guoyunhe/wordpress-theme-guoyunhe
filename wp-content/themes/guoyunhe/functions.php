<?php

if (!defined('GUOYUNHE_THEME_VERSION')) {
    define('GUOYUNHE_THEME_VERSION', wp_get_theme()->get('Version'));
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('guoyunhe-style', get_stylesheet_uri(), [], GUOYUNHE_THEME_VERSION);
});

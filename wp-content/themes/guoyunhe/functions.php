<?php

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function () {
    static $theme_version = null;
    if ($theme_version === null) {
        $theme_version = wp_get_theme()->get('Version');
    }

    wp_enqueue_style('guoyunhe-style', get_stylesheet_uri(), [], $theme_version);
});

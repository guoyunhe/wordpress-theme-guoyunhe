<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class('crt-svg-filter'); ?>>
    <?php wp_body_open(); ?>
    <div id="page">
        <!-- Mobile Header -->
        <header class="site-header-mobile" role="banner">
            <button class="menu-toggle" aria-label="<?php esc_attr_e('Toggle Menu', 'guoyunhe'); ?>" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <h1 class="site-title-mobile">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <button class="search-toggle" aria-label="<?php esc_attr_e('Toggle Search', 'guoyunhe'); ?>">
                &#128269;
            </button>
        </header>

        <!-- Mobile Search Panel -->
        <div class="search-panel" id="mobile-search">
            <?php get_search_form(); ?>
        </div>

        <div class="site-sidebar-backdrop" aria-hidden="true"></div>

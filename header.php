<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page">
        <!-- Desktop Sidebar -->
        <aside class="site-sidebar" role="complementary" aria-label="<?php esc_attr_e('Site Info', 'guoyunhe'); ?>">
            <div class="sidebar-content">
                <div class="site-branding-desktop">
                    <h1 class="site-title-desktop">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <p class="site-description-desktop"><?php bloginfo('description'); ?></p>
                </div>
            </div>
            <div class="sidebar-footer">
                <p class="copyright">&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?></p>
            </div>
        </aside>

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

        <!-- Mobile Navigation Menu -->
        <nav class="mobile-menu" id="mobile-menu" aria-label="<?php esc_attr_e('Mobile Navigation', 'guoyunhe'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'mobile-menu',
                'fallback_cb' => 'wp_page_menu',
                'depth' => 2,
                'container' => false,
            ]);
            ?>
        </nav>

        <div class="mobile-menu-backdrop" aria-hidden="true"></div>

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
        <nav class="sidebar-navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'guoyunhe'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'fallback_cb' => 'wp_page_menu',
                'depth' => 2,
                'container' => false,
            ]);
            ?>
        </nav>
    </div>
    <div class="sidebar-footer">
        <p class="copyright">&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?></p>
    </div>
</aside>
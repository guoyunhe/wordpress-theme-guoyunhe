<?php
/**
 * Desktop Sidebar
 *
 * Displays the left sidebar with site information on desktop views.
 *
 * @package Guoyunhe
 */

?>
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

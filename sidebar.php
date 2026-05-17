<?php
/**
 * Primary Sidebar
 *
 * Displays the right sidebar with widgets on blog pages.
 *
 * @package Guoyunhe
 */

?>
<aside class="sidebar-column" aria-label="<?php esc_attr_e('Sidebar', 'guoyunhe'); ?>">
    <?php if (is_active_sidebar('primary-sidebar')) : ?>
        <?php dynamic_sidebar('primary-sidebar'); ?>
    <?php else : ?>
        <section class="widget widget_recent_entries">
            <h3 class="widget-title"><?php esc_html_e('Recent Posts', 'guoyunhe'); ?></h3>
            <ul>
                <?php
                wp_get_archives([
                    'type' => 'postbypost',
                    'limit' => 5,
                ]);
                ?>
            </ul>
        </section>

        <section class="widget widget_categories">
            <h3 class="widget-title"><?php esc_html_e('Categories', 'guoyunhe'); ?></h3>
            <ul>
                <?php wp_list_categories(['title_li' => '']); ?>
            </ul>
        </section>
    <?php endif; ?>
</aside>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<main id="main-content">
    <?php if (have_posts()) : ?>
        <div class="post-card-list">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('parts/content', 'card'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'guoyunhe'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

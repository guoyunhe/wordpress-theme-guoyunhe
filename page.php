<?php get_header(); ?>

<?php get_sidebar(); ?>

<main id="main-content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('post'); ?>>
                <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <?php the_content(); ?>
            </article>

            <?php if (comments_open() || get_comments_number()) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('Page not found.', 'guoyunhe'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

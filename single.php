<?php get_header(); ?>

<?php get_sidebar(); ?>

<main id="main-content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('post'); ?>>
                <header>
                    <h1><?php the_title(); ?></h1>
                    <p class="post-meta">
                        <?php echo esc_html(get_the_date()); ?>
                    </p>
                </header>
                <?php the_content(); ?>
            </article>

            <?php if (comments_open() || get_comments_number()) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

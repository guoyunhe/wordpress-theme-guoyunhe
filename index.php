<?php get_header(); ?>

<?php get_sidebar(); ?>

<main id="main-content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="post">
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'guoyunhe'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

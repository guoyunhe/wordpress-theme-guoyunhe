<article <?php post_class('post-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a class="post-card-thumbnail" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
            <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
        </a>
    <?php endif; ?>
    <div class="post-card-body">
        <h2 class="post-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p class="post-card-meta">
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date()); ?>
            </time>
        </p>
        <div class="post-card-excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>

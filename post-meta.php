<?php
$categories = get_the_category_list(', ');
$tags = get_the_tag_list('', ', ');
$comments_count = get_comments_number();
$show_comments = comments_open() || $comments_count;
?>

<div class="post-meta">
    <span class="post-meta-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="post-meta-icon" viewBox="0 0 16 16" aria-hidden="true">
            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
        </svg>
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
            <?php echo esc_html(get_the_date()); ?>
        </time>
    </span>

    <?php if ($categories) : ?>
        <span class="post-meta-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="post-meta-icon" viewBox="0 0 16 16" aria-hidden="true">
                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
            </svg>
            <?php echo wp_kses_post($categories); ?>
        </span>
    <?php endif; ?>

    <?php if ($tags) : ?>
        <span class="post-meta-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="post-meta-icon" viewBox="0 0 16 16" aria-hidden="true">
                <path d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z"/>
                <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z"/>
            </svg>
            <?php echo wp_kses_post($tags); ?>
        </span>
    <?php endif; ?>

    <?php if ($show_comments) : ?>
        <span class="post-meta-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="post-meta-icon" viewBox="0 0 16 16" aria-hidden="true">
                <path d="M8 3C4.686 3 2 5.239 2 8c0 1.177.49 2.259 1.318 3.108C3.122 12.036 2.5 13.5 2.5 13.5s1.5-.5 2.5-1.5A7.8 7.8 0 0 0 8 13c3.314 0 6-2.239 6-5s-2.686-5-6-5m0-1c3.866 0 7 2.686 7 6 0 3.314-3.134 6-7 6a8.8 8.8 0 0 1-2.828-.458C3.705 14.777 1.5 15.5 1.5 15.5a.5.5 0 0 1-.606-.606s.723-2.205 1.958-3.672A5.9 5.9 0 0 1 1 8c0-3.314 3.134-6 7-6"/>
            </svg>
            <a href="<?php echo esc_url(get_comments_link()); ?>">
                <?php echo esc_html(get_comments_number_text(__('0 comments', 'guoyunhe'), __('1 comment', 'guoyunhe'), __('% comments', 'guoyunhe'))); ?>
            </a>
        </span>
    <?php endif; ?>
</div>

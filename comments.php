<?php
if (post_password_required()) {
    return;
}
?>

<section id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <ol class="comment-list">
            <?php
            wp_list_comments([
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 48,
            ]);
            ?>
        </ol>

        <?php the_comments_navigation(); ?>
    <?php endif; ?>

    <?php comment_form(); ?>
</section>
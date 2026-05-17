<?php get_header(); ?>
<main id="main-content" class="crt-svg-filter">
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

<svg class="crt-filter-defs" aria-hidden="true" focusable="false" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <filter id="crt-barrel-distortion" x="-3%" y="-3%" width="106%" height="106%">
            <feTurbulence type="fractalNoise" baseFrequency="0.65 0.003" numOctaves="1" seed="2" result="noise" />
            <feDisplacementMap in="SourceGraphic" in2="noise" scale="1.4" xChannelSelector="R" yChannelSelector="G" result="distorted" />
            <feComponentTransfer in="distorted" result="toneAdjusted">
                <feFuncR type="linear" slope="1.06" intercept="-0.03" />
                <feFuncG type="linear" slope="1.06" intercept="-0.03" />
                <feFuncB type="linear" slope="1.06" intercept="-0.03" />
            </feComponentTransfer>
            <feMorphology in="SourceAlpha" operator="dilate" radius="22" result="expandedAlpha" />
            <feComposite in="expandedAlpha" in2="SourceAlpha" operator="out" result="edgeBand" />
            <feFlood flood-color="#000000" flood-opacity="0.16" result="vignetteColor" />
            <feComposite in="vignetteColor" in2="edgeBand" operator="in" result="vignette" />
            <feBlend in="toneAdjusted" in2="vignette" mode="multiply" result="finalOutput" />
            <feComposite in="finalOutput" in2="SourceGraphic" operator="over" />
        </filter>
    </defs>
</svg>

<?php get_footer(); ?>

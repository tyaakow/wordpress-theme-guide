<div <?php post_class( 'post-preview' ); ?> id="post-<?php the_ID(); ?>">

<header class="entry-header post-preview">
    <?php
    if ( is_singular() ) :
        the_title( '<h1 class="entry-title">', '</h1>' );
    else :
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;

    if ( 'post' === get_post_type() ) :
        ?>
        <div class="entry-meta post-meta">
            <?php
            bsimple_posted_on();
            bsimple_posted_by();
            ?>
        </div><!-- .entry-meta -->
    <?php endif; ?>
</header><!-- .entry-header -->

        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
            <?php
            the_post_thumbnail( 'small-list-thumb-1');
            ?>
        </a>

<div class="excerpt-item">
        <?php the_excerpt(); ?>
</div>
</div>
<?php
/**
 *
 * @package Botega_Scratch_Theme
 */

get_header(); ?>

   <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">


<?php if ( have_posts() ) : ?>

			<div class="archive-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div><!-- .archive-header -->


    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class( 'post-preview' ); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				bsimple_posted_on();
				bsimple_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
    </header><!-- .entry-header -->

    		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail( 'post-thumbnail', array(
                    'alt' => the_title_attribute( array(
                        'echo' => false,
                    ) ),
                ) );
                ?>
            </a>
    

            <?php the_excerpt(); ?>

    </div>

<?php 

endwhile;

the_posts_navigation();

endif; 

?>


</div>
<!-- /.col-lg-8.col-lg-offset-2.col-md-10.col-md-offset-1 -->


<?php get_footer(); ?>
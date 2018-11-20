<?php
/**
 *
 * @package Botega_Scratch_Theme
 */

get_header(); ?>

   <div class="col-lg-8 col-md-10">


<?php if ( have_posts() ) : ?>

			<div class="archive-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div><!-- .archive-header -->


    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post();

	
	get_template_part( 'partials/content', get_post_type() );

endwhile;

the_posts_navigation();

endif; 

?>


</div>
<!-- /.col-lg-8.col-lg-offset-2.col-md-10.col-md-offset-1 -->


<?php get_footer(); ?>
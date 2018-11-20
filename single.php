<?php
/**
 *
 * @package Botega Simple Theme
 */

get_header(); ?>

	<div class="col-lg-10 mx-auto col-md-10 col-md-offset-1 single-container">


<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'partials/content', 'single' ); ?>


<?php endwhile; // End of the loop. ?>


<?php endif; ?>

</div>
<!-- /.col-lg-8.col-lg-offset-2.col-md-10.col-md-offset-1 -->

<?php get_footer(); ?>
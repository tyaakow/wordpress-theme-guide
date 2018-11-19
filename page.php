<?php
/**
 *
 * @package Botega_Scratch_Theme
 */

get_header(); ?>

	<?php
	if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

	<div id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<div class="post-excerpt"><?php the_excerpt(); ?></div>
	</div>

	<?php endwhile;
	endif;
	?>

<?php get_footer(); ?>
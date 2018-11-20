<?php
/**
 * @package Botega_Scratch_Theme
 */

get_header(); ?>


	<div class="row">

		<?php
		if ( is_home() ) :
		get_sidebar( 'HomeSidebar2Top' );
		elseif ( is_archive() ) :
			get_sidebar( 'ArchiveSidebar2Top' );
		endif;
		?>

	</div>


	
	<div class="row">
		<?php if ( (is_home() && is_active_sidebar( 'h_s_1' )) || (is_archive() && is_active_sidebar( 'archive_sidebar_1' )) ) { ?>
			<div class="col-lg-7 col-md-9">
		<?php } else { ?> 
			<div class="col-lg-12 col-md-10 mx-auto">		
		<?php } ?>


			<?php
			if ( have_posts() ) : while ( have_posts() ): the_post(); 
						get_template_part( 'partials/content', get_post_type() );
				endwhile;
			endif;
			?>

		</div>

			<?php if ( (is_home() && is_active_sidebar( 'h_s_1' )) || (is_archive() && is_active_sidebar( 'archive_sidebar_1' )) ) { ?>
				<div class="col-lg-4 offset-lg-1 col-md-10 col-sm-12 arch- sidebar-side-cont">

			<?php }

			if ( is_home() ) :
			get_sidebar( 'HomeSidebar1' );
			elseif ( is_archive() ) :
				get_sidebar( 'ArchiveSidebar1' );
			endif;
			?>

	
			<?php if ( (is_home() && is_active_sidebar( 'h_s_1' )) || (is_archive() && is_active_sidebar( 'archive_sidebar_1' )) ) { ?>
			</div>
			<?php } ?>

	</div>



<?php


get_footer(); ?>
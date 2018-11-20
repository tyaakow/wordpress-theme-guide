<?php
/**
 * Footer template partial
 *
 * @package Botega_Scratch_Theme
 *
 */

?>


	<?php if ( is_active_sidebar( 'b_c_s' ) ) : ?>
     <div class="row b_c_s"><div class="col-lg-8 mx-auto  top-widget col-md-10 ">
    <?php	get_sidebar( 'BottomCenterSidebar' ); ?>
     </div></div>
	<?php endif; ?>

  </div>
  <!-- /.container -->



  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
     <div class="col-lg-4 col-sm-12" id="f_1">  <?php  get_sidebar( 'Footer1' ); ?> </div>
     <div class="col-lg-4 col-sm-12" id="f_2">  <?php  get_sidebar( 'Footer2' ); ?> </div>
     <div class="col-lg-4 col-sm-12" id="f_3">  <?php  get_sidebar( 'Footer3' ); ?> </div>
   
      </div><!-- /.row -->
    </div><!-- /.container -->
  </footer><!-- /footer -->
    


<?php wp_footer(); ?>

</body>
</html>

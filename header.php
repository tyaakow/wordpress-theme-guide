<?php
/**
 * The header for our theme.
 *
 * @package Botega_Scratch_Theme
 *
 */

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>



      <div class="collapse navbar-collapse" id="navbarResponsive">
      	<ul class="navbar-nav ml-auto">
          <?php wp_nav_menu(array(
            'menu' => 'Top Menu', 
            'items_wrap'=>'%3$s', 
            'container' => false,
            'list_item_class' => "nav-item",
            'link_class' => "nav-link",
            )); ?>
      	</ul>
      </div>
    </div>
  </nav>


  <?php dynamic_header(); ?>


  <div class="container">
      <div class="row">

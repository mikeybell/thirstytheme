<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="hero" id="top">
	<div class="title">
	  <h1><?php bloginfo( 'name' ); ?></h1>
	  <p class="subhead"><?php bloginfo( 'description' ); ?></p>
  	</div> <!-- /.title -->
  	<i class="fa fa-chevron-down"></i>
</div> <!-- /.hero -->

<nav>
  <?php wp_nav_menu( array(
    'container' => false,
    'theme_location' => 'primary'
  )); ?>
</nav>

<section class="beer" id="beer">
	<div class="header-box">
		<h2>Beer</h2>
	</div> <!-- /.header-box -->
	
	<div class="container">
		
	
	</div> <!-- /.container -->
</section> <!-- /.beer -->


<div class="test"></div>



<?php get_footer(); ?>
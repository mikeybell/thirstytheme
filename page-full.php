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

<!-- BEER -->

<section class="beer" id="beer">
	<div class="header-box">
		<h2>Beer</h2>
	</div> <!-- /.header-box -->
	
	<div class="container pad beer-box">
		
		<div class="six-col">
			<!-- START QUERY -->
			<?php $beerQuery = new WP_Query(
			  array(
			    'post_type'=>'beer',
			    'order'=> 'ASC'
			    )
			); ?>
			
			<!-- LOOP -->
			<?php if ($beerQuery->have_posts()): ?>
			  <?php while ($beerQuery->have_posts()): $beerQuery->the_post(); ?>
			   <!-- stuff goes here -->
			   <h3><?php the_title(); ?></h3>
				<ul class="beer-list">
					<?php while(has_sub_field('beer_names')): ?>
					<li><?php the_sub_field('beer_name'); ?> - <?php the_sub_field('percentage'); ?></li>
					<?php endwhile; ?>
				</ul>

			  <?php endwhile; ?>    
			  <?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<!-- END QUERY -->
		</div> <!-- /.six-col -->



	</div> <!-- /.container -->
</section> <!-- /.beer -->


<div class="test"></div>



<?php get_footer(); ?>
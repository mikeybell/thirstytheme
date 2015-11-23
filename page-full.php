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
	
	<div class="container pad beer-box clearfix">
		
		<div class="five-col-left">
			<!-- START QUERY -->
			<?php $beerQuery = new WP_Query(
			  array(
			    'post_type'=>'beer',
			    'order'=> 'ASC',
			    'category_name'=> 'left'
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
		</div> <!-- /.five-col-left -->


		<div class="five-col-right">
			<!-- START QUERY -->
			<?php $beerQuery = new WP_Query(
			  array(
			    'post_type'=>'beer',
			    'order'=> 'ASC',
			    'category_name'=> 'right'
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
		</div> <!-- /.five-col-right -->

	</div> <!-- /.container -->
</section> <!-- /.beer -->


<!-- COCKTAILS -->

<section class="cocktails" id="cocktails">
	<div class="header-box">
		<h2>Cocktails</h2>
	</div> <!-- /.header-box -->
	
	<div class="container pad cocktails-box clearfix">

		<div class="five-col-left">
			<!-- START QUERY -->
			<?php $cocktailQuery = new WP_Query(
			  array(
			    'post_type'=>'cocktail',
			    'order'=> 'ASC',
			    'category_name'=> 'left'
			    )
			); ?>
			
			<!-- LOOP -->
			<?php if ($cocktailQuery->have_posts()): ?>
			  <?php while ($cocktailQuery->have_posts()): $cocktailQuery->the_post(); ?>
			   <!-- stuff goes here -->
			   <h3><?php the_title(); ?></h3>
		   	
		   	<div class="cocktails-list">
		   		<?php while(has_sub_field('cocktails')): ?>
					<p class="cocktail-name"><?php the_sub_field('cocktail_name'); ?></p>
					<p class="cocktail-size"><?php the_sub_field('cocktail_size'); ?></p>
				
					<div class="cocktails-desc">
						<p><?php the_sub_field('cocktail_desc'); ?></p>
					</div> <!-- /.cocktails-desc -->

				<?php endwhile; ?>
				</div> <!-- /.cocktail-list -->

			  <?php endwhile; ?>    
			  <?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<!-- END QUERY -->
		</div> <!-- /.five-col-left -->


		<div class="five-col-right">
			<!-- START QUERY -->
			<?php $cocktailQuery = new WP_Query(
			  array(
			    'post_type'=>'cocktail',
			    'order'=> 'ASC',
			    'category_name'=> 'right'
			    )
			); ?>
			
			<!-- LOOP -->
			<?php if ($cocktailQuery->have_posts()): ?>
			  <?php while ($cocktailQuery->have_posts()): $cocktailQuery->the_post(); ?>
			   <!-- stuff goes here -->
			   <h3><?php the_title(); ?></h3>
		   	
		   	<div class="cocktails-list">
		   		<?php while(has_sub_field('cocktails')): ?>
					<p class="cocktail-name"><?php the_sub_field('cocktail_name'); ?></p>
					<p class="cocktail-size"><?php the_sub_field('cocktail_size'); ?></p>
				
					<div class="cocktails-desc">
						<p><?php the_sub_field('cocktail_desc'); ?></p>
					</div> <!-- /.cocktails-desc -->

				<?php endwhile; ?>
				</div> <!-- /.cocktail-list -->

			  <?php endwhile; ?>    
			  <?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<!-- END QUERY -->
		</div> <!-- /.five-col-right -->


		


	</div> <!-- /.container -->
</section> <!-- /.cocktails -->





<?php get_footer(); ?>
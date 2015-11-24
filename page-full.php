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

<!-- <div class="instagram">
	// <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
</div> <!-- /.instagram -->

<div id="instafeed"></div>


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
			   <p class="price"><?php the_field('price'); ?></p>
		   	
		   	<div class="cocktails-list">
		   		<?php while(has_sub_field('cocktails')): ?>
		   		<div class="namesize">
						<p class="cocktail-name"><?php the_sub_field('cocktail_name'); ?></p>
						<p class="cocktail-size"><?php the_sub_field('cocktail_size'); ?></p>
					</div> <!-- /.namesize -->
				
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
			   <p class="price"><?php the_field('price'); ?></p>
		   	
		   	<div class="cocktails-list">
		   		<?php while(has_sub_field('cocktails')): ?>
					<div class="namesize">
						<p class="cocktail-name"><?php the_sub_field('cocktail_name'); ?></p>
						<p class="cocktail-size"><?php the_sub_field('cocktail_size'); ?></p>
					</div> <!-- /.namesize -->
				
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


<!-- FOOD -->

<section class="food" id="food">
	<div class="header-box">
		<h2>Food</h2>
	</div> <!-- /.header-box -->
	
	<div class="container pad food-box clearfix">
		
		<div class="five-col-left">
			<!-- START QUERY -->
			<?php $foodQuery = new WP_Query(
			  array(
			    'post_type'=>'food',
			    'order'=> 'ASC',
			    'category_name'=> 'left'
			    )
			); ?>
			
			<!-- LOOP -->
			<?php if ($foodQuery->have_posts()): ?>
			  <?php while ($foodQuery->have_posts()): $foodQuery->the_post(); ?>
			   <!-- stuff goes here -->
			   <h3><?php the_title(); ?></h3>
			   <p class="time"><?php the_field('time'); ?></p>
		   	
		   	<div class="food-list">
		   		<?php while(has_sub_field('food')): ?>
		   		<div class="namesize">
						<p class="food-name"><?php the_sub_field('food_name'); ?></p>
						<p class="food-price"><?php the_sub_field('food_price'); ?></p>
					</div> <!-- /.namesize -->
				
					<div class="food-desc">
						<p><?php the_sub_field('food_desc'); ?></p>
					</div> <!-- /.food-desc -->

				<?php endwhile; ?>
				</div> <!-- /.food-list -->

			  <?php endwhile; ?>    
			  <?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<!-- END QUERY -->
		</div> <!-- /.five-col-left -->


		<div class="five-col-right">
			<!-- START QUERY -->
			<?php $foodQuery = new WP_Query(
			  array(
			    'post_type'=>'food',
			    'order'=> 'ASC',
			    'category_name'=> 'right'
			    )
			); ?>
			
			<!-- LOOP -->
			<?php if ($foodQuery->have_posts()): ?>
			  <?php while ($foodQuery->have_posts()): $foodQuery->the_post(); ?>
			   <!-- stuff goes here -->
			   <h3><?php the_title(); ?></h3>
			   <p class="time"><?php the_field('time'); ?></p>
		   	
		   	<div class="food-list">
		   		<?php while(has_sub_field('food')): ?>
		   		<div class="namesize">
						<p class="food-name"><?php the_sub_field('food_name'); ?></p>
						<p class="food-price"><?php the_sub_field('food_price'); ?></p>
					</div> <!-- /.namesize -->
				
					<div class="food-desc">
						<p><?php the_sub_field('food_desc'); ?></p>
					</div> <!-- /.food-desc -->

				<?php endwhile; ?>
				</div> <!-- /.food-list -->

			  <?php endwhile; ?>    
			  <?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<!-- END QUERY -->
		</div> <!-- /.five-col-right -->

	</div> <!-- /.container -->
</section> <!-- /.food -->


<!-- CONTACT -->

<section class="contact" id="contact">
	<div class="header-box">
		<h2>Contact</h2>
	</div> <!-- /.header-box -->
	
	<div class="container pad contact-box clearfix">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.658042225526!2d-79.45851154929488!3d43.65528246021232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b343089df3083%3A0x56d977e4c269e360!2sThe+End!5e0!3m2!1sen!2sca!4v1448374611337" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div> <!-- /.map -->

		<div class="map-right">
			<address>
				<p>1661 Bloor St W.</p>
				<p>Toronto, ON</p>
			</address>
			<a class="email" href="mailto:info@theendbartoronto.com">info@theendbartoronto.com</a>
			<ul class="social clearfix">
				<li><a href="http://www.facebook.com/Theendbartoronto" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
				<li><a href="http://www.twitter.com/theendbarTO" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
				<li><a href="http://www.instagram.com/theendbarto/" target="_blank"><i class="fa fa-instagram"></i></a></li>
			</ul> <!-- /.social -->

		</div> <!-- /.map-right -->

	</div> <!-- /.container -->
</section> <!-- /.contact -->


<?php get_footer(); ?>
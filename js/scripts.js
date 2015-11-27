$(function(){

	// $("nav").stick_in_parent();

	// Stick nav to top on scroll
	$(window).scroll(stickyRelocate);
    stickyRelocate();

   // Smooth Scroll
	$('a').smoothScroll({
		speed: 400,
		offset: -75
	});

	// Show logo on scroll
	var distance = $('nav').offset().top,
		    $window = $(window);

		$window.scroll(function() {
		    if ( $window.scrollTop() >= distance ) {
		        $('p.logo').fadeIn(300); 
		    } else {
		    	$('p.logo').fadeOut(300);
		    }
		});


	// Hamburger Nav Functionality
	$('p.burger').on('click', function(){
		$('ul.menu').fadeToggle(200);
		
		$('a').on('click', function(){
			$('ul.menu').fadeOut(200);	
		});

		var scrollTop = $(window).scrollTop(),
		    elementOffset = $('nav').offset().top,
		    navDistance = (elementOffset - scrollTop);

		if (navDistance > 0) {
			$('html, body').animate({
			    scrollTop: $("nav").offset().top
			}, 400);
		}

	});

	

	

});
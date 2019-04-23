/*function navHeight() {
	$('.navigation').height($('header').height());
}*/

function hamburgerMenu() {
	$('.hamburger').click(function() {
		$('body').toggleClass('reveal');
		$('.hamburger').toggleClass('is-active');
	});
	$('.mobile-navigation li a[href*="#"]').click(function() {
		if ( $('body').hasClass('home') ) {
			$(this).parent().parent().parent().parent().siblings('.hamburger').toggleClass('is-active');
			$('body').toggleClass('reveal');
		}
	});
}

function digiSectionHeight() {
	$('#digi-identification').css('top', - $('.digi-verification').outerHeight());
}

function headerAdjust() {
	if ($(this).scrollTop() > 200) {
	    $('header').addClass('shrink');
	} else {
	    $('header').removeClass('shrink');
	}
}

jQuery(document).ready(function($) {
	//navHeight();
	hamburgerMenu();
	//digiSectionHeight();
	dzsprx_init('.parallaxer-container, { direction: "reverse", mode_scroll:"frombottom" }');
	
	// SMOOTH SCROLL
	// Select all links with hashes
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 500, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	});
	
});

jQuery(window).scroll(function($) {
	headerAdjust();
	
	if ($('header').hasClass('shrink') ) {
		$('.navigation').addClass('shrink');
	} else {
		$('.navigation').removeClass('shrink');
	}
});



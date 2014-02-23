jQuery(function($) {
		var viewport = $(window);
	
		function sectionListen() {
			$('.section').css('min-height', viewport.height());
		}
		sectionListen();
		viewport.resize(sectionListen);
		viewport.bind('orientationchange', function() {
			sectionListen();
		});
		
		$('.flexslider').flexslider({
			slideshow:		true,
			useCSS:			false,
			animation:		'slide',
			direction:		'horizontal',
			animationSpeed:	750,
			easing:			'easeOutExpo',
			reverse:		false,
			touch:			true,
			keyboard:		true,
			pauseOnAction:	false,
			pauseOnHover:	false,
			pausePlay:		false,
			pauseText:		'<i class="icon-pause"></i>',
			playText:		'<i class="icon-play"></i>',
			prevText:		'<i class="icon-chevron-left"></i>',
			nextText:		'<i class="icon-chevron-right"></i>',
			start:			function(slider) {
								$('body').removeClass('loading');
							}
		});
		
		
		/* Responsive Youtube/Vimeo Videos */
		$('.section').fitVids();

		/* Video Layer */
		$('#video-frame').click(function() {
			$('#video')[0].src += "&autoplay=1";
			$('#video-layer').hide();
		}); 
		
	/* ==========================================================================
	   Smooth Scroll for Anchor Links and URL refresh
	   ========================================================================== */

	$('a.anchor').click(function() {
		var href = $.attr(this, 'href');
		$('html').animate({
			scrollTop: $(href).offset().top
		}, 1000, function() {
			window.location.hash = href;
		});
		return false;
	});
	
	
	/* ==========================================================================
	   Parallax Frontpage Banner
	   ========================================================================== */

	function parallaxScroll() {
		var scrolled = viewport.scrollTop();
		var headerImage = scrolled * 0.375;
		var headerText = scrolled * 0.5;
		var infoImage = (scrolled - $('#info-image').offset().top) * 0.375;
		var infoText = (scrolled - $('#info-text').offset().top) * 0.25;

		$('#header-image').css({
			'-webkit-transform' : 'translate3d(0px, ' + headerImage + 'px, 0px)',
			'transform' : 'translate3d(0px, ' + headerImage + 'px, 0px)'
		});
		$('#header-text').css({
			'-webkit-transform' : 'translate3d(0px, ' + headerText + 'px, 0px)',
			'transform' : 'translate3d(0px, ' + headerText + 'px, 0px)'
		});
		$('#info-image').css({
			'-webkit-transform' : 'translate3d(0px, ' + infoImage + 'px, 0px)',
			'transform' : 'translate3d(0px, ' + infoImage + 'px, 0px)'
		});
		$('#info-text').css({
			'-webkit-transform' : 'translate3d(0px, ' + infoText + 'px, 0px)',
			'transform' : 'translate3d(0px, ' + infoText + 'px, 0px)'
		});
	}
	
	/* ==========================================================================
	   Fire functions on Scroll Event
	   ========================================================================== */
	
	if($('html').hasClass('no-touch')) {
		function scrollHandler() {
			parallaxScroll();
		}
		scrollHandler();
		viewport.on('scroll', function() {
			scrollHandler();
		});
	}
	
});
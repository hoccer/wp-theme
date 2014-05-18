jQuery(function($) {
		var viewport = $(window);
	
		function sectionListen() {
			$('#section-header').css('min-height', viewport.height());
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
			slideshowSpeed:	10000,
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
		//$('.section').fitVids();
		
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
	   Parallax
	   ========================================================================== */

	$(window).load(function() {
		if($('html').hasClass('no-touch')) {
			
			$('[data-type]').each(function() {
				$(this).data('speed', $(this).attr('data-speed'));
			});
			
			$('[data-type="prlx"]').each(function() {
				var self = $(this);

	
				function prlx() {
					var viewport = $(window);
					var topOffset = self.offset().top;
					var yPos = (viewport.scrollTop() - topOffset) * self.data('speed');
					self.css({
						'-webkit-transform' : 'translate3d(0px, ' + yPos + 'px, 0px)',
						'transform' : 'translate3d(0px, ' + yPos + 'px, 0px)'
					});
				}
				prlx();
				viewport.on('scroll', function() {
					prlx();
				});
				viewport.resize(prlx);
				viewport.bind('orientationchange', function() {
					prlx();
				});
			});
		}
	});
	
	
});
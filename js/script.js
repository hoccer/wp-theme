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

		/* Video Layer */
/*
		$('#video-frame').click(function() {
			$('#video')[0].src += "&autoplay=1";
			$('#video-layer').hide();
		}); 
*/
		
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

	if($('html').hasClass('no-touch')) {
		
		$('[data-type]').each(function() {
			$(this).data('speed', $(this).attr('data-speed'));
		});
		
		$('[data-type="prlx"]').each(function() {
			var self = $(this);
			var topOffset = self.offset().top;

			function prlx() {
				var yPos = (viewport.scrollTop() - topOffset) * self.data('speed');
				self.css({
					'-webkit-transform' : 'translate3d(0px, ' + yPos + 'px, 0px)',
					'transform' : 'translate3d(0px, ' + yPos + 'px, 0px)'
				});
			}
			viewport.on('scroll', function() {
				prlx();
			});
			prlx();
		});
	}
	
	
});
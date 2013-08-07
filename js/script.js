(function ($, document, window) {
	$(document).ready(function () {

		/* Parallax for Panorama Images */
		$(window).scroll(parallaxScroll);
		function parallaxScroll(){
			var scrolled = $(window).scrollTop();
			scrolled = Math.round(scrolled);
			$('.panorama-1').css({
				'background-position' : 'center ' + (0+(scrolled*.4))+'px'
			});
			
			$('.intro-image').css({
				'bottom' : (0-(scrolled*.2))+'px'
			});
			
			var y = $('#panorama-2').offset().top;
			y = Math.round(y);
			if(scrolled >= y) {
				$('.panorama-2').css({		
					'background-position' : 'center ' + (0+((scrolled - y) * .4))+'px'
				});
			} else {
				$('.panorama-2').css({		
					'background-position' : 'center ' + 0
				});
			}
		}

		/* Tutorial Image Switscher */
		$('.tut-0').addClass('active');
		var tut = $('.tut');
		tut.click(function() {
			var coco = $(this).attr('class').split(' ')[1];
			if(!$(this).hasClass('active')) {				
				tut.not('.tut-nav .tut').hide();
				tut.removeClass('active');
				$(this).addClass('active');
				coco = '.' + coco;
				$(coco).fadeTo(333, 1, function() {
					$(this).addClass('active');
				});
			}
		});
		
		/* Responsive Youtube/Vimeo Videos */
		$('.article').fitVids();
		
		/* Video Layer */
		$('.video-frame').click(function() {
			$('.video-layer').hide();
		});
	});
}(jQuery, document, window))
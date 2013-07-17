(function ($, document, window) {
	$(document).ready(function () {
		/* Responsive Youtube/Vimeo Videos */
		$('.article').fitVids();
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
		$('.video-frame').click(function() {
			$('.video-layer').hide();
		});
	});
}(jQuery, document, window))
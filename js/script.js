(function ($, document, window) {
	$(document).ready(function () {
		/* Responsive Youtube/Vimeo Videos */
		$('.article').fitVids();
		
		var that;
		var tut_cnt_0 = $('.tut-cnt-0');
		var tut_cnt_1 = $('.tut-cnt-1');
		var tut_cnt_2 = $('.tut-cnt-2');
		var tut_cnt_3 = $('.tut-cnt-3');
		var tut_cnt_4 = $('.tut-cnt-4');
		var tut_cnt_5 = $('.tut-cnt-5');

		tut_cnt_0.show();
		that = $('.tut-0');
		setActive(that);
		
		tut_cnt_1.hide();
		tut_cnt_2.hide();
		tut_cnt_3.hide();
		tut_cnt_4.hide();
		tut_cnt_5.hide();

		$('.tut-0').click(function() {
			that = $(this);
			setActive(that);
			tut_cnt_0.fadeTo(333, 1);
			tut_cnt_1.hide();
			tut_cnt_2.hide();
			tut_cnt_3.hide();
			tut_cnt_4.hide();
			tut_cnt_5.hide();
		});
		$('.tut-1').click(function() {
			that = $(this);
			setActive(that);
			tut_cnt_0.hide();
			tut_cnt_1.fadeTo(333, 1);
			tut_cnt_2.hide();
			tut_cnt_3.hide();
			tut_cnt_4.hide();
			tut_cnt_5.hide();
		});
		$('.tut-2').click(function() {
			that = $(this);
			setActive(that);
			tut_cnt_0.hide();
			tut_cnt_1.hide();
			tut_cnt_2.fadeTo(333, 1);
			tut_cnt_3.hide();
			tut_cnt_4.hide();
			tut_cnt_5.hide();
		});
		$('.tut-3').click(function() {
			that = $(this);
			setActive(that);
			tut_cnt_0.hide();
			tut_cnt_1.hide();
			tut_cnt_2.hide();
			tut_cnt_3.fadeTo(333, 1);
			tut_cnt_4.hide();
			tut_cnt_5.hide();
		});
		$('.tut-4').click(function() {
			that = $(this);
			setActive(that);
			tut_cnt_0.hide();
			tut_cnt_1.hide();
			tut_cnt_2.hide();
			tut_cnt_3.hide();
			tut_cnt_4.fadeTo(333, 1);
			tut_cnt_5.hide();
		});
		$('.tut-5').click(function() {
			that = $(this);
			setActive(that);
			tut_cnt_0.hide();
			tut_cnt_1.hide();
			tut_cnt_2.hide();
			tut_cnt_3.hide();
			tut_cnt_4.hide();
			tut_cnt_5.fadeTo(333, 1);
		});
		
		function setActive(that) {
			if(!that.hasClass('active')) {
				$('.tut-nav ul li').removeClass('active');
				$('.tut-nav ul li a').removeClass('active');
				$(that).parent().addClass('active');
				$(that).addClass('active');
			}
		}
		
		$('.video-frame').click(function() {
			$('.video-layer').hide();
		});

	});
}(jQuery, document, window))
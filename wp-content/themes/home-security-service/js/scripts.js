(function ($, root, undefined) {

	$(function () {

		'use strict';

		if ($(window).width() < 501) {

			var topofDiv = $(".phone-label").offset().top; //gets offset of header
			var height = $(".phone-label").outerHeight(); //gets height of header

			$(window).scroll(function () {
				$( ".get-started" ).show();
				if ($(window).scrollTop() > (topofDiv + height)) {
					$('.logo-column').hide();
					$('.phone-label').hide();
					$(".outer-container.header").addClass("stuck");
				} else {
					$('.logo-column').show();
					$('.phone-label').show();
					$(".outer-container.header").removeClass("stuck");
				}
			});

		}

		$( "select" ).change(function() {
			$(this).css('color','#000');
		});

		$( ".get-started" ).click(function() {

			$('html, body').animate({
				scrollTop: $("ul li:last-of-type").offset().top - 25
			}, 500);
			$(this).remove();
		});

	});

})(jQuery, this);

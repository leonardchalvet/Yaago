// @codekit-prepend 'common.js'

$(window).on('load', function() {

	if (window.matchMedia("(min-width: 1250px)").matches) {
		function slideHorizontalScroll(){
			function initHeight() {
				let a = ($(window).width() - 1200);
				$('.section-cover').height($('.section-cover .slider').width() - a);
			};

			initHeight();
		}
		slideHorizontalScroll();
	};
	

})

$window.scroll(function() {

	if (window.matchMedia("(min-width: 1250px)").matches) {
	

		let a = $('.section-cover').offset();
		let b = ($window.height() / 100) * 25; 
		let c = $('.section-cover').height();


		let scrollTop = $window.scrollTop();

		$('.section-cover .slider').css({
		  '-webkit-transform' : 'translateX(-' + scrollTop + 'px' + ')',
		  '-moz-transform'    : 'translateX(-' + scrollTop + 'px' + ')',
		  '-ms-transform'     : 'translateX(-' + scrollTop + 'px' + ')',
		  '-o-transform'      : 'translateX(-' + scrollTop + 'px' + ')',
		  'transform'         : 'translateX(-' + scrollTop + 'px' + ')'
		});

		d = $('.section-cover').next().offset();
		e = d.top - a.top - ($window.height() * 1.25);

		if (scrollTop >= e) {
			if (!$('.section-cover').hasClass('active')) {
				$('.section-cover').addClass('active');
			}
		} else {
			if ($('.section-cover').hasClass('active')) {
				$('.section-cover').removeClass('active');
			}
		}

	};

    
});
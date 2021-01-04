// @codekit-prepend 'common.js'
// @codekit-prepend 'jquery.parallax-scroll.js'



ParallaxScroll.init();

$(window).on('load', function() {
	

	if (window.matchMedia("(min-width: 700px)").matches) {
		$('.section-cover .wrapper .container-img img:nth-child(1)').attr('data-parallax', '{"y": 10, "smoothness": 10}');
		$('.section-cover .wrapper .container-img img:nth-child(2)').attr('data-parallax', '{"y": 100, "smoothness": 15}');
		$('.section-cover .wrapper .container-img img:nth-child(3)').attr('data-parallax', '{"y": 160, "smoothness": 20}');
		$('.section-cover .wrapper .container-img img:nth-child(4)').attr('data-parallax', '{"y": 320, "x": -320, "smoothness": 15}');
	} else {
		$('.section-cover .wrapper .container-img img:nth-child(1)').attr('data-parallax', '{"y": 5, "smoothness": 10}');
		$('.section-cover .wrapper .container-img img:nth-child(2)').attr('data-parallax', '{"y": 20, "smoothness": 15}');
		$('.section-cover .wrapper .container-img img:nth-child(3)').attr('data-parallax', '{"y": 40, "smoothness": 20}');
		$('.section-cover .wrapper .container-img img:nth-child(4)').attr('data-parallax', '{"y": 60, "x": -60, "smoothness": 15}');
	}


	$('.section-features .container-illu .illu-2').attr('data-parallax', '{"y": -60, "smoothness": 1}');
})


function sectionHomeTitleCaroussel(Delay, Section, Title, Text){
		
	El_1 = Section + ' ' + Title;
	
	var valDelay = Delay;
	var numberEl = $(El_1).length;
	var countEl = 1;
	
	
	var drtc;

	
	function prg(drtc){

		if (drtc === 'next') {
			countEl++;
		} else if (drtc === 'prev') {
			countEl--;
		};

		if (countEl <= numberEl && countEl >= 1) {

			$(El_1 + '.active').removeClass('active').addClass('hide-top');
			$(El_1 + ':nth-child('+countEl+')').removeClass('hide-bottom').addClass('active');

			setTimeout(function(){
				$(El_1 + '.hide-top').removeClass('hide-top').addClass('hide-bottom');
			}, 1000);

			clearInterval(interval);
			interval = setInterval(function() {
		      	prg('next');
		    }, valDelay);

		} else if (countEl < 1) {
			countEl = numberEl;
			prg();
		} else {
			countEl = 1;
			prg();
		};
		
	};

	function init(){	  
		$(El_1 + ':first-child').addClass('active');
		$(El_1 + ':not(:first-child)').addClass('hide-bottom');
	};

	init();


	var interval = setInterval(function() {
    	prg('next');
    }, valDelay);
	

    valDelay = Delay;

};
/* SECTION LOCATION CAROUSSEL */
sectionHomeTitleCaroussel(
	1500,
	'.section-link',  
	".carrousel .el"
);




$(window).on('load', function() {

	if (window.matchMedia("(min-width: 1250px)").matches) {
		function slideHorizontalScroll(){
			function initHeight() {
				let a = ($(window).width() - 1200);
				$('.section-quotes').height($('.section-quotes .slider').width() - a);
			};

			initHeight();
		}
		slideHorizontalScroll();
	};
	

})

$window.scroll(function() {

	if (window.matchMedia("(min-width: 1250px)").matches) {
	

		let a = $('.section-quotes').offset();
		let b = ($window.height() / 100) * 25; 
		let c = $('.section-quotes').height();


		let scrollTop = $window.scrollTop() - a.top + b;

		$('.section-quotes .slider').css({
		  '-webkit-transform' : 'translateX(-' + scrollTop + 'px' + ')',
		  '-moz-transform'    : 'translateX(-' + scrollTop + 'px' + ')',
		  '-ms-transform'     : 'translateX(-' + scrollTop + 'px' + ')',
		  '-o-transform'      : 'translateX(-' + scrollTop + 'px' + ')',
		  'transform'         : 'translateX(-' + scrollTop + 'px' + ')'
		});

		d = $('.section-quotes').next().offset();
		e = d.top - a.top - ($window.height() * 1.25);

		if (scrollTop >= e) {
			if (!$('.section-quotes').hasClass('active')) {
				$('.section-quotes').addClass('active');
			}
		} else {
			if ($('.section-quotes').hasClass('active')) {
				$('.section-quotes').removeClass('active');
			}
		}

	};

    
});


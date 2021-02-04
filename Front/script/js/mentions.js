// @codekit-prepend 'common.js'

$('.section-mentions .container-el .el .head').click(function(){
	if ($(this).closest('.el').hasClass('style-active')) {
		$(this).closest('.el').removeClass('style-active');
	} else {
		$(this).closest('.el').addClass('style-active');
	}
});

$('.section-cover .container-filter ul li a').click(function(){
	if(!$(this).hasClass('style-active')) {
		$('.section-cover .container-filter ul li a').removeClass('style-active');
		$(this).addClass('style-active');

		let index = $(this).parent().index() + 1;
		$('.container-section .section-mentions').removeClass('style-active');
		$('.container-section .section-mentions:nth-child(' + index + ')').addClass('style-active');
	}
});
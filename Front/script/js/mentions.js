// @codekit-prepend 'common.js'

$('.section-mentions .container-el .el .head').click(function(){
	

	if ($(this).closest('.el').hasClass('style-active')) {
		
		$(this).closest('.el').removeClass('style-active');
	} else {
		$(this).closest('.el').addClass('style-active');
	}
})
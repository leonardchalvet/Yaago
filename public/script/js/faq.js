// @codekit-prepend 'common.js'

$('.section-title ul li a').click(function(){
	$('.section-title ul li a').removeClass('style-active');
	$(this).addClass('style-active');

	let data = $(this).attr('data-filter');
	console.log(data);
});

$('.section-faq .container-btn .btn').click(function(){
	let nb = 0;
	$('.section-faq ul li.style-hide').each(function(){
		if(nb < 4) {
			$(this).removeClass('style-hide');
		}
		nb++;
	});

	if($('.section-faq ul li.style-hide').length == 0) {
		$('.section-faq .container-btn .btn').addClass('style-hide');	
	}
});

if($('.section-faq ul li.style-hide').length == 0) {
	$('.section-faq .container-btn .btn').addClass('style-hide');	
}
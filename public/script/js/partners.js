// @codekit-prepend 'common.js'
$('.section-cover .container-filter .filter .input').click(function(){
	$('.section-cover .container-filter .filter .dropdown').toggleClass('style-open');
});

$('.section-cover .container-filter .filter .dropdown .el').click(function(){
	$('.section-cover .container-filter .filter .input input').val($(this).text());
	$('.section-cover .container-filter .filter .dropdown').removeClass('style-open');

	$('.section-partners .container-el .el').removeClass('style-hide');
	let data = $(this).attr('data-filter');
	$('.section-partners .container-el .el').each(function(){
		if($(this).find('h3').text() != data) {
			$(this).addClass('style-hide');
		}
	});
});

$('body').click(function(event){
	if ($(event.target).closest(".section-cover .container-filter .filter").length === 0) {
		$('.section-cover .container-filter .filter .dropdown').removeClass('style-open');
	}
});
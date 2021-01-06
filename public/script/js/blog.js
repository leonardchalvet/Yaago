// @codekit-prepend 'common.js'

$('.section-blog .container-articles .raw:nth-child(1n + 4)').addClass('hide');

if($('.section-blog .container-articles .raw').length <= 3) {
  $('.section-blog .container-btn').addClass('hide');
}

$('.section-blog .container-btn .btn').click(function(){
	$('.section-blog .container-articles .raw.hide').first().removeClass('hide');

	if($('.section-blog .container-articles .raw.hide').length == 0) {
	  $('.section-blog .container-btn').addClass('hide');
	}
});
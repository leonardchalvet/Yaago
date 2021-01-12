// @codekit-prepend 'common.js'

let url = window.location.href;

let data = '.';
let divs;
$('.section-faq ul li').each(function(i){
    $(this).data('initial-index', i);
});

function regexp(s) {
    let r=s.toLowerCase();
    r = r.replace(new RegExp(/\s/g),"");
    r = r.replace(new RegExp(/[àáâãäå]/g),"a");
    r = r.replace(new RegExp(/æ/g),"ae");
    r = r.replace(new RegExp(/ç/g),"c");
    r = r.replace(new RegExp(/[èéêë]/g),"e");
    r = r.replace(new RegExp(/[ìíîï]/g),"i");
    r = r.replace(new RegExp(/ñ/g),"n");                
    r = r.replace(new RegExp(/[òóôõö]/g),"o");
    r = r.replace(new RegExp(/œ/g),"oe");
    r = r.replace(new RegExp(/[ùúûü]/g),"u");
    r = r.replace(new RegExp(/[ýÿ]/g),"y");
    r = r.replace(new RegExp(/\W/g),"-");
    return r;
}

function updateButton(data) {

	if(data == '.') {
		if($('.section-faq ul li.style-hide').length == 0) {
			$('.section-faq .container-btn .btn').addClass('style-hide');
		}
		else {
			$('.section-faq .container-btn .btn').removeClass('style-hide');
		}
	}
	else {
		nb = 0;
		$('.section-faq ul li.style-hide').each(function(){
			if( data == $(this).attr('data-filter') ) {
				nb++;
			}
		});

		if(nb == 0) {
			$('.section-faq .container-btn .btn').addClass('style-hide');
		}
		else {
			$('.section-faq .container-btn .btn').removeClass('style-hide');
		}
	}
}
updateButton(data);

$('.section-title ul li a').click(function(){
	$('.section-title ul li a').removeClass('style-active');
	$(this).addClass('style-active');

	let nb = 0;
	data = $(this).attr('data-filter');
	
	$('.section-faq ul li').addClass('style-hide');
	if(data == '.') {
		$('.section-faq ul li').each(function(){
			if(nb < 6) {
				$(this).removeClass('style-hide');
			}
			nb++;
		});

		history.pushState(null, null, url);
	}
	else {
		$('.section-faq ul li').each(function(){
			if( data == $(this).attr('data-filter') ) {
				if(nb < 6) {
					$(this).removeClass('style-hide');
				}
				nb++;
			}
		});
		
		history.pushState(null, null, url+'/'+regexp(data));
	}

	updateButton(data);
});

$('.section-faq .container-btn .btn').click(function(){
	let nb = 0;
	if(data == '.') {
		$('.section-faq ul li.style-hide').each(function(){
			if(nb < 4) {
				$(this).removeClass('style-hide');
			}
			nb++;
		});
	}
	else {
		$('.section-faq ul li.style-hide').each(function(){
			if( data == $(this).attr('data-filter') ) {
				if(nb < 4) {
					$(this).removeClass('style-hide');
				}
				nb++;
			}
		});
	}

	updateButton(data);
});
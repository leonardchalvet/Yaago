// @codekit-prepend 'jQuery.3.3.1.js'
$window = $(window);

/* FOOTER */
$('footer .foot .container-lg .lg .text').click(function(){
	$('footer .foot .container-lg .dropdown').toggleClass('style-show');
})


/* HEADER */
$window.scroll(function() {
	if ( $window.scrollTop() >= 150 ) {
        $('header').addClass('style-scroll');
    } else {
    	$('header').removeClass('style-scroll');
    };
});

$('header .head .head-mobile .burger').click(function(){
	$('header').toggleClass('style-open');
	$('body').toggleClass('no-scroll');
})
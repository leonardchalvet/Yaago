// @codekit-prepend 'jQuery.3.3.1.js'
$window = $(window);

function isEmpty(el){
	return !$.trim(el.val());
}

function verifEmail(c) {
	let regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	return regex.test(c.val());
}

function verifNumber(c) {
	c = $.trim(c.val().replace(/ /g,''));
	return $.isNumeric(c);
}

/* FOOTER */
$('footer .foot .container-lg .lg').click(function(){
	$('footer .foot .container-lg .dropdown').toggleClass('style-show');
})


/* HEADER */
$window.scroll(function() {
	if ( $window.scrollTop() >= 1 ) {
        $('header').addClass('style-scroll');
    } else {
    	$('header').removeClass('style-scroll');
    };
});

$('header .head .head-mobile .burger').click(function(){
	$('header').toggleClass('style-open');
	$('body').toggleClass('no-scroll');
})

let doClickOnForm = false;
$('footer form button').on('click', function() {
	if(!doClickOnForm) {
		doClickOnForm = true;
		let returnF = true;
		$(this).parent().parent().find('input, textarea').each(function(){
			
			if( isEmpty($(this)) ) {
				returnF = false;
				$(this).parent().addClass('style-error');
			}
			else {
				$(this).parent().removeClass('style-error');
			}

			if($(this).attr("name") == 'email') {
				let returnV = verifEmail($(this));
				if(!returnV) {
					returnF = false;
					$(this).parent().addClass('style-error');
				}
			}
		})

		if(returnF) {
			let form = $(this).parent().parent();
			$.ajax({
				url : '/sendMail/footer.php',
				type : 'POST',
				data : form.serialize(),
				success : function(code, statut){
					$('footer .container-send').addClass('style-active');
					setTimeout(function(){
						$('footer .container-send').removeClass('style-active');
						window.location.href = $('footer .content .container-newsletter input[name=goto]').val();
					}, 3000);
				}
			});
		}
	}
})
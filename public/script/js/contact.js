// @codekit-prepend 'common.js'

function isEmpty(el){
	return !$.trim(el.val());
}

function verifEmail(c) {
	let regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	return regex.test(c.val());
}

$('.section-404 form button').on('click', function() {

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
			url : '/sendMail/contact.php',
			type : 'POST',
			data : form.serialize(),
			success : function(code, statut){
				$('.section-404 .container-send').addClass('style-active');
			}
		});
	}
})
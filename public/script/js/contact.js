// @codekit-prepend 'common.js'

$('.section-contact form button').on('click', function() {

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
				$('.section-contact .container-send').addClass('style-active');
			}
		});
	}
})
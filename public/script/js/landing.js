// @codekit-prepend 'common.js'

$('.section-cover form button').on('click', function() {

	let returnF = true;
	$(this).parent().parent().find('input').each(function(){
		
		if( isEmpty($(this)) ) {
			returnF = false;
			$(this).parent().parent().addClass('style-error');
		}
		else {
			$(this).parent().parent().removeClass('style-error');
		}

		if($(this).attr("name") == 'email') {
			let returnV = verifEmail($(this));
			if(!returnV) {
				returnF = false;
				$(this).parent().parent().addClass('style-error');
			}
		}
	})

	if(returnF) {
		let form = $(this).parent().parent();
		$.ajax({
			url : '/sendMail/landing.php',
			type : 'POST',
			data : form.serialize(),
			success : function(code, statut){
				$('.section-cover .container-send').addClass('style-active');
				setTimeout(function(){
					$('.section-cover .container-send').removeClass('style-active');
					window.location.href = $('.section-cover .container-title .container-input .input input[name=goto]').val();
				}, 3000);
			}
		});
	}
})
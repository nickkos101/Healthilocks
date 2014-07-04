$(document).ready(function(){

	$('.twitter').click(function(){
		$('.lightbox-overlay').fadeIn();
		$('.lightbox').fadeIn();
	});

	$('.lightbox-overlay').click(function(){
		$('.lightbox-overlay').fadeOut();
		$('.lightbox').fadeOut();
	});

	$('button').click(function(){
		event.preventDefault();
		var request = $.ajax({
			url: 'inc/store-address.php',
			type: 'POST',
			data: {
				email: $('#email').val(),
			}
		});
		request.done(function(msg) {
			console.log(msg);         
		});
	});


});
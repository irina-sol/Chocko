$(function(){
	$('.modal_window').click(function(){
		let user_id=$(this).attr('user-id');
		let picture_id=$(this).attr('picture-id');
		let darken = $('<div></div>').addClass('darken').appendTo('body');
		let bod = $('body').addClass('modal-body');
		let src = $(this).attr('picture-id');
		let modal = $('<div></div>').addClass('modal-window').appendTo('body');
		
		$('<a>').attr('href', '#').addClass('modal-close').html('&times;').click(function(){
			modal.remove();
			darken.remove();
			$('body').removeClass('modal-body');
		}).appendTo(modal);
		$('.darken').click(function(){
			modal.remove();
			darken.remove();
			$('body').removeClass('modal-body');
		});
		let img = $('<img>').addClass("modal-image").attr("src", src).appendTo(modal);
		img.src = src;
		

		console.log(src);
	});
});
$('.menu a').click(function(e){
	if($(this).siblings('ul').length){
		e.preventDefault();
		$(this).parent('li').toggleClass('open');
		$(this).siblings('ul').slideToggle();
	}
})
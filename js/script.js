$('.menu a').click(function(e){
	if($(this).siblings('ul').length){
		e.preventDefault();
		$(this).parent('li').toggleClass('open');
		$(this).siblings('ul').slideToggle();
	}
})
$('.menu-btn').click(function(){
	$(this).toggleClass('menu-btn--active');
	$('.header__menu').toggleClass('header__menu--open');
})
$('.header__menu a').click(function(e){
	if($(this).siblings('ul').length && innerWidth < 1030){
		e.preventDefault();
		$(this).parent('li').toggleClass('open');
	}
})
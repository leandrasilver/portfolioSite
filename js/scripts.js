$(function(){

	console.log("It's working");

	// SmoothScroll on anchor tags
	$('a').smoothScroll();

	// Scroll Reveal
	window.sr = ScrollReveal();
	sr.reveal('.portfolioItem, .about');

	// Hamburger Menu
	$('#navIcon').click(function(){
		$(this).toggleClass('open');
	});

	$('#navIcon').on('click', function(){
		$('.mainNav').toggleClass('jsShow');
	});

	$('.mainNav li').on('click', function(){
		$('.mainNav').removeClass('jsShow');
		$('#navIcon').toggleClass('open');
	});

	// Contact form
	// When click on input change text color of label
	// When you click off remove style

	$('label').on('click', function(){
		$('label').removeAttr( 'style' );
		$(this).css({color: "#e456a9"});
	});

	$('input, textarea').focusout(function(){
		$('label').removeAttr( 'style' );
	});

});
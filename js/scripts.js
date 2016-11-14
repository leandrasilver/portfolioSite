$(function(){

	console.log("Welcome to the console :D ");

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

	$('label').on('click', function(){
		$('label').removeAttr( 'style' );
		$(this).css({color: "#e456a9"});
	});

	// For Accessibility have the same hover state when input tabbed on
	$('input, textarea').on('focus', function(){
		$('label').removeAttr( 'style' );
		$(this).closest('label').css({color: "#e456a9"});
	});

	// When you click off remove style
	$('input, textarea').focusout(function(){
		$('label').removeAttr( 'style' );
	});

	// Header when hover over logo show text silver more
	$( ".logoContainer" ).on( "mouseenter", function() {
	    $( ".bigFadedLetters").css({"color": "rgba(168, 176, 178,0.2)"});
	});

	$( ".logoContainer" ).on( "mouseleave", function() {
	    $( ".bigFadedLetters").css({"color": "rgba(36,36,68,0.7)"});
	});

});
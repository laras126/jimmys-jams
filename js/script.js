
$(document).ready(function(){

	$('body').fitVids();


	/*

	when user clicks on .menu-trigger
		addclass nav open

	*/

	$('.menu-trigger').on('click', function() {
		$('.site-nav').toggleClass('nav-open');
	});

	// Initiate Flickity plugin
	$('.gallery').flickity({
  		cellAlign: 'left',
  		contain: true,
  		wrapAround: true,
  		imagesLoaded: true
	});

});

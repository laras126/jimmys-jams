
$(document).ready(function(){

	$('body').fitVids();

	// Initiate Flickity plugin
	$('.gallery').flickity({
  		cellAlign: 'left',
  		contain: true,
  		wrapAround: true,
  		imagesLoaded: true
	});

});


$(document).ready(function(){

	$('body').fitVids();

	// var url = window.location.pathname;
	// $('.site-nav').find('a[href="'+url+'"]')
	// 			  .addClass('active');

	// console.log(url);

	$('.menu-trigger').on('click', function() {
		$('.site-nav').toggleClass('open');
	});

	// Initiate Flickity plugin
	$('.gallery').flickity({
  		cellAlign: 'left',
  		contain: true,
  		wrapAround: true,
  		imagesLoaded: true
	});

});

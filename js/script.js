
$(document).ready(function(){

	$('#hello').click(function() {
		console.log('working!');
		$(this).fadeOut(500);
	});

	$('body').fitVids();

	/*
		
	If you wanted to initiate Flickity in JS vs. using the predefined class names in the documentation:

	$('.gallery-two').flickity({
  		cellAlign: 'left',
  		contain: true
	});

	*/

});


console.log("hi");
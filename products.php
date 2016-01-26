<?php 
$body_class = 'products';
include('partials/header.php'); ?> 

	<h1>Products</h1>

	<p class="lead page-lead">Salesy tagline, around six words.</p>

	<p>A paragraph about how Jimmy's Jams are unique and that the jams available are dictated by whatever is in season at the time. Two-ish more sentences about that. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo.</p>

	<div class="product row">
		<div class="product-image col-sm-4">
			<picture>
				<source srcset="images/mulberry-jam.jpg" media="(min-width: 48em)">
				<source srcset="images/mulberry-jam-mobile.jpg" media="(min-width: 34em)">
				<img src="images/mulberry-jam.jpg" alt="">
			</picture>
			<p class="caption">Delicious farm fresh jam.</p>
		</div>
		<div class="product-info col-sm-8">
			<h3 class="product-title">Jams</h3>
			<p class="lead">Our jams are created from fresh, wild farm ingredients.</p> 
			<p>We have cherry jams, mulberry, and black raspberry. All fruit is harvested by hand during the season it is available, and then simmered down in a pot and bottled.</p>
			<p class="availability warning">Supplies limited</p>
		</div>
	</div> <!-- .product -->
	
	<div class="product row">
		<div class="product-image col-sm-4">
			<img src="images/cordial.jpg" alt="">
		</div>
		<div class="product-info col-sm-8">
			<h3 class="product-title">Cordials</h3>
			<p>Elderflower cordial is our specialty, but we also offer black walnut and apple cordials. These are perfect to add to your tea or to stir up with a spirit of your choosing for a delicious farm fresh cocktail. Available year round.</p>
			<p class="availability success">Available</p>
		</div>
	</div> <!-- .product -->

	<div class="product row">
		<div class="product-image col-sm-4">
			<img src="images/corn.jpg" alt="">
		</div>
		<div class="product-info col-sm-8">
			<h3 class="product-title">Pennsylvania Corn</h3>
			<p>Keep your cows plump and happy with our specially harvested Pennsylvania corn. Corn is in harvested during the fall and kept in the farm silo during the winter and available year round.</p>
			<p class="availability success">Available</p>
		</div> <!-- .product -->
	</div>

 

<?php include('partials/footer.php'); ?> 

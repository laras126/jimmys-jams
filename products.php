<?php 
$body_class = 'products';
include('partials/header.php'); ?> 

	<h1>Products</h1>

	<p>Salesy tagline, around six words.</p>

	<p>A paragraph about how Jimmy's Jams are unique and that the jams available are dictated by whatever is in season at the time. Two-ish more sentences about that. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo.</p>

	<div class="product row">
		<div class="product-image col-sm-4">
			<img src="images/mulberry-jam.jpg" alt="">
			<p class="caption">Delicious farm fresh jam.</p>
		</div>
		<div class="product-info col-sm-8">
			<h3 class="product-title">Mulberry Jam</h3>
			<p>Product 1 description. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="availability warning">Supplies limited</p>
		</div>
	</div> <!-- .product -->
	
	<div class="product row">
		<div class="product-image col-sm-4">
			<img src="images/cordial.jpg" alt="">
		</div>
		<div class="product-info col-sm-8">
			<h3>Elderflower Cordial</h3>
			<p>Product 2 description. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="availability success">Available</p>
		</div>
	</div> <!-- .product -->

	<div class="product row">
		<div class="product-image col-sm-4">
			<img src="images/corn.jpg" alt="">
		</div>
		<div class="product-info col-sm-8">
			<h3>Pennsylvania Corn</h3>
			<p>Specially harvested corn from this fall. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p class="availability success">Available</p>
		</div> <!-- .product -->
	</div>

 

<?php include('partials/footer.php'); ?> 

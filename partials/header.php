<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jimmy's Jams</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/flexbox-grid.css">
	<link rel="stylesheet" href="css/flickity.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<?php if($body_class) { ?>
	<body class="<?php echo $body_class; ?>">
<?php } else { ?>
	<body>
<?php } ?>
	
	<div class="container-fluid wrapper">
		<div class="row">
			<div class="col-xs-12">
				<!-- <h1 class="logo">Jimmy's Jams</h1> -->
				<img class="logo" src="images/logo.svg" alt="">
			</div>
			<nav class="site-nav col-xs-12">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="location.php">Location</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-xs-12">

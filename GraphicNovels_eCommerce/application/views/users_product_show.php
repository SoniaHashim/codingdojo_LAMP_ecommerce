<html>
<head>
	<title>Users - Product Show</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap-theme.min.css">
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/users_product_show.css">
	<script type="text/javascript"></script>
</head>
<body>
	<div class='container'>
		<div class='row navigation main'>
			<h3 class='col-md-10'>Dojo eCommerce</h3>
			<a class='col-md-2'>Shopping Cart (#)</a>
		<!-- END OF NAVIGATION -->
		</div>
		<div class='row main-content'>
			<a href='#'>Go Back</a>
			<h2>Product Name</h2>
			<div class='row'>
				<div class='col-md-3'>
					<img class='large' src='#'>
					<div class='product-images'>
						<img class='small' src='#'>
						<img class='small' src='#'>
						<img class='small' src='#'>
						<img class='small' src='#'>
						<img class='small' src='#'>
					</div>
				</div>
				<div class='col-md-7'>
					<p class='col-md-12'> 
						description...Product description... description... Product description... description...Product... Product description...description...Product description ...description ...Product description ...description ...Product description ...description...Product description...description...Product description...description...Product description...description...Product description...description...Product description...description...Product description...
					</p>
					<form class='col-md-4 col-md-push-8' action='carts/add_to_cart' method='post'>
						<div class="btn-group">
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						    Options <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#">$9.99</a></li>
						    <li><a href="#">$12.99</a></li>
						    <li><a href="#">$19.99</a></li>
						    <li class="divider"></li>
						    <li><a href="#">$10.99</a></li>
						  </ul>
						</div>
						<input type='hidden' name='id'>
						<input type='hidden' name='pricing_opt'>
						<button class='btn btn-default'type='submit'>Buy</button>
					</form>
				</div>
			</div>
			<h2>Similar Items</h2>
			<ul class='products'>
				<li>
					<div class='product'>
						<a href='#'><img class='medium' src="#"></a>
						<p class='price'>$9.99</p>
					</div>
					<p class='product-name'>Product Name</p>
				</li>
				<li>
					<div class='product'>
						<a href='#'><img class='medium' src="#"></a>
						<p class='price'>$9.99</p>
					</div>
					<p class='product-name'>Product Name</p>
				</li>
				<li>
					<div class='product'>
						<a href='#'><img class='medium' src="#"></a>
						<p class='price'>$9.99</p>
					</div>
					<p class='product-name'>Product Name</p>
				</li>
			</ul>
		<!-- END OF MAIN CONTENT -->
		</div>
	<!-- END OF CONTAINER -->
	</div>
</body>
</html>
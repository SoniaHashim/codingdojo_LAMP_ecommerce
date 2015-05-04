<!DOCTYPE html>
<html>
<head>
	<title>Users Index - Products Display</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap-theme.min.css">
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/users_index.css">
	<script type="text/javascript"></script>
</head>
<body>
	<div class='container'>
		<div class='row navigation'>
			<h3 class='col-md-10'>Dojo eCommerce</h3>
			<a class='col-md-2'>Shopping Cart (#)</a>
		<!-- END OF NAVIGATION -->
		</div>
		<div class='row main-content'>
			<div class='col-md-3 main usertools'>
				<form action='products/filter' method='post'>
					<!-- REMOVE -->
					<input type='hidden' name='category'>
					<input type='hidden' name='page'>
					<input type='hidden' name='sort'>
					<!-- /REMOVE -->
					<input type='text' name='name' placeholder='Product name...'>
					<button type='submit'><span class='glyphicon glyphicon-search'></span></button>
				</form>
				<h5>Categories</h5>
				<ul>
					<li><a href='#'>Anime (35)</a></li>
					<li><a href='#'>Marvel (62)</a></li>
					<li><a href='#'>DC Comics (12)</a></li>
					<li><a href='#'>Show All</a></li>
				</ul>
			</div>
			<div class='col-md-8 main content'>
				<div class='row'>
					<h2 class='col-md-8'>Category Name (page #)</h2>
					<ul class='col-md-4 pagination'>
						<li><a href='#'>First</a></li>
						<li><a href='#'>Prev</a></li>
						<li><a class='false' href='#'>page #</a></li>
						<li><a href='#'>Next</a></li>
					</ul>
				</div>
				<ul class='row products'>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
				</ul>
				<ul class='row pagination footer'>
					<li><a href='#'>1</a></li>
					<li><a href='#'>2</a></li>
					<li><a href='#'>3</a></li>
					<li><a href='#'>4</a></li>
					<li><a href='#'>5</a></li>
					<li><a href='#'>6</a></li>
					<li><a href='#'>7</a></li>
					<li><a href='#'>8</a></li>
					<li><a href='#'>9</a></li>
					<li><a href='#'>10</a></li>
					<li><a href='#'>...</a></li>
				</ul>
			<!-- END OF CONTENT -->
			</div>
		<!-- END OF MAIN CONTENT -->
		</div>
	<!-- END OF CONTAINER -->
	</div>
</body>
</html>
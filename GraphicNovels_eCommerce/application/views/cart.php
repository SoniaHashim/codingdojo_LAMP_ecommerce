<html>
<head>
	<title>Cart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap-theme.min.css">
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/cart.css">
	<script type="text/javascript"></script>
</head>
<body>
	<div class='container'>
		<div class='row navigation main'>
			<h3 class='col-md-10'>Dojo eCommerce</h3>
			<a class='col-md-2'>Shopping Cart (#)</a>
		<!-- END OF NAVIGATION -->
		</div>
		<div class='col-md-9'>
			<table class='table table-striped' rules='cols'>
				<thead>
					<tr>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Product 1 Name</td>
						<td>$19.99</td>
						<td>
							<ul class='product-opt'>
								<li>#</li>
								<li><a href='#'>update</a></li>
								<li><a class='false' href='#'><span class='glyphicon glyphicon-trash'></a></li>
							</ul>
							<form action='cart/update' method='post'>
								<input type='hidden' name='action' value='update'>
								<input type='hidden' name='action' value='destroy'>
							</form>
						</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class='col-md-12'>
			<button class='col-md-2 btn btn-success col-md-push-7'>Continue Shopping</button>
		</div>
		<div class='col-md-12'>
			<h2>Shipping Information</h2>
				<form action='order/create' method='post'>
					<label>First Name: <input type='text' name='first_name'></label>
					<label>Last Name: <input type='text' name='last_name'></label>
					<label>Address: <input type='text' name='address'></label>
					<label>Address 2: <input type='text' name='address2'></label>
					<label>City: <input type='text' name='city'></label>
					<label>State: <input type='text' name='state'></label>
					<label>Zipcode: <input type='text' name='zip'></label>
			<h2>Billing Information</h2>
				<label class='shipping'><input type='checkbox' name='same'> Use shipping </label>
				<label>First Name: <input type='text' name='first_name'></label>
				<label>Last Name: <input type='text' name='last_name'></label>
				<label>Address: <input type='text' name='address'></label>
				<label>Address 2: <input type='text' name='address2'></label>
				<label>City: <input type='text' name='city'></label>
				<label>State: <input type='text' name='state'></label>
				<label>Zipcode: <input type='text' name='zip'></label>
				<label>Card: <input type='text' name='card'></label>
				<label>Security Code: <input type='text' name='securitycode'></label>
				<label>Expiration: <input type='date' name='expiration'></label>
				<button class='btn btn-primary col-md-1 col-md-push-2' type='submit'>Pay</button>
		</div>
	<!-- END OF CONTAINER -->
	</div>
</body>
</html>
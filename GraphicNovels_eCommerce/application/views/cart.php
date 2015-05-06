<?php 
var_dump($items); 
var_dump($total); 
?>

<html>
<head>
	<title>Cart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap-theme.min.css">
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/cart.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', 'a.manipulate', function(){
				event.preventDefault();
				console.log('click to '+ $(this).attr('href') + ' product ' + $(this).attr('name'));
				var form = '#'+$(this).attr('name');
				console.log('using form '+ form + ' for ' + '/carts/'+$(this).attr('href'));
				$(form).attr('action', '/carts/'+$(this).attr('href'));
				$(form).submit();
				return false;
			});

			$(document).on('submit', 'form', function() { 
				event.preventDefault(); 
				console.log('submit form');
				console.log($(this).serialize());
				var id = '#manipulate_' + $(this).attr('id');
				$.post($(this).attr('action'), $(this).serialize(), function(res){
					console.log(res);
					$(id).html(res);
				});
				return false;
			});
		});
	</script>
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
					<?php foreach ($items as $item): ?>
					<tr id=<?= "manipulate_".$item["products_id"] ?>>
						<td><?= $item['name'] ?></td>
						<td><?= $item['price'] ?></td>
						<td>
							<ul class='product-opt'>
								<li><?= $item['quantity'] ?> </li>
								<li><a class='manipulate' name=<?= $item["products_id"] ?> href='edit'>update</a></li>
								<li><a class='false manipulate' name=<?= $item["products_id"] ?>  href='delete_from_cart'><span class='glyphicon glyphicon-trash'></a></li>
							</ul>
							<form action='cart/update' method='post' id=<?= $item["products_id"]?>>
								<input type='hidden' name='product_id' value= <?= $item["products_id"] ?>>
								<input type='hidden' name='quantity' value= <?= $item["quantity"] ?>>
							</form>
						</td>
						<td><?= $item['product_total'] ?></td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<div class='col-md-12'>
			<h4 class='col-md-2 col-md-push-7'>Grand Total: <?= $total?></h4>
		</div>
		<div class='col-md-12'>
			<a href="/products"><button class='col-md-2 btn btn-success col-md-push-7'>Continue Shopping</button></a>
		</div>
		<div class='col-md-12'>
			<h2>Shipping Information</h2>
				<form action='order/create' method='post'>
					<input type='hidden' name='cart_id' value='1'>
					<label>First Name: <input type='text' name='first_name'></label>
					<label>Last Name: <input type='text' name='last_name'></label>
					<label>Address: <input type='text' name='address'></label>
					<label>Address 2: <input type='text' name='address2'></label>
					<label>City: <input type='text' name='city'></label>
					<label>State: <input type='text' name='state'></label>
					<label>Zipcode: <input type='text' name='zip'></label>
			<h2>Billing Information</h2>
				<label class='shipping'><input type='checkbox' name='same'> Use shipping </label>
				<label>First Name: <input type='text' name='bill_first_name'></label>
				<label>Last Name: <input type='text' name='bill_last_name'></label>
				<label>Address: <input type='text' name='bill_address'></label>
				<label>Address 2: <input type='text' name='bill_address2'></label>
				<label>City: <input type='text' name='bill_city'></label>
				<label>State: <input type='text' name='bill_state'></label>
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
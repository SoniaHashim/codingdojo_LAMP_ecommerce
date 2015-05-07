<html>
<head>
	<title>Products Dashboard</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">		
		.inline {
			display: inline-block;
			vertical-align: top;
			margin-right: 2rem;
		}
		.pages {
			width: 365px;
			margin: 0 auto;
		}
		.topnav {
			width: 100%;
			margin: 5rem 0 1.5rem 0;
		}	
			.topnav * {
				width: 130px;				
				display: inline-block;
				vertical-align: top;
			}
			.topnav a {
				margin-top: 5px;
			}
			.topnav .logoff {
				margin-left: 63rem;
			}
			.topnav h3 {
				margin: 1rem 0 0 1rem;
			}
		.receipt {
			width: 800px;
			margin: 0 auto;
		}
			h5 {
				margin-bottom: 1rem;
			}
			.status {
				border: 1px solid black;
				background-color: #44B449;
				padding: .5rem;
			}
			.totals {
				margin: 0;
				border: 1px solid black;
				padding: .5rem;
				width: 150px;
			}

	</style></head>
<body>
	<div class="container">
		<div class="receipt">
			<div class="inline customer_details">
				<?php
				foreach ($record as $info) {
				?>
				<h5>Order ID: <?= $info['id'] ?></h5>
				<h5>Customer Billing info:</h5>
				<p>Name: <?= $info['first_name'] ?></p>
				<p>Address: <?= $info['address'] ?></p>
				<p>City: <?= $info['city'] ?></p>
				<p>State: <?= $info['state'] ?></p>
				<p>Zip: <?= $info['zip'] ?></p>
				<h5>Customer Shipping info:</h5>
				<p>Name: <?= $info['ship_to_name'] ?></p>
				<p>Address: <?= $info['ship_to_address'] ?></p>
				<p>City: <?= $info['ship_to_city'] ?></p>
				<p>State: <?= $info['ship_to_state'] ?></p>
				<p>Zip: <?= $info['ship_to_zip'] ?></p>
				<?php
				}
				?>
			</div>
			<div class="inline order_receipt">
				<table class="table table-bordered table-striped">
					<tr>
						<th>ID</th>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Item Total</th>
					</tr>
					<?php 
						foreach ($products as $details) {					
					?>
					<tr>
						<td><?= $details['p_id'] ?></td>
						<td><?= $details['item_name'] ?></td>
						<td><?= $details['item_price'] ?></td>
						<td><?= $details['item_quantity'] ?></td>
						<td><?= number_format($details['item_total'],2,'.',',') ?></td>
					</tr>
					<?php
						}	
					 ?>
				</table>
				<?php 
					// $products {
				?>
				<h5 class="inline status">Status: <?= $products[0]['status'] ?></h5>
				<div class="inline totals">
					<p>Sub total: <?= $products[0]['subtotal'] ?></p>
					<p>Shipping: <?= $products[0]['shipping_fee'] ?></p>
					<p>Total: <?= $products[0]['total'] ?></p>
				</div>
				<?php  
					// }
				?>
			</div>
		</div>
		
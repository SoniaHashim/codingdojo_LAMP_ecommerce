<html>
<head>
	<title>Products Dashboard</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">		
		.inline {
			display: inline-block;
			vertical-align: top;
			margin-right: 10rem;
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

	</style>
</head>
<body>
	<div class="container">
		<nav class="topnav navbar navbar-default">
			<h3>Dashboard</h3>
			<!-- clicking "Orders" or "Products" will send a get request to display partials -->
			<ul class="nav nav-pills nav-justified">
				<li><a href="#">Orders</a></li>
				<li><a href="#">Products</a></li>
				<li><a class="logoff" href="#">Log Off</a></li>
			</ul>
		</nav>
		<div class="receipt">
			<div class="inline customer_details">
				<h5>Order ID: 1</h5>
				<h5>Customer shipping info:</h5>
				<p>Name: Bob</p>
				<p>Address: 123 Dojo Way</p>
				<p>City: Seattle</p>
				<p>State: WA</p>
				<p>Zip: 98133</p>
				<h5>Customer Billing info:</h5>
				<p>Name: Bob</p>
				<p>Address: 123 Dojo Way</p>
				<p>City: Seattle</p>
				<p>State: WA</p>
				<p>Zip: 98133</p>
			</div>
			<div class="inline order_receipt">
				<table class="table table-bordered table-striped">
					<tr>
						<th>ID</th>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Women's T-Shirt</td>
						<td>19.99</td>
						<td>1</td>
						<td>19.99</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Men's T-Shirt</td>
						<td>19.99</td>
						<td>1</td>
						<td>39.98</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Shorts</td>
						<td>14.99</td>
						<td>1</td>
						<td>14.99</td>
					</tr>
				</table>
				<h5 class="inline status">Status: Shipped</h5>
				<div class="inline totals">
					<p>Sub total: $29.98</p>
					<p>Shipping: $1.00</p>
					<p>Total: $30.98</p>
				</div>
			</div>
		</div>
		
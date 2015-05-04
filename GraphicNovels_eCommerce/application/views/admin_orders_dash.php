<html>
<head>
	<title>Orders Dashboard</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">		
		.inline {
			display: inline-block;
			vertical-align: top;
		}		
		.select {
			margin-left: 75rem;
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

	</style>
</head>
<body>
	<div class="container">
		<nav class="topnav navbar navbar-default">
		<h3>Dashboard</h3>
		<!-- clicking "Orders" or "Products" will send a get request to display partials -->
		<ul class="nav nav-pills nav-justified">
			<li class="active"><a href="#">Orders</a></li>
			<li><a href="#">Products</a></li>
			<li><a class="logoff" href="#">Log Off</a></li>
		</ul>
		</nav>
		<div class="filter row-fluid">
			<form class="inline" action="#" method="post">
				<input type="text" name="search" placeholder="search">
				<input type="submit" value="submit search">
			</form>
			<form class="select inline" action="#" method="post">
				<select>
					<option value="show_all">Show All</option>
					<option value="order_in">Order in</option>
					<option value="process">Process</option>
					<option value="shipped">Shipped</option>
				</select>
				<input type="submit" value="filter">
			</form>
		</div>
		<div class="partials">
			<table class="table table-bordered table-striped">
				<tr>
					<th>Order ID</th>
					<th>Name</th>
					<th>Date</th>
					<th>Billing Address</th>
					<th>Total</th>
					<th>Status</th>
				</tr>
				<tr>
					<td><a href="#">100</a></td>
					<td>Bob</td>
					<td>9/6/2014</td>
					<td>123 Dojo Way, Bellvue, WA 98005</td>
					<td>$149.99</td>
					<td>
						<select>
							<option value="shipped">Shipped</option>
							<option value="order_in_process">Order in process</option>
							<option value="cancelled">Cancelled</option>
						</select>
					</td>
					<tr>
					<td><a href="#">99</a></td>
					<td>Joe</td>
					<td>9/7/2014</td>
					<td>123 Dojo Way, Bellvue, WA 98005</td>
					<td>$99.99</td>
					<td>
						<select>
							<option value="shipped">Shipped</option>
							<option value="order_in_process">Order in process</option>
							<option value="cancelled">Cancelled</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><a href="#">98</a></td>
					<td>Brad</td>
					<td>9/10/2014</td>
					<td>123 Dojo Way, Bellvue, WA 98005</td>
					<td>$299.99</td>
					<td>
						<select>
							<option value="shipped">Shipped</option>
							<option value="order_in_process">Order in process</option>
							<option value="cancelled">Cancelled</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><a href="#">97</a></td>
					<td>Tracy</td>
					<td>9/20/2014</td>
					<td>123 Dojo Way, Bellvue, WA 98005</td>
					<td>$249.99</td>
					<td>
						<select>
							<option value="shipped">Shipped</option>
							<option value="order_in_process">Order in process</option>
							<option value="cancelled">Cancelled</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><a href="#">90</a></td>
					<td>Gandalf</td>
					<td>10/2/2014</td>
					<td>123 Hobbit Ave, Shire, Far Away 98005</td>
					<td>$499.99</td>
					<td>
						<select>
							<option value="shipped">Shipped</option>
							<option value="order_in_process">Order in process</option>
							<option value="cancelled">Cancelled</option>
						</select>
					</td>
				</tr>
			</table>
			<nav class="pages" >
				<ul class="pagination">
					<li><a aria-label="Previous" href="#"><span aria-hidden="true">&laquo</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a aria-label="Next" href="#"><span aria-hidden="true">&raquo</span></a></li>
				</ul>
			</nav>
		</div>
	</div>
</body>
</html>
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
		}	
		img {
			width: 60px;
			height: 60px;
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
			<li><a href="#">Orders</a></li>
			<li class="active"><a href="#">Products</a></li>
			<li><a class="logoff" href="#">Log Off</a></li>
		</ul>
		</nav>
		<div class="filter row-fluid">
			<form class="inline" action="#" method="post">
				<input type="text" name="search" placeholder="search">
				<input type="submit" value="submit search">
			</form>
			<form class="select inline" action="#" method="post">
				<input type="submit" value="Add new poduct">
			</form>
		</div>
		<div class="partials">
			<table class="table table-bordered table-striped">
				<tr>
					<th>Picture</th>
					<th>Product ID</th>
					<th>Category Name</th>
					<th>Inventory Count</th>
					<th>Quantity SOld</th>
					<th>Action</th>
				</tr>
				<tr>
					<td><img src="#" alt="product thumbnail"></td>
					<td>1</td>
					<td>Men's T-Shirt</td>
					<td>200</td>
					<td>1000</td>
					<td>
						<form class="inline" action="#" method="post">
							<input type="hidden" name="update_product">
							<a href="#">Edit</a>
						</form>
						<form class="inline" action="#" method="post">
							<input type="hidden" name="delete_product">
							<a href="#">Delete</a>
						</form>
					</td>			
				</tr>
				<tr>
					<td><img src="#" alt="product thumbnail"></td>
					<td>2</td>
					<td>Women's T-Shirt</td>
					<td>250</td>
					<td>1104</td>
					<td>
						<form class="inline" action="#" method="post">
							<input type="hidden" name="update_product">
							<a href="#">Edit</a>
						</form>
						<form class="inline" action="#" method="post">
							<input type="hidden" name="delete_product">
							<a href="#">Delete</a>
						</form>
					</td>			
				</tr>
				<tr>
					<td><img src="#" alt="product thumbnail"></td>
					<td>3</td>
					<td>Shorts</td>
					<td>150</td>
					<td>788</td>
					<td>
						<form class="inline" action="#" method="post">
							<input type="hidden" name="update_product">
							<a href="#">Edit</a>
						</form>
						<form class="inline" action="#" method="post">
							<input type="hidden" name="delete_product">
							<a href="#">Delete</a>
						</form>
					</td>			
				</tr>
				<tr>
					<td><img src="#" alt="product thumbnail"></td>
					<td>4</td>
					<td>Hats</td>
					<td>100</td>
					<td>248</td>
					<td>
						<form class="inline" action="#" method="post">
							<input type="hidden" name="update_product">
							<a href="#">Edit</a>
						</form>
						<form class="inline" action="#" method="post">
							<input type="hidden" name="delete_product">
							<a href="#">Delete</a>
						</form>
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
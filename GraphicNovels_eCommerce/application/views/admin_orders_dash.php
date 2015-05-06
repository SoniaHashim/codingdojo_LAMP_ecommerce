<html>
<head>
	<title>Orders Dashboard</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
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
	<script type="text/javascript">
		$(document).ready(function() {
			$(document).on('change', '#update_status', function(){
				$('#update_status').val();
				var status = $('#update_status').val();
				console.log($('#update_status').val());
				// console.log(upd_status);
				$('#status').val($(this).val());
				console.log($('#status').val());
				// $(this).parent().submit();
					// $.post( '/orders/update', $(this).parent().serialize(), function(res) {
					// 	console.log('updated!!!');
					// });						
				// });
				// return false;
			})
		})
	</script>
</head>
<body>
	<div class="container">
		<nav class="topnav navbar navbar-default">
		<h3>Dashboard</h3>
		<!-- clicking "Orders" or "Products" will send a get request to display partials -->
		<ul class="nav nav-pills nav-justified">
			<li class="active"><a href="#">Orders</a></li>
			<li><a href="#">Products</a></li>
			<li><a class="logoff" href="/admins/log_off">Log Off</a></li>
		</ul>
		</nav>
		<div class="filter row-fluid">
			<form class="inline" action="#" method="post">
				<input type="text" name="search" placeholder="search">
				<input type="submit" value="submit search">
			</form>
			<form class="select inline" name='order_status' action="#" method="post">
				<select>
					<option value="show_all">Show All</option>
					<option value="order_in_process">Order in process</option>
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

				<?php
				// var_dump($rows);
				foreach ($rows as $data) {
				?>
				<tr>
					<form action="/orders/show" method="post">
						<td>
							<input class="id" type="hidden" name="id" value="<?= $data['id'] ?>">
							<a href="#"><?= $data['id'] ?></a>
							<input type="submit" value="search order id">
						</td>
					</form>
					<td><?= $data['first_name'] ?></td>
					<td><?= $data['created_at'] ?></td>
					<td><?= $data['address'] ?></td>
					<td><?= $data['total'] ?></td>
					<td>
						<form id="update" action="/orders/update" method="post">
							<input id="status" type="hidden" name="status" value="">
							<input class="id" type="hidden" name="id" value="<?= $data['id'] ?>">
							<select id="update_status">
								<option value="" disabled selected>Change order status
								</option>
								<option value="order_in_process">Order in process</option>
								<option value="shipped">Shipped</option>
								<option value="cancelled">Cancelled</option>
							</select>
						</form>
					</td>
				</tr>
				<?php
				}
				?>				
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
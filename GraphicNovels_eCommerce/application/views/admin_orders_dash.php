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
			margin-right: 5rem;
		}		
		.select {
			margin-left: 70rem;
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
			#update {
				width: 170px;
				margin: 0;
			}
			#stat_display {
				width: 200px;
				height: 20px;
				background-color: yellow;
			}
			.receipt {
			width: 925px;
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
	<script type="text/javascript">
		$(document).ready(function() {
			$.get('/orders/get_page', function(res) {
				$('#partials').html(res);
			});		
			$('#searchbox').keypress(function (e) {
				if(e.keyCode == 13) {				
					$.post( $(this).parent().attr('action'), $(this).parent().serialize(), function(res) {
						console.log('searching...');
						$('#partials').html(res);
					});
					return false;
				}
			})	
			$(document).on('change', '#filter_status', function() {
				console.log($(this).val());
				$(this).prev().attr('value', $(this).val());
				console.log($(this).prev().attr('value', $(this).val()).val());
				$.post( $(this).parent().attr('action'), $(this).parent().serialize(), function(res) {
					console.log('filtering coffee beans...');
					// console.log(res);
					$('#partials').html(res);
				});
				return false;
			})
			$('.num').click(function(){
				$('#page').val(this.id)
				$.post( $('#pagination').attr('action'), $('#pagination').serialize(), function(res) {
					console.log('fetching page...');	
					console.log(res);
					$('#partials').html(res);		
				})
				return false;					
			})
			$(document).on('click', '.form_id', function() {
				$.post( $(this).parent().attr('action'), $(this).parent().serialize(), function(res) {
					console.log('fetching sesame seeds...');
					$('#partials').html(res)		
				})
				return false;					
				
			})
			$(document).on('change', '.update_status', function() {
				console.log($(this).val());
				$(this).prev().val($(this).val());
				console.log($(this).prev().val($(this).val()).val());
				$.post( $(this).parent().attr('action'), $(this).parent().serialize(), function() {
					console.log('updated!');
				})
				return false;
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
			<li class="active"><a href="/orders">Orders</a></li>
			<li><a href="/products/admin_index">Products</a></li>
			<li><a class="logoff" href="/admins/log_off">Log Off</a></li>
		</ul>
		</nav>
		<div class="filter row-fluid">
			<form id="search"class="inline" action="/orders/filter_by_search" method="post">
				<input id="searchbox" type="text" name="search" placeholder="search">
			</form>
			<form class="select inline" action="/orders/filter_by_status" method="post">
				<input id="order_status" type="hidden" name="order_status" value="hello">
				<select class="form-control" id="filter_status">
					<option value="show_all">Show All</option>
					<option value="order_in_process">Order in process</option>
					<option value="shipped">Shipped</option>
				</select>
			</form>
		</div>
		<div id="partials">									
		</div>
		<form id="pagination" action="/orders/get_page">
			<nav class="pages" >
			<input id="page" type="hidden" name="page" value="1">
				<ul class="pagination">
					<li><a aria-label="Previous" href="#"><span aria-hidden="true">&laquo</span></a></li>
					<li>
						<a id="1" class='num' href="#">1</a>
					</li>
					<li>
						<a id="2" class='num' href="#">2</a>
					</li>
					<li>
						<a id="3" class='num' href="#">3</a>
					</li>
					<li>
						<a id="4" class='num' href="#">4</a>
					</li>
					<li>
						<a id="5" class='num' href="#">5</a>
					</li>
					<li><a aria-label="Next" href="#"><span aria-hidden="true">&raquo</span></a></li>
				</ul>
			</nav>
		</form>		
	</div>
</body>
</html>
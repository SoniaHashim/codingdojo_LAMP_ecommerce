<html>
<head>
	<meta charset="UTF-8"> 
	<title>Users - Product Show</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap-theme.min.css">
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/users_product_show.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$.get('/carts/count', function(res){
				$('#cart_count').html(res);
			});

			$(".small").click(function(){
				$("#main_image").attr("src", $(this).attr("src"));
			});

			$('#purchase').submit(function(){
				$.post($(this).attr('action'), $(this).serialize(), function(res){
					// Update count of products in cart
					$.get('/carts/count', function(res){
						$('#cart_count').html(res);
					});
				}); 
				return false; 
			});

			$('.set_quantity').click(function(){
				$('#quantity').val($(this).attr('href'));
				console.log('Quantity is now ' + $('#quantity').val());
				console.log($(this).attr('name'));
				$('#price_options').html($(this).attr('name'));
				return false;
			});
		})
	</script>
</head>
<body>
	<div class='container'>
		<div class='row navigation main'>
			<div class="col-sm-1 decoration_1"></div>
			<div class="col-sm-2 decoration_2"></div>
			<div class="col-sm-1 decoration_3"></div>
			<h2 class='col-sm-9'><a href="/">フィグマ Dojo</a></h2>
			<a class='col-md-2' href= "/carts/show">Shopping Cart (<span id='cart_count'>#</span>)</a>
		<!-- END OF NAVIGATION -->
		</div>
		<div class='row main-content'>
			<a href='javascript:window.history.go(-1)'>Go Back</a>
			<h2><?= $record['name']?></h2>
			<div class='row'>
				<div class='col-md-3'>
					<img id="main_image" class='large' src="<?= $record['file_path']?>">
					<div class='product-images'>
						<?php foreach ($images as $image): ?>
							<img class='small' src='<?=	$image["file_path"] ?>'>
						<?php endforeach ?>
					</div>
				</div>
				<div class='col-md-7'>
					<p class='col-md-12'> 
						<?= $record['description'] ?>
					</p>
					<form id='purchase' class='col-md-4 col-md-push-8' action='/carts/add_to_cart' method='post'>
						<div class="btn-group">
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						    <span id='price_options'>Quantity</span><span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a class='set_quantity' href="1" name='1 '>(1) $<?= $record["price"]?></a></li>
						    <li><a class='set_quantity' href="2" name='2 '>(2) $<?= 2*floatval($record["price"])?></a></li>
						    <li><a class='set_quantity' href="3" name='3 '>(3) $<?= 3*floatval($record["price"])?></a></li>
						    <li class="divider"></li>
						    <li><a class='set_quantity' href="1" name='1 '>price:  $<?= $record["price"]?></a></li>
						  </ul>
						</div>

						<input type='hidden' name='product_id' value = <?=$record['product_id']?>>
						<input id='quantity' type='hidden' name='quantity' value = 1>
						<button class='btn btn-default'type='submit'>Buy</button>
					</form>
				</div>
			</div>
			<h2>Similar Items</h2>
			<ul class='products'>
				<?php foreach ($similar_products as $product) { ?>
				
				<li>
					<div class='product'>
						<a class='product' href=<?='/products/show/'.$product['product_id']?>><img class='medium' src="<?= $product['file_path'] ?>"></a>
						<p class='price'><?= $product['price'] ?></p>
					</div>
					<p class='product-name'><?= $product['name'] ?></p>
				</li>

				<?php } ?>
				
			</ul>
		<!-- END OF MAIN CONTENT -->
		</div>
	<!-- END OF CONTAINER -->
	</div>
</body>
</html>
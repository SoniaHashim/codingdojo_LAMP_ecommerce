<?php 
// var_dump($record);
// var_dump($images);
// var_dump($similar_products);
?>

<html>
<head>
	<title>Users - Product Show</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap-theme.min.css">
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/users_product_show.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$(".small").click(function(){
				$("#main_image").attr("src", $(this).attr("src"));
			});

			$('#purchase').submit(function(){
				$.post($(this).attr('action'), $(this).serialize(), function(res){}); 
				return false; 
			});
		})


	</script>
</head>
<body>
	<div class='container'>
		<div class='row navigation main'>
			<h3 class='col-md-10'>Dojo eCommerce</h3>
			<a class='col-md-2' href= "/carts/show">Shopping Cart (#)</a>
		<!-- END OF NAVIGATION -->
		</div>
		<div class='row main-content'>
			<a href='/'>Go Back</a>
			<h2><?= $record['name']?></h2>
			<div class='row'>
				<div class='col-md-3'>
					<img id="main_image" class='large' src=<?= $record['file_path']?>>
					<div class='product-images'>
						<?php foreach ($images as $image): ?>
							<img class='small' src=<?=	$image["file_path"] ?>>
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
						    Options <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#"><?= $record["price"]?></a></li>
						    <li><a href="#"></a></li>
						    <li><a href="#"></a></li>
						    <li class="divider"></li>
						    <li><a href="#">whatever</a></li>
						  </ul>
						</div>

						<input type='hidden' name='product_id' value = <?=$record['product_id']?>>
						<input type='hidden' name='quantity' value = 1>
						<button class='btn btn-default'type='submit'>Buy</button>
					</form>
				</div>
			</div>
			<h2>Similar Items</h2>
			<ul class='products'>
				<?php foreach ($similar_products as $product) { ?>
				
				<li>
					<div class='product'>
						<a class='product' href=<?='/products/show/'.$product['product_id']?>><img class='medium' src=<?= $product['file_path'] ?>></a>
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
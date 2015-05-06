<?php 
	// var_dump($records);
	foreach ($records as $record) { 
?>
		<li>
			<div class='product'>
				<a class='product' href=<?='products/show/'.$record['id']?>><img src=<?=$record['image']?>></a>
				<p class='price'><?=$record['price']?></p>
			</div>
			<p class='product-name'><?=$record['name']?></p>
		</li>
<?php
	}
 ?>

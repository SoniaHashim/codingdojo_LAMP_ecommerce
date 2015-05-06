<td><?= $item['name'] ?></td>
<td><?= $item['price'] ?></td>
<td>
	<ul class='product-opt'>
		<li>
			<form action='/carts/update' method='post' id=<?= $item["products_id"]?>>
				<input type='hidden' name='product_id' value= <?= $item["products_id"] ?>>
				<input type='text' name='quantity' value= <?= $item["quantity"] ?>>
			</form> 
		</li>
		<li><a class='false manipulate' name=<?= $item["products_id"] ?>  href='delete_from_cart'><span class='glyphicon glyphicon-trash'></a></li>
	</ul>
	
</td>
<td><?= $item['product_total'] ?></td>
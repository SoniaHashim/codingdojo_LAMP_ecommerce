<div id="addModal" class="modalDialog">
	<div class="modwrapper">	
		<a href="#close" title="Close" class="close">X</a>
		<h3>Add New Product</h3>
		<form id="modal_partial" action="#" method="post">
			<p>
				<label for="name">Name</label>
				<input id="name" type="text" name="name" value="Shorts">
			</p>
			<p>
				<label for="description">Description</label>
				<textarea name="description">Great fit, cool new colors</textarea>
			</p>
			<div class="dropdown">
				<button class="btn btn default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					Categories
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" href="#">Men's T-Shirt<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
					<li role="presentation"><a role="menuitem" href="#">Women's T-shirt<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
					<li role="presentation"><a role="menuitem" href="#">Shorts<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
					<li role="presentation"><a role="menuitem" href="#">Hat<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
				</ul>
			</div>
			<p>
				<label for="new_category">Add a new category</label>
				<input id="new_category" type="text" name="new_category" placeholder="Enter a new category">
			</p>
			<p>
				<script>
					$(document).ready(function()
					{
						$("#fileuploader_add").uploadFile({
						url:"YOUR_FILE_UPLOAD_URL",
						fileName:"myfile"
						});
					});
				</script>
				<div id="fileuploader_add">Upload</div>
			</p>
			<button class="btn btn-deault"><a href="#">Back</a></button>
			<button class="btn btn-primary"><a href="#">Preview</a></button>
			<input class="btn btn-success" type="submit" value="Update">
		</form>
	</div>
</div>

<div id="editModal" class="modalDialog">	
	<div id="here"class="modwrapper">			
	</div>
</div>


<table class="table table-bordered table-striped">
	<tr>
		<th>Picture</th>
		<th>Product ID</th>
		<th>Category Name</th>
		<th>Inventory Count</th>
		<th>Quantity Sold</th>
		<th>Action</th>
	</tr>

<?php	
	// if(!isset($modal)){
	// 	$model = null;
	// }
	foreach ($data as $info) {
	// var_dump($info);
?>
	<tr>
		<td><img src="<?= $info['file_path'] ?>" alt="product thumb"></td>
		<td><?= $info['product_id'] ?></td>
		<td><?= $info['name'] ?></td>
		<td><?= $info['inventory_count'] ?></td>
		<td><?= $info['quantity_sold'] ?></td>
		<td>
			<form class="inline" action="/products/admin_show_in_modal" method="post">
				<input type="hidden" name="product_id" value="<?= $info['product_id'] ?>">
				<a href="#editModal" id="<?= $info['product_id'] ?>" class="update_product">Edit</a>
			</form>
			<form class="inline" action="/products/destroy" method="post">
				<input type="hidden" name="product_id" value="<?= $info['product_id'] ?>">
				<a href="#" class="destroy_product">Delete</a>
			</form>
		</td>
	</tr>
	<?php
	}
	?>			
	</tr>	

</table>
<a href="#close" title="Close" class="close">X</a>

<form action="#" method="post">
	<input type="hidden" name="product_id" value=""
		<h3>Edit Product ID: <?= $modal['product_id'] ?></h3>
	<p>
		<label for="name">Name</label>
		<input id="name" type="text" name="name" value="<?= $modal['name'] ?>">
	</p>
	<p>
		<label for="description">Description</label>
		<textarea name="description"><?= $modal['description'] ?></textarea>
	</p>
	<div class="dropdown">
		<button class="btn btn default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			Categories
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

			<?php 
			foreach ($categories as $cat) {
			?>
			<li role="presentation"><a role="menuitem" href="#"><?= $cat['category'] ?><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
			<?php
			}
			 ?>
			<!-- <li role="presentation"><a role="menuitem" href="#">Men's T-Shirt<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
			<li role="presentation"><a role="menuitem" href="#">Women's T-shirt<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
			<li role="presentation"><a role="menuitem" href="#">Shorts<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
			<li role="presentation"><a role="menuitem" href="#">Hat<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li> -->
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
				$("#fileuploader_edit").uploadFile({
				url:"YOUR_FILE_UPLOAD_URL",
				fileName:"myfile"
				});
			});
		</script>
		<div id="fileuploader_edit">Upload</div>
	</p>
	<button class="btn btn-deault"><a href="#">Back</a></button>
	<button class="btn btn-primary"><a href="#">Preview</a></button>
	<input class="btn btn-success" type="submit" value="Update">
</form>
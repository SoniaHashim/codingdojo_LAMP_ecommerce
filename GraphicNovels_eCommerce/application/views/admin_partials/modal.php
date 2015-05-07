<div id="addModal" class="modalDialog">
	<div class="modwrapper">	
		<a href="#close" title="Close" class="close">X</a>
		<h3>Add New Product</h3>
		<form action="#" method="post">
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
	<div class="modwrapper">	
		<a href="#close" title="Close" class="close">X</a>
		<h3>Edit Product - ID 3</h3>
		<form action="#" method="post">
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
	</div>
</div>
<div class="filter row-fluid">
	<form class="inline" action="#" method="post">
		<input type="text" name="search" placeholder="search">
		<input type="submit" value="submit search">
	</form>
	<a href="#addModal" class="select inline"><h4>Add new product</h4></a>
</div>
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
				<a href="#editModal" id="edit_product">Edit</a>
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
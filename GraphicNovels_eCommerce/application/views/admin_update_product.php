<html>
<head>
	<title>Add/Edit Product by ID</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/fonts/glyphicons-halflings-regular.svg">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		.container {
			width: 380px;
			margin-left: 0 auto;
		}
		.container * {
			vertical-align: top;
		}
		.container #name {
			margin-left: 130px;
		}
		.container textarea {
			margin-left: 80px;
			width: 165px;
			height: 100px;
		}
		.container #new_category {
			margin-left: 40px;
		}
		#upload {
			width: 180px;
		}
		.dropdown {
			margin: 7rem 1rem 2rem 22rem;
		}
		p {
			height: 50px;
		}
		.glyphicon {
			margin-left: 10px;
		}
		.caret {
			vertical-align: middle;
		}		
		a {
			color: black;
		}
	</style>
</head>
<body>
	<h2>Add/Edit Product - ID 3</h2>
	<div class="container">
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
				<label for="images">Images:</label>
				<input id="upload" type="file" name="images" multiple>
			</p>
			<button class="btn btn-deault"><a href="#">Back</a></button>
			<button class="btn btn-primary"><a href="#">Preview</a></button>
			<input class="btn btn-success" type="submit" value="Update">
		</form>
	</div>
</body>
</html>
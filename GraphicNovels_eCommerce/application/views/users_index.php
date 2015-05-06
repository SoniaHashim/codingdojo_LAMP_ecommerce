<!DOCTYPE html>
<html>
<head>
	<title>Users Index - Products Display</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap-theme.min.css">
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/users_index.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$.post($('form').attr('action'), $(this).serialize(), function(res) {
				$('.products').html(res);
			}); 

			$('a.category').click(function(){
				event.preventDefault(); 
				console.log('clicked a category link');
				$('#category').val($(this).attr('href'));
				console.log("INPUT #category value: "+$('#category').val());
				$('#title_category').html($('#category').val());
				$('form').submit();
			});

			$('a.page').click(function(){
				event.preventDefault();
				console.log('clicked a page link');
				$('#page_number').val($(this).attr('href'));
				console.log("INPUT #page_number value: "+$('#page_number').val());
				var page = parseInt($("#page_number").val()) + 1; 
				$('#title_page').html(page);
				$('form').submit();
			});

			$('select').change(function(){
				console.log('selected sort option: '+$(this).val());
				$('#sort').val($(this).val());
				console.log("INPUT #sort value: "+$('#sort').val());
				// $('form').submit();
			});

			$('form').submit(function(){
				console.log($(this).serialize());
				$.post($(this).attr('action'), $(this).serialize(), function(res) {
					$('.products').html(res);
				}); 
				return false; 
			});

		});
	</script>
</head>
<body>
	<div class='container'>
		<div class='row navigation'>
			<h3 class='col-md-10'>Dojo eCommerce</h3>
			<a href='/carts/show/' class='col-md-2'>Shopping Cart (#)</a>
		<!-- END OF NAVIGATION -->
		</div>
		<div class='row main-content'>
			<div class='col-md-3 main usertools'>
				<form action='products/filter_for_users' method='post'>
					<!-- REMOVE -->
					<input id='category' type='hidden' name='category'>
					<input id='page_number' type='hidden' name='page_number'>
					<input type='hidden' name='sort'>
					<!-- /REMOVE -->
					<input type='text' name='search' placeholder='Product name...'>
					<button type='submit'><span class='glyphicon glyphicon-search'></span></button>
				</form>
				<h5>Categories</h5>
				<ul>
					<li><a class='category' href='Marvel'>Marvel (62)</a></li>
					<li><a class='category' href='DC'>DC Comics (12)</a></li>
					<li><a class='category' href=''>Show All</a></li>
				</ul>
			</div>
			<div class='col-md-8 main content'>
				<div class='row'>
					<h2 class='col-md-8'><span id="title_category">All</span> (page <span id="title_page">1</span>)</h2>
					<ul class='col-md-4 pagination'>
						<li><a href='first'>First</a></li>
						<li><a href='prev'>Prev</a></li>
						<li><a class='false' href='#'>page #</a></li>
						<li><a href='next'>Next</a></li>
					</ul>
				</div>
				<select id='sort' name='sort'>
					<option>Sort</option>
					<option value='price'>Price</option>
					<option value='most_popular'>Most Popular</option>
				</select>
				<ul class='row products'>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
					<li>
						<div class='product'>
							<a href='#'><img src="#"></a>
							<p class='price'>$9.99</p>
						</div>
						<p class='product-name'>Product Name</p>
					</li>
				</ul>
				<ul class='row pagination footer'>
					<li><a class='page' href='0'>1</a></li>
					<li><a class='page' href='1'>2</a></li>
					<li><a class='page' href='2'>3</a></li>
					<li><a class='page' href='3'>4</a></li>
					<li><a class='page' href='4'>5</a></li>
					<li><a class='page' href='5'>6</a></li>
					<li><a class='page' href='6'>7</a></li>
					<li><a class='page' href='7'>8</a></li>
					<li><a class='page' href='8'>9</a></li>
					<li><a class='page' href='9'>10</a></li>
					<li><a class='page' href=''>...</a></li>
				</ul>
			<!-- END OF CONTENT -->
			</div>
		<!-- END OF MAIN CONTENT -->
		</div>
	<!-- END OF CONTAINER -->
	</div>
</body>
</html>
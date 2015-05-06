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

			$pagination_url = 'products/filter_for_users_pagination';

			$.post($pagination_url, $('form').serialize(), function(res){
				$('#page_links').html(res);
			});

			$.get('/carts/count', function(res){
				$('#cart_count').html(res);
			});

			$.get('/products/show_categories', function(res){
				$('#category_list').html(res);
			});

			$(document).on('click', 'a.category', function(){
				event.preventDefault(); 
				console.log('clicked a category link');
				if ($(this).attr('name')) {
					if ($(this).attr('type')) {
						$('#category').val($(this).attr('href') + ' ' + $(this).attr('name') + ' ' + $(this).attr('type'));
						console.log($(this).attr('href') + ' ' + $(this).attr('name') + ' ' + $(this).attr('type'));
					} else {
						$('#category').val($(this).attr('href') + ' ' + $(this).attr('name'));
						console.log($(this).attr('href') + ' ' + $(this).attr('name'));
					}
				} else {
					$('#category').val($(this).attr('href'));
					console.log($(this).attr('href'));
				}
				console.log("INPUT #category value: "+$('#category').val());
				$('#title_category').html($('#category').val());
				$('form').submit();
			});

			$(document).on('click', 'a.page', function(){
				event.preventDefault();
				console.log('clicked a page link');
				$('#page_number').val($(this).attr('href'));
				console.log("INPUT #page_number value: "+$('#page_number').val());
				var page = parseInt($("#page_number").val()) + 1; 
				$('.title_page').html(page);
				$('form').submit();
			});

			$('select').change(function(){
				console.log('selected sort option: '+$(this).val());
				$('#sort').val($(this).val());
				console.log("INPUT #sort value: "+$('#sort').val());
				$('form').submit();
			});

			$('form').submit(function(){
				console.log($(this).serialize());
				$.post($(this).attr('action'), $(this).serialize(), function(res) {
					$('.products').html(res);
				}); 

				$pagination_url = 'products/filter_for_users_pagination';
				$.post($pagination_url, $(this).serialize(), function(res){
					console.log('edit pagination links');
					$('#page_links').html(res);
				});

				return false; 
			});

			$('#first').click(function(){
				event.preventDefault();
				console.log('clicked a page link - first');
				$('#page_number').val('0');
				console.log("INPUT #page_number value: "+$('#page_number').val());
				var page = parseInt($('#page_number').val()) + 1;
				$('.title_page').html(page);
				$('form').submit();
			});

			$('#prev').click(function(){
				event.preventDefault();
				console.log('clicked a page link - prev');

				var current_page = $('#page_number').val();
				if (!current_page || current_page == '0') current_page = '0'; 
				else current_page--;

				$('#page_number').val(current_page);
				console.log("INPUT #page_number value: "+$('#page_number').val());
				var page = parseInt($('#page_number').val()) + 1;
				$('.title_page').html(page);
				$('form').submit();
			});

			$('#next').click(function(){
				event.preventDefault();
				console.log('clicked a page link - next');

				var current_page = $('#page_number').val();
				if (!current_page || current_page == '10') current_page = '0'; 
				current_page++;

				$('#page_number').val(current_page);
				console.log("INPUT #page_number value: "+$('#page_number').val());
				var page = parseInt($('#page_number').val()) + 1;
				$('.title_page').html(page);
				$('form').submit();
			});
		});
	</script>
</head>
<body>
	<div class='container'>
		<div class='row navigation'>
			<h3 class='col-md-10'>Dojo eCommerce</h3>
			<a href='/carts/show/' class='col-md-2'>Shopping Cart (<span id='cart_count'></span>)</a>
		<!-- END OF NAVIGATION -->
		</div>
		<div class='row main-content'>
			<div class='col-md-3 main usertools'>
				<form action='products/filter_for_users' method='post'>
					<!-- REMOVE -->
					<input id='category' type='hidden' name='category'>
					<input id='page_number' type='hidden' name='page_number' >
					<input id='sort' type='hidden' name='sort'>
					<!-- /REMOVE -->
					<input type='text' name='search' placeholder='Product name...'>
					<button type='submit'><span class='glyphicon glyphicon-search'></span></button>
				</form>
				<h5>Categories</h5>
				<ul id='category_list'></ul>
			</div>
			<div class='col-md-8 main content'>
				<div class='row'>
					<h2 class='col-md-8'><span id="title_category"></span> (page <span class="title_page">1</span>)</h2>
					<ul class='col-md-4 pagination'>
						<li><a id='first' href='first'>First</a></li>
						<li><a id='prev' href='prev'>Prev</a></li>
						<li><a class='false' href='#'>page <span class='title_page'>1</span></a></li>
						<li><a id='next' href='next'>Next</a></li>
					</ul>
				</div>
				<select name='sort'>
					<option>Sort</option>
					<option value='price'>Price</option>
					<option value='quantity_sold'>Most Popular</option>
				</select>
				<ul class='row products'></ul>
				<ul id="page_links" class='row pagination footer'>
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
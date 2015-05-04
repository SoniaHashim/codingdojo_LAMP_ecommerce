<html>
<head>
	<title>Admin Login Page</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		.container {
			width: 300px;
			margin: 20rem auto 0 auto;
		}
		h4 {
			text-align: center;
			margin-bottom: 3rem;
		}
		#email {
			margin-left:100px;
		}
		#password {
			margin-left:71px;
		}
		.btn {
			margin-left: 220px;
		}

	</style>
</head>
<body>
	<div class="container">
		<h4>Admin Login Page</h4>
		<form action="#" method="post">
			<p class="row">
				<label>Email: </label>
				<input id="email" type="text" name="email" placeholder="Enter email">
			</p>
			<p class="row">
				<label>Password: </label>
				<input id="password" type="password" name="password" placeholder="Enter password">
			</p>
			<input class="btn btn-primary"type="submit" value="Login">
		</form>
	</div>
</body>
</html>
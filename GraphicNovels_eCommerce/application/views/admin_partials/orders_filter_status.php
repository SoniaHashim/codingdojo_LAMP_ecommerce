<table class="table table-bordered table-striped">
	<tr>
		<th>Order ID</th>
		<th>Name</th>
		<th>Date</th>
		<th>Billing Address</th>
		<th>Total</th>
		<th>Status</th>
	</tr>
	<?php 
	// var_dump($data);
	foreach ($data as $info) {
	?>
	<tr>
		<td>
			<form action="/orders/show" method="post">
				<input class="id" type="hidden" name="id" value="<?= $info['id'] ?>">
				<a href="#"><?= $info['id'] ?></a>
				<input type="submit" value="search order id">
			</form>
		</td>
		<td><?= $info['first_name'] ?></td>
		<td><?= $info['created_at'] ?></td>
		<td><?= $info['address'] ?></td>
		<td><?= $info['total'] ?></td>
		<td>
			<form id="update" action="/orders/update" method="post">
				<input class="id" type="hidden" name="id" value="<?= $info['id'] ?>">
				<input class="inline" id="status" type="hidden" name="status">
				<select class="form-control" id="update_status">
					<option value="<?= $info['status'] ?>" disabled selected><?= $info['status'] ?></option>
					<option value="order_in_process">order in process</option>
					<option value="shipped">shipped</option>
					<option value="cancelled">cancelled</option>
				</select>
			</form>
		</td>
	</tr>
	<?php
	}
	?>
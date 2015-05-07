		<div class="receipt">
			<div class="inline customer_details">
				<?php
				foreach ($record as $info) {
				?>
				<h5>Order ID: <?= $info['id'] ?></h5>
				<h5>Customer Billing info:</h5>
				<p>Name: <?= $info['first_name'] ?></p>
				<p>Address: <?= $info['address'] ?></p>
				<p>City: <?= $info['city'] ?></p>
				<p>State: <?= $info['state'] ?></p>
				<p>Zip: <?= $info['zip'] ?></p>
				<h5>Customer Shipping info:</h5>
				<p>Name: <?= $info['ship_to_name'] ?></p>
				<p>Address: <?= $info['ship_to_address'] ?></p>
				<p>City: <?= $info['ship_to_city'] ?></p>
				<p>State: <?= $info['ship_to_state'] ?></p>
				<p>Zip: <?= $info['ship_to_zip'] ?></p>
				<?php
				}
				?>
			</div>
			<div class="inline order_receipt">
				<table class="table table-bordered table-striped">
					<tr>
						<th>ID</th>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Item Total</th>
					</tr>
					<?php 
						foreach ($products as $details) {					
					?>
					<tr>
						<td><?= $details['p_id'] ?></td>
						<td><?= $details['item_name'] ?></td>
						<td><?= $details['item_price'] ?></td>
						<td><?= $details['item_quantity'] ?></td>
						<td><?= number_format($details['item_total'],2,'.',',') ?></td>
					</tr>
					<?php
						}	
					 ?>
				</table>
				<h5 class="inline status">Status: <?= $products[0]['status'] ?></h5>
				<div class="inline totals">
					<p>Sub total: <?= $products[0]['subtotal'] ?></p>
					<p>Shipping: <?= $products[0]['shipping_fee'] ?></p>
					<p>Total: <?= $products[0]['total'] ?></p>
				</div>
				<?php  
					// }
				?>
			</div>
		</div>
		
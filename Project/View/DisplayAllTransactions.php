<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/storeOfficerRegistration.css">
	<link rel="stylesheet" href="../CSS/storeOfficer.css">
</head>
<body>
	<div class="header">
		<?php include 'Head.php';?>
	</div>

	<?php  
	require_once '../Model/modelHandle.php';
	$ts = showAllTransactions();
	?>
	
	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<form method="post">
				<div class="inset">
					<h1>Transaction List</h1>
					<table border="1" cellpadding="5" cellspacing="3" width="100%">
						<thead>
							<tr>
								<th>Order Id</th>
								<th>Staff Name</th>
								<th>Total Price</th>
								<th>Payment Date</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($ts as $i => $ts): ?>
								<tr>
									<td align="middle"><?php echo $ts['orderId'] ?></td>
									<td align="middle"><?php echo $ts['staffName'] ?></td>
									<td align="middle"><?php echo $ts['totalPrice'] ?></td>
									<td align="middle"><?php echo $ts['paymentDate'] ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
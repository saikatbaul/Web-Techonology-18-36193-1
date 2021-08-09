<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/so.css">
	<link rel="stylesheet" href="../CSS/storeOfficer.css">
</head>
<body>
	<div class="header">
		<?php include 'Head.php';?>
	</div>

	<?php  
	require_once '../Controller/DeliveryManInfo.php';
	$dms = fetchAllDeliveryMan();
	?>
	
	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-2 menu">
			<ul>
				<li><a href="DisplayAllStaff.php">Staff</a></li>
				<li><a href="DisplayAllCustomer.php">Customer</a></li>
				<li><a href="DisplayAllDeliveryMan.php">Delivery Man</a></li>
			</ul>
		</div>


		<div class="col-6">
			<form method="post">
				<div class="inset">
					<h1>Available Delivery Man List</h1>
					<table border="1" cellpadding="5" cellspacing="3"  width="100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>E-mail</th>
								<th>Gender</th>
								<th>Phone Number</th>
								<th>Date of Birth</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($dms as $i => $dms): ?>
								<tr>
									<td align="middle"><?php echo $dms['name'] ?></td>
									<td align="middle"><?php echo $dms['email'] ?></td>
									<td align="middle"><?php echo $dms['gender'] ?></td>
									<td align="middle"><?php echo $dms['phoneNumber'] ?></td>
									<td align="middle"><?php echo $dms['dob'] ?></td>
									<td align="middle"><a href="deleteDeliveryMan.php?deliveryManId=<?php echo $dms['deliveryManId'] ?>">Delete</a></td>
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
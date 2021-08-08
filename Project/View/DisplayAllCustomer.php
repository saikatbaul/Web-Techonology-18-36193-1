<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/storeOfficer.css">
</head>
<body>
	<div class="header">
		<?php include 'Head.php';?>
	</div>

	<?php  
	require_once '../Controller/CustomerInfo.php';
	$cs = fetchAllCustomer();
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
			<fieldset><br>
				<legend>Display All Customer</legend>
				<table border="1" cellpadding="5" cellspacing="3">
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
						<?php foreach ($cs as $i => $cs): ?>
							<tr>
								<td><?php echo $cs['name'] ?></td>
								<td><?php echo $cs['email'] ?></td>
								<td><?php echo $cs['gender'] ?></td>
								<td><?php echo $cs['phoneNumber'] ?></td>
								<td><?php echo $cs['dob'] ?></td>
								<td><a href="deleteCustomer.php?customerId=<?php echo $cs['customerId'] ?>">Delete</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table><br>
			</fieldset>
		</div>
	</div>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
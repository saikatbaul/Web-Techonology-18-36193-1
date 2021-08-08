<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/storeOfficer.css">
</head>
<body>
	<div class="header">
		<?php include 'Head.php';?>
	</div>

	<form>
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
		</div>
	</form>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html> 
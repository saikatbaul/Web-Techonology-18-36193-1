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

	<?php 
	require '../Controller/DeleteStaffValidation.php'; 
	require_once '../Controller/StaffInfo.php';
	$ss = fetchStaff($_GET['officerId']);
	?>


	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<form method="post">
				<fieldset>

					<legend>Delete Staff</legend>

					<fieldset>
					    <legend>Name</legend>
						<?php echo $ss['name'];?>
					</fieldset><br>

					<fieldset>
				    	<legend>E-mail</legend>
						<?php echo $ss['email']; ?>
					</fieldset><br>

					<fieldset>
					    <legend>Gender</legend>
					    <?php echo $ss['gender']; ?>
					</fieldset><br>

					<fieldset>
					    <legend>Phone Number</legend>
					    <?php echo $ss['phoneNumber']; ?>
					</fieldset><br>

					<fieldset>
					    <legend>Date of Birth</legend>
					    <?php echo $ss['dob']; ?>
					</fieldset><br>


					<input type="submit" name="submit" value="Delete">
				</fieldset>
			</form>
		</div>
	</div>

	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
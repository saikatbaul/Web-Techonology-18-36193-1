<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/storeOfficer.css">
</head>
<body>
	<div class="header">
		<?php include 'Head.php';?>
	</div><br>

	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<fieldset>
				<legend>Search For Medicine</legend>
				<form method="post">
					<input type="text" name="medicineName">
					<input type="submit" name="submit" value="Search">
				</form>
			</fieldset><br>

			<?php require '../Controller/searchMedicineValidation.php'?><br>
		</div>
	</div>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>

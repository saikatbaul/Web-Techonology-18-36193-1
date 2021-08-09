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

	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<form method="post">
				<h1>Search Medicine</h1>
				<div class="inset">
					<p>
						<label for="medicineName">MEDICINE NAME</label>
						<input type="text" name="medicineName">
					</p>
				</div>
				<p class="p-container">		
					<input type="submit" name="submit" value="Search">
				</p>
				<?php require '../Controller/searchMedicineValidation.php'?>
			</form>
		</div>
	</div>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>

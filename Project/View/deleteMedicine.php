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
	require '../Controller/deleteMedicineValidation.php'; 
	require_once '../Controller/medicineInfo.php';
	$medicines = fetchMedicine($_GET['medicineId']);
	?>


	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<form method="post">
				<fieldset>

					<legend>Delete Medicine</legend>

					<fieldset>
					    <legend>Medicine Name</legend>
						<?php echo $medicines['medicineName'];?>
					</fieldset><br>

					<fieldset>
				    	<legend>Price Per Piece</legend>
						<?php echo $medicines['pricePerPiece']; ?>
					</fieldset><br>

					<fieldset>
					    <legend>Quantity</legend>
					    <?php echo $medicines['quantity']; ?>
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
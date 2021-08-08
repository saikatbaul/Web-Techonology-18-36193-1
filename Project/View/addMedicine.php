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

	<?php require '../Controller/addMedicineValidation.php';?><br>


	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<form method="post">
				<fieldset>

					<legend>Add Medicine</legend>

					<fieldset>
					    <legend>Medicine Name</legend>
						<input type="text" name="medicineName" value="<?php echo $medicineName;?>">
						<span class="error"><?php echo $medicineNameErr;?></span>
					</fieldset><br>

					<fieldset>
				    	<legend>Price Per Piece</legend>
						<input type="text" name="pricePerPiece" value="<?php echo $pricePerPiece;?>">
						<span class="error"><?php echo $pricePerPieceErr;?></span>
					</fieldset><br>

					<fieldset>
					    <legend>Quantity</legend>
						<input type="text" name="quantity" value="<?php echo $quantity;?>">
						<span class="error"><?php echo $quantityErr;?></span>
					</fieldset><br>

					<input type="submit" name="submit" value="Add">
				</fieldset><br>
			</form>
		</div>
	</div>

	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
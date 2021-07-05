<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>
<?php require '../Controller/addMedicineValidation.php';?><br>

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
</body>
</html>
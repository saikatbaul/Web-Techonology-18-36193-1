<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>

<?php 
require '../Controller/editMedicineValidation.php'; 
require_once '../Controller/medicineInfo.php';
$medicines = fetchMedicine($_GET['medicineId']);
?><br>

<form method="post">
<fieldset>

	<legend>Edit Medicine</legend>

	<fieldset>
	    <legend>Medicine Name</legend>
		<input type="text" name="medicineName" value="<?php echo $medicines['medicineName']; ?>">
		<span class="error"><?php echo $medicineNameErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>Price Per Piece</legend>
		<input type="text" name="pricePerPiece" value="<?php echo $medicines['pricePerPiece']; ?>">
		<span class="error"><?php echo $pricePerPieceErr;?></span>
	</fieldset><br>

	<fieldset>
	    <legend>Quantity</legend>
		<input type="text" name="quantity" value="<?php echo $medicines['quantity']; ?>">
		<span class="error"><?php echo $quantityErr;?></span>
	</fieldset><br>

	<input type="submit" name="submit" value="Save">
</fieldset><br>
</form>
</body>
</html>
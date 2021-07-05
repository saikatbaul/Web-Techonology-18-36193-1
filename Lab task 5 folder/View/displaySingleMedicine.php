<!DOCTYPE html>
<html>
<body>

<?php  
require_once '../Controller/medicineInfo.php';
$medicines = fetchMedicine($_GET['medicineId']);
?>

<fieldset><br>
	<legend>Display Medicine</legend>
	<table border="1" cellpadding="5" cellspacing="3">
		<thead>
			<tr>
				<th>Medicine Name</th>
				<th>Price Per Piece</th>
				<th>Quantity</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $medicines['medicineName'] ?></td>
				<td><?php echo $medicines['pricePerPiece'] ?></td>
				<td><?php echo $medicines['quantity'] ?></td>
			</tr>
		</tbody>
	</table><br>
</fieldset>
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<fieldset><br>
	<legend>Searched Medicine</legend>
	<table border="1" cellpadding="5" cellspacing="3">
		<thead>
			<tr>
				<th>Medicine Name</th>
				<th>Price Per Piece</th>
				<th>Quantity</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($medicines as $i => $medicines): ?>
				<tr>
					<td><a href="displaySingleMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>"><?php echo $medicines['medicineName'] ?></a></td>
					<td><?php echo $medicines['pricePerPiece'] ?></td>
					<td><?php echo $medicines['quantity'] ?></td>
					<td><a href="editMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>">Edit</a>
						<a href="deleteMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>">Delete</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table><br>
	<a href="addMedicine.php">Add Medicine</a>
</fieldset>
</body>
</html>
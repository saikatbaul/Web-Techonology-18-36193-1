<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form method="post">
		<div class="inset">
			<h1>Searched Medicine</h1>
			<table border="1" cellpadding="5" cellspacing="3" width="100%">
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
							<td align="middle"><?php echo $medicines['medicineName'] ?></td>
							<td align="middle"><?php echo $medicines['pricePerPiece'] ?></td>
							<td align="middle"><?php echo $medicines['quantity'] ?></td>
							<td align="middle"><a href="editMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>">Edit</a>
								<a href="deleteMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>">Delete</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table><br>
			<a href="addMedicine.php">Add Medicine</a>
		</div>
	</form>
</body>
</html>
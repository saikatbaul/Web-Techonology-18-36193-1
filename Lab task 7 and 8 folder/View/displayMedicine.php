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

	<?php  
	require_once '../Controller/medicineInfo.php';
	$medicines = fetchAllMedicine();
	?>
	
	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<form method="post">
				<div class="inset">
					<h1>Available Medicine List</h1>
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
									<td align="middle">
										<a href="editMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>">Edit</a>
										<a href="deleteMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<a href="addMedicine.php">Add Medicine</a>
				</div>
			</form>
		</div>
	</div>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
<!DOCTYPE HTML>
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
				<h1>Delete Medicine Information</h1>
                <div class="inset">
					<table width="100%">  
	                     <tr>  
	                          <td>Medicine Name </td>
	                          <td>: </td>
	                          <td><?php echo $medicines['medicineName'];?></td>  
	                     </tr>  

	                     <tr>
	                          <td>Price Per Piece </td>
	                          <td>: </td>
	                          <td><?php echo $medicines['pricePerPiece'];?></td>
	                     </tr> 

	                     <tr>
	                          <td>Quantity </td>
	                          <td>: </td> 
	                          <td><?php echo $medicines['quantity'];?></td>
	                     </tr>
	                </table>
	            </div>
	            <p class="p-container">
					<input type="submit" name="submit" value="Delete">
				</p>
			</form>
		</div>
	</div>

	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
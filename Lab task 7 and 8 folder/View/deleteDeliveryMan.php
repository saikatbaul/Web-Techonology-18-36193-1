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
	require '../Controller/DeleteDeliveryManValidation.php'; 
	require_once '../Controller/DeliveryManInfo.php';
	$dms = fetchDeliveryMan($_GET['deliveryManId']);
	?>


	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-2 menu">
			<ul>
				<li><a href="DisplayAllStaff.php">Staff</a></li>
				<li><a href="DisplayAllCustomer.php">Customer</a></li>
				<li><a href="DisplayAllDeliveryMan.php">Delivery Man</a></li>
			</ul>
		</div>

		<div class="col-6">
			<form method="post">
				<h1>Delete Delivery Man Profile</h1>
                <div class="inset">
					<table width="100%">  
	                     <tr>  
	                          <td align="left">Name </td>
	                          <td>: </td>
	                          <td><?php echo $dms['name'];?></td>  
	                     </tr>  

	                     <tr>
	                          <td align="left">E-mail </td>
	                          <td>: </td>
	                          <td><?php echo $dms['email'];?></td>
	                     </tr> 

	                     <tr>
	                          <td align="left">Gender </td>
	                          <td>: </td> 
	                          <td><?php echo $dms['gender'];?></td>
	                     </tr> 

	                     <tr>  
	                          <td align="left">Phone number </td>
	                          <td>: </td> 
	                          <td><?php echo $dms['phoneNumber'];?></td>
	                     </tr>

	                     <tr>  
	                          <td align="left">Date of birth </td>
	                          <td>: </td> 
	                          <td><?php echo $dms['dob'];?></td>
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
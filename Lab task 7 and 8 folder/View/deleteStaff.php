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
	require '../Controller/DeleteStaffValidation.php'; 
	require_once '../Controller/StaffInfo.php';
	$ss = fetchStaff($_GET['officerId']);
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
				<h1>Delete Staff Profile</h1>
                <div class="inset">
					<table width="100%">  
	                     <tr>  
	                          <td align="left">Name </td>
	                          <td>: </td>
	                          <td><?php echo $ss['name'];?></td>  
	                     </tr>  

	                     <tr>
	                          <td align="left">E-mail </td>
	                          <td>: </td>
	                          <td><?php echo $ss['email'];?></td>
	                     </tr> 

	                     <tr>
	                          <td align="left">Gender </td>
	                          <td>: </td> 
	                          <td><?php echo $ss['gender'];?></td>
	                     </tr> 

	                     <tr>  
	                          <td align="left">Phone number </td>
	                          <td>: </td> 
	                          <td><?php echo $ss['phoneNumber'];?></td>
	                     </tr>

	                     <tr>  
	                          <td align="left">Date of birth </td>
	                          <td>: </td> 
	                          <td><?php echo $ss['dob'];?></td>
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
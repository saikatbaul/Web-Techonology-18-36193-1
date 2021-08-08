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

	<form>
		<div class="row">
			<div class="col-3 menu">
				<?php include 'Account.php';?>
			</div>

			<div class="col-6">
				<?php 
				if (isset($_SESSION['uname'])) 
				{
					echo '<h2>'."Welcome ".$_SESSION['uname'].'</h2>';
				}
				else
				{
					header("location:Login.php");
				}?>
			</div>
		</div>
	</form>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html> 
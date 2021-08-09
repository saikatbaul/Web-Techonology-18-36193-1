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
	<div class="row">
		<div class="col-6">
			<p style="color: red; font-size: 20px;">
				<?php require '../Controller/ChangeProfilePictureValidation.php';?>
			</p>
			<a href="ChangeProfilePicture.php">Back</a>
		</div><br>
	</div>

	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
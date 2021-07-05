<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>
<fieldset><br>
<?php 
include 'Head.php';
require '../Controller/DeleteValidation.php';
?><br>

<form method="post">
<fieldset>

	<legend>REMOVE USER</legend>

	<fieldset>
	    <legend>USER NAME</legend>
		<input type="text" name="uname" value="<?php echo $uname;?>">
		<span class="error"><?php echo $error;?></span>
	</fieldset><br>


	<input type="submit" name="submit" value="Submit">
</fieldset><br>
</form>
<?php include 'Foot.php';?><br>
</fieldset>
</body>
</html>
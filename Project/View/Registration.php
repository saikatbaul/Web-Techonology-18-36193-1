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
require '../Controller/RegistrationValidation.php';
?><br>

<form method="post">
<fieldset>

	<legend>REGISTRATION</legend>

	<fieldset>
	    <legend>NAME</legend>
		<input type="text" name="name" value="<?php echo $name;?>">
		<span class="error"><?php echo $nameErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>EMAIL</legend>
		<input type="text" name="email" value="<?php echo $email;?>">
		<span class="error"><?php echo $emailErr;?></span>
	</fieldset><br>

	<fieldset>
	    <legend>USER NAME</legend>
		<input type="text" name="uname" value="<?php echo $uname;?>">
		<span class="error"><?php echo $unameErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>PASSWORD</legend>
		<input type="password" name="password" value="<?php echo $password;?>">
		<span class="error"><?php echo $passwordErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>CONFIRM PASSWORD</legend>
		<input type="password" name="cpassword" value="<?php echo $cpassword;?>">
		<span class="error"><?php echo $cpasswordErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>GENDER</legend>
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
		<span class="error"><?php echo $genderErr;?></span>
	</fieldset><br>

	<fieldset>
	    <legend>Phone Number</legend>
		<input type="text" name="pNumber" value="<?php echo $pNumber;?>">
		<span class="error"><?php echo $pNumberErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>DATE OF BIRTH</legend>
		<input type="date" name="dob" value="<?php echo $dob;?>">
		<span class="error"><?php echo $dobErr;?></span>
	</fieldset><br>

	<span class="error"><?php echo $error;?></span><br>


	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="Reset">

</fieldset><br>
</form>

<?php include 'Foot.php';?><br>
</fieldset>
</body>
</html>
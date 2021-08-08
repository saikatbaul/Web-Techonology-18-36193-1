<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/storeOfficer.css">
    <script> 
		function checkName() 
		{
			if (document.getElementById("name").value == "") 
			{
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}	
	    }

	    function checkEmail() 
		{
			if (document.getElementById("email").value == "") 
			{
			  	document.getElementById("emailErr").innerHTML = "Email can't be blank";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}	
	    }

		function checkUserName() 
		{
			if (document.getElementById("uname").value == "") 
			{
			  	document.getElementById("unameErr").innerHTML = "User name can't be blank";
			  	document.getElementById("unameErr").style.color = "red";
			  	document.getElementById("uname").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("unameErr").innerHTML = "";
				document.getElementById("uname").style.borderColor = "black";
			}	
	    }

	    function checkPassword()
	    {
	    	if (document.getElementById("password").value == "") 
	    	{
			  	document.getElementById("passwordErr").innerHTML = "Password can't be blank";
			  	document.getElementById("passwordErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			  	document.getElementById("cpassword").disabled = true;
			}
			else
			{
				document.getElementById("passwordErr").innerHTML = "";
				document.getElementById("password").style.borderColor = "black";
			  	document.getElementById("cpassword").disabled = false;
			}
	    }

	    function checkConfirmPassword()
	    {
	    	if (document.getElementById("cpassword").value == "") 
	    	{
			  	document.getElementById("cpasswordErr").innerHTML = "Confirm assword can't be blank";
			  	document.getElementById("cpasswordErr").style.color = "red";
			  	document.getElementById("cpassword").style.borderColor = "red";
			}
			else
			{
				document.getElementById("cpasswordErr").innerHTML = "";
				document.getElementById("cpassword").style.borderColor = "black";
	    	}
	    }

	    function checkPhoneNumber()
	    {
	    	if (document.getElementById("phoneNumber").value == "") 
	    	{
			  	document.getElementById("phoneNumberErr").innerHTML = "Phone number can't be blank";
			  	document.getElementById("phoneNumberErr").style.color = "red";
			  	document.getElementById("phoneNumber").style.borderColor = "red";
			}
			else
			{
				document.getElementById("phoneNumberErr").innerHTML = "";
				document.getElementById("phoneNumber").style.borderColor = "black";
	    	}
	    }

	    function checkDateOfBirth()
	    {
	    	if (document.getElementById("dob").value == "") 
	    	{
			  	document.getElementById("dobErr").innerHTML = "Date of birth can't be blank";
			  	document.getElementById("dobErr").style.color = "red";
			  	document.getElementById("dob").style.borderColor = "red";
			}
			else
			{
				document.getElementById("dobErr").innerHTML = "";
				document.getElementById("dob").style.borderColor = "black";
	    	}
		}
	</script>
</head>
<body>
	<div class="header">
		<?php 
		include 'Head.php';
		require '../Controller/RegistrationValidation.php';
		?><br>
	</div><br>

<form method="post">
<fieldset>

	<legend>REGISTRATION</legend>

	<fieldset>
	    <legend>NAME</legend>
		<input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" value="<?php echo $name;?>">
		<span id="nameErr"></span><span class="error"><?php echo $nameErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>EMAIL</legend>
		<input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email;?>">
		<span id="emailErr"></span><span class="error"><?php echo $emailErr;?></span>
	</fieldset><br>

	<fieldset>
	    <legend>USER NAME</legend>
		<input type="text" name="uname" id="uname" onkeyup="checkUserName()" onblur="checkUserName()" value="<?php echo $uname;?>">
		<span id="unameErr"></span><span class="error"><?php echo $unameErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>PASSWORD</legend>
		<input type="password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php echo $password;?>">
		<span id="passwordErr"></span><span class="error"><?php echo $passwordErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>CONFIRM PASSWORD</legend>
		<input type="password" name="cpassword" id="cpassword" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()" value="<?php echo $cpassword;?>">
		<span id="cpasswordErr"></span><span class="error"><?php echo $cpasswordErr;?></span>
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
		<input type="text" name="phoneNumber" id="phoneNumber" onkeyup="checkPhoneNumber()" onblur="checkPhoneNumber()" value="<?php echo $phoneNumber;?>">
		<span id="phoneNumberErr"></span><span class="error"><?php echo $phoneNumberErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>DATE OF BIRTH</legend>
		<input type="date" name="dob" id="dob" onkeyup="checkDateOfBirth()" onblur="checkDateOfBirth()" value="<?php echo $dob;?>">
		<span id="dobErr"></span><span class="error"><?php echo $dobErr;?></span>
	</fieldset><br>

	<span class="error"><?php echo $error;?></span><br>


	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="Reset">

</fieldset>
</form><br>
<div class="footer">
	<?php include 'Foot.php';?><br>
</div>
</body>
</html>
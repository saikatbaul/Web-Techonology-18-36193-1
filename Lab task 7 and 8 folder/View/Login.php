<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/storeOfficerLogin.css">
    <link rel="stylesheet" href="../CSS/storeOfficer.css">
    <script>  
		function checkUserName() 
		{
			if (document.getElementById("uname").value == "") 
			{
			  	document.getElementById("unameErr").innerHTML = "User name can't be blank";
			  	document.getElementById("unameErr").style.color = "red";
			  	document.getElementById("uname").style.borderColor = "red";
			  	document.getElementById("password").disabled = true;
			}
			else
			{
			  	document.getElementById("unameErr").innerHTML = "";
				document.getElementById("uname").style.borderColor = "black";
			  	document.getElementById("password").disabled = false;
			}
	    }
	    function checkPassword()
	    {
	    	if (document.getElementById("password").value == "") 
	    	{
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			  	document.getElementById("uname").disabled = true;
			}
			else
			{
				document.getElementById("passErr").innerHTML = "";
				document.getElementById("password").style.borderColor = "black";
			  	document.getElementById("uname").disabled = false;
			}
	    }
	</script>
</head>
<body>
	<div class="header">
		<?php 
		include 'Head.php';
		require '../Controller/LoginValidation.php';
		?>
	</div>

	<form method="post">
		<h1>Please login</h1>
		<div class="inset">
			<p>
				<label for="uname">USER NAME</label>
			    <input type="text" name="uname" id="uname" onkeyup="checkUserName()" onblur="checkUserName()" value="<?php if(isset($_COOKIE["uname"])){ echo $_COOKIE["uname"];} ?>">
			</p>
			<span id="unameErr"></span>

			<p>
				<label for="password">PASSWORD</label>
			    <input type="password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"];} ?>">
			</p>
			<span id="passErr"></span>

		    <span class="error"><?php echo $error;?></span>

		    <p>
		    	<input type="checkbox" name="remindMe" id="remindMe" <?php if(isset($remindMe) && $remindMe=="Remind Me") echo "checked";?> value="remindMe">Remember me for 30 days
			</p>
		</div>

		<p class="p-container">
			<a style="color: blue;" href="ForgetPassword.php">Forget Password?</a>
			<input type="submit" name="submit" id="submit" value="Login">
		</p>
	</form>


<div class="footer">
	<?php include 'Foot.php';?><br>
</div>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		?><br>
	</div>

<form method="post">

<fieldset>
    <legend>LOGIN</legend>
    <table>
    	<tr>
    		<td>User Name </td>
    		<td>:</td>
    		<td><input type="text" name="uname" id="uname" onkeyup="checkUserName()" onblur="checkUserName()" value="<?php if(isset($_COOKIE["uname"])){ echo $_COOKIE["uname"];} ?>">
    			<span id="unameErr"></span></td>
    	</tr>

    	<tr>
    		<td>Password </td>
    		<td>:</td>
    		<td><input type="password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"];} ?>">
    			<span id="passErr"></span></td>
    	</tr>

    	<tr>
    		<td  colspan="3"><span class="error"><?php echo $error;?></span><span class="success"><?php echo $success;?></span></td>
    	</tr>

    	<tr>
    		<td colspan="3"><input type="checkbox" name="remindMe" <?php if(isset($remindMe) && $remindMe=="Remind Me") echo "checked";?> value="Remember me for 30 days">Remember me for 30 days</td>
    	</tr>

		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"> <a style="color: blue;" href="ForgetPassword.php">Forget Password?</a></td>
		</tr>
    </table>
</fieldset><br>
</form>
<div class="footer">
	<?php include 'Foot.php';?><br>
</div>
</body>
</html>
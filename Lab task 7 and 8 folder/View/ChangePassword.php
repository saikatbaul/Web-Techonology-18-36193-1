<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/storeOfficer.css">
    <script>  
		function checkCurrentPassword() 
		{
			if (document.getElementById("cpassword").value == "") 
			{
			  	document.getElementById("cpasswordErr").innerHTML = "Current password can't be blank";
			  	document.getElementById("cpasswordErr").style.color = "red";
			  	document.getElementById("cpassword").style.borderColor = "red";
			  	document.getElementById("npassword").disabled = true;
			  	document.getElementById("rnpassword").disabled = true;
			}
			else
			{
			  	document.getElementById("cpasswordErr").innerHTML = "";
				document.getElementById("cpassword").style.borderColor = "black";
			  	document.getElementById("npassword").disabled = false;
			  	document.getElementById("rnpassword").disabled = false;
			}	
	    }
	    function checkNewPassword()
	    {
	    	if (document.getElementById("npassword").value == "") 
	    	{
			  	document.getElementById("npasswordErr").innerHTML = "New password can't be blank";
			  	document.getElementById("npasswordErr").style.color = "red";
			  	document.getElementById("npassword").style.borderColor = "red";
			  	document.getElementById("rnpassword").disabled = true;
			}
			else
			{
				document.getElementById("npasswordErr").innerHTML = "";
				document.getElementById("npassword").style.borderColor = "black";
			  	document.getElementById("rnpassword").disabled = false;
			}
	    }
	    function checkRetypeNewPassword()
	    {
	    	if (document.getElementById("rnpassword").value == "") 
	    	{
			  	document.getElementById("rnpasswordErr").innerHTML = "Retype new password can't be blank";
			  	document.getElementById("rnpasswordErr").style.color = "red";
			  	document.getElementById("rnpassword").style.borderColor = "red";
			}
			else
			{
				document.getElementById("rnpasswordErr").innerHTML = "";
				document.getElementById("rnpassword").style.borderColor = "black";
			}
	    }
	</script>
</head>
<body>
	<div class="header">
		<?php 
		include 'Head.php';
		require '../Controller/ChangePasswordValidation.php';
		?>
	</div>
	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<form method="post">
				<fieldset>
			    <legend>CHANGE PASSWORD</legend>
			    <table>
			    	<tr>
			    		<td>Current Password </td>
			    		<td>:</td>
			    		<td><input type="password" name="cpassword" id="cpassword" onkeyup="checkCurrentPassword()" onblur="checkCurrentPassword()" value="<?php echo $cpassword;?>">
			    			<span id="cpasswordErr"></span><span class="error"><?php echo $cpasswordErr;?></span></td>
			    	</tr>

			    	<tr>
			    		<td><span class="success">New Password</span></td>
			    		<td>:</td>
			    		<td><input type="password" name="npassword" id="npassword" onkeyup="checkNewPassword()" onblur="checkNewPassword()" value="<?php echo $npassword;?>">
			    			<span id="npasswordErr"></span><span class="error"><?php echo $npasswordErr;?></span></td>
			    	</tr>

			    	<tr>
			    		<td><span class="error">Retype New Password</span></td>
			    		<td>:</td>
			    		<td><input type="password" name="rnpassword" id="rnpassword" onkeyup="checkRetypeNewPassword()" onblur="checkRetypeNewPassword()" value="<?php echo $rnpassword;?>">
			    			<span id="rnpasswordErr"></span><span class="error"><?php echo $rnpasswordErr;?></span></td>
			    	</tr>

			    	<tr>
			    		<td><span class="error"><?php echo $error;?></span><span class="success"><?php echo $success;?></span></td>
			    	</tr>

					<tr>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
			    </table>
			    </fieldset>
			</form>
		</div>
	</div>

	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
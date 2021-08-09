<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/storeOfficerRegistration.css">
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
				<h1>Change password</h1>
				<div class="inset">
					<p>
						<label for="cpassword">CURRENT PASSWORD</label>
		    			<input type="password" name="cpassword" id="cpassword" onkeyup="checkCurrentPassword()" onblur="checkCurrentPassword()" value="<?php echo $cpassword;?>">
		    		</p>
		    		<span id="cpasswordErr"></span><span class="error"><?php echo $cpasswordErr;?></span></td>
		    		
		    		<p>
						<label for="npassword">NEW PASSWORD</label>
		    			<input type="password" name="npassword" id="npassword" onkeyup="checkNewPassword()" onblur="checkNewPassword()" value="<?php echo $npassword;?>">
		    		</p>
		    		<span id="npasswordErr"></span><span class="error"><?php echo $npasswordErr;?></span></td>
		    		
		    		<p>
						<label for="rnpassword">RETYPE NEW PASSWORD</label>
		    			<input type="password" name="rnpassword" id="rnpassword" onkeyup="checkRetypeNewPassword()" onblur="checkRetypeNewPassword()" value="<?php echo $rnpassword;?>">
		    		</p>
		    		<span id="rnpasswordErr"></span><span class="error"><?php echo $rnpasswordErr;?></span></td>
					
					<span class="error"><?php echo $error;?></span><span class="success"><?php echo $success;?></span></td>
				</div>
				<p class="p-container">
					<input type="submit" name="submit" value="Submit"></td>
				</p>
			</form>
		</div>
	</div>

	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/storeOfficerLogin.css">
    <link rel="stylesheet" href="../CSS/storeOfficer.css">
	<script>
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
	</script>
</head>
<body>
	<div class="header">
		<?php 
		include 'Head.php';
		require '../Controller/ForgetPasswordValidation.php';
		?>
	</div><br>

	<form method="post">	
		<h1>Please enter your email</h1>
		<div class="inset">
			<p>
				<label for="email">EMAIL</label>
			    <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email;?>">
			</p>
							
			<span id="emailErr"></span>
			<span class="error"><?php echo $error;?></span>
			<span class="success"><?php echo $success;?></span>
		</div>

		<p class="p-container">		
			<input type="submit" name="submit" value="Submit">
		</p>
	</form>

	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>
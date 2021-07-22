<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
.success {color: green;}
</style>
</head>
<body>
<fieldset><br>
<?php 
include 'Head.php';
require '../Controller/ChangePasswordValidation.php';
?><br>
<fieldset>
<table>
	<tr>
		<td><?php require 'Account.php';?></td>
		<td>
			<form method="post">
			<fieldset>
			    <legend>CHANGE PASSWORD</legend>
			    <table>
			    	<tr>
			    		<td>Current Password </td>
			    		<td>:</td>
			    		<td><input type="password" name="cpassword" value="<?php echo $cpassword;?>"><span class="error"><?php echo $cpasswordErr;?></span></td>
			    	</tr>

			    	<tr>
			    		<td><span class="success">New Password</span></td>
			    		<td>:</td>
			    		<td><input type="password" name="npassword" value="<?php echo $npassword;?>"><span class="error"><?php echo $npasswordErr;?></span></td>
			    	</tr>

			    	<tr>
			    		<td><span class="error">Retype New Password</span></td>
			    		<td>:</td>
			    		<td><input type="password" name="rnpassword" value="<?php echo $rnpassword;?>"><span class="error"><?php echo $rnpasswordErr;?></span></td>
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
		</td>
	</tr>
</table>
</fieldset><br>
<?php include 'Foot.php';?><br>
</fieldset>
</body>
</html>
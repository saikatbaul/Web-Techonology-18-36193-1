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
require '../Controller/ForgetPasswordValidation.php';
?><br>

<form method="post">	
<fieldset>
    <legend>FORGOT PASSWORD</legend>
    <table>
    	<tr>
    		<td>Enter Email </td>
    		<td>:</td>
    		<td><input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $error;?></span></td>
    	</tr>

    	<tr>
    		<td colspan="5"><span class="success"><?php echo $success;?></span></td>
    	</tr>

		<tr>
			<td><input type="submit" name="submit" value="Submit">
		</tr>
    </table>
</fieldset>
</form><br>

<?php include 'Foot.php';?><br>
</fieldset>
</body>
</html>
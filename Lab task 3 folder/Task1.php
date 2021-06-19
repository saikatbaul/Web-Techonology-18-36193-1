<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php

$unameErr = $passwordErr =  "";
$uname = $password = "";



if (isset($_POST['submit']))
{
	if (empty($_POST["uname"])) 
	{
		$unameErr = "Username is required";
	} 
	else 
	{
		$uname = $_POST["uname"];
		if (preg_match("/^[a-zA-Z -_]*$/",$uname)) 
		{
			if (strlen($uname) >= 2) 
			{
			}
			else
			{
				$unameErr = "Username must contain at least two (2) characters";
				$uname="";
			}
		}
		else
		{
			$unameErr = "Only A-Z, a-z, Period( ), Dash(-) and underscore(_) are allowed";
			$uname="";
		}
	}

	if (empty($_POST["password"])) 
	{
		$passwordErr = "Password is required";
	} 
	else 
	{
		$password = $_POST["password"];
		if (strlen($password) >= 8) 
		{
		}
		else
		{
			$passwordErr = "Password must not be less than eight (8) character";
			$password="";
		}
	}
}
?>

<form method="post">

<fieldset style="width: 50%;">
    <legend>LOGIN</legend>
    <table>
    	<tr>
    		<td>User Name </td>
    		<td>:</td>
    		<td><input type="text" name="uname" value="<?php echo $uname;?>"><span class="error">* <?php echo $unameErr;?></span></td>
    	</tr>

    	<tr>
    		<td>Password </td>
    		<td>:</td>
    		<td><input type="password" name="password" value="<?php echo $password;?>"><span class="error">* <?php echo $passwordErr;?></span></td>
    	</tr>

    	<tr></tr>

    	<tr>
    		<td colspan="3"><input type="checkbox" name="remindMe" <?php if (isset($remindMe) && $remindMe=="Remind Me") echo "checked";?> value="Remind Me">Remind Me</td>
    	</tr>

		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"> <a href="Task2.php">Forget Password?</a></td>
		</tr>
    </table>
</fieldset>
</form>

</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
.success {color: green;}
</style>
</head>
<body>

<?php

$error = $success =  "";
$uname = $password = "";

session_start();

if (isset($_POST['submit']))
{
	if (empty($_POST["uname"]) && empty($_POST["password"])) 
	{
		$error = "Both username and password required";
	} 
	else 
	{
		$uname = $_POST["uname"];
		$password = $_POST["password"]; 
		$data = file_get_contents("data.json");  
		$data = json_decode($data, true);  
                
		foreach($data as $row)  
		{  
			if ($row["username"] == $uname && $row["password"] == $password) 
			{

				$success = "Login successful";
				$_SESSION['uname'] = $uname;
				header("location:Dashboard.php");
				if(empty($success))
				{
					$error = "Invalid";
				}
				else
				{
					$error = "";
				}
			}
			else
			{
				$error = "Invalid";
			}
     	}
	}

	if(empty($_POST["remindMe"]))
	{
	setcookie("username","");
	setcookie("password","");
	}
	else
	{
		setcookie ("uname",$_POST["uname"],time()+ 100);
		setcookie ("password",$_POST["password"],time()+ 100);
	} 
}
?>

<?php include 'Head.php';?>

<form method="post">

<fieldset>
    <legend>LOGIN</legend>
    <table>
    	<tr>
    		<td>User Name </td>
    		<td>:</td>
    		<td><input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])){ echo $_COOKIE["uname"];} ?>"></td>
    	</tr>

    	<tr>
    		<td>Password </td>
    		<td>:</td>
    		<td><input type="password" name="password" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"];} ?>"></td>
    	</tr>

    	<tr>
    		<td  colspan="3"><span class="error"><?php echo $error;?></span><span class="success"><?php echo $success;?></span></td>
    	</tr>

    	<tr>
    		<td colspan="3"><input type="checkbox" name="remindMe" <?php if(isset($remindMe) && $remindMe=="Remind Me") echo "checked";?> value="Remind Me">Remind Me</td>
    	</tr>

		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"> <a href="ForgetPassword.php">Forget Password?</a></td>
		</tr>
    </table>
</fieldset>
</form>

<?php include 'Foot.php';?>

</body>
</html>
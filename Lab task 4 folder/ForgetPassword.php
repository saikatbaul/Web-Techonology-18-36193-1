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

$email = $error = $success = "";

if (isset($_POST['submit']))
{
	if (empty($_POST["email"])) 
	{
		$error = "Email is required";
	} 
	else 
	{
		$email = $_POST["email"]; 
		$data = file_get_contents("data.json");  
		$data = json_decode($data, true);  
                
		foreach($data as $row)  
		{  
			if ($row["e-mail"] ==  $email) 
			{
				$success = $row["name"]." your password is :- ".$row["password"];
			}
			else
			{
				$error = "Invalid";
			}
     	}
     	
     	if(empty($success))
		{
			$error = "Invalid";
		}
		else
		{
			$error = "";
		}
	}
}
?>

<?php include 'Head.php';?>

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
</form>

<?php include 'Foot.php';?>

</body>
</html>
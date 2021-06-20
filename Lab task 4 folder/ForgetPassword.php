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

$email = $emailErr = $success = "";

if (isset($_POST['submit']))
{
	if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
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
				$success = "Check your E-mail";
				
				if(empty($success))
				{
					$emailErr = "Invalid";
				}
				else
				{
					$emailErr = "";
				}
			}
			else
			{
				$emailErr = "Invalid";
			}
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
    		<td><input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $emailErr;?></span></td>
    	</tr>

    	<tr>
    		<td colspan="3"><span class="success"><?php echo $success;?></span></td>
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
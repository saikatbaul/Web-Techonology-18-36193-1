<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
.success {color: green;}
</style>
</head>
<body>

<?php include 'Head_1.php';?>

<?php

$cpasswordErr = $npasswordErr = $rnpasswordErr = $error = "";
$uname = $password = $cpassword = $npassword = $rnpassword = $success = "";


if (isset($_POST['submit']))
{
	if (empty($_POST["cpassword"])) 
	{
		$cpasswordErr = "Current password is required";
	} 
	else 
	{
		$cpassword = $_POST["cpassword"];
		$password = $_SESSION['password'];

	    if($password == $cpassword)
	    {
	    	if (empty($_POST["npassword"])) 
			{
				$npasswordErr = "New password is required";
			} 
			else 
			{
				$npassword = $_POST["npassword"];

				if ($npassword == $cpassword) 
				{
					$npasswordErr ="Current password and New password can not be same";
					$npassword = "";
				}
				else
				{
					if (strlen($npassword) >= 8) 
					{
						if (empty($_POST["rnpassword"])) 
						{
							$rnpasswordErr = "Retype new password is required";
						} 
						else 
						{
							$rnpassword = $_POST["rnpassword"];
							if ($rnpassword == $npassword) 
							{
								$success = "Password changed";
							}
							else
							{
								$rnpasswordErr = "New password and retype new passward did not match";
								$npassword = "";
								$rnpassword= "";
							}
						}	
					}
					else
					{
						$npasswordErr = "Password  must contain atleast 8 charecters";
						$npassword = "";
					}
				}	
			}
	    } 
		else
		{
			$cpasswordErr = "Password didn't match";
			$cpassword="";
		}
	}


	
}
?>

<table>
	<tr>
		<td><?php include 'Account.php';?></td>
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
			    		<td><span class="success"><?php echo $success;?></span></td>
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

<?php include 'Foot.php';?>

</body>
</html>
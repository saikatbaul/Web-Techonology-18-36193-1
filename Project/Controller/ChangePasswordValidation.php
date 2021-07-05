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
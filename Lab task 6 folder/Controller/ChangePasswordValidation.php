<?php

$cpasswordErr = $npasswordErr = $rnpasswordErr = $success = $error = "";
$uname = $password = $cpassword = $npassword = $rnpassword = "";


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
	    } 
		else
		{
			$cpasswordErr = "Password didn't match";
			$cpassword="";
		}
	}

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
			}
			else
			{
				$npasswordErr = "Password  must contain atleast 8 charecters";
				$npassword = "";
			}
		}	
	}

	if (empty($_POST["rnpassword"])) 
	{
		$rnpasswordErr = "Retype new password is required";
	} 
	else 
	{
		$rnpassword = $_POST["rnpassword"];
		if ($rnpassword == $npassword) 
		{
		}
		else
		{
			$rnpasswordErr = "New password and retype new passward did not match";
			$npassword = "";
			$rnpassword = "";
		}
	}

	if(empty($cpassword) || empty($npassword) || empty($rnpassword))
	{
		$error = "Input Error!!"; 
	}
	else
	{
		$uname = $_SESSION['uname'];
		require_once '../Model/modelStoreOfficer.php';

		$data['password'] = $npassword;

		if (updatePassword($uname, $data)) 
		{
			$success = "Password changed";
			$_SESSION['password'] = $npassword;
		} 
	}
}
?>
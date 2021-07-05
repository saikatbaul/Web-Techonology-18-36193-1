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
		$data = file_get_contents("../JsonData/data.json");  
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
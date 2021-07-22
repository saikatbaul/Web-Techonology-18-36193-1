<?php

$error = $uname = "";

if (isset($_POST['submit']))
{
	if (empty($_POST["uname"]) && empty($_POST["password"])) 
	{
		$error = "Username is required";
	} 
	else 
	{
		$uname = $_POST["uname"];
		$data = file_get_contents("../JsonData/data.json");  
		$data = json_decode($data, true);  
                
		foreach($data as $row)  
		{  
			if ($row["username"] == $uname) 
			{
				$row["name"] == " ";
				$row["e-mail"] == " ";
				$row["username"] == " ";
				$row["password"] == " ";
				$row["gender"] == " ";
				$row["pNumber"] == " ";
				$row["dob"] == " ";		
			}
			else
			{
				$error = "Failed!!";
			}
     	}
	}
}
?>
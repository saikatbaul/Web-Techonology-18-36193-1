<?php
  
$data = file_get_contents("../JsonData/data.json");  
$data = json_decode($data, true);  

foreach($data as $row)  
{  
	if($row["username"] == $_SESSION['uname'])
	{
		echo $row["name"]; 
	} 
} 
?>
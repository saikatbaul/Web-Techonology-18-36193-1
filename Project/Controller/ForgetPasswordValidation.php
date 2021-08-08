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
		require_once '../Model/connectionDb.php';
		$conn = db_conn();
		$selectQuery = "SELECT * FROM `storeofficer` WHERE email = :email";
		try
		{
		    $stmt = $conn->prepare($selectQuery);
		    $stmt->execute([':email' => $email]);
		}
		catch(PDOException $e)
		{
		    echo $e->getMessage();
		}
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$name = $row["name"];
		$password = $row["password"];

		$count = $stmt->rowCount();

		if($count == 1)
		{
			$success = $name." your password is :- ".$password;
		}
		else
		{
			$error = "Invalid";
		}
	}
}
?>
<?php

$error = $count = "";

if (isset($_POST['submit']))
{
	if (empty($_POST["uname"]) || empty($_POST["password"])) 
	{
		$error = "Both username and password required";
	} 
	else 
	{
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		require_once '../Model/connectionDb.php';
		$conn = db_conn();
	    $selectQuery = "SELECT * FROM `storeofficer` WHERE uname = :uname AND password = :password";
	    try
	    {
	        $stmt = $conn->prepare($selectQuery);
	        $stmt->execute([
	            ':uname' => $uname,
	            ':password' => $password
	        ]);
	    }
	    catch(PDOException $e)
	    {
	        echo $e->getMessage();
	    }
	    $count = $stmt->rowCount();
	    if($count == 1)
		{
			$_SESSION['uname'] = $uname;
			$_SESSION['password'] = $password;
			if(empty($_POST["remindMe"]))
			{
				setcookie("uname","");
				setcookie("password","");
			}
			else
			{
				setcookie ("uname",$_POST["uname"],time() + 86400*30);
				setcookie ("password",$_POST["password"],time() + 86400*30);
			} 
			header("location:Dashboard.php");
		}
		else
		{
			$error = "Invalid";
		}
	}
}
?>
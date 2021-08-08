<?php

$target_dir = "../ProfilePicture/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) 
{
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

	if($check !== false) 
	{
		$uploadOk = 1;
		if (file_exists($target_file)) 
		{
			echo " Sorry, file already exists";
			$uploadOk = 0;
		}
		else
		{
			if ($_FILES["fileToUpload"]["size"] > 4000000) 
			{
			  echo " Sorry, your file is too large";
			  $uploadOk = 0;
			}
			else
			{
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
				{
				  echo " Sorry, only JPG, JPEG, PNG & GIF files are allowed";
				  $uploadOk = 0;
				}
				else
				{
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					{
						echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded";
					} 
					else 
					{
						echo " Sorry, there was an error uploading your file";
					}
				}
			}
		}
	} 
	else
	{
		echo " File is not an image";
		$uploadOk = 0;
	}
}

if($uploadOk == 1)
{
	$uname = $_SESSION['uname'];
	require_once '../Model/modelStoreOfficer.php';

	$data['image'] = $target_file;

	if (updateImage($uname, $data)) 
	{
		header('Location: ../View/ViewProfile.php');
	} 
}
?>

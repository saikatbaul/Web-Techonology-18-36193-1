<?php
$target_dir = "ProfilePicture/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) 
{
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) 
  {
    $uploadOk = 1;
  } 
  else 
  {
    echo " File is not an image";
    $uploadOk = 0;
  }
}


if (file_exists($target_file)) 
{
  echo " Sorry, file already exists";
  $uploadOk = 0;
}


if ($_FILES["fileToUpload"]["size"] > 4000000) 
{
  echo " Sorry, your file is too large";
  $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
{
  echo " Sorry, only JPG, JPEG, PNG & GIF files are allowed";
  $uploadOk = 0;
}

if ($uploadOk == 0) 
{
  echo " Sorry, your file was not uploaded";
} 
else 
{
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded";
  } 
  else 
  {
    echo " Sorry, there was an error uploading your file";
  }
}

if($uploadOk == 1)
{
  if(file_exists('data.json'))
  { 
    $current_data = file_get_contents('PP.json');  
    $array_data = json_decode($current_data, true);  
    $extra = array('pp' => $target_file);  
    $array_data[] = $extra;  
    $final_data = json_encode($array_data);  
    if(file_put_contents('PP.json', $final_data))  
    {  
      echo " and stored.";  
    }    
    else  
    { 
      echo " JSON File doesn't exits";  
    }
  }
}
?>
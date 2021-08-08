<?php

$nameErr = $emailErr = $dobErr = $genderErr =  $phoneNumberErr = "";
$name = $email = $dob = $gender =  $phoneNumber = $error ="";

if (isset($_POST['submit'])) 
{
     if (empty($_POST["name"])) 
     {
          $nameErr = "Name is required";
     } 
     else 
     {
          $name = $_POST["name"];
          if (preg_match("/^[a-zA-Z -]*$/",$name)) 
          {
               if (str_word_count($name) >= 2) 
               {
               }
               else
               {
                    $nameErr = "Atleast two word needed";
                    $name = "";
               }
          }
          else
          {
               $nameErr = "Only A-Z, a-z, Dash(-) and Period( ) are allowed";
               $name = "";
          }
     }

     if (empty($_POST["email"])) 
     {
          $emailErr = "Email is required";
     } 
     else 
     {
          $email = $_POST["email"];
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
          {
               $emailErr = "Invalid email format";
               $email ="";
          }
          else
          {
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
               $uname = $_SESSION['uname'];
               $userName = $row["uname"];
               $count = $stmt->rowCount();
               
               if($count == 1)
               {
                    if ($uname == $userName) 
                    {
                         
                    }
                    else
                    {    
                         $emailErr = "Email already exists";
                         $email = "";
                    } 
               }
          }
     }

     if (empty($_POST["gender"])) 
     {
          $genderErr = "Gender is required";
     } 
     else 
     {
          $gender = $_POST["gender"];
     }

     if (empty($_POST["phoneNumber"])) 
     {
          $phoneNumberErr = "Phone number is required";
     } 
     else 
     {
          $phoneNumber = $_POST["phoneNumber"];
          if (preg_match("/^[0-9]*$/",$phoneNumber)) 
          {
               if (strlen($phoneNumber) == 11) 
               {
               }
               else
               {
                    $phoneNumberErr = "Phone number is exact 11 digit";
                    $phoneNumber = "";
               }
          }
          else
          {
               $phoneNumberErr = "Only 0-9 is allowed";
               $phoneNumber = "";
          }
     }

     if (empty($_POST["dob"])) 
     {
          $dobErr = "Date of birth is required";
     } 
     else 
     {
          $dob = $_POST["dob"];
     }

     if(empty($name) || empty($email) || empty($gender) || empty($phoneNumber) || empty($dob))
     {
          $error = "Input Error!!"; 
     }
    else  
     {  
          require_once '../Model/modelStoreOfficer.php';

          $data['name'] = $name;
          $data['email'] = $email;
          $data['gender'] = $gender;
          $data['phoneNumber'] = $phoneNumber;
          $data['dob'] = $dob;

          if (updateStoreOfficer($_SESSION['uname'], $data)) 
          {
               header('Location: ../View/ViewProfile.php');
          } 
     }
}
?>
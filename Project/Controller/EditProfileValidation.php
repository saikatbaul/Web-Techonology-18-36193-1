<?php

$nameErr = $emailErr = $dobErr = $pNumberErr = $genderErr = "";
$name = $email = $dob = $pNumber = $gender = $success = "";

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
                              if (empty($_POST["gender"])) 
                              {
                                   $genderErr = "Gender is required";
                              } 
                              else 
                              {
                                   $gender = $_POST["gender"];

                                   if (empty($_POST["pNumber"])) 
                                   {
                                        $pNumberErr = "Phone number is required";
                                   } 
                                   else 
                                   {
                                        $pNumber = $_POST["pNumber"];
                                        if (preg_match("/^[0-9]*$/",$pNumber)) 
                                        {

                                             if (strlen($pNumber) == 11) 
                                             {
                                                  if (empty($_POST["dob"])) 
                                                  {
                                                       $dobErr = "Date of birth is required";
                                                  } 
                                                  else 
                                                  {
                                                       $dob = $_POST["dob"];
                                                       $success = "Information update completed";
                                                  }
                                             }
                                             else
                                             {
                                                  $pNumberErr = "Phone number is exact 11 digit";
                                             }
                                        }
                                        else
                                        {
                                             $pNumberErr = "Only 0-9 is allowed";
                                             $pNumber = "";
                                        }
                                   }    
                              } 
                         }
                    }
               }
               else
               {
                    $nameErr = "Atleast two word needed";
                    $name="";
               }
          }
          else
          {
               $nameErr = "Only A-Z, a-z, Dash(-) and Period( ) are allowed";
               $name="";
          }
     }
}
?>
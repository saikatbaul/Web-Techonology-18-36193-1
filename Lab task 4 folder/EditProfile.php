<!DOCTYPE html>  
<html>  
<head>
<style>
.error {color: red;}
.success {color: green;}
</style>
</head>

<body>
<?php

$nameErr = $emailErr = $dobErr = $genderErr = $error = "";
$name = $email = $dob = $gender = $success = "";

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
                    $name="";
               }
          }
          else
          {
               $nameErr = "Only A-Z, a-z, Dash(-) and Period( ) are allowed";
               $name="";
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
     }

     if (empty($_POST["gender"])) 
     {
          $genderErr = "Gender is required";
     } 
     else 
     {
          $gender = $_POST["gender"];
     }

     if (empty($_POST["dob"])) 
     {
          $dobErr = "Date of birth is required";
     } 
     else 
     {
          $dob = $_POST["dob"];
     }

     if (empty($name) || empty($email) || empty($gender) || empty($dob))
     {
          $error = "Information update failed";
     }
     else
     {
          $success = "Information update completed";
     }
}
?>

 <?php include 'Head_1.php';?> 

<form method="post">
<table>
     <tr>
          <td><?php include 'Account.php';?></td>
          <td>
               <fieldset>
               <legend>EDIT PROFILE</legend>
               <table>  
               <tr>  
                    <td align="left">Name </td>
                    <td>: </td>
                    <td><input type="text" name="name" value="<?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo $row["name"]; 
                         } 
                    } 
                    ?>"><span class="error"><?php echo $nameErr;?></span></td>  
               </tr>  

               <tr>
                    <td align="left">E-mail </td>
                    <td>: </td> 
                    <td><input type="text" name="email" value="<?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo $row["e-mail"]; 
                         } 
                    } 
                    ?>"><span class="error"><?php echo $emailErr;?></span></td>
               </tr> 

               <tr>
                    <td align="left">Gender </td>
                    <td>: </td>
                    <td> <?php
                         $g = "";   
                         $data = file_get_contents("data.json");  
                         $data = json_decode($data, true);  
                               
                         foreach($data as $row)  
                         {  
                              if($row["username"] == $_SESSION['uname'])
                              {
                                   $g = $row["gender"];
                              } 
                         } 
                         ?>
                         <input type="radio" name="gender" <?php if ($g=="Female") echo "checked";?> value="Female">Female
                         <input type="radio" name="gender" <?php if ($g=="Male") echo "checked";?> value="Male">Male
                         <input type="radio" name="gender" <?php if ($g=="Other") echo "checked";?> value="Other">Other
                         <span class="error"><?php echo $genderErr;?></span></td>   
               </tr> 

               <tr>  
                    <td align="left">Date of birth </td>
                    <td>: </td> 
                    <td><input type="date" name="dob" value="<?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo $row["dob"]; 
                         } 
                    } 
                    ?>"><span class="error"><?php echo $dobErr;?></span></td>
               </tr>

               <tr>
                    <td colspan="4"><span class="error"><?php echo $error;?></span>
                                    <span class="success"><?php echo $success;?></span></td>
               </tr>

               <tr>
                    <td colspan="4"><input type="submit" name="submit" value="Submit"></td>
               </tr>
               </table>
               </fieldset>
          </td>
     </tr>
</table>
</form>
 
<?php include 'Foot.php';?> 

</body>
</html>
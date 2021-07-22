<!DOCTYPE html>  
<html>  
<head>
<style>
.error {color: red;}
.success {color: green;}
</style>
</head>

<body>
<fieldset><br>
<?php 
include 'Head.php';
require '../Controller/EditProfileValidation.php'
?> <br>

<form method="post">
<fieldset>
<table>
     <tr>
          <td><?php require 'Account.php';?></td>
          <td>
               <fieldset>
               <legend>EDIT PROFILE</legend>
               <table>  
               <tr>  
                    <td align="left">Name </td>
                    <td>: </td>
                    <td><input type="text" name="name" value="<?php require '../Controller/ViewName.php';?>"><span class="error"><?php echo $nameErr;?></span></td>  
               </tr>  

               <tr>
                    <td align="left">E-mail </td>
                    <td>: </td> 
                    <td><input type="text" name="email" value="<?php require '../Controller/ViewEmail.php';?>"><span class="error"><?php echo $emailErr;?></span></td>
               </tr> 

               <tr>
                    <td align="left">Gender </td>
                    <td>: </td>
                    <td> <?php require '../Controller/EditGender.php';?>
                         <input type="radio" name="gender" <?php if ($g=="Female") echo "checked";?> value="Female">Female
                         <input type="radio" name="gender" <?php if ($g=="Male") echo "checked";?> value="Male">Male
                         <input type="radio" name="gender" <?php if ($g=="Other") echo "checked";?> value="Other">Other
                         <span class="error"><?php echo $genderErr;?></span></td>   
               </tr> 

               <tr>
                    <td align="left">Phone number </td>
                    <td>: </td> 
                    <td><input type="text" name="phoneNumber" value="<?php require '../Controller/ViewpNumber.php';?>"><span class="error"><?php echo $phoneNumberErr;?></span></td>
               </tr> 

               <tr>  
                    <td align="left">Date of birth </td>
                    <td>: </td> 
                    <td><input type="date" name="dob" value="<?php require '../Controller/ViewDob.php';?>"><span class="error"><?php echo $dobErr;?></span></td>
               </tr>

               <tr>
                    <td colspan="4"><input type="submit" name="submit" value="Submit"></td>
               </tr>
               </table>
               </fieldset>
          </td>
     </tr>
</table>
</fieldset>
</form><br>
 
<?php include 'Foot.php';?> <br>
</fieldset>
</body>
</html>
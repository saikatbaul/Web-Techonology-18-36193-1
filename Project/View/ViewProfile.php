<!DOCTYPE html>  
 <html>  
 
 <body>
<fieldset><br>
 <?php include 'Head.php';?><br>

<from>
<fieldset>
<table >
     <tr>
          <td><?php require 'Account.php';?></td>
          <td></td>
          <td>
               <fieldset>
               <legend>VIEW PROFILE</legend>
               <table>  
               <tr>  
                    <td align="left">Name </td>
                    <td>: </td>
                    <td><?php require '../Controller/ViewName.php';?></td>
                    <td rowspan="5" align="middle"><?php require '../Controller/ViewProfilePicture.php';?><img src="<?php echo $PP ?> " alt="PP" width="100" height="100"><br>
                    <a href="ChangeProfilePicture.php">Change</a> </td>    
               </tr>  

               <tr>
                    <td align="left">E-mail </td>
                    <td>: </td>
                    <td><?php require '../Controller/ViewEmail.php';?></td>
               </tr> 

               <tr>
                    <td align="left">Gender </td>
                    <td>: </td> 
                    <td><?php require '../Controller/ViewGender.php';?></td>
               </tr> 

               <tr>  
                    <td align="left">Phone number </td>
                    <td>: </td> 
                    <td><?php require '../Controller/ViewpNumber.php';?></td>
               </tr>

               <tr>  
                    <td align="left">Date of birth </td>
                    <td>: </td> 
                    <td><?php require '../Controller/ViewDob.php';?></td>
               </tr>
               <tr>
                    <td colspan="4"><a href="EditProfile.php">Edit Profile</a></td>
               </tr>
               </table>
               </fieldset>
          </td>
     </tr>
</table>
</fieldset>
</from><br>
 
<?php include 'Foot.php';?><br>
</fieldset>
</body>  
</html> 
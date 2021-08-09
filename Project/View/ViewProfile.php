<!DOCTYPE html>  
<html>  
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../CSS/storeOfficerRegistration.css">
     <link rel="stylesheet" href="../CSS/storeOfficer.css">
</head>
<body>
     <div class="header">
          <?php include 'Head.php';?>
     </div>
     <div class="row">
          <div class="col-3 menu">
               <?php include 'Account.php';?>
          </div>
          <div class="col-6">
               <form method="post">
                    <h1>View Profile</h1>
                    <div class="inset">
                         <table width="100%">  
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
                         </table>
                         <a href="EditProfile.php">Edit Profile</a>
                    </div>
               </form>
          </div>
     </div>
<div class="footer">
     <?php include 'Foot.php';?>
</div>
</body>  
</html> 
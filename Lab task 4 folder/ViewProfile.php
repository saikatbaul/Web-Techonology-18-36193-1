<!DOCTYPE html>  
 <html>  
 
 <body>

 <?php include 'Head_1.php';?> 

<from>
<table>
     <tr>
          <td><?php include 'Account.php';?></td>
          <td>
               <fieldset>
               <legend>PROFILE</legend>
               <table>  
               <tr>  
                    <td align="left">Name </td>
                    <td>: </td>
                    <?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo '<td>'.$row["name"].'</td>'; 
                         } 
                    } 
                    ?>
                    <td rowspan="4" align="middle"> 
                    <?php 
                    $PP = "";  
                    $data = file_get_contents("PP.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["uname"] == $_SESSION['uname'])
                         {
                              $PP = $row["pp"];
                         }
                    } 
                    ?> 
                    <img src="<?php echo $PP ?> " alt="PP" width="100" height="100"><br>
                    <a href="ChangeProfilePicture.php">Change</a> </td>    
               </tr>  

               <tr>
                    <td align="left">E-mail </td>
                    <td>: </td> 
                    <?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo '<td>'.$row["e-mail"].'</td>'; 
                         } 
                    } 
                    ?>
               </tr> 

               <tr>
                    <td align="left">Gender </td>
                    <td>: </td> 
                    <?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo '<td>'.$row["gender"].'</td>'; 
                         } 
                    } 
                    ?>  
               </tr> 

               <tr>  
                    <td align="left">Date of birth </td>
                    <td>: </td> 
                    <?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo '<td>'.$row["dob"].'</td>'; 
                         } 
                    } 
                    ?>
               </tr>
               <tr>
                    <td colspan="4"><a href="EditProfile.php">Edit Profile</a></td>
               </tr>
               </table>
               </fieldset>
          </td>
     </tr>
</table>
</from>
 
<?php include 'Foot.php';?> 

</body>  
</html> 
<!DOCTYPE html>
<html>
<body>

 <?php include 'Head_1.php';?> 

<table>
  <tr>
    <td><?php include 'Account.php';?></td>
    <td>
      <form action="CPP.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>PROFILE PICTURE</legend>
        <img src="https://www.pngitem.com/pimgs/m/192-1924040_contact-profil-logo-png-transparent-png.png" alt="PP" width="130" height="130"><br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" value="Submit" name="submit">
      </fieldset>
      </form>
    </td>
  </tr>
</table>

<?php include 'Foot.php';?> 

</body>
</html>
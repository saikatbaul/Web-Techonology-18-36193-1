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
        <img src="./Picture/pp.jpg" alt="PP" style="width:130px;height:130px;"><br>
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
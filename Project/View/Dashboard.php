<html>
<body>
<fieldset><br>
<?php include 'Head.php';?>

<form>
<fieldset>
<table>
	<tr>
		<td><?php include 'Account.php';?></td>
		<td>
			<?php 
			if (isset($_SESSION['uname'])) 
			{
				echo '<h2>'."Welcome ".$_SESSION['uname'].'</h2>';
			}
			else
			{
				header("location:Login.php");
			}?>
		</td>
	</tr>
</table>
</fieldset><br>
</form>
<?php include 'Foot.php';?>
</fieldset>	
</body>
</html> 
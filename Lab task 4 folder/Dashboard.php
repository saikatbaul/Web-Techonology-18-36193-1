<html>
<body>

<?php include 'Head_1.php';?>

<form>
<table>
	<tr>
		<td><?php include 'Account.php';?></td>
		<td>
			<fieldset>
				<?php 
				if (isset($_SESSION['uname'])) 
				{
					echo "Welcome ".$_SESSION['uname'];
				}
				else
				{
					header("location:login.php");
				}?>
			</fieldset>		
		</td>
	</tr>
</table>
</form>

<?php include 'Foot.php';?>

</body>
</html> 
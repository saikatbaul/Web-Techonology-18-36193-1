<html>
<body>

<form method="post">

<fieldset>
<table>
	<tr>
		<td><a href="Dashboard.php"><img src="../Picture/logo.jpg" alt="Logo" style="width:80px;height:80px;"></a></td>
		<td align="right" style="width: 100%;"> 
	    <?php 
	    	
		if (isset($_SESSION['uname'])) 
		{
			echo "Logged in as ".$_SESSION['uname'];
		}
		else
		{
			header("location:Login.php");
	    }
		?> | <a href="../Controller/Logout.php">Logout</a></td>
	</tr>
</table>
</fieldset>
</form>
</body>
</html>
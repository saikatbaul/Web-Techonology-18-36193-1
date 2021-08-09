<html>
<body>

<table>
	<tr>
		<td><a href="Dashboard.php"><img src="../Picture/sp.jpg" alt="Logo" style="width:280px;height:100px;"></a></td>
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
		?> <a href="../Controller/Logout.php">Logout</a></td>
	</tr>
</table>
</body>
</html>
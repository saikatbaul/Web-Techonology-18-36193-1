<html>
<body>

<form method="post">


<table>
	<tr>
		<td><img src="https://image.shutterstock.com/image-vector/letter-s-cross-medical-logo-260nw-742696411.jpg" alt="Logo" width="80" height="80"></td>
		<td align="right" style="width: 100%;"> 
	    <?php 
		session_start();

		if (isset($_SESSION['uname'])) 
		{
			echo "Logged in as ".$_SESSION['uname'];
		}
		else
		{
		header("location:login.php");
	    }
		?> | <a href="Logout.php">Logout</a></td>
	</tr>
</table>
</form>

</body>
</html>
<html>
<body>
	<?php 
	session_start();
	if (isset($_SESSION['uname']))
	{
		require 'Head_1.php';
	}
	else 
	{
		require 'Head_2.php';
	}
	?>
</body>
</html>
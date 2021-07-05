<!DOCTYPE html>
<html>
<body>


<fieldset>
	<legend>Search For Medicine</legend>
	<form method="post">
		<input type="text" name="medicineName">
		<input type="submit" name="submit" value="Search">
	</form>
</fieldset>

<?php require '../Controller/searchMedicineValidation.php'?>
</body>
</html>

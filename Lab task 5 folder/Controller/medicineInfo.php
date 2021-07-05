<?php 

require_once ('../Model/modelMedicine.php');

function fetchAllMedicine()
{
	return showAllMedicine();
}
function fetchMedicine($medicineId)
{
	return showMedicine($medicineId);
}
?>

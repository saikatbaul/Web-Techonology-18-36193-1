<?php 

require_once ('../Model/modelHandle.php');

function fetchAllStaff()
{
	return showAllStaff();
}
function fetchStaff($officerId)
{
	return showStaff($officerId);
}
?>
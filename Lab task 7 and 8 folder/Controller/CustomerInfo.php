<?php 

require_once ('../Model/modelHandle.php');

function fetchAllCustomer()
{
	return showAllCustomer();
}
function fetchCustomer($customerId)
{
	return showCustomer($customerId);
}
?>
<?php 

require_once ('../Model/modelHandle.php');

function fetchAllDeliveryMan()
{
	return showAllDeliveryMan();
}
function fetchDeliveryMan($deliveryManId)
{
	return showDeliveryMan($deliveryManId);
}
?>
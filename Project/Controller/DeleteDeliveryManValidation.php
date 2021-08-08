<?php 
if(isset($_POST['submit']))
{
    require_once '../Model/modelHandle.php';

    if (deleteDeliveryMan($_GET['deliveryManId'])) 
    {
        header('Location: ../View/DisplayAllDeliveryMan.php');
    }
}
?>
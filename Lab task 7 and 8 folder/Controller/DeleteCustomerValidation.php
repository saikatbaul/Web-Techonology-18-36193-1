<?php 
if(isset($_POST['submit']))
{
    require_once '../Model/modelHandle.php';

    if (deleteCustomer($_GET['customerId'])) 
    {
        header('Location: ../View/DisplayAllCustomer.php');
    }
}
?>
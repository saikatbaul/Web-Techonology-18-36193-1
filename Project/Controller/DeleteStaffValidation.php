<?php 
if(isset($_POST['submit']))
{
    require_once '../Model/modelHandle.php';

    if (deleteStaff($_GET['officerId'])) 
    {
        header('Location: ../View/DisplayAllStaff.php');
    }
}
?>
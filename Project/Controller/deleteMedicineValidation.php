<?php 
if(isset($_POST['submit']))
{
    require_once '../Model/modelMedicine.php';

    if (deleteMedicine($_GET['medicineId'])) 
    {
        header('Location: ../View/displayMedicine.php');
    }
}
?>
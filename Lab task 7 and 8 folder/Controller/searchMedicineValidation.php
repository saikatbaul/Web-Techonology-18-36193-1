<?php

require_once ('../Model/modelMedicine.php');

if (isset($_POST['submit'])) 
{
    try 
    {
        $medicines = searchMedicine($_POST['medicineName']);
        require_once '../View/displaySearchMedicine.php';
    } 
    catch (Exception $er) 
    {
        echo $er->getMessage();
    }
}

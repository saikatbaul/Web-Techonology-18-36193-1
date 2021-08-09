<?php 

require_once 'connectionDb.php';


function showAllMedicine()
{
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `medicine` ORDER BY `medicineName` ASC';
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showMedicine($medicineId)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `medicine` where `medicineId` = ?";
    try 
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$medicineId]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function searchMedicine($medicineName)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `medicine` WHERE `medicineName` LIKE '$medicineName%'"; 
    try
    {
        $stmt = $conn->query($selectQuery);
        $stmt->execute([$medicineName]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addMedicine($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT INTO `medicine` (medicineName, pricePerPiece, quantity)
    VALUES (:medicineName, :pricePerPiece, :quantity)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':medicineName' => $data['medicineName'],
        	':pricePerPiece' => $data['pricePerPiece'],
        	':quantity' => $data['quantity']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    } 
    $conn = null;
    return true;
}


function updateMedicine($medicineId, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `medicine` SET medicineName = ?, pricePerPiece = ?, quantity = ? WHERE medicineId = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data['medicineName'], $data['pricePerPiece'], $data['quantity'], $medicineId]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function deleteMedicine($medicineId){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `medicine` WHERE `medicineId` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$medicineId]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}
?>
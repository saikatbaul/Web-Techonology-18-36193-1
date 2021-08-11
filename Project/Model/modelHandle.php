<?php 

require_once 'connectionDb.php';

function deleteDeliveryMan($deliveryManId){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `deliveryman` WHERE `deliveryManId` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$deliveryManId]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function showDeliveryMan($deliveryManId)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `deliveryman` where `deliveryManId` = ?";
    try 
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$deliveryManId]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function showAllDeliveryMan()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `deliveryman` ORDER BY `deliveryManId` ASC';
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

function deleteStaff($officerId){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `staffofficer` WHERE `officerId` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$officerId]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function showStaff($officerId)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `staffofficer` where `officerId` = ?";
    try 
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$officerId]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function showAllStaff()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `staffofficer` ORDER BY `officerId` ASC';
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

function deleteCustomer($customerId){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `customer` WHERE `customerId` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$customerId]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function showCustomer($customerId)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `customer` where `customerId` = ?";
    try 
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$customerId]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function showAllCustomer()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `customer` ORDER BY `customerId` ASC';
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


function showAllTransactions()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `transactions` ORDER BY `orderId` ASC';
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
?>
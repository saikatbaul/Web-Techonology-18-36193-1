<?php  
     require_once '../Model/connectionDb.php';
     $conn = db_conn();
     $selectQuery = "SELECT * FROM `storeofficer` WHERE uname = :uname";
     try
     {
         $stmt = $conn->prepare($selectQuery);
         $stmt->execute([':uname' => $_SESSION['uname']]);
     }
     catch(PDOException $e)
     {
         echo $e->getMessage();
     }
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     $email = $row["email"];
     echo $email;
?>
<?php
 
$PP = "";  
$data = file_get_contents("../JsonData/PP.json");
$data = json_decode($data, true);  
      
foreach($data as $row)  
{  
     if($row["uname"] == $_SESSION['uname'])
     {
          $PP = $row["pp"];
     }
} 
?> 
<!DOCTYPE html>  
 <html>  
 
 <body> 

<style>
     table
     {
          border-collapse: collapse;
          width: 100%;
     }

     td, th 
     {
          text-align: left;
          padding: 8px;
          border: 1px solid #ffffff;
          background-color: #dddddd;
     }
</style>

 <table>  
     <tr>  
          <th>Name</th> 
          <th>E-mail</th>  
          <th>User name</th> 
          <th>Password</th>  
          <th>Gender</th>   
          <th>Date of birth</th>   
     </tr>  
<?php   
$data = file_get_contents("data.json");  
$data = json_decode($data, true);  
                
foreach($data as $row)  
{  
     echo '<tr>
               <td>'.$row["name"].'</td>
               <td>'.$row["e-mail"].'</td>
               <td>'.$row["username"].'</td>
               <td>'.$row["password"].'</td>
               <td>'.$row["gender"].'</td>
               <td>'.$row["dob"].'</td>
          </tr>';  
}  
?>  
</table>  
</body>  
</html>  
<?php
   //Step 1 get database access
   require('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketapp - List users</title>
</head>
<body>
    <table border = "1" align = "center" >
     <tr>
     <th>Fullname</th>
     <th>E-mail</th>
     <th>Id_number</th>
     <th>Phone Number</th>
     <th>Status</th>
     <th>Options</th>
    </tr> 
    <?php  
      <tr>
         <td>Pepito Perez</td>
        <td>pe@gmail.com</td>
         <td>1234567</td>
         <td>3014585</td>
         <td>Active</td>
         <td>
         <a href = "#"> <img src = "icons/search.png" width = "30">  </a>
         <a href = "#"> <img src = "icons/Update.png" width = "30"></a>
         <a href = "#"> <img src = "icons/delete.png" width = "30"> </a>
</td>
</table>
</body>
</html>
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
    $sql_users = " 
    select 
        u.firstname || ' '|| u.lastname as lastname,
        u.email,
        u.id_number,
        u.mobile_number,   
        case 
	        when u.status = true then 'active' else 'inactive' 
        end as status 
    from 
        users u     
    ";
      $result = pg_query($conn_local, $sql_users);

      if(!$result){
        die ("Erro: " .preg_last_error() );
      }
      
      while ($row = pg_fetch_assoc($result)){
        echo "<tr>
                <td>".$row['lastname']. "</td>
                <td>".$row['email']. "</td>
                <td>".$row['id_number']. "</td>
                <td>".$row['mobile_number']. "</td>
                <td>Active</td>
                <td>
                    <a href = '#'> <img src = 'icons/search.png' width = '30'> </a>
                    <a href = '#'> <img src = 'icons/Update.png' width = '30'></a>
                    <a href = '#'> <img src = 'icons/delete.png' width = '30'> </a>
                </td>
            </tr>
            ";
      }
    ?>
      

</table>
</body>
</html>
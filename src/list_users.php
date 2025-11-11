<?php
   //Step 1 get database access
   require('../config/database.php');
   /* session_start();

   if(!isset($_SESSION['session_user_id'])){
        header('refresh:0;url= error_403.html');
   }
   */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketapp - List users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     <table border = "1"class="table table-striped">
     <tr>
     <th>Photo</th>
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
        u.url_photo,
        u.id as user_id,
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
                <td align='center'><img src=".$row['url_photo']." width='40'></td>
                <td>".$row['lastname']. "</td>
                <td>".$row['email']. "</td>
                <td>".$row['id_number']. "</td>
                <td>".$row['mobile_number']. "</td>
                <td>".$row['status']. "</td>
                <td>
                    <a href = '#'> <img src = 'icons/search.png' width = '30'> </a>
                    <a href = '#'> <img src = 'icons/Update.png' width = '30'></a>
                    <a href='delete_user.php?userId=" .$row['user_id']."'>
                    <img src = 'icons/delete.png' width = '30'> </a>
                    <a href='edit_user_form.php?userId=" .$row['user_id']."'>
                    <img src = 'icons/edit.png' width = '30'> </a>               
                    </td>
            </tr>
            ";
      }
    ?>
      

</table>
</body>
</html>
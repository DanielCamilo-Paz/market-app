<?php
   //Step 1 get database access
   require('../config/database.php');
   $user_id = $_GET['userId'];

   $sql_get_user = "select * from users where id = $user_id";
   $result = pg_query($conn_local, $sql_get_user);

   if(!$result) {
    die ("Erro: " .pg_last_error());
   }

   while ($row = pg_fetch_assoc ($result)){
        $id_number = $row['id_number'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name= "Edit-user-form" action = "update_user.php" method = "post">
    <input type = "hidden" name ="iduser" value= "<?php echo $user_id?>" readonly required><br><br>
    <label> Identification Number: </label>
    <input type = "text" name ="idnumber" value= "<?php echo $id_number?>" readonly required><br><br>
    <label> FIRSTNAME: </label>
    <input type = "text" name ="fname" value= "<?php echo $fname?> " required> <br><br>
    <label> LASTNAME: </label>
    <input type = "text" name ="lname" value= "<?php echo $lname?> " required><br><br>
    <button> Update user </button>
</form>
</body>
</html>
<?php
//Start o create session
   session_start();

   if(!isset($_SESSION['session_user_id'])){
        header('refresh:0;url= error_403.html');
   }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img.png" href="src/icons/carrito-de-compras.png">
    <title>Marketapp - Home </title>
</head>
<body>
  <center><b> User:</b>Here print your name </center>
  <a href = "list_users.php"> List all users </a> |
    <a href = "logout.php"> Logout </a>
</body>
</html>


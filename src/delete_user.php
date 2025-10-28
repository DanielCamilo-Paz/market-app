<?php
   //Step 1 get database access
   require('../config/database.php');
   
   //step 2. Get data or params
   $user_id = $_GET['userId'];
   //Step 3. Prepare query
   $sql_delete_user = "delete from users where  id = $user_id ";
   //Step 4 Execute query
   $result = pg_query($conn_local, $sql_delete_user);
      if(!$result){
        die ("Erro: " .preg_last_error() );
      }else{
        echo "<script>alert('User has been delete!')</script>";
        header('refresh:0;url=list_users.php');
      }
      
   
   
   ?>
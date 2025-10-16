<?php
    //Get database access
    require('../config/database.php');

    //Get form-data
    $name = $_POST['name'];
    $abbrev = $_POST['abbrev'];
    $code = $_POST['code'];

    $check_email = "
        Select
            c.code
        from
            countries c
        where
            abbrev= '$abbrev' or code = '$code'
        limit 1
    ";
    $res_check = pg_query($conn_supa,$check_email);
    if(pg_num_rows($res_check)> 0){
        echo "<script>alert('User already exists')</script>";
        header('refresh:0;url=signup.html');
    }
    else{
        //Create query to INSERT INTO
        $query = "INSERT INTO countries (name,abbrev,code) 
        values ('$name','$abbrev','$code')";

        //Execute query
        $res = pg_query($conn_supa,$query);

        //Validate result
        if($res){
            //echo "User has been created successfully!!";
            echo "<script>alert('Success, Go to login')</script>";
            header('refresh:0;url=regions.php');
        }
        else{
            echo "<script>alert('User already exists')</script>";
            header('refresh:0;url=signup.html');
        }
    }
?>
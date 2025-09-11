<?php
//Step 1 get database access

require('../config/database.php');
//Step 2 get form-data

$f_name = $_POST['fname']; //los campos dentro de los corchetes 
$l_name = $_POST['lname']; //deber ser igual al de el $
$m_number = $_POST['mnumber'];
$id_number = $_POST['idnumber'];
$e_mail = $_POST['email'];
$p_wd = $_POST['passwd'];

$enc_pass = password_hash($p_wd, PASSWORD_DEFAULT);

//Step 3 create query to insert into
$query = "INSERT INTO users(firstname,lastname,mobile_number,id_number,email,password)
Values('$f_name','$l_name','$m_number','$id_number','$e_mail','$enc_pass')";

//Step 4  execute query
 $res= pg_query($conn,$query);

 //Step 5 validate result
 if($res){
  echo "User has been created succesfully!!!";  
 }else{
    echo "something wrong !";
 }

?>
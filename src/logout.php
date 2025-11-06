    <?php
//Start or continue whit current session
       session_start();
//Destrory current session
        session_destroy();
//redirect to login form
    header('refresh:0;url= signin.html');

?>
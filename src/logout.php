<?php
    //Start or continue whit current session
    session_start();

    //Destroy current session
    session_destroy();

    //Redirect to login form
    echo "<script>alert('Going to  Login')</script>";
    header('refresh:0;url=signin.html');
    
?>
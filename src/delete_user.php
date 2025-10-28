<?php
    //get database connection
    require('../config/database.php');

    //step2. get dta or params
    $user_id = $_GET['userId'];

    //Step 3. prepare query
    $sql_delete_user = "delete from users where id = $user_id";

    //step 4. execute query
    $result = pg_query($conn_local, $sql_delete_user);
    if(!$result){
        die("ERROR: ".pg_last_error());
    }else{
        echo "<script>alert('User has been deleted')</script>";
        header('refresh:0;url=list_users.php');
    }
?>
<?php
    //Database connection
    $host = "127.0.0.1"; //127.0.0.1
    $user = "postgres";
    $password = "unicesmag";
    $dbname = "marketapp";
    $port = "5432";
    
    //data con creenciales para conectarse
    $data_connection = "
        host=$host
        user=$user
        password=$password
        dbname=$dbname
        port=$port
    ";

    //conecion
    $conn = pg_connect($data_connection);
 
    //comprobar conecccion
    if(!$conn){
        echo "Error";
    }else{
        echo "Connetion successfuly :::";
    }

?>
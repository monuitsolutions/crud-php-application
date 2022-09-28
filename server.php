<?php

    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbname = 'crud';

    $conn = new mysqli($host, $user, $pwd, $dbname);

    if(!$conn){
        die("Connection Faild an Error".mysqli_error());
     }else{
        // echo "Connection Sucssessfull";
     }

?>
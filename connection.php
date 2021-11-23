<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="reglog";
    $con=mysqli_connect($host, $user, $password, $dbname);
    if(mysqli_connect_errno())
    {
        die("Failed to connect with mysql:".mysli_connect_error());
    }
?>
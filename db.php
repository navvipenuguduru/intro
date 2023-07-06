<?php

    $servername ="localhost";
    $username ="root";
    $password ="";
    $database ="naveen";

    $con =mysqli_connect($servername,$username,$password,$database);

    if(!$con){
        die("faild".mysqli_error($con));
    }
    
?>
<?php
include_once('db.php');

if(isset($_GET['id'])){
    $num =$_GET['id'];

    $sql ="delete  from pro where id=$num";
    $result =mysqli_query($con,$sql);

    if($result){
        echo "successfully deleted";
    }
    else{
        die("failed".mysqli_error($con));
    }
}
?>
<?php
if(isset($_GET["u_id"])){
    $userId = $_GET["u_id"];
    require_once "db_connection.php";
    $deleteQuery = "DELETE FROM `register` WHERE id ='$userId'";
    $delete = mysqli_query($connection,$deleteQuery);
    if (isset($delete)){
        header("location:users.php");
    }else{
        echo "deletion failed";
    }
}
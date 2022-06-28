<?php
if (isset($_POST["submit"])){
    $username = $_POST["user"];
    $password = $_POST["password"];

    require_once "db_connection.php";
    $selectQuery = "SELECT * FROM `register` WHERE username = '$username',password = '$password'";
    //Finally,save the data using mysqli_query
    $save = mysqli_query($connection,$selectQuery);
    //check if the saving was successful
    if (isset($save)){
       header("location:users.php");
    }else{
        echo "login failed";
    }
}
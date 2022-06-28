<?php
if (isset($_POST["submit"])){
    $username = $_POST["user"];
    $password = $_POST["password"];

    require_once "db_connection.php";
    //create the insert query to save data
    $insertQuery ="INSERT INTO `register`(`id`, `username`, `password`) VALUES (null,'$username','$password')";
    //Finally,save the data using mysqli_query
    $save = mysqli_query($connection,$insertQuery);
    //check if the saving was successful
    if (isset($save)){
        header("location:users.php");
    }else{
        echo "user registration failed";
    }
}
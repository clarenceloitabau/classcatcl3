<?php

if (isset($_POST["update"])) {
    $userId = $_POST["u_id"];
    $userName = $_POST["name"];
    $userPassword = $_POST["password"];
    require_once "db_connection.php";
    $updateQuery = "UPDATE `register` SET `name`='$userName',
                   `password`='$userPassword' WHERE id='$userId'";
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)) {
        header("location:users.php");
    }

}
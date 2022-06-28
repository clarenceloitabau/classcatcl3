<?php
$host = "localhost";
$login = "root";
$password = "";
$dbname = "classcat";
//connect to the db
$connection = mysqli_connect($host,$login,$password,$dbname);
//check if the connection has failed to stop any further process
if (!isset($connection)) {
    die("DB connection failed");
}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <script src="bootstrap/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a class="btn-btn-outline-secondary btn-block" href="login_and_registration.php">add user</a>
<h1 class="text-center text-info">All users</h1>
<table class="table table-hover table-dark">
    <tr>
        <th>username</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    require_once "db_connection.php";
    $selectQuery = "SELECT * FROM `register` WHERE 1";
    $users = mysqli_query($connection,$selectQuery);
    foreach ($users as $user){
        $name = $user["username"];
        $password = $user["password"];
        $id = $user["id"];
        echo "<tr>
                        <td>$name</td>
                        <td><a class='btn btn-danger' href='delete.php?u_id=$id'>DELETE</a></td>
                        <td><a class='btn btn-info' href='update.php?u_name=$name&u_pass=$password'>UPDATE</a></td>
                       </tr> ";
    }
    ?>
</table>
<a class="btn btn-primary" href="login_and_registration.php">logout</a>
</body>
</html>


<?php
if (isset($_GET["u_id"])){
    $receivedId = $_GET["u_id"];
    $receivedName = $_GET["name"];
    $receivedPassword = $_GET["password"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <script src="bootstrap/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
</head>
<body>
<sectiom>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="text-info text-center">Update user</h1>
            <form method="post" action="update_handler.php">
                <input value="<?php echo $receivedId;?>" name="u_id" type="hidden">
                <input value="<?php echo $receivedName;?>" class="form-control" name="name" placeholder="Enter name" type="text"> <br><br>
                <input value="<?php echo $receivedPassword;?>" class="form-control" name="password" placeholder="Enter password" type="password"> <br><br>
                <input class="btn-outline-info btn-block" name="update" value="Update" type="submit">
                <a class="btn btn-outline-success btn-block" href="users.php">Back</a>
        </div>
        <div class="col-3"></div>
        </form>
    </div>
</sectiom>

</body>
</html>

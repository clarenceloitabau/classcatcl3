<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration form</title>
    <script src="bootstrap/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
               <h2>Login Here</h2>
                <form method="post" action="login_handler.php">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input name="user" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" class="form-control" type="password">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

            <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form method="post" action="registration_handler.php">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input name="user" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" class="form-control" type="password">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>

        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <header class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo">
            <img src="images/logo.png" class="img-fluid" />
        </a>
    </header>
    <div class="login-form d-flex align-items-center justify-content-center">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-4">
                    <h2>Welcome Back!</h2>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control custominputlogin" />
                        <div class="is-invalid invalid-feedback">This field is required.</div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control custominputlogin" />
                        <div class="is-invalid invalid-feedback">This field is required.</div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Log In" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
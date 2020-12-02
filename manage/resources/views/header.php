<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/noty.css" />
    <link rel="stylesheet" href="css/noty-bootstrap-v4.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/main-form.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <div class="wrapper d-flex flex-column">
        <header class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo">
                <img src="images/logo.png" class="img-fluid" />
            </a>
            <div class="dropdown user-avatar-dropdown">
                <div class="user-avatar d-flex align-items-center justify-content-center" data-toggle="dropdown" data-display="static">
                    <span>JD</span>
                </div>
                <div class="dropdown-menu">
                    <div class="dropdown-inner">
                        <div class="hello-text">Hello <b>John Doe</b></div>
                        <ul>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="sub-header d-flex align-items-center justify-content-end">
            <a href="create-form.php">Create Form</a>
        </div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!--Font awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .cont1 {
            height: 100vh;
            width: 100vw;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .form-div {
            border: 1px solid;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .login-head {
            font-family: 'Great Vibes', cursive;
        }
        .inner-div{
            display: none;
        }
    </style>
</head>

<html>

<body class="bg-light">
    <div class="cont1">
        <div class="row">
            <div class="form-div col-4 rounded-5 m-auto bg-white ">
                <h1 class="login-head heading text-center mt-4 mb-4">Login</h1>
                <form action="#" method="post" class="login-form">
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="email" name="user" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="text-center mb-4">
                        <input type="submit" class="btn btn-primary" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
       
    </script>

</body>

</html>

<?php

//include("connect.php");

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    echo $user;
    echo $password;
    header('signup.html');
}
?>
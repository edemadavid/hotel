<?php
@include "config.php";

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Page</title>

</head>
<body>
    <div class="container">
        <div class="con text-center">
            <h3 class="fs-2">hi, <span class="bg-danger text-white rounded px-3">user</span></h3>
            <h1 class="fs-1">welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
            <p class="fs-5 mb-3">this is a user page</p>
            <a href="login_form.php" class="btn btn-dark mx-1">LOGIN</a>
            <a href="register_form.php" class="btn btn-dark mx-1">REGISTER</a>
            <a href="logout.php" class="btn btn-dark mx-1">LOGOUT</a>
        </div>
    </div>
</body>
</html>
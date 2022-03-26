<?php
@include "config.php";

session_start();

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];


    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) >  0) {
       $row = mysqli_fetch_array($result);

       if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location:index.php');
       }else if ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
       }
    }
    else {
        $error[] = 'incorrect email or password';
        
    }
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
    <title>login form</title>
</head>
<body>
    <div class="reg">
        <div class="container register">

                    <form action="" method="post" class="shadow bg-white text-center p-5">
                        <h3 class="fs-3 text-uppercase mb-4">Login now</h3>
                        <?php
                        if (isset($error)){
                            foreach($error as $error){
                                echo '<span class="error-msg">'.$error.'</span>';
                            };
                        };
                        ?>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" required placeholder="enter your email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" required placeholder="enter your password">
                        </div>
                        <div class="">
                            <input type="submit" class="btn form-btn" name="submit" value="login now"></input>
                        </div>
                        <p class="mt-3 fs-5">don't have an account? <a href="#" class="text-danger">Ask your admin</a></p>
                    </form>
        </div>
    </div>
</body>
</html>
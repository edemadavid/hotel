<?php
@include "config.php";

include "header.php";

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];


    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) >  0) {
        $error[] = 'user already exist!';
    }else{
        if ($pass != $cpass ) {
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO user_form (name,	email, password, user_type	) VALUES ('$name', '$email', '$pass', '$user_type')";
            mysqli_query($conn, $insert);
            echo ('Registration Successful'); 
        }
    }
};

?>


<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">


    <title>register form</title>

</head>
    <div id="layoutSidenav_content">
        <main>
            <div class="reg">
                <div class="container register">

                            <form action="" method="post" class="form shadow bg-white text-center p-5">
                            <h3 class="fs-3 text-uppercase mb-4">register now</h3>
                            <?php
                                if (isset($error)){
                                    foreach($error as $error){
                                        echo '<span class="error-msg">'.$error.'</span>';
                                    };
                                };
                            ?>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" required   placeholder="enter your name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" required placeholder="enter your email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" required placeholder="enter your password">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="cpassword" required placeholder="confirm your password">
                                </div>
                                <div class="mb-3">
                                    <select name="user_type" id="" class="form-select">
                                        <option value="user">user</option>
                                        <option value="admin">admin</option>
                                    </select>
                                </div>
                                <div class="">
                                    <input type="submit" class="btn form-btn" name="submit" value="register now"></input>
                                </div> 
                            </form>
                </div>
            </div>


<?php  include "footer.php" ?>
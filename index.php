<?php

session_start();
include "config.php";
if($_SESSION['username']){
    header('location:home.php');
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $data = mysqli_fetch_assoc($sql);
    // var_dump($data);die;
    if($data['username']){
        if($data['password'] == $password){
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Berhasil');
            window.location.replace('home.php');</script>";
        }else{
            echo "<script>alert('Password Salah')</script>";
        }
    }else{
        echo "<script>alert('Username tidak terdaftar')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="login-wrapper d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="input-wrapper p-4 w-25 bg-secondary rounded-4 bg-opacity-25">
            <form action="" method="POST">
                <h2 class="text-center">Login</h2>
                <div class="my-4">
                    <label for="" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="username">
                </div>
                <div class="my-4">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="password">
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <p>belum punya akun? </p><a href="regis.php">Daftar Disini</a>
        </div>
    </div>


    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>


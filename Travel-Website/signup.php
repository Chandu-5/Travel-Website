<?php

session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($email) && !empty($password) && !is_numeric($username)) {
            # save to database

            $query = "insert into users (username,email,password) values ('$username','$email','$password')";

            mysqli_query($con, $query);

            header("Location:login.php");
            die;
        }else {
            echo "Please enter some valid information";
        }
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signuplogin.css"> 
    <title>SignUp</title>
</head>
<body>

    <form method="post" autocomplete="off">
        <h1>SignUp</h1>
        <div class="box">
            <input id="text" type="text" name="username" placeholder="UserName">
        </div>
        <div class="box">
            <input id="text" type="email" name="email" placeholder="Email">
        </div>
        <div class="box">
            <input id="text" type="password" name="password" placeholder="password">
        </div>
        
            <input id="button" type="submit" value="SignUp" class="loginBtn">
        
        <div class="signup">
            <P>Already Have Account ? <br> <a href="./login.php">Login</a></P>
        </div>
    </form>
    
</body>
</html>
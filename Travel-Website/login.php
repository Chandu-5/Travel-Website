<?php

session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password) && !is_numeric($username)) {
            # Read to database

            $query = "select * from users where username = '$username' limit 1";

            $result = mysqli_query($con, $query);

            if ($result) {
                if ($result && mysqli_num_rows($result) > 0) {
                    
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['password'] === $password) {
                        $_SESSION['username'] = $user_data['username'];

                        header("Location:index.php");
                        die;
                    }
                }
            }

            
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
    <title>Login | website</title>
</head>
<body>
    <form method="post" autocomplete="off">
        <h1>Login</h1>
        <div class="box">
            <input id="text" type="text" name="username" placeholder="UserName">
        </div>
        <div class="box">
            <input id="text" type="password" name="password" placeholder="password">
        </div>
        
            <input id="button" type="submit" value="Login" class="loginBtn">
        
        <div class="signup">
            <P>Don't Have Account ? <br> <a href="./signup.php">SignUp</a></P>
        </div>
    </form>
</body>
</html>
<?php

function check_login($con) {

    if(isset($_SESSION['username'])) {

        $id = $_SESSION['username'];
        $query = "select * from users where username = '$id' limit 1";

        $result = mysqli_query($con, $query);


        if($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirects to login
    header("Location: login.php");
    die;

}

?>
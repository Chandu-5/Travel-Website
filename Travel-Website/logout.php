<?php

include_once("login.php");

if ($con) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: login.php");
}
?>
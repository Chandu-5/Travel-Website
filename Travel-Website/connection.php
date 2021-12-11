<?php

$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "travel";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("connection failed");
}

?>
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hotel";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con)
{
    die(mysqli_connect_error($con));
}

?>
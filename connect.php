<?php

$servername = "localhost";
$username = "pocok";
$password = "";
$dbname = "database";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_query($conn,"set names 'utf8'");
?>


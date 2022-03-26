<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "intern_josh_learn";

$conn = mysqli_connect($dbHost, $dbUser,$dbPass,$dbName);

if (!$conn) {
    die("Database connection failed!!");
}



?>
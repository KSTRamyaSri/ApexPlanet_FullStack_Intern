<?php
$host = "localhost";
$user = "root"; // XAMPP default user
$pass = "";     // XAMPP default password empty
$dbname = "portfolio_db";

// Connection create cheyali
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Connection check cheyali
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
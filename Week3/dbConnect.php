<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "";

$conn = mysqli_connect($host, $user, $password, $database);

if ($conn) {
    echo "<h2 style='color:#27AE60; font-family:Arial;'>
    ✓ Database Connection Successful</h2>";
    echo "<p style='font-family:Arial;'>Host: " . $host . "</p>";
    echo "<p style='font-family:Arial;'>User: " . $user . "</p>";
    echo "<p style='font-family:Arial; color:#27AE60;'>
    Blackline Supply database Ready.</p>";
} else {
    echo "<h2 style='color:red;'>✗ Connection Failed</h2>";
    echo "<p>" . mysqli_connect_error() . "</p>";
}
?>
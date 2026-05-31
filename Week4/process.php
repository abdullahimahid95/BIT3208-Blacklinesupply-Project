<?php
session_start();

$validUsername = "admin";
$validPassword = "blackline123";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $validUsername && $password === $validPassword){
        $_SESSION['user'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}
?>
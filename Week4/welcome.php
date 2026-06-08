<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackline Supply - Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="welcome-container">
        <h2>Blackline Supply</h2>
        <h3 style="color:#27AE60;">✓ Login Successful!</h3>
        <p>Welcome back, <strong><?php echo $_SESSION['user']; ?></strong>!</p>
        <p style="color:#2C3E50;">You are now logged in to your account.</p>
        <a href="logout.php"><button class="logout-btn">Logout</button></a>
    </div>
</body>
</html>
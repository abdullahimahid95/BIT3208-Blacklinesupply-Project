<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackline Supply - Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Blackline Supply</h2>
        <h3>Login to Your Account</h3>

        <?php if(isset($_GET['error'])): ?>
            <p class="error">Invalid username or password.</p>
        <?php endif; ?>

        <form method="POST" action="process.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
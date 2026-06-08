<?php
session_start();

echo "<div style='font-family:Arial; padding:40px;'>";
echo "<h2 style='color:#2C3E50;'>Blackline Supply — Session Check</h2>";

if(isset($_SESSION['user'])){
    echo "<p style='color:#27AE60;'>✓ Active Session Found</p>";
    echo "<p>Logged in as: <strong>" . $_SESSION['user'] . "</strong></p>";
    echo "<p>Session ID: <strong>" . session_id() . "</strong></p>";
    echo "<p style='color:#3498DB;'>Session is working correctly.</p>";
} else {
    echo "<p style='color:red;'>✗ No active session found.</p>";
    echo "<p>Please <a href='login.php'>login</a> first.</p>";
}

echo "</div>";
?>
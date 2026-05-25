<?php
$conn = mysqli_connect("localhost", "root", "", "");

if($conn){
    echo "<h2>Database Connection Successful</h2>";
    echo "<p>PHP and MySQL are connected.</p>";
} else {
    echo "Connection Failed: " . mysqli_connect_error();
}
?>
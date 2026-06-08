<?php
// Variables
$storeName = "Blackline Supply";
$productName = "Wireless Headphones";
$price = 2999;
$inStock = true;

// String output
echo "<h2>Store: " . $storeName . "</h2>";

// Conditional statement
if ($inStock) {
    echo "<p style='color:#27AE60;'>$productName is IN STOCK</p>";
} else {
    echo "<p style='color:red;'>$productName is OUT OF STOCK</p>";
}

// Array
$categories = ["Electronics", "Clothing", "Food"];

echo "<h3>Product Categories:</h3><ul>";
foreach ($categories as $category) {
    echo "<li>" . $category . "</li>";
}
echo "</ul>";

// Simple math
$discount = $price * 0.10;
$finalPrice = $price - $discount;
echo "<p>Original Price: Ksh " . $price . "</p>";
echo "<p>Discount (10%): Ksh " . $discount . "</p>";
echo "<p style='color:#27AE60;'><strong>Final Price: Ksh " . $finalPrice . "</strong></p>";
?>
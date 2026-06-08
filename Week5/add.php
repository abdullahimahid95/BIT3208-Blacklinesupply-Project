<?php
include 'includes/db.php';

$success = "";
$error = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    if($name == "" || $category == "" || $price == "" || $stock == ""){
        $error = "All fields are required.";
    } else {
        $query = "INSERT INTO products(name, category, price, stock) VALUES('$name', '$category', '$price', '$stock')";
        
        if(mysqli_query($conn, $query)){
            $success = "Product added successfully!";
        } else {
            $error = "Error adding product.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackline Supply - Add Product</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Blackline Supply</h2>
    <h3>Add New Product</h3>

    <?php if($success != ""): ?>
        <p class="success">✓ <?php echo $success; ?></p>
    <?php endif; ?>

    <?php if($error != ""): ?>
        <p class="error">✗ <?php echo $error; ?></p>
    <?php endif; ?>

    <div class="form-container">
        <form method="POST">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="text" name="category" placeholder="Category" required>
            <input type="number" name="price" placeholder="Price (Ksh)" step="0.01" required>
            <input type="number" name="stock" placeholder="Stock Quantity" required>
            <button type="submit" class="btn-submit">Add Product</button>
        </form>
        <br>
        <a href="index.php"><button class="btn btn-edit">← Back to Products</button></a>
    </div>
</body>
</html>
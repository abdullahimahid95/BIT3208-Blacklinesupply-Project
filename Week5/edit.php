<?php
include 'includes/db.php';

$success = "";
$error = "";

if(!isset($_GET['id'])){
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$product = mysqli_fetch_assoc($result);

if(!$product){
    header("Location: index.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    if($name == "" || $category == "" || $price == "" || $stock == ""){
        $error = "All fields are required.";
    } else {
        $query = "UPDATE products SET name='$name', category='$category', price='$price', stock='$stock' WHERE id=$id";
        
        if(mysqli_query($conn, $query)){
            $success = "Product updated successfully!";
            $result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
            $product = mysqli_fetch_assoc($result);
        } else {
            $error = "Error updating product.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackline Supply - Edit Product</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Blackline Supply</h2>
    <h3>Edit Product</h3>

    <?php if($success != ""): ?>
        <p class="success">✓ <?php echo $success; ?></p>
    <?php endif; ?>

    <?php if($error != ""): ?>
        <p class="error">✗ <?php echo $error; ?></p>
    <?php endif; ?>

    <div class="form-container">
        <form method="POST">
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
            <input type="text" name="category" value="<?php echo $product['category']; ?>" required>
            <input type="number" name="price" value="<?php echo $product['price']; ?>" step="0.01" required>
            <input type="number" name="stock" value="<?php echo $product['stock']; ?>" required>
            <button type="submit" class="btn-submit">Update Product</button>
        </form>
        <br>
        <a href="index.php"><button class="btn btn-edit">← Back to Products</button></a>
    </div>
</body>
</html>
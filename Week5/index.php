<?php
include 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackline Supply - Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Blackline Supply</h2>
    <h3>Product Management System</h3>

    <a href="add.php"><button class="btn btn-add">+ Add New Product</button></a>
    <br><br>

    <?php if(isset($_GET['success'])): ?>
        <p class="success">✓ Action completed successfully!</p>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price (Ksh)</th>
            <th>Stock</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM products ORDER BY id DESC");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['category'] . "</td>
                    <td>Ksh " . number_format($row['price'], 2) . "</td>
                    <td>" . $row['stock'] . "</td>
                    <td>" . $row['created_at'] . "</td>
                    <td>
                        <a href='edit.php?id=" . $row['id'] . "' class='btn btn-edit'>Edit</a>
                        <a href='delete.php?id=" . $row['id'] . "' class='btn btn-delete' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='7' style='text-align:center; color:#999;'>No products found. Add your first product!</td></tr>";
        }
        ?>
    </table>
</body>
</html>
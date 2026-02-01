<?php
session_start();
include "connect.php";

// Protect pag
// Fetch all products
$query = "SELECT * FROM store ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Manage Products</h2>

    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Price ($)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($p = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $p['id']; ?></td>
                <td>
                    <img src="<?= $p['image']; ?>" alt="<?= $p['title']; ?>" style="width:80px; height:80px; object-fit:cover;">
                </td>
                <td><?= $p['title']; ?></td>
                <td><?= $p['category']; ?></td>
                <td><?= $p['price']; ?></td>
                <td>
                    <a href="update_product.php?id=<?= $p['id']; ?>" class="btn btn-warning btn-sm mb-1">Update</a>
                    <a href="deleteproduct.php?id=<?= $p['id']; ?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="products.php" class="btn btn-success">Add New Product</a>
</div>

</body>
</html>

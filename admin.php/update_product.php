<?php
session_start();
include "connect.php";



// Check if ID is provided
if(!isset($_GET['id'])){
    header("Location: manage_products.php");
    exit;
}

$id = $_GET['id'];

// Fetch existing product data
$res = mysqli_query($conn, "SELECT * FROM store WHERE id='$id'");
if(mysqli_num_rows($res) == 0){
    echo "Product not found.";
    exit;
}

$product = mysqli_fetch_assoc($res);

// Update product
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $image = $product['image']; // default old image
    if(isset($_FILES['image']) && $_FILES['image']['name'] != ''){
       $imageName = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp,"uploads/".$imageName);
$imagePath = "http://localhost/store/admin.php/uploads/".$imageName;

        $image = $folder;

        // delete old image
        if(file_exists($product['image'])){
            unlink($product['image']);
        }
    }

    $update = mysqli_query($conn, "UPDATE store SET title='$title', description='$description', price='$price', category='$category', image='$image' WHERE id='$id'");
    if($update){
        header("Location: manage_products.php");
        exit;
    } else {
        $error = "Failed to update product.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>Update Product</h2>
    <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="title" class="form-control mb-2" placeholder="Title" value="<?= $product['title']; ?>" required>
        <textarea name="description" class="form-control mb-2" placeholder="Description" required><?= $product['description']; ?></textarea>
        <input type="number" name="price" class="form-control mb-2" placeholder="Price" value="<?= $product['price']; ?>" required>
        <input type="text" name="category" class="form-control mb-2" placeholder="Category" value="<?= $product['category']; ?>" required>
     
        <p>Current Image:</p>
        <img src="<?= $product['image']; ?>" width="120" style="object-fit:cover;" class="mb-2">
        <input type="file" name="image" class="form-control mb-3">
        <button type="submit" name="update" class="btn btn-success">Update Product</button>
    </form>
</div>

</body>
</html>
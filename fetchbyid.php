<?php
include "connect.php";
$id = $_GET['id'];
$q = "SELECT * FROM store WHERE id=$id";
$r = mysqli_query($conn,$q);
$p = mysqli_fetch_assoc($r);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }
        .product-card {
            max-width: 700px;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 5px 18px rgba(0,0,0,0.12);
            background: white;
        }
        .product-img {
            height: 400px;
            object-fit: cover;
        }
        .category-badge {
            background: #6c63ff;
            padding: 6px 14px;
            border-radius: 30px;
            color: white;
            font-size: 0.85rem;
        }
        .price {
            font-size: 1.6rem;
            font-weight: 600;
            color: #28a745;
        }
        .description {
            line-height: 1.7;
            color: #555;
        }
    </style>
  </head>
  <body>

    <div class="container py-5">
        <div class="product-card mx-auto">

            <img src="<?= $p['image'] ?>" class="product-img w-100 h-100" alt="Product Image">

            <div class="p-4">
    <h2 class="fw-bold"><?= $p['title'] ?></h2>

    <span class="category-badge mt-2 d-inline-block">
        <?= $p['category'] ?>
    </span>

    <p class="price mt-3 mb-4">$ <?= $p['price'] ?></p>

    <h5 class="fw-semibold mb-2">Description</h5>
    <p class="description">
        <?= $p['description'] ?>
    </p>

    <a href="cart.php?id=<?= $p['id'] ?>" class="btn btn-success btn-lg mt-3 w-100">
        Add to Cart
    </a>
</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php
session_start();
include "connect.php";

// ---------------------------------------------
// CHECK IF CART IS EMPTY (DO NOT EXIT PAGE)
// ---------------------------------------------
$cart_empty = false;
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    $cart_empty = true;
}

// ---------------------------------------------
// STRIPE ONLY RUNS IF CART HAS ITEMS
// ---------------------------------------------
if (!$cart_empty) {

    require 'vendor/autoload.php'; 
    \Stripe\Stripe::setApiKey('sk_test_51SVr4tReILwfWDCedzW0TQMHfOWwUVFOVzTNNkKg2mcAEEK1OEf0NnoT91BKtLzMAzjJ9NjG9gzVB8IJiofL9BCQ00Q5tg4yEZ');

    // Get product IDs
    $productIDs = implode(",", array_keys($_SESSION['cart']));
    $query = "SELECT * FROM store WHERE id IN ($productIDs)";
    $result = mysqli_query($conn, $query);

    // Stripe line items
    $grandTotal = 0;
    $line_items = [];

    while ($p = mysqli_fetch_assoc($result)) {
        $id = $p['id'];
        $qty = $_SESSION['cart'][$id];
        $total = $p['price'] * $qty;
        $grandTotal += $total;

        $line_items[] = [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => ['name' => $p['title']],
                'unit_amount' => $p['price'] * 100,
            ],
            'quantity' => $qty,
        ];
    }

    // Checkout Session
    $YOUR_DOMAIN = 'http://localhost/chatgbt';
    $checkout_session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => $line_items,
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/success.php',
        'cancel_url' => $YOUR_DOMAIN . '/view_cart.php',
    ]);

    // reset mysql pointer for table display
    mysqli_data_seek($result, 0);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store One</title>

    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <style>
        * { box-sizing: border-box; font-family: 'Times New Roman', Times, serif; }
        .fa-brands { color: gray; font-size: 13px; }
        .fa-brands:hover { color: black; }
        .color { color: black; }
        .bgg { background-color: whitesmoke; }
        footer { margin-top: 50vh; }
    </style>
</head>

<body>

<!-- TOP SOCIAL NAV -->
<nav class="navbar bg-light py-2">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- Social Icons -->
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://pk.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://x.com/"><i class="fa-brands fa-x-twitter"></i></a>
      </li>
    </ul>

    <!-- Text Section -->
    <div class="d-flex align-items-center">
      <p class="m-0 me-3 text-success">Free shipping for orders over $100</p>
    </div>

  </div>
</nav>

<!-- MAIN NAV -->
<nav class="navbar navbar-expand-lg bg-body-secondary py-3 sticky-top">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand fs-3 bb" href="index.php">StoreOne</a>

    <!-- Icons + Toggler Container -->
    <div class="d-flex align-items-center ms-auto d-lg-none gap-3">
      <a href="login.php"><i class="fa-solid fa-circle-user fs-5"></i></a>
      <a href="cart.php"><i class="fa-solid fa-cart-shopping fs-5"></i></a>
       <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fs-5 color"></i></a>
       
        
      
      <!-- Toggler (always last) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <div class="navbar-nav gap-3 justify-content-center w-100">
        <a class="nav-link active" href="index.php">Home</a>
        <a class="nav-link" href="shop.php">Shop</a>
          <a class="nav-link text-warning fw-semibold" href="sale.php">Sale</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link" href="contact.php">Contact</a>
        
      </div>
      <!-- Icons for large screens -->
      <div class="d-none d-lg-flex align-items-center gap-4 ms-auto">
       <p class="text-success small"><?php echo $_SESSION['email']; ?></p>
        <a href="login.php"><i class="fa-solid fa-circle-user fs-5 color"></i></a>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping fs-5 color"></i></a>
        <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fs-5 color"></i></a>
        <a href="admin.php"><i class="fa-solid fa-toolbox fs-5 color"></i></a>
      </div>
    </div>

  </div>
</nav>

<!-- CART CONTENT -->
<div class="container mt-5 cart-container">
    <h5 class="text-center mb-4 fw-bold">Your Cart</h5>

    <?php if ($cart_empty): ?>

        <!-- CART EMPTY MESSAGE INSIDE HTML -->
        <div class="alert alert-warning text-center mt-4">
            Your cart is empty 🛒
        </div>

        <div class="text-center mt-3">
            <a href="shop.php" class="btn btn-primary">Continue Shopping</a>
        </div>

    <?php else: ?>

        <table class="table table-hover text-center">
            <thead class="table-primary">
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price ($)</th>
                    <th>Quantity</th>
                    <th>Total ($)</th>
                    <th>Remove</th>
                </tr>
            </thead>

            <tbody>
            <?php while ($p = mysqli_fetch_assoc($result)): ?>
                <?php 
                    $id = $p['id'];
                    $qty = $_SESSION['cart'][$id];
                    $total = $p['price'] * $qty;
                ?>
                <tr>
                    <td><img src="<?= $p['image']; ?>" width="80" height="80" style="object-fit:cover;"></td>
                    <td><?= $p['title']; ?></td>
                    <td><?= $p['price']; ?></td>
                    <td>
                        <a href="cart.php?action=decrease&id=<?= $id; ?>" class="btn btn-sm btn-warning">-</a>
                        <span class="mx-2"><?= $qty; ?></span>
                        <a href="cart.php?action=increase&id=<?= $id; ?>" class="btn btn-sm btn-warning">+</a>
                    </td>
                    <td><?= $total; ?></td>
                    <td><a href="cart.php?action=remove&id=<?= $id; ?>" class="btn btn-sm btn-danger">Remove</a></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>

        <h5 class="text-end fw-bold">Grand Total: $ <?= $grandTotal; ?></h5>

        <div class="d-flex justify-content-between mt-3">
            <a href="shop.php" class="btn btn-primary">Continue Shopping</a>
            <button id="checkoutBtn" class="btn btn-success">Checkout</button>
        </div>

    <?php endif; ?>
</div>

<!-- FOOTER -->
<footer class="bgg pt-5 pb-4 container-fluid">
    <p class="text-center small">© All Rights Reserved. Created by Tahreem</p>
</footer>

<!-- STRIPE -->
<?php if (!$cart_empty): ?>
<script src="https://js.stripe.com/v3/"></script>
<script>
var stripe = Stripe('pk_test_51SVr4tReILwfWDCeqT7YqLooalXrwmk8RcLCrTLbDZKbLYaZlm8DryFEpFHeu9fQ4LZhn7fqGNuDPRfJWwMOvWOj00IW46PH54');

document.getElementById('checkoutBtn').addEventListener('click', function() {
    stripe.redirectToCheckout({ sessionId: '<?= $checkout_session->id ?>' });
});
</script>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
session_start();
include "connect.php";

// If cart is empty
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    die("Cart is empty!");
}

// Stripe
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey("sk_test_51SVr4tReILwfWDCedzW0TQMHfOWwUVFOVzTNNkKg2mcAEEK1OEf0NnoT91BKtLzMAzjJ9NjG9gzVB8IJiofL9BCQ00Q5tg4yEZ"); // <- Replace with your Stripe Secret Key

$line_items = [];
$grandTotal = 0;

// Create line items for Stripe
foreach ($_SESSION['cart'] as $id => $qty) {

    $q = mysqli_query($conn, "SELECT * FROM store WHERE id=$id");
    if (!$q || !($p = mysqli_fetch_assoc($q))) continue;

    $amount = intval($p['price']) * 100; // cents

    $line_items[] = [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $p['title'],
            ],
            'unit_amount' => $amount,
        ],
        'quantity' => $qty,
    ];

    $grandTotal += $p['price'] * $qty;
}

// Your domain (IMPORTANT)
$domain = "http://localhost/store"; // change to your project folder name

try {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => $line_items,
        'mode' => 'payment',
        'success_url' => $domain . "/success.php",
        'cancel_url' => $domain . "/cart.php",
    ]);
} catch (Exception $e) {
    die("Stripe Error: " . $e->getMessage());
}

header("Location: " . $session->url);
exit;

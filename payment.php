<?php
session_start();
include "connect.php";

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    die("Cart is empty!");
}

require 'vendor/autoload.php';

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Stripe Secret Key from ENV
\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

$line_items = [];

foreach ($_SESSION['cart'] as $id => $qty) {

    $q = mysqli_query($conn, "SELECT * FROM store WHERE id=".(int)$id);
    if (!$q || !($p = mysqli_fetch_assoc($q))) continue;

    $line_items[] = [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $p['title'],
            ],
            'unit_amount' => intval($p['price']) * 100,
        ],
        'quantity' => $qty,
    ];
}

$domain = "http://localhost/store";

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

<?php
session_start();
include "connect.php"; // if you need product info (optional)

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Safely get action and id
$action = $_GET['action'] ?? null;
$id     = $_GET['id'] ?? null;

if (!$action || !$id) {
    header("Location: view_cart.php");
    exit;
}

// Add to cart
if ($action == "add") {
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += 1;
    } else {
        $_SESSION['cart'][$id] = 1;
    }
}

// Increase quantity
if ($action == "increase") {
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += 1;
    }
}

// Decrease quantity
if ($action == "decrease") {
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] -= 1;
        if ($_SESSION['cart'][$id] <= 0) {
            unset($_SESSION['cart'][$id]);
        }
    }
}

// Remove item
if ($action == "remove") {
    unset($_SESSION['cart'][$id]);
}

// Redirect to cart page after action
header("Location: view_cart.php");
exit;
?>


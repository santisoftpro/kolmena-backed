<?php
session_start();
require_once './product.php';

$product = new Product();
$products = $product->fetchProduct(); // Assuming you have a fetchProducts method in your Product class

if ($products !== false) {
    $response = array('success' => true, 'products' => $products);
} else {
    $response = array('success' => false);
}

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>

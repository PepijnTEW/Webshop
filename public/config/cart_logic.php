<?php
require_once __DIR__ . "/db_connect.php";

function addToCart($productId, $size, $quantity = 1, $productData = []){
    $cartkey = $productId . '_' . $size;
    if (isset($_SESSION['cart'][$cartkey])){
        $_SESSION['cart'][$cartkey]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$cartkey] = [
            'id' => $productId,
            'size' => $size,
            'name' => $productData['name'],
            'price' => $productData['price'],
            'quantity' => $quantity,
            'image' => $productData['image']
        ];
    }
}

function getCart(){
    $cart = $_SESSION['cart'] ?? [];
    $total = 0;
    $items = [];

    foreach ($cart as $key => $item){
        $subtotal = $item['price'] * $item['quantity'];
        $total += $subtotal;

        $items = [
            'cart_key' => $key,
            'id' => $item['id'],
            'name' => $item['name'],
            'size' => $item['size'],
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'subtotal' => $subtotal,
            'image' => $item['image']
        ];

        return [
            'items' => $items,
            'total' => $total,
            'count' => array_sum(array_column($cart, 'quantity'))
        ]
    }
}

function removeFromCart(){
if (isset($_SESSION['cart'][$cartKey])) {
        $_SESSION['cart'][$cartKey]['quantity']--;
        
        if ($_SESSION['cart'][$cartKey]['quantity'] <= 0) {
            unset($_SESSION['cart'][$cartKey]);
        }
    }
}
<?php
require_once __DIR__ . "/db_connect.php";
$conditions = [];
$params = [];
$types = "";

if (!empty($_GET["type"])) {
    $conditions[] = "type = ?";
    $params[] = $_GET["type"];
    $types .= "s";
}
if (isset($_GET["promotion"])) {
    $conditions[] = "promotion = ?";
    $params[] = 1;
    $types .= "i";
}

if (!empty($conditions)) {
    $sql = "SELECT * FROM products WHERE " . implode(" AND ", $conditions);
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param($types, ...$params);
} else {
    $sql = "SELECT * FROM products";
    $stmt = $mysqli->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$mysqli->close(); ?>

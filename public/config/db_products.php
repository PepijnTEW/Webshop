<?php
require_once __DIR__ . "/db_connect.php";
$conditions = [];
$params = [];
$types = "";

if (!empty($_GET["type"])) {
    //maakt de get request een array als dat nog niet zo is
    $type_values = is_array($_GET["type"]) ? $_GET["type"] : [$_GET["type"]];
    $placeholders = implode(',',array_fill(0,count($type_values),'?'));
    $conditions[] = "type IN ($placeholders)";

    foreach ($type_values as $type_value){
        $params[] = $type_value;
        $types .= "s";
    }
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

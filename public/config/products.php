<?php
require_once __DIR__ . "/connect.php";
$gender = $_GET["gender"] ?? "male";
$stmt = $mysqli->prepare("SELECT * FROM products WHERE gender = ?");
$stmt->bind_param("s", $gender);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$mysqli->close(); ?>

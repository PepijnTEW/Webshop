<?php
require_once __DIR__ . "/db_connect.php";

$formdata = [];
$fields = [
    'aanhef',
    'voornaam',
    'tussenvoegsel',
    'achternaam',
    'email',
    'telefoon',
    'geboortedatum',
    'straatnaam',
    'huisnummer',
    'postcode',
    'land',
];
if (isset($_POST['voorwaarden'])){
    foreach ($fields as $field) {
        $formdata[$field] = $_POST[$field];
    }
    $columns = implode(",", $fields);
    $placeholders = implode(",", array_fill(0, count($fields), "?"));
    $sql = "INSERT INTO orders ($columns) VALUES ($placeholders)";
    $stmt = $mysqli->prepare($sql);

    $types = str_repeat("s", count($fields));
    $params = array_values($formdata);

    $stmt->bind_param($types, ...$params);
    $stmt->execute();

    $insertedId = $mysqli->insert_id;

    $stmt->close();
    $mysqli->close();

} else {
    echo "f u";
};

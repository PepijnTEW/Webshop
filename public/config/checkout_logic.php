<?php
require_once __DIR__ . "/db_connect.php";

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
    $formdata = [];
    foreach ($fields as $field) {
        $formdata[$field] = $_POST[$field];
    }
} else

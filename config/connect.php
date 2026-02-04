<?php
$envPath = dirname(__DIR__) . '/.env';

if (!is_readable($envPath)) {
    die("ENV file not found at $envPath");
}

$env = parse_ini_file($envPath, false, INI_SCANNER_TYPED);

$mysqli = new mysqli(
    $env["DB_HOST"],
    $env["DB_USERNAME"],
    $env["DB_PASSWORD"],
    $env["DB_NAME"]',
    (int)($env["DB_PORT"])
);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

<?php
session_start();
require_once __DIR__ . '/config.php';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Return associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use native prepares
];

$connectionAttempts = [
    [
        'host' => DB_HOST,
        'db'   => DB_NAME,
        'user' => DB_USER,
        'pass' => DB_PASS,
    ],
];

// Local fallback for XAMPP/WAMP if hosted DB credentials are not available locally.
if (in_array(DB_HOST, ['localhost', '127.0.0.1'], true)) {
    $connectionAttempts[] = [
        'host' => 'localhost',
        'db'   => DB_NAME,
        'user' => 'root',
        'pass' => '',
    ];
}

$pdo = null;
$lastError = null;

foreach ($connectionAttempts as $attempt) {
    try {
        $dsn = 'mysql:host=' . $attempt['host'] . ';dbname=' . $attempt['db'] . ';charset=utf8mb4';
        $pdo = new PDO($dsn, $attempt['user'], $attempt['pass'], $options);
        break;
    } catch (PDOException $e) {
        $lastError = $e;
    }
}

if (!$pdo) {
    error_log("Database connection error: " . ($lastError ? $lastError->getMessage() : 'Unknown error'));
    die("An error occurred while connecting to the database.");
}
?>
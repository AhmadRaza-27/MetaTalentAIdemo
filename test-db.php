<?php

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';

echo "<h1>Testing Database Connection...</h1>";

try {

    $database = new Database();

    $db = $database->getConnection();

    echo "<p style='color: green;'>Database connection successful!</p>";

    $stmt = $db->query("SELECT COUNT(*) AS total FROM leads");

    $result = $stmt->fetch();

    echo "<p>Total leads currently stored: " . $result['total'] . "</p>";

} catch (PDOException $e) {

    echo "<p style='color: red;'>Database Error:</p>";

    echo "<pre>";
    echo $e->getMessage();
    echo "</pre>";
}
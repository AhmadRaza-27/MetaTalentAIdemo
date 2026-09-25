<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/database.php';

$database = new Database();
$db = $database->getConnection();

try {
    $stmt = $db->prepare("SELECT metric_name, metric_value, last_updated FROM system_metrics ORDER BY id ASC");
    $stmt->execute();
    $metrics = $stmt->fetchAll();

    echo json_encode(['success' => true, 'data' => $metrics]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Could not load metrics.']);
}
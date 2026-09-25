<?php

// ============================================================
// BOOK A DEMO - SUBMIT LEAD API
// ============================================================

header('Content-Type: application/json');


// ============================================================
// LOAD CONFIGURATION
// ============================================================

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/database.php';


// ============================================================
// ONLY ALLOW POST REQUESTS
// ============================================================

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    http_response_code(405);

    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed.'
    ]);

    exit;
}


// ============================================================
// GET FORM DATA
// ============================================================

$fullName = trim(
    $_POST['full_name'] ?? ''
);

$email = trim(
    $_POST['email'] ?? ''
);

$company = trim(
    $_POST['company'] ?? ''
);

$message = trim(
    $_POST['message'] ?? ''
);


// ============================================================
// VALIDATE FULL NAME
// ============================================================

if ($fullName === '') {

    http_response_code(422);

    echo json_encode([
        'success' => false,
        'message' => 'Please enter your full name.'
    ]);

    exit;
}


// ============================================================
// VALIDATE EMAIL
// ============================================================

if (
    $email === '' ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {

    http_response_code(422);

    echo json_encode([
        'success' => false,
        'message' => 'Please provide a valid email address.'
    ]);

    exit;
}


// ============================================================
// CONNECT TO DATABASE
// ============================================================

try {

    $database = new Database();

    $db = $database->getConnection();


    // ========================================================
    // INSERT LEAD
    // ========================================================

    $sql = "
        INSERT INTO leads
        (
            full_name,
            email,
            company,
            message
        )
        VALUES
        (
            :full_name,
            :email,
            :company,
            :message
        )
    ";


    $stmt = $db->prepare($sql);


    $stmt->execute([

        ':full_name' => $fullName,

        ':email' => $email,

        ':company' =>
            $company !== ''
                ? $company
                : null,

        ':message' =>
            $message !== ''
                ? $message
                : null

    ]);


    // ========================================================
    // SUCCESS RESPONSE
    // ========================================================

    echo json_encode([

        'success' => true,

        'message' =>
            'Thanks — your demo request has been submitted successfully.'

    ]);

} catch (PDOException $e) {

    // ========================================================
    // DATABASE ERROR
    // ========================================================

    error_log(
        'Lead insert failed: ' .
        $e->getMessage()
    );


    http_response_code(500);


    echo json_encode([

        'success' => false,

        'message' =>
            'Something went wrong while saving your request. Please try again.'

    ]);

}
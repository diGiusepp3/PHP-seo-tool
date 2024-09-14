<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

if (!isset($_SESSION['user_id'])) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$user_id = $_SESSION['user_id'];

$input = json_decode(file_get_contents('php://input'), true);

$fields = [
    'first_name',
    'last_name',
    'email',
    'username',
    'address_line1',
    'address_line2',
    'city',
    'state',
    'postal_code',
    'country',
    'phone',
    'date_of_birth',
    'payment_method',
    'payment_details',
    'subscription_plan'
];

$params = [];
$query_parts = [];

foreach ($fields as $field) {
    if (!empty($input[$field])) {
        $query_parts[] = "$field = ?";
        $params[] = $input[$field];
    }
}

if (!empty($input['password'])) {
    $query_parts[] = "password_hash = ?";
    $params[] = password_hash($input['password'], PASSWORD_BCRYPT);
}

if (count($query_parts) > 0) {
    $query = "UPDATE users SET " . implode(", ", $query_parts) . ", updated_at = NOW() WHERE id = ?";
    $params[] = $user_id;

    $stmt = $conn->prepare($query);

    $param_types = str_repeat('s', count($params) - 1) . 'i';
    $stmt->bind_param($param_types, ...$params);

    if ($stmt->execute()) {
        header('Content-Type: application/json');
        echo json_encode(['success' => 'Account successfully updated!']);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['error' => $stmt->error]);
    }

    $stmt->close();
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'No fields to update.']);
}
?>

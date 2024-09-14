<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Google\Client as Google_Client;

$client = new Google_Client(['client_id' => $google_client_id]);

$data = json_decode(file_get_contents('php://input'), true);
$id_token = $data['idToken'];

try {
    $payload = $client->verifyIdToken($id_token);
    if ($payload) {
        $name = $payload['name'] ?? '';
        $email = $payload['email'] ?? '';

        echo json_encode([
            'success' => true,
            'name' => $name,
            'email' => $email
        ]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Invalid ID token']);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}

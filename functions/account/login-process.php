<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

if (isset($_GET['referer'])) {
    $nextUrl = $_GET['referer'];
} else {
    $nextUrl = '/pages/account/';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Zoek de gebruiker in de database op basis van het e-mailadres
    $query = "SELECT id, first_name, email, password_hash FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($id, $name, $email, $hashed_password);
        if ($stmt->fetch()) {
            // Controleer het wachtwoord
            if (password_verify($password, $hashed_password)) {
                $query = "UPDATE users SET last_login = NOW() WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('i', $user['id']);
                $stmt->execute();

                // Start een sessie en sla gebruikersinformatie op
                session_start();
                $_SESSION['user_id'] = $id;
                $_SESSION['user_first_name'] = $name;
                $_SESSION['user_email'] = $email;

                // Redirect naar een beveiligde pagina of homepagina
                header('Location: ' . $nextUrl);
                exit();
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email or password.";
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

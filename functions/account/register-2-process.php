<!-- register-2-process.php -->
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Wachtwoord veilig opslaan

    // Controleer of de gebruiker al bestaat op basis van het e-mailadres
    $checkQuery = "SELECT id FROM users WHERE email = ?";
    if ($checkStmt = $conn->prepare($checkQuery)) {
        $checkStmt->bind_param('s', $email);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            // Gebruiker bestaat al
            echo "Error: Een gebruiker met dit e-mailadres bestaat al. Wil je inloggen? <a href='/pages/account/login.php'>Log in</a>";
        } else {
            // Voeg gebruiker toe aan de database
            $query = "INSERT INTO users (first_name, email, username, password_hash) VALUES (?, ?, ?, ?)";
            if ($stmt = $conn->prepare($query)) {
                $stmt->bind_param('ssss', $name, $email, $username, $password);
                if ($stmt->execute()) {
                    echo "Registration successful!";
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error: " . $conn->error;
            }
        }
        $checkStmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

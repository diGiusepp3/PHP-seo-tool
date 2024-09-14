<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Haal de huidige gebruikersinformatie op uit de database
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

$bodyClass = isset($bodyClass) ? $bodyClass : 'bg-none';
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

<!-- Begin van de main sectie -->
<main class="container mt-5">
    <h1>Account Bewerken</h1>
    <form id="updateAccountForm">
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo htmlspecialchars($user['first_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo htmlspecialchars($user['last_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form-control" value="<?php echo htmlspecialchars($user['username'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="address_line1">Address Line 1:</label>
            <input type="text" id="address_line1" name="address_line1" class="form-control" value="<?php echo htmlspecialchars($user['address_line1'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="address_line2">Address Line 2:</label>
            <input type="text" id="address_line2" name="address_line2" class="form-control" value="<?php echo htmlspecialchars($user['address_line2'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" class="form-control" value="<?php echo htmlspecialchars($user['city'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="state">State:</label>
            <input type="text" id="state" name="state" class="form-control" value="<?php echo htmlspecialchars($user['state'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="postal_code">Postal Code:</label>
            <input type="text" id="postal_code" name="postal_code" class="form-control" value="<?php echo htmlspecialchars($user['postal_code'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" class="form-control" value="<?php echo htmlspecialchars($user['country'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control" value="<?php echo htmlspecialchars($user['phone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="<?php echo htmlspecialchars($user['date_of_birth'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="payment_method">Payment Method:</label>
            <input type="text" id="payment_method" name="payment_method" class="form-control" value="<?php echo htmlspecialchars($user['payment_method'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="payment_details">Payment Details:</label>
            <input type="text" id="payment_details" name="payment_details" class="form-control" value="<?php echo htmlspecialchars($user['payment_details'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="subscription_plan">Subscription Plan:</label>
            <input type="text" id="subscription_plan" name="subscription_plan" class="form-control" value="<?php echo htmlspecialchars($user['subscription_plan'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="form-group">
            <label for="password">Nieuw Wachtwoord:</label>
            <input type="password" id="password" name="password" class="form-control">
            <small class="form-text text-muted">Laat leeg als je het wachtwoord niet wilt veranderen.</small>
        </div>
        <div class="form-group text-center mt-4">
            <input type="submit" value="Update Account" class="btn btn-primary btn-block">
        </div>
    </form>
</main>
<!-- Einde van de main sectie -->

<!-- Begin van de footer sectie -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
<!-- Einde van de footer sectie -->

<script>
    document.getElementById('updateAccountForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(event.target);
        let data = {};

        formData.forEach((value, key) => {
            data[key] = value;
        });

        fetch('/functions/account/update-account.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);
                } else if (data.error) {
                    alert(data.error);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });
</script>

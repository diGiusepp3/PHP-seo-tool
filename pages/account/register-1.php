<!-- register-1.php -->
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<div class="registration-container d-flex flex-column my-5 m-auto justify-content-center">
    <div id="g_id_onload"
         data-client_id="<?php echo htmlspecialchars($google_client_id, ENT_QUOTES, 'UTF-8'); ?>"
         data-login_uri="https://seo.webmagic.be/functions/account/register-1-process.php"
         data-auto_prompt="false">
    </div>
    <div class="g_id_signin" data-type="standard"></div>
    <form id="registration-form" action="/functions/account/register-2-process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" />

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" />
        <div class="terms-container">
            <span class="line-span">By creating an account</span>
            <span class="line-span">you agree to the
                <a href="https://www.webmagic.be/en/terms/" target="_blank" rel="noopener noreferrer">
                    Terms &amp; conditions
                </a>
                <p>Allready have an account? <a href="/pages/account/login.php">Login</a></p>
            </span>
        </div>
        <input type="submit" value="Register" />
    </form>
</div>

<script src="https://accounts.google.com/gsi/client" async defer></script>
<script>
    function handleCredentialResponse(response) {
        fetch('https://seo.webmagic.be/functions/account/register-1-process.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ idToken: response.credential })
        }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('name').value = data.name || '';
                    document.getElementById('email').value = data.email || '';
                    // Username en wachtwoord moeten handmatig worden ingevuld door de gebruiker
                } else {
                    console.error('Error:', data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    window.onload = function () {
        google.accounts.id.initialize({
            client_id: '<?php echo htmlspecialchars($google_client_id, ENT_QUOTES, 'UTF-8'); ?>',
            callback: handleCredentialResponse
        });
        google.accounts.id.renderButton(
            document.querySelector(".g_id_signin"),
            { theme: "outline", size: "large" }
        );
    }
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>

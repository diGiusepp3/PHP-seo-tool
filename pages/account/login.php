<!-- login.php -->
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';

if (isset($_GET['referer'])) {
    $referer = $_GET['referer'];
} else {
    $referer = $_SERVER['HTTP_REFERER'];
}
?>
<div class="login-container">
<form id="login-form" action="/functions/account/login-process.php?referer=<?php echo $referer ?>" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required />

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required />

    <input type="submit" value="Login" />
</form>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>

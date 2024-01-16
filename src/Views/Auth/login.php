<?php
ob_start();
if (!isset($_SESSION["user"]["username"])) {
    header("/");
}
?>

<h1>Login</h1>

<form action="/login/" method="post" enctype="multipart/form-data">
    <label for="username">Username :</label>
    <input type="text" name="username" id="username" value="<?= old("username"); ?>">
    <span class="error">
        <?= error("username"); ?>
    </span>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password" value="<?= old("username"); ?>">
    <span class="error">
        <?= error("password"); ?>
    </span>
    <input type="submit" value="Login">
</form>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
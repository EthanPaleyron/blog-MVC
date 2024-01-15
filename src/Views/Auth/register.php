<?php
ob_start();
?>

<h1>Sign in</h1>

<form action="/register/" method="post" enctype="multipart/form-data">
    <label for="username">Your username :</label>
    <input type="text" name="username" id="username">
    <span class="error">
        <?= error("username"); ?>
    </span>
    <label for="password">Your password :</label>
    <input type="password" name="password" id="password">
    <span class="error">
        <?= error("password"); ?>
    </span>
    <label for="passwordConfirm">Password confirm :</label>
    <input id="passwordConfirm" type="password" name="passwordConfirm" value="<?php echo old("passwordConfirm"); ?>">
    <input type="submit" value="Sign in">
</form>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
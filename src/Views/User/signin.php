<?php
ob_start();
?>

<h1>Sign in</h1>

<form action="" method="post" enctype="multipart/form-data">
    <label for="userName">Your user name :</label>
    <input type="text" name="userName" id="userName">
    <label for="password">Your password :</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Sign in">
</form>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
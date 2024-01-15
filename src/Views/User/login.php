<?php
ob_start();
?>

<h1>Login</h1>

<form action="" method="post" enctype="multipart/form-data">
    <label for="userName">User name :</label>
    <input type="text" name="userName" id="userName">
    <label for="password">Password :</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
</form>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
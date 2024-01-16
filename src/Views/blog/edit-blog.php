<?php
ob_start();
if (!isset($_SESSION["user"]["username"])) {
    header("/");
}
?>

<h1>Update my blog</h1>

<form action="" method="post" enctype="multipart/form-data">
    <label for="title">Title :</label>
    <input type="text" name="title" id="title">
    <label for="file">File :</label>
    <input type="file" name="file" id="file">
    <label for="content">content :</label>
    <input type="text" name="content" id="content">
    <input type="submit" value="Update">
</form>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
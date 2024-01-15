<?php
ob_start();
?>

<h1>Insert new blog</h1>

<form action="/create" method="post" enctype="multipart/form-data">
    <label for="title">Title :</label>
    <input type="text" name="title" id="title">
    <label for="file">File :</label>
    <input type="file" name="file" id="file">
    <label for="content">content :</label>
    <input type="text" name="content" id="content">
    <input type="submit" value="Create">
</form>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
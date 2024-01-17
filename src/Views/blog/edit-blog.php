<?php
ob_start();
if (!isset($_SESSION["user"]["username"])) {
    header("/");
}
?>

<h1>Update my blog</h1>

<div class="form_p">
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="title">Title :</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="file">File :</label>
            <input type="file" name="file" id="file">
        </div>
        <div>
            <label for="content">content :</label>
            <input type="text" name="content" id="content">
        </div>
        <button type="submit">Update</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
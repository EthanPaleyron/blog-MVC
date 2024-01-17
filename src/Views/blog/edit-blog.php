<?php
ob_start();
?>

<h1>Update my blog</h1>

<div class="form_p">
    <form action="/update/" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $blogEditing["id_blog"] ?>">
        <div>
            <label for="title">Title :</label>
            <input type="text" name="title" id="title" value="<?= $blogEditing["title_blog"] ?>">
            <p>
                <?= error("title") ?>
            </p>
        </div>
        <div>
            <label for="file">File :</label>
            <input type="file" name="file" id="file">
            <img src="/files/<?= $blogEditing["file_blog"] ?>" alt="<?= $blogEditing["file_blog"] ?>">
        </div>
        <div>
            <label for="content">content :</label>
            <input type="text" name="content" id="content" value="<?= $blogEditing["content_blog"] ?>">
            <p>
                <?= error("content") ?>
            </p>
        </div>
        <button type="submit">Update</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
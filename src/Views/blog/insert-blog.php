<?php
ob_start();
?>

<h1>Insert new blog</h1>

<div class="form_p">
    <form action="/create" method="post" enctype="multipart/form-data">
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
        <button type="submit">Create</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
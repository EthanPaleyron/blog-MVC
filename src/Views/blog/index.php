<?php
ob_start();
?>

<h1>Blogs</h1>

<div class="articles">
    <article>
        <img src="" alt="">
        <h2></h2>
        <time></time>
        <p></p>
    </article>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
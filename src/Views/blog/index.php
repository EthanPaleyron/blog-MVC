<?php
ob_start();
?>

<h1>Blogs</h1>

<div class="articles">
    <?php foreach ($blogs as $blog) { ?>
        <article>
            <img src="/files/<?= $blog->getfile_blog() ?>" alt="<?= $blog->getfile_blog() ?>">
            <h2>
                <?= $blog->gettitle_blog() ?>
            </h2>
            <time datetime="<?= $blog->getdatetime_blog() ?>">
                <?= $blog->getdatetime_blog() ?>
            </time>
            <p>
                <?= $blog->getcontent_blog() ?>
            </p>
        </article>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
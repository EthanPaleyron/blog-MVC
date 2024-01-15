<?php
ob_start();
?>

<h1>Blogs</h1>

<div class="articles">
    <?php foreach ($blogs as $blog) { ?>
        <article>
            <img src="/files/<?= $blog->getIMAGE_BLOG() ?>" alt="<?= $blog->getIMAGE_BLOG() ?>">
            <h2>
                <?= $blog->getTITLE_BLOG() ?>
            </h2>
            <time datetime="<?= $blog->getDATETIME_BLOG() ?>">
                <?= $blog->getDATETIME_BLOG() ?>
            </time>
            <p>
                <?= $blog->getDESCRIPTION_BLOG() ?>
            </p>
        </article>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
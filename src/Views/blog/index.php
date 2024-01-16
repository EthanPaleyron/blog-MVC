<?php
ob_start();
?>

<h1>Blogs</h1>

<div class="articles">
    <?php foreach ($blogs as $blog) {
        $date = new DateTime($blog->getdatetime_blog());
        ?>
        <article>
            <img src="/files/<?= $blog->getfile_blog() ?>" alt="<?= $blog->getfile_blog() ?>">
            <div class="title_date">
                <h2>
                    <?= escape($blog->gettitle_blog()) ?>
                </h2>
                <time datetime="<?= $date->format("d-m-Y") ?>">
                    <?= $date->format("d-m-Y") ?>
                </time>
            </div>
            <p>
                <?= escape($blog->getcontent_blog()) ?>
            </p>
        </article>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
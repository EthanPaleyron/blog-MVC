<?php
ob_start();
?>

<h1>Blogs</h1>

<div class="articles">
    <?php // AFFICHE TOUT LES BLOGS
    foreach ($blogs as $blog) {
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
            <?php if ($blog->getlabel_user() == $_SESSION["user"]["id"]) { ?>
                <div>
                    <a href="/edit-blog/<?= $blog->getid_blog() ?>">Modifier</a>
                    <a href="/delete/<?= $blog->getid_blog() ?>">Supprimer</a>
                </div>
            <?php } ?>
        </article>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
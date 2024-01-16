<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>— Blog —</title>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="scss/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <?php if (!isset($_SESSION["user"]["username"])) { ?>
                    <li><a href="/register">Sign in</a></li>
                    <li><a href="/login">Login</a></li>
                <?php } else { ?>
                    <li><a href="/logout/">Logout</a></li>
                    <li><a href="/insert-blog">Insert new blog</a></li>
                    <li>
                        <?= $_SESSION["user"]["username"]; ?>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
</body>

</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);
?>
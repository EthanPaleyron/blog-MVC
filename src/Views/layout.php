<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>— Blog —</title>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/register">Sign in</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/logout/">Logout</a></li>
                <li><a href="/insert-blog">Insert new blog</a></li>
                <?php var_dump($_SESSION) ?>
                <!-- <li>(User name)</li> -->
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
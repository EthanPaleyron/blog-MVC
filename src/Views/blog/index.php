<?php
ob_start();
?>

<h1>Blogs</h1>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>
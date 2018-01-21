<!doctype html>
<html lang="en">
<head>
    <?php include "views/part/head.php"; ?>
</head>
<body>
<?php include "views/part/menu.php"; ?>
<h1>People i like</h1>

<?php foreach ($names as $item): ?>
    <h2><?= $item['name'] ?></h2>
<?php endforeach; ?>
</body>
</html>
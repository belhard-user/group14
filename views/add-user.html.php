<!doctype html>
<html lang="en">
<head>
    <?php include "views/part/head.php"; ?>
</head>
<body>
<?php include "views/part/menu.php"; ?>
<form action="/add-user" method="post">
    <input type="text" name="name">
    <input type="submit">
</form>
</body>
</html>
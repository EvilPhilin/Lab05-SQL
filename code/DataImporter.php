<?php
require_once __DIR__ . '/Wrappers.php';

$mysqli = CreateConnection();
$mysqli->query(GetPostQuery());
$mysqli->close();
?>

<DOCTYPE! html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<form action="index.php" method="post">
    <input type="submit" value="Your ad was successfully added!">
</form>
</body>
</html>
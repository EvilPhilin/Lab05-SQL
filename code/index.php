<?php
$mysqli = new mysqli('db','root', '1', 'web');
echo $mysqli
?>

<DOCTYPE! html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<p>
    Написать доску объявлений. Пользователь указывает свой
    email, текст объявления, заголовок объявления (форма),
    категория. Для хранения объявлений использовать SQL-DB.<br/>
</p>
<form action="DataImporter.php" method="post">
    <textarea name="mail">Enter your email here</textarea>
    <textarea name="title">Enter your title here</textarea>
    <textarea name="category">Enter your category</textarea>
    <textarea name="description">Enter your description here</textarea>

    <input type="submit" value="Add your ad">
</form>
<div>
    <table>
        <tr>
            <th>E-mail</th>
            <th>Title</th>
            <th>Category</th>
            <th>Description</th>
        </tr>
        <?php

        ?>
    </table>
</div>
</body>
</html>
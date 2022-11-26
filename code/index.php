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
    <textarea name="email">Enter your email here</textarea>
    <textarea name="title">Enter your title here</textarea>
    <textarea name="category">Enter your category</textarea>
    <textarea name="description">Enter your description here</textarea>

    <input type="submit" value="Add your ad">
</form>
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>E-mail</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Date of creation</th>
        </tr>
        <?php
        require_once __DIR__ . '/Wrappers.php';

        $mysqli = CreateConnection();
        $result = $mysqli->query('SELECT * FROM web.ad');
        $mysqli->close();

        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                echo "<tr>";
                foreach($row as $item)  echo "<td>{$item}</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</div>
</body>
</html>
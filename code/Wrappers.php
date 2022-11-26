<?php
function CreateConnection()
{
    $mysqli = new mysqli('db','root', '1', 'web');

    if(mysqli_connect_errno())
    {
        print("Failed connection to DB");
        exit();
    }

    return $mysqli;
}

function GetPostQuery()
{
    return "INSERT INTO web.ad (email, title, description, category) VALUES ('{$_POST["email"]}', '{$_POST["title"]}', '{$_POST["description"]}', '{$_POST["category"]}')";
}
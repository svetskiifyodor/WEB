<?php

function redirectToHome()
{
    header('Location: index.php');

    exit();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];

# Проверяем существование папки, если ее нет то создаем
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$mysqli = new mysqli('db', 'root', 'helloworld', 'web');
if (mysqli_connect_errno()) {
    printf('Подключение к серверу MySQL невозможно. Код ошибки: $s\n', mysql_connect_error());
    exit;
}

$mysqli->query(sprintf("INSERT INTO ad (email, title, description, category) VALUES ('%s', '%s', '%s', '%s');", $email, $title, $desc, $category));

redirectToHome();


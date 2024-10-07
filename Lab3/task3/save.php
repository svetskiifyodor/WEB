<?php

function redirectToHome()
{
    header('Location: /task3/index.php');

    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];
$email = $_POST['email'];

# Проверяем существование папки, если ее нет то создаем
$directory = "./categories/{$category}/{$email}";
if (false === (file_exists($directory) && is_dir($directory))) {
    mkdir("categories/{$category}/{$email}", 0700);
}



$filePath = "categories/{$category}/{$email}/{$title}.txt";

if (false === file_put_contents($filePath, $desc)) {
    throw new Exception('Something went wrong.');
}

chmod($filePath, 0777);

redirectToHome();


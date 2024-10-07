<?php
// Начинаем сессию
session_start();

// Проверяем, установлены ли данные в сессии
if(isset($_SESSION['surname']) && isset($_SESSION['name']) && isset($_SESSION['age'])){
    // Получаем данные из сессии
    $surname = $_SESSION['surname'];
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];

    // Выводим данные на экран
    echo "Фамилия: $surname <br>";
    echo "Имя: $name <br>";
    echo "Возраст: $age <br>";
} else {
    echo "Данные не найдены в сессии.";
}

?>

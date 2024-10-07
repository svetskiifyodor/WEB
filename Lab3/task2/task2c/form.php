<?php
// Начинаем сессию
session_start();

// Проверяем, установлены ли данные в сессии
if(isset($_SESSION['userdata'])){
    // Получаем данные из сессии
    $userdata = $_SESSION['userdata'];

    // Выводим данные на экран
    echo "<ul>";
    foreach($userdata as $key => $value){
        echo "<li>$key: $value</li>";
    }
    echo "</ul>";
} else {
    echo "Данные не найдены в сессии.";
}
?>
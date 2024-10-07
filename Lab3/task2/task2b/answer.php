<?php
// Начинаем сессию
session_start();

// Проверяем, была ли отправлена форма
if(isset($_POST['submit'])){
    // Получаем данные из формы
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Записываем данные в сессию
    $_SESSION['surname'] = $surname;
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<form method="post">
    <label for="surname">Фамилия:</label>
    <input type="text" name="surname" id="surname" required><br><br>

    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="age">Возраст:</label>
    <input type="number" name="age" id="age" required><br><br>

    <input type="submit" name="submit" value="Отправить">
</form>

<p><a href="form.php">Посмотреть данные</a></p>

</body>
</html>
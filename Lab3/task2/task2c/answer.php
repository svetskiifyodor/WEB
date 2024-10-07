<?php
// Начинаем сессию
session_start();

// Проверяем, была ли отправлена форма
if(isset($_POST['submit'])){
    // Получаем данные из формы
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $rank_in_Valorant = $_POST['rank_in_Valorant'];

    // Записываем данные в сессию в виде ассоциативного массива
    $_SESSION['userdata'] = array(
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'rank_in_Valorant' => $rank_in_Valorant
    );

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<form method="post">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="age">Возраст:</label>
    <input type="number" name="age" id="age" required><br><br>

    <label for="salary">Зарплата:</label>
    <input type="number" name="salary" id="salary" required><br><br>

    <label for="rank_in_Valorant">Звание в валорант:</label>
    <input type="text" name="rank_in_Valorant" id="rank_in_Valorant"><br><br>

    <input type="submit" name="submit" value="Отправить">
</form>

<p><a href="form.php">Посмотреть данные</a></p>

</body>
</html>
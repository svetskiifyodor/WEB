<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,m initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Avito</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="category">Category</label>
            <select name="category" required>

                <?php
                $dirs = array_slice(scandir("./categories"), 2);
                foreach ($dirs as $dir) {
                    echo "<option value=\"$dir\">$dir</option>";
                }
                ?>

                <!-- Создать через массив папок
                <option value="cars">Cars</option>
                <option value="other">Other</option>
                Создать через массив папок -->

            </select>

            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="title">Description</label>
            <textarea rows="3" name="description"></textarea>

            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
            <th>Category</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>

            <?php
            // Путь к папке с категориями
            $categoriesDir = "./categories/";

            // Получаем список папок (категорий)
            $categories = array_filter(glob($categoriesDir . '*'), 'is_dir');

            // Для каждой категории
            foreach ($categories as $category) {
                // Получаем название категории из пути
                $categoryName = basename($category);

                // Получаем список папок (эмейлов) внутри категории
                $emails = array_filter(glob($category . '/*'), 'is_dir');

                // Для каждого эмейла
                foreach ($emails as $email) {
                    // Получаем название эмейла из пути
                    $emailName = basename($email);

                    // Получаем список файлов (названий) внутри папки эмейла
                    $files = glob($email . '/*');

                    // Для каждого файла (названия)
                    foreach ($files as $file) {
                        // Получаем название файла (без расширения) из пути
                        $fileName = pathinfo($file, PATHINFO_FILENAME);

                        // Читаем содержимое файла
                        $description = file_get_contents($file);

                        // Выводим строку таблицы с данными
                        echo "<tr>";
                        echo "<td>$categoryName</td>";
                        echo "<td>$emailName</td>";
                        echo "<td>$fileName</td>";
                        echo "<td>$description</td>";
                        echo "</tr>";
                    }
                }
            }
            ?>

            <!--Заполнить масивом
                <tr>
                    <td>other</td>
                    <td>other@asd.ru</td>
                    <td>phone</td>
                    <td>blablabla</td>
                </tr>
                <tr>
                    <td>cars</td>
                    <td>otheasdr@asd.ru</td>
                    <td>bmw</td>
                    <td>restaling</td>
                </tr>
            Заполнить масивом-->

            </tbody>
        </table>
    </div>
</body>
</html>
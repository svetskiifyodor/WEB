<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset = "UTF = 8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,m initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>code</title>
</head>
<body>
    <div id = "form">
        <form action = "save.php" method = "post">

            <label for = "email">Email</label>
            <input type = "email" name = "email" required>

            <label for = "category">Category</label>
            <select name = "category" required>

                <?php
                require __DIR__ . "/vendor/autoload.php";
                $client = new Google_Client();
                $client->setApplicationName('GoogleSheet');
                $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
                $client->setAccessType('offline');
                $client->setAuthConfig(__DIR__ . "/creditionals.json");
                $service = new Google_service_Sheets($client);
                $spreadsheetId = "1uV-Pvxdv6-svAhXqM1sbN_8suqN1Ynnu0mYduk09IRM";

                $types = ['electronics', 'other', 'food', 'drink'];

                for($i = 0; $i < sizeof($types); $i++){
                    echo "<option value = $types[$i]> $types[$i]</option>";
                }

                $range = "Лист1";
                $response = $service->spreadsheets_values->get($spreadsheetId,$range);
                $values = $response->getValues();


                ?>

            </select>

            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="title">Description</label>
            <textarea rows="3" name="description"></textarea>

            <input type="submit" value="Save">
        </form>
    </div>

    <div id = "table">
        <table>
            <thead>
                <th>Email</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <tbody>
            <?php
            if ($values) {
                foreach ($values as $row) {
                    echo "<tr>";
                    foreach ($row as $cell) {
                        echo "<td>$cell</td>";
                    }
                    echo "</tr>";
                }
            } else {
                // В случае отсутствия данных выводим сообщение или другое уведомление
                echo "<tr><td colspan='3'>No data available</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>
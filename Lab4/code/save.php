<?php

require __DIR__ . "/vendor/autoload.php";
function redirectToHome()
{
    header('Location: /index.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])){
    redirectToHome();
}

$client = new Google_Client();
$client->setApplicationName('GoogleSheet');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . "/creditionals.json");
$service = new Google_service_Sheets($client);
$spreadsheetId = "1uV-Pvxdv6-svAhXqM1sbN_8suqN1Ynnu0mYduk09IRM";

$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$email = $_POST['email'];

$range = "Лист1";
$dataRow =[[$email, $category, $title, $description]];

$body = new Google_Service_Sheets_ValueRange();
$body->setValues($dataRow);

$insert = ['insertDataOption' => "INSERT_ROWS"];
$params = ['valueInputOption' => 'RAW'];
try {
    $service->spreadsheets_values->append(
        $spreadsheetId,
        $range,
        $body,
        $params);
} catch (\Google\Service\Exception $e) {
    echo "error" . $e;
}

redirectToHome();
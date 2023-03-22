<?php
require('../db/secrets.php');

$pdo = new PDO('mysql:host=localhost;dbname=' . $secrets['mysqlDB'], $secrets['mysqlUser'], $secrets['mysqlPass']);


//ha POST a http kérelem
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    if (isset($_GET["makeQuotation"])) {
        $data = json_decode(file_get_contents('php://input'));

        $stmt = $pdo->prepare('INSERT INTO `messages` (`name`, `email`, `message`, `date`) VALUES (?, ?, ?, CURRENT_TIMESTAMP);');

        $stmt->execute([$data->name, $data->email, $data->message]);

        $data->id = $pdo->lastInsertId();
        return;
    }
}
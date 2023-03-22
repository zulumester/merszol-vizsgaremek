<?php
require('../db/secrets.php');

//adatbázis kapcsolat
$pdo = new PDO('mysql:host=localhost;dbname=' . $secrets['mysqlDB'], $secrets['mysqlUser'], $secrets['mysqlPass']);

//ha GET a http req metódusa
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    if (isset($_GET['showAll'])) {
        $stmt = $pdo->prepare("SELECT * FROM `quotation`");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return;
    }
}

//ha POST a http kérelem
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    if (isset($_GET["makeQuotation"])) {
        $data = json_decode(file_get_contents('php://input'));

        $stmt = $pdo->prepare('INSERT INTO `quotation` (`type`, `emailAddress`, `description`, `date`) VALUES (?, ?, ?, CURRENT_TIMESTAMP);');

        $stmt->execute([$data->type, $data->emailAddress, $data->description]);

        $data->id = $pdo->lastInsertId();
        return;
    }
}

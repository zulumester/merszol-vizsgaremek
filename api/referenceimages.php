<?php
require('../db/secrets.php');

//adatbázis kapcsolat
$pdo = new PDO('mysql:host=localhost;dbname=' . $secrets['mysqlDB'], $secrets['mysqlUser'], $secrets['mysqlPass']);

//ha GET a http req metódusa
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  
    if (isset($_GET['references'])) {
        $stmt = $pdo->prepare("SELECT * FROM `referenceimages`");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return;
    }
}

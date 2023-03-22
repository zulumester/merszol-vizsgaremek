<?php

//hibák jelzése a használt oldalakon
$development = true;

//adatbázis kapcsolat
$secrets = [

    'mysqlUser' => 'root',
    'mysqlPass' => '',
    'mysqlDB' => 'merszol',
];

//admin adatok
$_SESSION["admin"] = [
    'adminUsername' => 'admin',
    'adminPW' => '1234',
    'adminToken' => 'adminToken'
];

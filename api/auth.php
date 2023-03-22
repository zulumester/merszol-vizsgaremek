<?php

// minden OPTIONS request engedélyezése
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    return true;
}
// annak az url paramétereknek a listája amikhez nem kell authentikáció
$noAuthResources = [
    'GET' => ['referenceimages&references'],
    'POST' => ['quotation&makeQuotation'],
    'PUT' => [],
    'PATCH' => [],
    'DELETE' => []
];

//lista ellenőrzése a kérelem hívásakor
if (in_array($_SERVER['QUERY_STRING'], $noAuthResources[$_SERVER['REQUEST_METHOD']])) {
    return true;
}

//token ellenőrzése
$token = isset(apache_request_headers()['Token']) ? apache_request_headers()['Token'] : null;

//ha a token megegyezik az admin tokennel
if ($token === $_SESSION["admin"]["adminToken"]) {
    //akkor az authorizáció megtörtént
    return true;
}

//egyébként meg 401-es hibakódot adjon egy hibaüzenettel
http_response_code(401);
die('Authorization error');

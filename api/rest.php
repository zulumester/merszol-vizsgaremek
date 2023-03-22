<?php
require('../db/secrets.php');

//authentikáció meghívása minden kérelemhez
$resource = strtok($_SERVER['QUERY_STRING'], '=');
require('auth.php');

//keresés: az adott string megtalálható az URL-ben?
$referencesWasFoundInUrl = strpos($resource, 'referenceimages');
$quotationWasFoundInUrl = strpos($resource, 'quotation');

if ($referencesWasFoundInUrl = true) {
    require('referenceimages.php');
}
if ($quotationWasFoundInUrl = true) {
    require('quotation.php');
}

//a fetchelt adat megjelenítése JSON formátumban
echo json_encode($data);

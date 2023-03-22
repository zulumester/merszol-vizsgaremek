<?php

require_once("./model/image.php");
require_once("./model/quotation.php");

class Database
{

  //API KÉSZ
  public static function getAllImages()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost/merszol/api/rest.php?referenceimages&references',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));

    //kérelem végrehajtása (annak eltárolása egy változóba)
    $response = curl_exec($curl);
    //kérelem bezárása
    curl_close($curl);

    //kapott json-adat dekódolása
    $data = json_decode($response);
    //tömb definiálása
    $references = [];

    //kékpek tömb feltöltése a kapott, dekódolt json-adatokkal
    foreach ($data as $row) {
      $references[] = new Image($row->id, $row->imageSource, $row->imageTitle, $row->imageAlt, $row->imageDescription);
    }

    return $references;
  }

  //API KÉSZ
  public static function getAllQuotations($token)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost/merszol/api/rest.php?quotation&showAll',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Token:' . ' ' . $token
      ),
    ));

    //kérelem végrehajtása (annak eltárolása egy változóba)
    $response = curl_exec($curl);
    //kérelem bezárása
    curl_close($curl);

    //kapott json-adat dekódolása
    $data = json_decode($response);
    //tömb definiálása
    $quotations = [];

    //új árajánlat kérelem tömb feltöltése a kapott, dekódolt json-adatokkal
    foreach ($data as $row) {
      $quotations[] = new Quotation($row->id, $row->type, $row->emailAddress, $row->description, $row->date);
    }

    return $quotations;
  }

  //API KÉSZ
  public static function createQuotation($quotation)
  {

    $postData = [
      "type" => $quotation->type,
      "emailAddress" => $quotation->emailAddress,
      "description" => $quotation->description,
    ];

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost/merszol/api/rest.php?quotation&makeQuotation',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode($postData),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
      ),
    ));

    curl_exec($curl);
    curl_close($curl);
  }
}

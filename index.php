<?php

require_once("./components/header.php");
require_once("./db/db.php");
require_once("./model/quotation.php");

$references = Database::getAllImages();
$userMessage = "Töltse ki az összes mezőt az árajánlat elküldéséhez! Az ajánlat elküldése után 24 órán belül vissza fogunk jelezni!";
$colour = "#858585";

if (
  isset($_POST["quotationType"]) &&
  !empty($_POST["quotationType"]) &&
  isset($_POST["quotationName"]) &&
  !empty($_POST["quotationName"]) &&
  isset($_POST["quotationDescription"]) &&
  !empty($_POST["quotationDescription"])
) {

  $type = $_POST["quotationType"];
  $email = $_POST["quotationName"];
  $description = $_POST["quotationDescription"];

  $quotation = new Quotation(0, $type, $email, $description, null);
  Database::createQuotation($quotation);

  $userMessage = "Köszönjük árajánlatát! Hamarosan visszajelzünk!";
  $colour = "#5b995a";
}
?>

<!-- A weboldalam teljes képernyős képes/szöveges háttere -->
<section id="bg" class="d-flex align-items-center hero-size">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div>
        <h1 class="display-1">Üdvözöljük Oldalunkon!</h1>
        <p class="lead">Cégünk, több éves szakmai tapasztalat birtokában, maximális igényességgel igyekszik kiszolgálni megrendelőit. Felismerve a piac igényeit, főleg mérő és vizsgáló eszközök gyártása, fejlesztése és karbantartása területén fejti ki tevékenységét. Mérőeszközeinket, berendezéseinket a megrendelők igényeinek megfelelően az érvényes szabványok előírásai szerint gyártjuk. Az eszközök tervezése, gyártása, szükség esetén beszerzése mellett szakmai és mérésügyi tanácsokkal is ellátjuk megrendelőinket.
        <p class="lead">Annak ellenére, hogy termékeink többnyire egyediek, igyekszünk árainkat reális szinten tartani, mindemellett nagy figyelmet fordítva szolgáltatásaink minőségére, a vállalt határidők betartására.</p>
        <p class="lead">Kalibrálási és mérésügyi tapasztalatainkat felhasználva, ezen a területen is készséggel állunk az érdeklődők, megrendelők szolgálatára.</p>


      </div>
    </div>
  </div>
</section>

<!-- A weboldalam szolgáltatások része -->
<div class="container-fluid bg-dark text-light services" id="services">

  <h2 class="text-center">Szolgáltatásaink</h2>


  <div class="container">
    <div class="row justify-content-center mt-5 gap-4 flex-nowrap">
      <div class="col-md-12 col-lg-4 d-flex flex-column justify-content-between border border-white p-0">
        <div class="p-3">
          <h4 class="mb-4">Gyártás</h4>
          <ul>
            <li>Tárcsás teherbírás-mérő</li>
            <li>Billenő-karos behajlás-mérő</li>
            <li>3 és 4 méteres alumínium mérőléc</li>
            <li>Mérőék</li>
            <li>Proctor és Marshall edények</li>
            <li>Nyitható CBR edények</li>
            <li>Helyszíni talaj szivárgásmérő (infiltrométer)</li>
            <li>Laboratóriumi talaj vízáteresztő képesség vizsgáló berendezés</li>
            <li>Ejtő-asztal, frissbeton vizsgálathoz</li>
            <li>Beton roskadás-mérő</li>
            <li>Egyéb, egyedi mérő és vizsgáló készülék, berendezés, segédeszköz</li>
            <li>Laboratóriumi bútorzat</li>
          </ul>
          <p>(Az felsorolt eszközök, berendezések gyártása az érvényben lévő szabványok előírásainak megfelelően történik)</p>
        </div>
        <a href="#quotation"><button class="btn btn-light w-100 rounded-0">Érdekel</button></a>
      </div>

      <div class="col-md-12 col-lg-4 d-flex flex-column justify-content-between border border-white p-0">
        <div class="p-3">
          <h4 class="mb-4">Szervízszolgáltatás</h4>
          <ul>
            <li>ÚT-02-es karbantartás, javítás, felújítás</li>
            <li>ÚT-02-es átalakítás láncmeghajtásra</li>
            <li>Proctor és Marshall tömörítő karbantartás, javítás, beállítás</li>
            <li>Szitafelújítás</li>
            <li>Mérőóra javítás</li>
            <li>Könnyű-ejtősúlyos készülékjavítás</li>
            <li>SRT inga javítás</li>
            <li>Egyéb laboreszköz karbantartása, javítása</li>
            <li>Alkatrészbeszerzés</li>
          </ul>
        </div>
        <a href="#quotation"><button class="btn btn-light w-100 rounded-0">Érdekel</button></a>
      </div>

      <div class="col-md-12 col-lg-4 d-flex flex-column justify-content-between border border-white p-0">
        <div class="p-3">
          <h4 class="mb-4">Egyéb szolgáltatások</h4>
          <ul>
            <li>Egyedi laboratóriumi mérő és vizsgáló eszközök, berendezések szabványos előrásoknak megfelelő tervezése, kivitelezése</li>
            <li>Méréstechnikai szaktanácsadás</li>
            <li>Mérőeszköz felügyelet</li>
            <li>Eszközbeszerzés</li>
            <li>Kalibrálási és kalibráltatási tanácsadás és ügyintézés</li>
          </ul>
        </div>
        <a href="#quotation"><button class="btn btn-light w-100 rounded-0">Érdekel</button></a>
      </div>
    </div>
  </div>
</div>

<!-- A weboldalam referenciák része -->
<div class="container-fluid bg-light text-dark services" id="references">
  <h2 class="text-center">Referenciák</h2>


  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-13 col-lg-3">
        <ul>
          <li>COLAS Hungária Zrt</li>
          <li>EULAB Kft, Dunakeszi</li>
          <li>FIGHT Kft, Nyíregyháza</li>
          <li>Gyorsextra Bt, Budapest</li>
          <li>HÓDÚT Kft, Tiszakécske</li>
          <li>Innoteszt, Üllő</li>
          <li>Magyar Közút Nonprofit Zrt</li>
          <li>Master Way Kft, Tiszakécske</li>
          <li>Mérnök-Mártix Bt, Öttevény</li>
          <li>Multilab Kft, Budapest</li>
          <li>PASCAL Kft, Vésztő</li>
          <li>Premier Kft, Gyál</li>
          <li>Társas Szövetkezet, Jászapáti</li>
          <li>TPA HU Kft, Budapest</li>
          <li>ÚTLABOR Kft, Abda</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- A weboldalam galéria része -->
<div class="container-fluid bg-dark text-light overflow-hidden px-0" id="gallery">
  <h2 class="text-center">Galéria</h2>
  <div class="row p-5">
    <?php

    foreach ($references as $reference) {

      // ha az eszköz neve tartalmaz space-t, akkor az eszköz nevét cserélje le egy space nélküli változatra
      if (str_contains($reference->imageTitle, " ")) {
        $reference->imageTitle = str_replace(" ", "", $reference->imageTitle);
      }

      echo "
        <div class='col-md-2'>
          <div class='thumbnail'>
              <div>
                <img data-bs-toggle='modal' data-bs-target='#$reference->imageTitle' src='$reference->imageSource' alt='$reference->imageAlt' title='$reference->imageTitle' style='width:100%;height:100%;object-fit:cover;height:auto;border-radius:10px;cursor:pointer;'>
                <div class='modal fade mt-5' id='$reference->imageTitle'>
                <div class='modal-dialog' style='border-radius:50px;'>
                  <div class='modal-content'>
                    <div class='model-header'>
                    <img data-bs-toggle='modal' data-bs-target='#$reference->id' src='$reference->imageSource' alt='$reference->imageAlt' title='$reference->imageTitle'style='width:100%;height:100%;object-fit:cover;height:auto;border-radius:10px;'>
                    </div>
                    <div class='caption mt-3 p-4'>
                    <p class='text-primary' style='font-weight:bold;'>$reference->imageTitle</p>
                    <p class='text-secondary'>$reference->imageDescription</p>
                  </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
      ";
    }
    ?>
  </div>

  <!-- A weboldalam árajánlat kérés része -->

  <div class="container-fluid bg-light text-dark p-0" id="quotation">
    <div class="container-fluid py-5 px-0">
      <h2 class="text-center">Árajánlat</h2>
      <p class="text-center mt-3" style="color:<?= $colour ?>;max-width:650px;margin:auto;"><?= $userMessage ?></p>


      <div class="container">
        <form method="POST" class="row justify-content-center mt-5">
          <!-- Árajánlat kérő rész -->

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Szolgáltatás típusa<span class="text-danger">*</span></label>
            <select class="form-select" name="quotationType" aria-label="Default select example">
              <option selected value="Tárcsás teherbíró eszköz gyártása">Tárcsás teherbíró eszköz gyártása</option>
              <option value="Billenő-karos behajlás-mérő">Billenő-karos behajlás-mérő</option>
              <option value="3 és 4 méteres alumínium mérőléc">3 és 4 méteres alumínium mérőléc</option>
              <option value="Mérőék">Mérőék</option>
              <option value="Nyitható CBR edények">Nyitható CBR edények</option>
              <option value="Helyszíni talaj szivárgásmérő (infiltrométer)">Helyszíni talaj szivárgásmérő (infiltrométer)</option>
              <option value="Laboratóriumi talaj vízáteresztő képesség vizsgáló berendezés">Laboratóriumi talaj vízáteresztő képesség vizsgáló berendezés</option>
              <option value="Ejtő-asztal, frissbeton vizsgálathoz">Ejtő-asztal, frissbeton vizsgálathoz</option>
              <option value="Beton roskadás-mérő">Beton roskadás-mérő</option>
              <option value="Egyéb, egyedi mérő és vizsgáló készülék, berendezés, segédeszköz">Egyéb, egyedi mérő és vizsgáló készülék, berendezés, segédeszköz</option>
              <option value="Laboratóriumi bútorzat">Laboratóriumi bútorzat</option>
              <option value="ÚT-02-es karbantartás, javítás, felújítás">ÚT-02-es karbantartás, javítás, felújítás</option>
              <option value="ÚT-02-es átalakítás láncmeghajtásra">ÚT-02-es átalakítás láncmeghajtásra</option>
              <option value="Proctor és Marshall tömörítő karbantartás, javítás, beállítás">Proctor és Marshall tömörítő karbantartás, javítás, beállítás</option>
              <option value="Szitafelújítás">Szitafelújítás</option>
              <option value="Mérőóra javítás">Mérőóra javítás</option>
              <option value="Könnyű-ejtősúlyos készülékjavítás">Könnyű-ejtősúlyos készülékjavítás</option>
              <option value="SRT inga javítás">SRT inga javítás</option>
              <option value="Egyéb laboreszköz karbantartása, javítása">Egyéb laboreszköz karbantartása, javítása</option>
              <option value="Egyedi laboratóriumi mérő és vizsgáló eszközök, berendezések szabványos előrásoknak megfelelő tervezése, kivitelezése">Egyedi laboratóriumi mérő és vizsgáló eszközök, berendezések szabványos előrásoknak megfelelő tervezése, kivitelezése</option>
              <option value="Méréstechnikai szaktanácsadás">Méréstechnikai szaktanácsadás</option>
              <option value="Mérőeszköz felügyelet">Mérőeszköz felügyelet</option>
              <option value="Eszközbeszerzés">Eszközbeszerzés</option>
              <option value="Kalibrálási és kalibráltatási tanácsadás és ügyintézés">Kalibrálási és kalibráltatási tanácsadás és ügyintézés</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail cím<span class="text-danger">*</span></label>
            <input type="email" name="quotationName" class="form-control" placeholder="Ide írja az e-mail elérhetőségét..." required>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Árajánlat kérés szövege<span class="text-danger">*</span></label>
            <textarea class="form-control" name="quotationDescription" placeholder="Ide írja a leírást..." rows="3" required></textarea>
          </div>

          <div class="col-12">
            <button class="btn btn-primary" type="submit">Küldés</button>
          </div>

        </form>
      </div>
    </div>

    <!-- A weboldalam kapcsolat része -->
    <div class="container-fluid bg-dark text-light py-5" id="contact">

      <h2 class="text-center">Kapcsolat</h2>

      <div class="container" id="form-container">
        <div class="row justify-content-center mt-4">

          <form action="" method="POST" class="bg-light text-dark p-5 text-center">

            <div class="input-group mb-4">
              <span class="input-group-text"> <i class="fas fa-user"></i> </span>
              <input type="text" class="form-control contact-name" pattern="[a-zA-ZÀ-ÖØ-öø-ÿ-ü-ű-Ü-Ű ]{1,}" placeholder="Név...*">
            </div>

            <div class="input-group mb-4">
              <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
              <input type="email" class="form-control" placeholder="E-mail cím...*" required>
            </div>

            <textarea class="form-control mb-4" id="" cols="30" rows="10" placeholder="Üzenet..."></textarea>

            <button class="btn btn-dark">Küldés</button>

          </form>

        </div>
      </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/contactvalidity.js"></script>

    <?php
    require_once("./components/footer.php");
    ?>
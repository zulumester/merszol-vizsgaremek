<?php
//a munkamenet indítása
session_start();

require_once("./components/header.php");
require_once("./db/db.php");
// var_dump($_SESSION["loginAdmin"]);

//ha a kijelentkezésre nyomunk és annak a paramétere lesz beállítva
if (isset($_POST["signout"])) {

    //szedje ki az adataimat a munkamenetből
    //munkamenet megszüntetése
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '', 0, '/');
    header("Location: admin.php");
}

if (isset($_SESSION["loginAdmin"])) {
    $quotations = Database::getAllQuotations($_SESSION["loginAdmin"]["token"]);
}

?>

<!-- ha nincs beállítva a loginAdmin tömb a munkamenetben -->
<?php if (!isset($_SESSION["loginAdmin"])) : ?>

    <section class="d-flex align-items-center hero-size bg-dark text-light min-height-100vh-navbar">
        <div class='pt-5 container'>
            <div class="mb-5">
                <h2>
                    Nem vagy belépve az admin felületre!
                </h2>
                <p>
                    Bejelentkezés szükséges!
                </p>
                <a href="adminlogin.php" class="btn btn-primary">Bejelentkezés</a>
            </div>
        </div>
    </section>

    <!-- ha be van állítva a tömb -->
<?php else : ?>
    <section class='section maxw admin-section admin-login-error bg-dark text-light min-height-100vh-navbar'>
        <div class='pt-5 container'>
            <div class="d-flex justify-content-between">
                <h2>Be vagy jelentkezve!</h2>
                <form method="POST">
                    <button type="submit" name="signout" class="btn btn-danger">Kijelentkezés</button>
                </form>
            </div>
            <p>Az admin belépés sikeres volt! A munkamenet éppen zajlik!</p>
        </div>

        <div class="container mt-5">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Sorszám</th>
                        <th scope="col">Ajánlat típusa</th>
                        <th scope="col">Email cím</th>
                        <th scope="col">Leírás</th>
                        <th scope="col">Dátum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($quotations as $quotation) {
                        echo "
                        <tr>
                            <th scope='row'>$quotation->id</th>
                            <td style='width:20%;'>$quotation->type</td>
                            <td><a href='mailto:$quotation->emailAddress' class='btn btn-primary'>$quotation->emailAddress</a></td>
                            <td><textarea style='width:100%;height:100px;background:transparent;color:#fff;'>$quotation->description</textarea></td>
                            <td>$quotation->date</td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>


    </section>

<?php endif ?>
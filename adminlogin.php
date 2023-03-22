<?php
//a munkamenet indítása
session_start();

require_once("./components/header.php");
require_once("./db/secrets.php");

if (isset($_SESSION["loginAdmin"])) {
    $message = "Már be vagy jelentkezve az admin felületbe!";
} else {
    $message = "Add meg a felhasználónevet és jelszót a belépéshez!";
}

$colour = "#fff";

// var_dump($adminUser);

if (
    isset($_POST["username"]) &&
    !empty($_POST["username"]) &&
    isset($_POST["password"]) &&
    !empty($_POST["password"])
) {
    $usern = $_POST["username"];
    $password = $_POST["password"];


    //ha az action be van állítva (submit) és az értéke a "bejelentkezés"
    if (isset($_POST["action"])) {
        if (
            //ha be van állítva az admin tömb a munkamenetbe, és a beírt username és pw megegyezik ezekkel az értékekkel, 
            isset($_SESSION["admin"]) &&
            $usern === $_SESSION["admin"]["adminUsername"] &&
            $password === $_SESSION["admin"]["adminPW"]
        ) {
            //akkor a bejelentkezés megtörtént, success text:
            $message = "A belépés sikeres volt!";
            $colour = "#5b995a";
            //a munkamenetbe állítsa be a loginAdmin tömböt, username és token értékekkel
            $_SESSION["loginAdmin"] = [
                "username" => $_SESSION["admin"]["adminUsername"],
                "token" => $_SESSION["admin"]["adminToken"]
            ];
        }
        //ha pedig a megadott inputok értéke nem egyezik meg a beírt adatokkal, akkor errormessage jelenjen meg
        else if (
            isset($_SESSION["admin"]) &&
            $usern != $_SESSION["admin"]["adminUsername"] &&
            $password != $_SESSION["admin"]["adminPW"]
        ) {
            $message = "Helytelen felhasználónév vagy jelszó!";
            $colour = "red";
        }
    }
} else if (
    isset($_POST["username"]) &&
    empty($_POST["username"])
) {
    $message = "A felhasználónév mezője nem lehet üres!";
    $colour = "red";
} else if (
    isset($_POST["password"]) &&
    empty($_POST["password"])
) {
    $message = "A jelszó mezője nem lehet üres!";
    $colour = "red";
}

?>

<section class="d-flex align-items-center hero-size bg-dark text-light min-height-100vh-navbar">
    <div class='pt-5 container'>
        <div class="mb-5">
            <h2>
                Bejelentkezés az admin panelbe
            </h2>
            <!-- üzenet (hibaüzenetté alakul ha gond van) -->
            <p style="color: <?= $colour ?>">
                <?= $message ?>
            </p>
        </div>

        <form method="POST" class="w-50">
            <div class="form-group d-flex flex-column gap-2 mb-3">
                <label for="exampleInputEmail1">Admin felhasználónév:</label>
                <input name="username" type="text" class="form-control text-light bg-dark" aria-describedby="userHelp" placeholder="Admin felhasználónév...">
                <small id="userHelp" class="form-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, explicabo.</small>
            </div>
            <div class="form-group d-flex flex-column gap-2 mb-3">
                <label for="exampleInputPassword1">Jelszó:</label>
                <input name="password" type="password" class="form-control text-light bg-dark" placeholder="Admin jelszó...">
            </div>
            <div class="d-flex gap-3">
                <button type="submit" <?php if (isset($_SESSION["loginAdmin"])) {
                                            print("disabled");
                                        } ?> class="btn btn-success" name="action">Belépés</button>
                <?php if (!isset($_SESSION["loginAdmin"])) {

                    print("<a style='opacity:0.5;cursor:default;' disabled role='link' class='btn btn-primary'>Tovább</a>");
                } else {
                    print("<a href='admin.php' class='btn btn-primary'>Tovább</a>");
                } ?>
            </div>
        </form>
    </div>
</section>
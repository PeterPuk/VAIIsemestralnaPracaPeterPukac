<?php
require "PhPtriedy/Aplikacia.php";
$aplikacia = new Aplikacia();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SneakField </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/ProhlasenyZakaznikProfil.css">
</head>

<body>
<?php
require 'PatyAHlavicky/HlavickaPrihlasenyZakaznik.php';
?>
    <!--koniec hlavicky-->

    <!--Hlavny obsah-->
</div>
<h1 class="hlavnyNadpis">
    Váš profil
</h1>

<img src="obrazky/profil.png" alt="" class="obrazokProfil">
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-6">
            <?php
            $aplikacia->spracujFormular();
            $idPrihlaseneho = $_SESSION['idPrihlaseneho'];
            /**@var Zakaznik $zakaznik */
            foreach ($aplikacia->nacitajData() as $zakaznik) {
                if ($idPrihlaseneho == $zakaznik->getId()) {
                    $meno = $zakaznik->getMeno();
                    $priezvisko = $zakaznik->getPriezvisko();
                    $mail = $zakaznik->getMail();
                    $cislo = $zakaznik->getTelCislo();
                    $heslo = $zakaznik->getHeslo();
                    echo "<p>" . "Meno:  " . $zakaznik->getMeno() . "</p>";
                    echo "<p>" . "Priezvisko:  " . $zakaznik->getPriezvisko() . "</p>";
                    echo "<p>" . "E-mailová adresa:  " . $zakaznik->getMail() . "</p>";
                    echo "<p>" . "Telefónne číslo: " . $zakaznik->getTelCislo() . "</p>";
                    echo "<p>" . "Vaše heslo:    " . $zakaznik->getHeslo() . "</p>";
                }
            } ?>
        </div>
        <div class=" col-12 col-md-7 col-lg-5">
            <div class="obalovac">
                <form method="get">
                    <input class="skryty" type="text" name="id" value="<?php echo $idPrihlaseneho ?>">
                    <input type="text" name="meno" placeholder="meno" required>
                    <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">

                </form>
            </div>
            <div class="obalovac">
                <form method="get">
                    <input class="skryty" type="text" name="id" value="<?php echo $idPrihlaseneho ?>">
                    <input type="text" name="priezvisko" placeholder="priezvisko" required>
                    <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">

                </form>
            </div>
            <div class="obalovac">
                <form method="get">
                    <input class="skryty" type="text" name="id" value="<?php echo $idPrihlaseneho ?>">
                    <input type="email" name="mail" placeholder="email" required>
                    <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">

                </form>
            </div>
            <div class="obalovac">
                <form method="get">
                    <input class="skryty" type="text" name="id" value="<?php echo $idPrihlaseneho ?>">
                    <input type="text" name="tel_cislo" placeholder="tel_cislo" required>
                    <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">

                </form>
            </div>
            <div class="obalovac">
                <form method="get">
                    <input class="skryty" type="text" name="id" value="<?php echo $idPrihlaseneho ?>">
                    <input type="text" name="heslo" placeholder="heslo" required>
                    <input class=" btn btn-success" type="submit" name="upravit" value="Upraviť">

                </form>
            </div>

        </div>
    </div>

</div>
<!--Hlavny obsah koniec-->
<?php
    require 'PatyAHlavicky/Footer.php';
?>
    <!--Footer koniec -->

</div>

</body>
</html>

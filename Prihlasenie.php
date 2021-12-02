<?php
require "PhPtriedy/Aplikacia.php";
$aplikacia = new Aplikacia();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SneakField/Prihlasenie </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/prihlasenieCss.css">
</head>

<body>
<?php
require 'PatyAHlavicky/HlavickaNeprihlaseny.php';
?>
    <!--koniec hlavicky-->


    <!--Hlavny obsah-->

    <h1 class="prihlasenie">
        Prihlásenie
    </h1>
    <form method="get">
        <div class="obalovac">
            <input type="email" name="mail" placeholder="e-mail @">

            <input type="password" placeholder="Heslo" name="heslo">

            <?php
            if (isset($_GET['potvrditPrihlasenie'])) {
                $pom = $aplikacia->spracujFormular();
                if ($pom == 1) {
                    echo "<script> location.href='PrihlasenyAdmin.php' </script>";
                } elseif($pom == 2) {
                    echo "<script> location.href='PrihlasenyZakaznikProfil.php' </script>";
                }elseif ($pom == 3){
                    echo "<p>Zadali ste zlé prihlasovacie údaje</p>";
                }
            }
            ?>

            <input type="submit" name="potvrditPrihlasenie" value="Prihlásiť">
        </div>
    </form>


    <!--Hlavny obsah koniec-->
<?php
    require 'PatyAHlavicky/Footer.php';
?>
</body>
</html>
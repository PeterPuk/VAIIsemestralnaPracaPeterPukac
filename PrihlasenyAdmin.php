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

    <link rel="stylesheet" href="css/prihlasenyAdmin.css">
</head>

<body>

<?php
require 'PatyAHlavicky/HlavickaPrihlasenyAdmin.php';
?>

    <!--koniec hlavicky-->

    <!--Hlavny obsah-->

    <h1 class="hlavnyNadpis">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentcolor"
             class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>
        Ste prihlásený ako administrátor.
    </h1>

    <table class="table table-striped table-dark  table-hover overflow-x:auto">
        <thead>
        <tr>
            <th>Poradie</th>
            <th>id_zakaznik</th>
            <th>meno</th>
            <th>priezvisko</th>
            <th>mail</th>
            <th>tel_cislo</th>
            <th>heslo</th>
            <th colspan="1">Operácia</th>
        </tr>
        </thead>
        <tbody>


        <?php
        $aplikacia->spracujFormular();
        /**@var Zakaznik $zakaznik */
        $pom = 1;
        foreach ($aplikacia->nacitajData() as $zakaznik) { ?>
        <tr class="w-auto">
            <td><?php echo $pom ?> </td>
            <td><?php echo $zakaznik->getId() ?></td>
            <td><?php echo $zakaznik->getMeno() ?></td>
            <td><?php echo $zakaznik->getPriezvisko() ?></td>
            <td><?php echo $zakaznik->getMail() ?></td>
            <td><?php echo $zakaznik->getTelCislo() ?></td>
            <td><?php echo $zakaznik->getHeslo() ?></td>
            <td>
                <a href="PrihlasenyAdmin.php?delete=<?php echo $zakaznik->getId(); ?>"
                   class="btn btn-danger">Vymazať
                </a>
            </td>
            <?php $pom++;
            } ?>
        </tbody>
    </table>

    <!--Hlavny obsah koniec-->
<?php
require 'PatyAHlavicky/Footer.php';
?>

</body>
</html>

<?php
require "PhPtriedy/Aplikacia.php";
$aplikacia = new Aplikacia();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SneakField/Registracia </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/registraciaCss.css">
</head>

<body>

<div class="top-bar nav-down">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-8"><!-- Zaciatok -->
                <a href="tel:0907071723" class="hlavne">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                         class="bi bi-phone" viewBox="-17 -4 30 30">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    tel: 0907 071 723</a>
            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
                <a href="Prihlasenie.php" class="hlavne">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                         class="bi bi-person" viewBox="-16 -4 30 30">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    Prihásenie</a>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
                <a href="Registracia.php" class="hlavne">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-rolodex" viewBox="-14 -5 30 30">
                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>
                    </svg>
                    Registrácia</a>
            </div>
            <!-- Koniec -->
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="SneakField.html">
                        <img src="obrazky/logoZmensene.jpg" alt="" width="80" height="72">

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="SneakField.html">Domov</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dámske</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Panske.html">Pánske</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kontakt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">O nás</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!--koniec hlavicky-->

    <!--Hlavny obsah-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>
                    Registrácia
                </h1>
            </div>
        </div>
    </div>

    <form method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>

                <div class=" col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="meno" placeholder="meno" required>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="text" name="priezvisko" placeholder="priezvisko" required>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="email" name="mail" placeholder="email @" required>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 col-xl-1">

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="tel" name="tel_cislo" placeholder="telefónne číslo... "required>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="password" placeholder="Heslo" name="heslo"required>
                </div>

                <div class=" col-12 col-sm-12 col-lg-1 col-xl-1"></div>

                <div class="col-12 col-sm-12 col-lg-3 col-xl-3">
                    <input type="submit" name="potvrditRegistraciu" value="Registrovať">

                </div>
            </div>
        </div>
    </form>


    <!--Hlavny obsah koniec-->

    <div class="row bielePozadie">

        <div class="col-12 col-md-6 col-lg-3">
            <a href="#">
                <div class="logoNike">
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <a href="#">
                <div class="logoAdidas">

                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <a href="#">
                <div class="logoJordan">

                </div>
            </a>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <a href="#">
                <div class="logoVans">
                </div>
            </a>

        </div>
    </div>

    <!--Footer zaciatok-->

    <div class="col-12">
        <div class="row zafarbeny">

            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                <h3>K nákupu</h3>
                <ul>
                    <li><a href="#!">Formuláre</a></li>
                    <li><a href="#!">Obchodné podmienky</a></li>
                    <li><a href="#!">Možnosť platby</a></li>
                    <li><a href="#!">Možnosť dopravy</a></li>
                </ul>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                <h3>Nájdete nás</h3>
                <ul>
                    <li class="float ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </li>
                    <li class="float">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                        </svg>
                    </li>
                    <li class="float">

                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                 class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-12 col-lg-2">
                <h3>Adresa</h3>
                <ul>
                    <li>SneakField s.r.o</li>
                    <li>Štúrova10</li>
                    <li>026 02</li>
                </ul>
            </div>

        </div>

    </div>
</div>


<?php
$aplikacia->spracujFormular();

?>

</body>
</html>

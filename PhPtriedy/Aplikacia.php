<?php
require 'PhPtriedy/DBUlozisko.php';
require 'PhPtriedy/Zakaznik.php';
session_start();
class Aplikacia
{
    private $ulozisko;

    public function __construct()
    {
        $this->ulozisko = new DBUlozisko();

    }

    public function spracujFormular()
    {
        if (isset($_POST['potvrditRegistraciu'])) {
            $this->ulozisko->vlozZaznamDoDB(new Zakaznik(0, $_POST['meno'], $_POST['priezvisko'], $_POST['mail'],
                $_POST['tel_cislo'], $_POST['heslo']));

        } elseif (isset($_GET['potvrditPrihlasenie'])) {
            $zadanyMail = $_GET['mail'];
            $zadaneHeslo = $_GET['heslo'];
            if ($this->ulozisko->nasielSaZakaznik($zadanyMail, $zadaneHeslo) != null) {
                $_SESSION['idPrihlaseneho'] = $this->ulozisko->nasielSaZakaznik($zadanyMail, $zadaneHeslo);
                if ($this->ulozisko->jeToAdmin($zadanyMail, $zadaneHeslo) == true) {
                    return 1;
                }
                return 2;
            } else {
                return 3;
            }
        } elseif (isset($_GET['delete'])){
            $id_zakaznik = ($_GET['delete']);
            $this->ulozisko->vymazZaznamZDB($id_zakaznik);

        }elseif (isset($_GET['upravit'])) {
            $idPrihlaseneho = ($_GET['id']);
            if(isset($_GET['meno'])) {
                $hodnota = ($_GET['meno']);
                $this->ulozisko->upravMeno($idPrihlaseneho, $hodnota);
            }elseif (isset($_GET['priezvisko'])){
                $hodnota = ($_GET['priezvisko']);
                $this->ulozisko->upravPriezvisko($idPrihlaseneho, $hodnota);
            }elseif (isset($_GET['mail'])){
                $hodnota = ($_GET['mail']);
                $this->ulozisko->upravMail($idPrihlaseneho, $hodnota);
            }elseif (isset($_GET['tel_cislo'])){
                $hodnota = ($_GET['tel_cislo']);
                $this->ulozisko->upravTelCislo($idPrihlaseneho, $hodnota);
            }elseif (isset($_GET['heslo'])){
                $hodnota = ($_GET['heslo']);
                $this->ulozisko->upravHeslo($idPrihlaseneho, $hodnota);
            }
        }
    }

    public function nacitajData()
    {
        return $this->ulozisko->nacitajVsetkyData();
    }

    public function zmazZaznam(string $meno)
    {
        return $this->ulozisko->vymazZaznamZDB($meno);
    }


}
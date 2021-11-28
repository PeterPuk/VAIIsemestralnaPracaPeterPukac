<?php

require 'PhPtriedy/DBUlozisko.php';
require 'PhPtriedy/Zakaznik.php';

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
            if ($this->ulozisko->nasielSaZakaznik($zadanyMail, $zadaneHeslo) == true) {
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

    public function vymazSetko()
    {
        return $this->ulozisko->vymazVsetkyData();
    }

    public function prihlasZakaznika()
    {

    }

}
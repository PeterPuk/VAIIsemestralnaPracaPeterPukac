<?php

class DBUlozisko
{
    private $databaza;
    private $posledneVlozeneID;

    public function __construct()
    {
        $this->databaza = new mysqli('localhost', 'root','dtb456','sneakfield_db');
        $this->zachytChybuDB();
    }

    public function nacitajVsetkyData()
    {
        $result = [];
        $sql = "SELECT * from zakaznik";
        $dbResult = $this->databaza->query($sql);
        if($dbResult->num_rows > 0){
            while ($record = $dbResult->fetch_assoc()){;
                $result[] = new Zakaznik($record['id_zakaznik'],$record['meno'], $record['priezvisko'],$record['mail'], $record['tel_cislo'],
                $record['heslo']);
            }
        }
        return $result;
    }

    public function vlozZaznamDoDB(Zakaznik $zakaznik)
    {
        $meno = $zakaznik->getMeno();
        $priezvisko = $zakaznik->getPriezvisko();
        $mail = $zakaznik->getMail();
        $tel_cislo = $zakaznik->getTelCislo();
        $heslo = $zakaznik->getHeslo();

        $sql = "INSERT INTO zakaznik (meno,priezvisko,mail,tel_cislo,heslo)
            VALUES ('$meno','$priezvisko','$mail','$tel_cislo','$heslo')";
        $dbResult = $this->databaza->query($sql);

        if($this->zachytChybuDB() == false){
            $id = $this->databaza->insert_id;
            $zakaznik->setId($id);
        }
    }

    public function upravMeno(int $idPrihlaseneho, string $hodnota)
    {
        $sql = "UPDATE zakaznik SET meno = '$hodnota' WHERE id_zakaznik = '$idPrihlaseneho'";
        $dbResult = $this->databaza->query($sql);
        $this->zachytChybuDB();
        if($this->zachytChybuDB() == false){
            echo "<script> location.href='PrihlasenyZakaznikProfil.php' </script>";
        }
    }

    public function upravPriezvisko(int $idPrihlaseneho, string $hodnota)
    {
        $sql = "UPDATE zakaznik SET priezvisko = '$hodnota' WHERE id_zakaznik = '$idPrihlaseneho'";
        $dbResult = $this->databaza->query($sql);
        $this->zachytChybuDB();
        if($this->zachytChybuDB() == false){
            echo "<script> location.href='PrihlasenyZakaznikProfil.php' </script>";
        }
    }
    public function upravMail (int $idPrihlaseneho, string $hodnota)
    {
        $sql = "UPDATE zakaznik SET mail = '$hodnota' WHERE id_zakaznik = '$idPrihlaseneho'";
        $dbResult = $this->databaza->query($sql);
        $this->zachytChybuDB();
        if($this->zachytChybuDB() == false){
            echo "<script> location.href='PrihlasenyZakaznikProfil.php' </script>";
        }
    }
    public function upravTelCislo(int $idPrihlaseneho, string $hodnota)
    {
        $sql = "UPDATE zakaznik SET tel_cislo = '$hodnota' WHERE id_zakaznik = '$idPrihlaseneho'";
        $dbResult = $this->databaza->query($sql);
        $this->zachytChybuDB();
        if($this->zachytChybuDB() == false){
            echo "<script> location.href='PrihlasenyZakaznikProfil.php' </script>";
        }
    }
    public function upravHeslo(int $idPrihlaseneho, string $hodnota)
    {
        $sql = "UPDATE zakaznik SET heslo = '$hodnota' WHERE id_zakaznik = '$idPrihlaseneho'";
        $dbResult = $this->databaza->query($sql);
        $this->zachytChybuDB();
        if($this->zachytChybuDB() == false){
            echo "<script> location.href='PrihlasenyZakaznikProfil.php' </script>";
        }
    }

    public function vymazZaznamZDB(int $id)
    {
        $sql = "DELETE FROM  zakaznik WHERE id_zakaznik = '$id'";
        $dbResult = $this->databaza->query($sql);
        $this->zachytChybuDB();
    }

    public function nasielSaZakaznik(string $mail, string $heslo)
    {
        $sql = "SELECT * FROM zakaznik WHERE mail = '$mail' AND heslo = '$heslo'";
        $dbResult = $this->databaza->query($sql);
        if($dbResult->num_rows == 1){
            $record = $dbResult->fetch_assoc();
                $id = $record['id_zakaznik'];
                return $id;
        }else{
            return null;
        }

    }

    public function jeToAdmin(string $mail, string $heslo)
    {
        if($mail == "admin@gmail.com" && $heslo == "admin123"){
            return true;
        }else{
            return false;
        }
    }

    private function zachytChybuDB(){
            if($this->databaza->error){
                die('DB chyba: ' . $this->databaza->error);

            }else{
                return false; /*vracia ze nezachytil chybu*/
            }
    }

}
<?php

class DBUlozisko
{
    private $databaza;

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
                $result[] = new Zakaznik($record['meno'], $record['priezvisko'],$record['mail'], $record['tel_cislo'],
                $record['heslo']);
            }
        }
        return $result;
    }

    public function vlozZaznamDoDB(Zakaznik $zakaznik)
    {
        $stmt = $this->databaza->prepare("INSERT INTO zakaznik(meno, priezvisko, mail, tel_cislo, heslo) VALUES (?,?,?,?,?)");
        $meno = $zakaznik->getMeno();
        $priezvisko = $zakaznik->getPriezvisko();
        $mail = $zakaznik->getMail();
        $tel_cislo = $zakaznik->getTelCislo();
        $heslo = $zakaznik->getHeslo();
        $stmt->bind_param('sssss',$meno, $priezvisko, $mail, $tel_cislo, $heslo);
        $stmt->execute();
        $this->zachytChybuDB();
    }

    public function vymazZaznamZDB(string $meno)
    {
        $sql = "DELETE FROM  zakaznik WHERE meno = '$meno'";
        $dbResult = $this->databaza->query($sql);
        $this->zachytChybuDB();
    }

    public function nasielSaZakaznik(string $mail, string $heslo)
    {
        $sql = "SELECT * FROM zakaznik WHERE mail = '$mail' AND heslo = '$heslo'";
        $dbResult = $this->databaza->query($sql);
        if($dbResult->num_rows == 1){
            return true;
        }else{
            return false;
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
            }
    }

}
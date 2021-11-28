<?php

class Zakaznik
{
    private $meno;
    private $priezvisko;
    private $mail;
    private $tel_cislo;
    private $heslo;
    private $Id;

    public function __construct($Id,$meno, $priezvisko, $mail, $tel_cislo, $heslo)
    {
        $this->Id = $Id;
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;
        $this->mail = $mail;
        $this->tel_cislo = $tel_cislo;
        $this->heslo = $heslo;
    }

    public function setId($pId)
    {
        $this->Id = $pId;
    }

    public function getId()
    {
        return $this->Id;
    }

    /**
     * @return mixed
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @param mixed $meno
     */
    public function setMeno($meno): void
    {
        $this->meno = $meno;
    }

    /**
     * @return mixed
     */
    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    /**
     * @param mixed $priezvisko
     */
    public function setPriezvisko($priezvisko): void
    {
        $this->priezvisko = $priezvisko;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getTelCislo()
    {
        return $this->tel_cislo;
    }

    /**
     * @param mixed $tel_cislo
     */
    public function setTelCislo($tel_cislo): void
    {
        $this->tel_cislo = $tel_cislo;
    }

    /**
     * @return mixed
     */
    public function getHeslo()
    {
        return $this->heslo;
    }

    /**
     * @param mixed $heslo
     */
    public function setHeslo($heslo): void
    {
        $this->heslo = $heslo;
    }


}
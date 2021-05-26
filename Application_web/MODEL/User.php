<?php

class User
{
    private int $ID;
    private string $NAME;
    private string $LASTNAME;
    private string $NICKNAME;

    private string $MAIL;
    private string $PASSWORD;

    private ?string $ADRESS;
    private ?string $CITY;
    private ?int $CP;
    private ?int $TEL;

    private ?string $MOVIE;
    private ?string $BOOK;
    private ?string $MUSIC;
    private ?string $SPORT;
    private ?string $VG;

    private ?string $BIO;
    private $AVATAR;

    private $ROLE;

    //////////////////////////////////////////////////////
    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getNAME()
    {
        return $this->NAME;
    }


    public function setNAME($NAME)
    {
        $this->NAME = $NAME;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getLASTNAME()
    {
        return $this->LASTNAME;
    }

    public function setLASTNAME($LASTNAME)
    {
        $this->LASTNAME = $LASTNAME;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getNICKNAME()
    {
        return $this->NICKNAME;
    }

    public function setNICKNAME($NICKNAME)
    {
        $this->NICKNAME = $NICKNAME;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getMAIL()
    {
        return $this->MAIL;
    }


    public function setMAIL($MAIL)
    {
        $this->MAIL = $MAIL;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getPASSWORD()
    {
        return $this->PASSWORD;
    }


    public function setPASSWORD($PASSWORD)
    {
        $this->PASSWORD = $PASSWORD;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getADRESS()
    {
        return $this->ADRESS;
    }


    public function setADRESS($ADRESS)
    {
        $this->ADRESS = $ADRESS;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getCITY()
    {
        return $this->CITY;
    }

    public function setCITY($CITY)
    {
        $this->CITY = $CITY;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getCP()
    {
        return $this->CP;
    }

    public function setCP($CP)
    {
        $this->CP = $CP;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getTEL()
    {
        return $this->TEL;
    }


    public function setTEL($TEL)
    {
        $this->TEL = $TEL;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getMOVIE()
    {
        return $this->MOVIE;
    }


    public function setMOVIE($MOVIE)
    {
        $this->MOVIE = $MOVIE;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getBOOK()
    {
        return $this->BOOK;
    }

    public function setBOOK($BOOK)
    {
        $this->BOOK = $BOOK;

        return $this;
    }
    //////////////////////////////////////////////////////    
    public function getMUSIC()
    {
        return $this->MUSIC;
    }


    public function setMUSIC($MUSIC)
    {
        $this->MUSIC = $MUSIC;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getSPORT()
    {
        return $this->SPORT;
    }


    public function setSPORT($SPORT)
    {
        $this->SPORT = $SPORT;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getVG()
    {
        return $this->VG;
    }


    public function setVG($VG)
    {
        $this->VG = $VG;

        return $this;
    }
    //////////////////////////////////////////////////////    
    public function getBIO()
    {
        return $this->BIO;
    }


    public function setBIO($BIO)
    {
        $this->BIO = $BIO;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getAVATAR()
    {
        return $this->AVATAR;
    }


    public function setAVATAR($AVATAR)
    {
        $this->AVATAR = $AVATAR;

        return $this;
    }
    //////////////////////////////////////////////////////

    public function getROLE()
    {
        return $this->ROLE;
    }


    public function setROLE($ROLE)
    {
        $this->ROLE = $ROLE;

        return $this;
    }
}

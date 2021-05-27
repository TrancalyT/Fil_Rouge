<?php

class Goldbook
{

    private int $ID;
    private string $TEXT;
    private int $STARS;
    private string $VALIDATION;
    private int $USER_ID;


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
    public function getTEXT()
    {
        return $this->TEXT;
    }

    public function setTEXT($TEXT)
    {
        $this->TEXT = $TEXT;

        return $this;
    }

    //////////////////////////////////////////////////////
    public function getSTARS()
    {
        return $this->STARS;
    }

    public function setSTARS($STARS)
    {
        $this->STARS = $STARS;

        return $this;
    }

    //////////////////////////////////////////////////////
    public function getVALIDATION()
    {
        return $this->VALIDATION;
    }

    public function setVALIDATION($VALIDATION)
    {
        $this->VALIDATION = $VALIDATION;

        return $this;
    }

    //////////////////////////////////////////////////////
    public function getUSER_ID()
    {
        return $this->USER_ID;
    }

    public function setUSER_ID($USER_ID)
    {
        $this->USER_ID = $USER_ID;

        return $this;
    }
}
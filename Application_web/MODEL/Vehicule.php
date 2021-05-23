<?php

class Vehicule
{
    private int $ID;
    private string $NAME;
    private string $DESCRIPTION;
    private string $IMAGE;
    private string $CONTENT;
    private string $TYPE;
    private string $EVALUATION;

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
    public function getDESCRIPTION()
    {
        return $this->DESCRIPTION;
    }

    public function setDESCRIPTION($DESCRIPTION)
    {
        $this->DESCRIPTION = $DESCRIPTION;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getIMAGE()
    {
        return $this->IMAGE;
    }

    public function setIMAGE($IMAGE)
    {
        $this->IMAGE = $IMAGE;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getCONTENT()
    {
        return $this->CONTENT;
    }

    public function setCONTENT($CONTENT)
    {
        $this->CONTENT = $CONTENT;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getEVALUATION()
    {
        return $this->EVALUATION;
    }

    public function setEVALUATION($EVALUATION)
    {
        $this->EVALUATION = $EVALUATION;

        return $this;
    }
    //////////////////////////////////////////////////////
    public function getTYPE()
    {
        return $this->TYPE;
    }

    public function setTYPE($TYPE)
    {
        $this->TYPE = $TYPE;

        return $this;
    }
}

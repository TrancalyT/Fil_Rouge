<?php

class News
{

    private int $ID;
    private string $TITLE;
    private string $CONTENT;
    private string $DATE;

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
    public function getTITLE()
    {
        return $this->TITLE;
    }

    public function setTITLE($TITLE)
    {
        $this->TITLE = $TITLE;

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
    public function getDATE()
    {
        return $this->DATE;
    }

    public function setDATE($DATE)
    {
        $this->DATE = $DATE;

        return $this;
    }
}

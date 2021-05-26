<?php

class Movies
{

    private int $ID;
    private string $TITLE;
    private string $IMAGE;
    private string $DATE;
    private string $TIME;
    private string $LOCALISATION;
    private string $PG;
    private string $DURATION;
    private string $DIRECTION;
    private string $RELEASED;
    private string $DESCRIPTION;

    /**
     * Get the value of ID
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of ID
     *
     * @return  self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Get the value of TITLE
     */
    public function getTITLE()
    {
        return $this->TITLE;
    }

    /**
     * Set the value of TITLE
     *
     * @return  self
     */
    public function setTITLE($TITLE)
    {
        $this->TITLE = $TITLE;

        return $this;
    }

    /**
     * Get the value of IMAGE
     */
    public function getIMAGE()
    {
        return $this->IMAGE;
    }

    /**
     * Set the value of IMAGE
     *
     * @return  self
     */
    public function setIMAGE($IMAGE)
    {
        $this->IMAGE = $IMAGE;

        return $this;
    }

    /**
     * Get the value of DATE
     */
    public function getDATE()
    {
        return $this->DATE;
    }

    /**
     * Set the value of DATE
     *
     * @return  self
     */
    public function setDATE($DATE)
    {
        $this->DATE = $DATE;

        return $this;
    }

    /**
     * Get the value of TIME
     */
    public function getTIME()
    {
        return $this->TIME;
    }

    /**
     * Set the value of TIME
     *
     * @return  self
     */
    public function setTIME($TIME)
    {
        $this->TIME = $TIME;

        return $this;
    }

    /**
     * Get the value of LOCALISATION
     */
    public function getLOCALISATION()
    {
        return $this->LOCALISATION;
    }

    /**
     * Set the value of LOCALISATION
     *
     * @return  self
     */
    public function setLOCALISATION($LOCALISATION)
    {
        $this->LOCALISATION = $LOCALISATION;

        return $this;
    }

    /**
     * Get the value of PG
     */
    public function getPG()
    {
        return $this->PG;
    }

    /**
     * Set the value of PG
     *
     * @return  self
     */
    public function setPG($PG)
    {
        $this->PG = $PG;

        return $this;
    }

    /**
     * Get the value of DURATION
     */
    public function getDURATION()
    {
        return $this->DURATION;
    }

    /**
     * Set the value of DURATION
     *
     * @return  self
     */
    public function setDURATION($DURATION)
    {
        $this->DURATION = $DURATION;

        return $this;
    }

    /**
     * Get the value of DIRECTION
     */
    public function getDIRECTION()
    {
        return $this->DIRECTION;
    }

    /**
     * Set the value of DIRECTION
     *
     * @return  self
     */
    public function setDIRECTION($DIRECTION)
    {
        $this->DIRECTION = $DIRECTION;

        return $this;
    }

    /**
     * Get the value of RELEASED
     */
    public function getRELEASED()
    {
        return $this->RELEASED;
    }

    /**
     * Set the value of RELEASED
     *
     * @return  self
     */
    public function setRELEASED($RELEASED)
    {
        $this->RELEASED = $RELEASED;

        return $this;
    }

    /**
     * Get the value of DESCRIPTION
     */
    public function getDESCRIPTION()
    {
        return $this->DESCRIPTION;
    }

    /**
     * Set the value of DESCRIPTION
     *
     * @return  self
     */
    public function setDESCRIPTION($DESCRIPTION)
    {
        $this->DESCRIPTION = $DESCRIPTION;

        return $this;
    }
}

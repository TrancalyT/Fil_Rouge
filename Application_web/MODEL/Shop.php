<?php

class Shop
{
    private int $ID;
    private string $NAME;
    private ?int $PRICE;
    private ?int $QUANTITY;
    private string $DESCRIPTION;
    private string $PHOTO;



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
     * Get the value of NAME
     */
    public function getNAME()
    {
        return $this->NAME;
    }

    /**
     * Set the value of NAME
     *
     * @return  self
     */
    public function setNAME($NAME)
    {
        $this->NAME = $NAME;

        return $this;
    }

    /**
     * Get the value of PRICE
     */
    public function getPRICE()
    {
        return $this->PRICE;
    }

    /**
     * Set the value of PRICE
     *
     * @return  self
     */
    public function setPRICE($PRICE)
    {
        $this->PRICE = $PRICE;

        return $this;
    }

    /**
     * Get the value of QUANTITY
     */
    public function getQUANTITY()
    {
        return $this->QUANTITY;
    }

    /**
     * Set the value of QUANTITY
     *
     * @return  self
     */
    public function setQUANTITY($QUANTITY)
    {
        $this->QUANTITY = $QUANTITY;

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

    /**
     * Get the value of PHOTO
     */
    public function getPHOTO()
    {
        return $this->PHOTO;
    }

    /**
     * Set the value of PHOTO
     *
     * @return  self
     */
    public function setPHOTO($PHOTO)
    {
        $this->PHOTO = $PHOTO;

        return $this;
    }
}

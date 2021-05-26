<?php

class Forum_topic extends User
{
    private int $ID;
    private string $SUJET;
    private string $TEXT;


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
     * Get the value of SUJET
     */
    public function getSUJET()
    {
        return $this->SUJET;
    }

    /**
     * Set the value of SUJET
     *
     * @return  self
     */
    public function setSUJET($SUJET)
    {
        $this->SUJET = $SUJET;

        return $this;
    }

    /**
     * Get the value of TEXT
     */
    public function getTEXT()
    {
        return $this->TEXT;
    }

    /**
     * Set the value of TEXT
     *
     * @return  self
     */
    public function setTEXT($TEXT)
    {
        $this->TEXT = $TEXT;

        return $this;
    }
}

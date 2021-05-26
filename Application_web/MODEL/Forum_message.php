<?php

class Forum_message extends Forum_topic{
    private int $ID;
    private string $MESSAGE;
    private string $DATE_CREATION;
    private User $ID_USER;
    private Forum_topic $ID_TOPIC;

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
     * Get the value of MESSAGE
     */ 
    public function getMESSAGE()
    {
        return $this->MESSAGE;
    }

    /**
     * Set the value of MESSAGE
     *
     * @return  self
     */ 
    public function setMESSAGE($MESSAGE)
    {
        $this->MESSAGE = $MESSAGE;

        return $this;
    }

    /**
     * Get the value of DATE_CREATION
     */ 
    public function getDATE_CREATION()
    {
        return $this->DATE_CREATION;
    }

    /**
     * Set the value of DATE_CREATION
     *
     * @return  self
     */ 
    public function setDATE_CREATION($DATE_CREATION)
    {
        $this->DATE_CREATION = $DATE_CREATION;

        return $this;
    }

    /**
     * Get the value of ID_USER
     */ 
    public function getID_USER()
    {
        return $this->ID_USER;
    }

    /**
     * Set the value of ID_USER
     *
     * @return  self
     */ 
    public function setID_USER($ID_USER)
    {
        $this->ID_USER = $ID_USER;

        return $this;
    }

    /**
     * Get the value of ID_TOPIC
     */ 
    public function getID_TOPIC()
    {
        return $this->ID_TOPIC;
    }

    /**
     * Set the value of ID_TOPIC
     *
     * @return  self
     */ 
    public function setID_TOPIC($ID_TOPIC)
    {
        $this->ID_TOPIC = $ID_TOPIC;

        return $this;
    }
}
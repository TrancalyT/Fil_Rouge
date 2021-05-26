<?php

class Creation_topic extends Forum_topic
{
    private User $ID_USER;
    private Forum_topic $ID_TOPIC;
    private string $DATE_CREATION;

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
}

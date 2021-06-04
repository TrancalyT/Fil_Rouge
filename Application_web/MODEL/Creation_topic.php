<?php

class Creation_topic extends Forum_topic
{
    private User $id_user;
    private Forum_topic $id_topic;
    private string $date_creation;

    

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of id_topic
     */ 
    public function getId_topic()
    {
        return $this->id_topic;
    }

    /**
     * Set the value of id_topic
     *
     * @return  self
     */ 
    public function setId_topic($id_topic)
    {
        $this->id_topic = $id_topic;

        return $this;
    }

    /**
     * Get the value of date_creation
     */ 
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }
}

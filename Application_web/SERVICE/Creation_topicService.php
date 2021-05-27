<?php
include_once(__DIR__."/../DAO/Creation_TopicDAO.php");
include_once(__DIR__."/../EXCEPTIONS/ForumServiceException.php");

class Creation_TopicService{

    function addTopic($ID_USER, $ID_TOPIC){
        $creationTopic = new Creation_TopicDAO;

        try{
            $creationTopic->addTopic($ID_USER, $ID_TOPIC);
        }
        catch(ForumDAOException $e){
            throw new ForumServiceException($e->getMessage(), $e->getCode());
        }
    }
}

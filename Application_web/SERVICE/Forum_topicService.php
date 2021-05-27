<?php
include_once(__DIR__."/../DAO/Forum_topicDAO.php");
include_once(__DIR__."/../EXCEPTIONS/ForumServiceException.php");

class Forum_topicService{
    function createTopic($sujet){
        $topic = new Forum_topicDAO;

        try{
            $topic->createTopic($sujet);
        }
        catch(ForumDAOException $e){
            throw new ForumServiceException($e->getMessage(), $e->getCode());
        }
    }
}
?>
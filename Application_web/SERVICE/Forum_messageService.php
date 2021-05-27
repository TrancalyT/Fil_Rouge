<?php
include_once(__DIR__."/../DAO/Forum_messageDAO.php");
include_once(__DIR__."/../EXCEPTIONS/ForumServiceException.php");

class Forum_messageService{

    function displayMessage(){
        $message = new Forum_messageDAO;

        try{
            $message->displayMessage();
        }
        catch(ForumDAOException $e){
            throw new ForumServiceException($e->getMessage(), $e->getCode());
        }
    }
    
}

<?php
require_once(__DIR__ . "/../MODEL/Creation_topic.php");
require_once(__DIR__ . "/CommonDAO.php");
require_once(__DIR__ . "/../EXCEPTIONS/ForumDAOException.php");

class Creation_TopicDAO extends Connection{
    
    function addTopic($ID_USER, $ID_TOPIC){
        try{
            $query ="INSERT INTO creation_topic(ID_USER,ID_TOPIC,DATE_CREATION)
                    VALUES(NULL,?,?);";

            $db= parent::connectionDB();
            $stmt = $db->prepare($query);
            $stmt->bind_param('ii', $ID_USER, $ID_TOPIC);
            $stmt->execute();
        
            $db->close();

        }
        catch(mysqli_sql_exception $error){
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode();
            throw new ForumDAOException($message);
        }
    }
}

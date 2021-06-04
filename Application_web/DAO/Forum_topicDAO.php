<?php
require_once(__DIR__ . "/../MODEL/Forum_topic.php");
require_once(__DIR__ . "/CommonDAO.php");
require_once(__DIR__ . "/../EXCEPTIONS/ForumDAOException.php");

class Forum_topicDAO extends Connection
{

    function createTopic($sujet)
    {

        try {
            $query = "INSERT INTO forum_topic(id,sujet)
                    VALUES(NULL,?);";

            $db =$this->connectionDB();
            $stmt = $db->prepare($query);
            $stmt->bind_param('s', $sujet);
            $stmt->execute();

            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode();
            throw new ForumDAOException($message);
        }
    }
}
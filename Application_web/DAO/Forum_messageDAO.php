<?php
require_once(__DIR__ . "/../MODEL/Forum_message.php");
require_once(__DIR__ . "/CommonDAO.php");
require_once(__DIR__ . "/../EXCEPTIONS/ForumDAOException.php");

class Forum_messageDAO extends Connection
{

    function displayMessage()
    {

        try {
            $query = "SELECT id,message,DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr,id_user,id_topic
                    FROM forum_message ORDER BY date_creation DESC LIMIT 0, 5;";

            $db = parent::connectionDB();
            $stmt = $db->prepare($query);
            $stmt->execute();

            $db->close();
        } catch (mysqli_sql_exception $error) {
            $message = "La requête que vous tentez d'obtenir n'a pas pu aboutir. \"" . $error->getCode();
            throw new ForumDAOException($message);
        }
    }
}
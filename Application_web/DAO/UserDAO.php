<?php
require_once(__DIR__ . "/../MODEL/User.php");
require_once(__DIR__ . "/commonDAO.php");


class UserDAO extends Connection
{
    function login($MAIL)
    {
        $db = $this->connectionDB();
        $stmt = $db->prepare("SELECT * FROM user WHERE MAIL = ?;");
        $stmt->bind_param("s", $MAIL);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_array(MYSQLI_ASSOC);
        $result->free();
        $db->close();

        return $data;
    }
    /*A ADAPTER*/
    function register($newUser, $newPass): void
    {
        $db = $this->connectionDB();
        $stmt = $db->prepare("INSERT INTO user (MAIL, PASSWORD, ROLE) values ('$newUser', '$newPass', 'User');");
        $stmt->bind_param("ss", $newUser, $newPass);
        $stmt->execute();
        $db->close();
    }
}

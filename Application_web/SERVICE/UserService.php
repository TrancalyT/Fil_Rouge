<?php
include_once(__DIR__ . "/../DAO/UserDAO.php");

class UserService
{
    public function login($MAIL)
    {
        $userDAO = new UserDAO;
        $sql = $userDAO->login($MAIL);
        return $sql;
    }

    public function register($newUser, $newPass): void
    {
        $pass = password_hash($newPass, PASSWORD_DEFAULT);
        $userDAO = new UserDAO;
        $userDAO->register($newUser, $pass);
    }
}

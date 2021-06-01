<?php
include_once(__DIR__ . "/../DAO/UserDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/UserServiceException.php");

class UserService
{
    public function login($MAIL) : ?User
    {
        $userDAO = new UserDAO;
        try {
            $userService = $userDAO->login($MAIL);
        } catch (UserDAOException $e) {
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }
        return $userService;
    }

    public function register($name, $lastname, $nickname, $mail, $password, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $avatar)
    {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $userDAO = new UserDAO;

        try {
            $userDAO->register($name, $lastname, $nickname, $mail, $passwordHash, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $avatar);
        } catch (UserDAOException $e){
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }
    }

    public function ifAlreadyExist() : array
    {
        $userDAO = new UserDAO();
        try{
            $userService = $userDAO->ifAlreadyExist();
        } catch (UserDAOException $e){
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }

        return $userService;
    }

    public function displayUser($id) : ?User
    {
        $userDAO = new UserDAO();
        try{
            $userService = $userDAO->displayUser($id);
        } catch (UserDAOException $e){
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }

        return $userService;
    }

    public function updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $avatar, $id)
    {
        $cp = intval($cp);
        $tel = intval($tel);
        $id = intval($id);
        $userDAO = new UserDAO;

        try {
            $userDAO->updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $avatar, $id);
        } catch (UserDAOException $e){
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }
    }

    public function displayAvatar($id) : User
    {
        $userDAO = new UserDAO;
        try {
            $userService = $userDAO->displayAvatar($id);
        } catch (UserDAOException $e) {
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }
        return $userService;
    }
}

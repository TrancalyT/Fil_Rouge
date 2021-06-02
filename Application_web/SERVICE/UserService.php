<?php
include_once(__DIR__ . "/../DAO/UserDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/UserServiceException.php");

class UserService
{
    public function login($mail) : ?User
    {
        $userDAO = new UserDAO;
        try {
            $userService = $userDAO->login($mail);
        } catch (UserDAOException $e) {
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }
        return $userService;
    }

    public function register($name, $lastname, $nickname, $mail, $password, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $avatar)
    {
        $name = strtoupper($name);
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

    public function updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $id)
    {
        $name = strtoupper($name);
        $id = intval($id);
        $userDAO = new UserDAO;

        try {
            $userDAO->updateUser($name, $lastname, $nickname, $mail, $adress, $city, $cp, $tel, $movie, $book, $sport, $music, $vg, $bio, $id);
        } catch (UserDAOException $e){
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }
    }

    public function updateAvatar($avatar, $id)
    {
        $userDAO = new UserDAO;

        try {
            $userDAO->updateAvatar($avatar, $id);
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

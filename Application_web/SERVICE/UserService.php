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
        } catch (UserDAOException $error){
            throw new UserServiceException($error->getMessage());
        }
        return $userService;
    }

    public function register($user)
    {
        $userDAO = new UserDAO;

        try {
            $userDAO->register($user);
        } catch (UserDAOException $error){
            throw new UserServiceException($error->getMessage());
        }
    }

    public function ifAlreadyExist() : array
    {
        $userDAO = new UserDAO();
        try{
            $userService = $userDAO->ifAlreadyExist();
        } catch (UserDAOException $error){
            throw new UserServiceException($error->getMessage());
        }

        return $userService;
    }

    public function displayUser($id) : ?User
    {
        $userDAO = new UserDAO();
        try{
            $userService = $userDAO->displayUser($id);
        } catch (UserDAOException $error){
            throw new UserServiceException($error->getMessage());
        }

        return $userService;
    }

    public function updateUser($user)
    {
        $userDAO = new UserDAO;

        try {
            $userDAO->updateUser($user);
        } catch (UserDAOException $error){
            throw new UserServiceException($error->getMessage());
        }
    }

    public function updateAvatar($avatar, $id)
    {
        $userDAO = new UserDAO;

        try {
            $userDAO->updateAvatar($avatar, $id);
        } catch (UserDAOException $error){
            throw new UserServiceException($error->getMessage());
        }
    }

    public function displayAvatar($id) : User
    {
        $userDAO = new UserDAO;
        try {
            $userService = $userDAO->displayAvatar($id);
        } catch (UserDAOException $error){
            throw new UserServiceException($error->getMessage());
        }
        return $userService;
    }
}

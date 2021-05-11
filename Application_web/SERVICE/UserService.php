<?php
include_once(__DIR__ . "/../DAO/UserDAO.php");
include_once(__DIR__ . "/../EXCEPTIONS/UserDAOException.php");
include_once(__DIR__ . "/../EXCEPTIONS/UserServiceException.php");

class UserService
{
    public function login($MAIL)
    {
        $userDAO = new UserDAO;
        try {
            $login = $userDAO->login($MAIL);
        } catch (UserDAOException $e) {
            throw new UserServiceException($e->getMessage(), $e->getCode());
        }
        return $login;
    }

    public function register($user): void
    {
        $passwordHash = password_hash($user->getPASSWORD(), PASSWORD_DEFAULT);
        $user->drtPASSWORD($passwordHash);

        $userDAO = new UserDAO;
        $userDAO->register($user);
    }
}

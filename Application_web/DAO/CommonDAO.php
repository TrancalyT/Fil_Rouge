<?php

class Connection
{
    function connectionDB()
    {
        try {
            $db = new mysqli("localhost", "root", "", "pocket_museumv2");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        return $db;
    }
}

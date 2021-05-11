<?php

class Connection
{
    function connectionDB()
    {
        try {
            $db = new mysqli("localhost", "root", "", "museum");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        return $db;
    }
}

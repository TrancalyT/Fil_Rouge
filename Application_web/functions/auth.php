<?php
// function isadmin()
// {
//     if (session_status() === PHP_SESSION_NONE) {
//         session_start();
//     }

//     return !empty($_SESSION['pseudo']);
// }

function isconnected()
{
    if (session_status() === PHP_SESSION_NONE) {

        session_start();
    }

    return !empty($_SESSION['pseudo']);
}


// function connection_required(): void
// {
//     if (!isconnected()) {
//         header("location: login.php");
//         exit();
//     }
// }

<?php


namespace App\Midd;


class Auth
{
    function isLogin(){
        if (!isset($_SESSION['name'])){
            header('Location: src/view/login.php');
        }
    }
}
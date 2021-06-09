<?php


namespace App\Service;

use App\Model\login\LoginModel;

class LoginService
{
    protected $loginModel;

    public function __construct()
    {
        $this->loginModel=new LoginModel();
    }

    function checkLogin($request){
        $login=$this->loginModel->findLogin($request);
        if ($login){
            $_SESSION['name']=$login;
            header('Location:index.php');
        }
        return false;
    }

    function logout(){
        unset($_SESSION['name']);
        header('Location: src/View/login.php');
    }

}
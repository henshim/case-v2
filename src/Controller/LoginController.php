<?php


namespace App\Controller;

use App\Service\LoginService;

class LoginController
{
    protected $loginService;

    public function __construct()
    {
        $this->loginService = new LoginService();
    }

    function login(){
        return $this->loginService->checkLogin($_REQUEST);
    }

    function logout(){
        $this->loginService->logout();
    }
}
<?php

namespace App\Model;

use PDO;
use PDOException;

class DBConnection
{
    protected $dsn;
    protected $user;
    protected $pass;

    function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=cardShop';
        $this->user = 'admin';
        $this->pass = '123456';
    }

    function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}
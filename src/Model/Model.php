<?php

namespace App\Model;

class Model
{
    protected $conn;

    public function __construct()
    {
        $database = new DBConnection();
        $this->conn = $database->connect();
    }
}
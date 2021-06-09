<?php


namespace App\Model\login;


class Login
{
    public $id;
    public $name;
    public $pass;

    public function __construct($data)
    {
        $this->name=$data['name'];
        $this->pass=$data['pass'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
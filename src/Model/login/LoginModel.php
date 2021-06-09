<?php


namespace App\Model\login;

use App\Model\Basic;
use App\Model\Model;
use PDO;

class LoginModel extends Model implements Basic
{
    function getAll()
    {
        $sql = 'select * from users';
        $stmt=$this->conn->query($sql);
        return $stmt->fetchAll();
    }

    function findLogin($request){
        $sql = 'select name,pass from users where name=? and pass=?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1,$request['name']);
        $stmt->bindParam(2,$request['pass']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
<?php

namespace App\Model\product;

use App\Model\Model;
use App\Model\Basic;

use PDO;

class ProductModel extends Model implements Basic
{

    function getAll()
    {
        $sql = 'select * from v_product';
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    function create($product)
    {
        $sql = 'insert into v_product(proName,price,status,img,cateName,supName,description) 
                values(?,?,?,?,?,?,?)';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $product->proName);
        $stmt->bindParam(2, $product->price);
        $stmt->bindParam(3, $product->status);
        $stmt->bindParam(4, $product->img);
        $stmt->bindParam(5, $product->cateName);
        $stmt->bindParam(6, $product->supName);
        $stmt->bindParam(7, $product->description);
        return $stmt->execute();
    }

    function update($id, $product)
    {
        $sql = 'update products set proName = ? ,price = ?,
                     status=?, img = ?,
                    cateId = ?, supId = ?, description = ? 
                    where proId = ?;';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $product->proName);
        $stmt->bindParam(2, $product->price);
        $stmt->bindParam(3, $product->status);
        $stmt->bindParam(4, $product->img);
        $stmt->bindParam(5, $product->cateName);
        $stmt->bindParam(6, $product->supName);
        $stmt->bindParam(7, $product->description);
        $stmt->bindParam(8, $id);
        return $stmt->execute();
    }

    function get($id)
    {
        $sql = 'select * from v_product where proId = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function delete($id)
    {
        $sql = 'delete from products where proId = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    function search($search){
        $sql="select * from v_product where proName like '$search%'";
        $stmt=$this->conn->query($sql);
        $stmt->fetchAll();
    }
}
<?php

namespace App\Model\product;

class Product
{
    public $id;
    public $proName;
    public $img;
    public $cateName;
    public $status;
    public $supName;
    public $price;
    public $description;

    function __construct($data)
    {
        //var_dump($data);
        $this->proName = $data['proName'];
        $this->price = $data['price'];
        $this->status = $data['status'];
        $this->img = $data['img'];
        $this->cateName = $data['cateName'];
        $this->supName = $data['supName'];
        $this->description = $data['description'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}


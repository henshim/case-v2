<?php

namespace App\Service;

use App\Model\product\ProductModel;
use App\Model\product\Product;

class ProductService implements ServiceInterface
{
    protected $productModel;

    function __construct()
    {
        $this->productModel = new ProductModel();
    }

    function getAll()
    {
        $data = $this->productModel->getAll();
        $products = [];

        foreach ($data as $key => $item) {
            $product = new Product($item);
            $product->setId($item['proId']);
            $products[] = $product;
        }
        return $products;
    }

    function get($id)
    {
        $data = $this->productModel->get($id);
        $product = new Product($data);
        $product->setId($data['proId']);
        return $product;
    }

    public function add()
    {
        $targetDir = 'load/';
        $targetFile = $targetDir . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'], $targetFile);
        $_POST['img'] = $targetFile;
        $product = new Product($_POST);
        $this->productModel->create($product);
        header('Location: index.php?page=product&action=list');
    }

    function update()
    {
        $errors = [];
        $fields = ['proName', 'price', 'status', 'cateName', 'supName', 'description'];

        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = "Can't leave it blank!!!";
            }
        }
        $id = $_GET['id'];
        if (empty($errors)) {
            $targetDir = 'load/';
            $targetFile = $targetDir . basename($_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], $targetFile);
            $_POST['img'] = $targetFile;
            var_dump($_POST);
            $product = new Product($_POST);
            $this->productModel->update($id, $product);
            header("location:index.php?page=product&action=list");
        } else {
            $product = $this->productModel->get($id);
            include 'src/View/product/update.php';
        }
    }

    public function delete($id)
    {
        //$id = $_POST['id'];
        $this->productModel->delete($id);
    }

    function search($search){
        $this->productModel->search($search);
    }
}
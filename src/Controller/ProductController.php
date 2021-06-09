<?php

namespace App\Controller;

use App\Service\ProductService;

class ProductController
{
    protected $productService;

    function __construct()
    {
        $this->productService = new ProductService();
    }

    function index()
    {
        $products = $this->productService->getAll();
        include 'src/View/product/list.php';
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/product/add.php';
        } else {
            $product = $this->productService->add();
        }
    }

    function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productService->get($id);
            include 'src/View/product/update.php';
        } else {
            $product=$this->productService->update();
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $product = $this->productService->delete($id);
        header('Location: index.php?page=product&action=list');
    }

    function search(){
        $search=$_GET['search'];
        $product=$this->productService->search($search);
        header("Location: index.php?page=product&action=list");
    }
}
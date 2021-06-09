<?php

use App\Controller\ProductController;

// use App\Controller\CustomerController;
// use App\Controller\CateController;

$productController = new ProductController();
// $customerController=new CustomerController();
// $cateController=new CateController();

$page = $_REQUEST['page'] ?? '';
$action = $_REQUEST['action'] ?? '';
switch ($page) {
    case 'product':
        switch ($action) {
            case 'list':
                $productController->index();
                break;
            case 'add':
                $productController->add();
                break;
            case 'edit':
                $productController->update();
                break;
            case 'del':
                $productController->delete();
                break;
            case 'search':
                $productController->search();
                break;
        }
        break;
}
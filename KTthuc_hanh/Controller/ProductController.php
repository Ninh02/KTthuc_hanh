<?php
namespace Controller;

use Model\ProductModel;

class ProductController
{
    public $productModel;
    public function __construct()
    {
        $this->productModel= new ProductModel();
    }

    function getAllProduct(){
       return $this->productModel->getAll();
    }
    function creat(){

        $id = $_REQUEST['id'];

        $Name = $_REQUEST['Name'];

        $Type = $_REQUEST['Type'];

        $Price = $_REQUEST['Price'];

        $Quantity = $_REQUEST['Quantity'];

        $Dates = $_REQUEST['Dates'];

        $Des= $_REQUEST['Des'];

        $this->productModel->add($id,$Name,$Type,$Price,$Quantity,$Dates,$Des);
        header('location:../index.php');

    }
    function delete(){

        $id = $_REQUEST['id'];
        $this->productModel->delete($id);

        header('location:../ index.php');

    }
//    function update(){
//        $UserID = $_REQUEST['UserID'];
//
//        $Email = $_REQUEST['Email'];
//
//        $Passwords = $_REQUEST['Passwords'];
//
//        $Address = $_REQUEST['Address'];
//
//        $GroupID = $_REQUEST['GroupID'];
//
//        $this->bookModel->update($UserID,$Email,$Passwords,$Address,$GroupID);
//        header('location:../index.php');
//    }

}
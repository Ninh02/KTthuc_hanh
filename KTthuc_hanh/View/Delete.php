<?php

include_once "../Model/Database.php";
include_once "../Model/Model.php";
include_once "../Model/ProductModel.php";
include_once "../Model/GroupModel.php";
include_once "../Controller/ProductController.php";
include_once "../Controller/GroupController.php";

use Controller\ProductController;


try {

    $productController=new ProductController();
    $productController->delete();


}catch (PDOException $PDOException) {

    echo 'Co loi xay ra';

    echo '<a href="../index.php">Quay lai</a>';

    die();

}



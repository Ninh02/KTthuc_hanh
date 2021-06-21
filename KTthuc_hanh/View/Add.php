<?php
include_once "../Model/Database.php";
include_once "../Model/Model.php";
include_once "../Model/ProductModel.php";
include_once "../Controller/GroupController.php";
include_once "../Controller/ProductController.php";


use Controller\GroupController;
use Controller\ProductController;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productController=new ProductController();
    $productController->creat();
}

//$groupController=new GroupController();
//$groups=$groupController->getAll();


?>

<form action="" method="post">

    <table>

        <tr>

            <td>id</td>

            <td><input type="text" name="id"></td>

        </tr>

        <tr>

            <td>Name</td>

            <td><input type="text" name="Name"></td>

        </tr>
        <tr>

            <td>Type</td>

            <td><input type="text" name="Type"></td>

        </tr>
        <tr>

            <td>Price</td>

            <td><input type="text" name="Price"></td>

        </tr>
        <tr>

            <td>Quantity</td>

            <td><input type="text" name="Quantity"></td>

        </tr>
        <tr>

            <td>Dates</td>

            <td><input type="date" name="Dates"></td>

        </tr>
        <tr>

            <td>Des</td>

            <td><input type="text" name="Des"></td>

        </tr>


        <tr>

            <td>

                <button type="submit">Add</button>

            </td>

        </tr>

    </table>

</form>



<?php


use Controller\ProductController;

include_once "Model/Database.php";
include_once "Model/Model.php";
include_once "Model/GroupModel.php";
include_once "Model/ProductModel.php";
include_once "Controller/ProductController.php";
include_once "Controller/GroupController.php";

$productController=new ProductController();

$data=$productController->getAllProduct();
?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <style>

        table {

            width: 800px;

            border-collapse: collapse;


        }
        th{
            background-color: green;
        }
        h3{
            text-align: left;
        }

    </style>

</head>

<body>
<h3>Danh sách mặt hàng</h3>

<div class="container">
<!---->
<!--    <div>-->
<!---->
<!--        <a href="View/list.php">Group manager</a>-->
<!---->
<!--    </div>-->



    <a href="View/Add.php">Add</a>

    <table border="1">


        <tr>
            <th>id</th>

            <th>Tên hàng</th>

            <th>Loại hàng</th>

            <th></th>

            <th></th>

        </tr>

        <?php foreach ($data as $key => $item): ?>

            <tr>


                <td><?php echo $item['id'] ?></td>

                <td><?php echo $item['Name'] ?></td>

                <td><?php echo $item['Type'] ?></td>


                <td><a href="View/exit.php?id=<?php echo $item['id']?>">Chỉnh sửa</a> </td>

                <td><a onclick="return confirm('Are you sure?')" href="View/delete.php?id=<?php echo $item['id'] ?>">xóa</a></td>


            </tr>

        <?php endforeach; ?>



    </table>

</div>



</body>

</html>


<?php
namespace Model;
include_once "Database.php";
include_once "Model.php";


class ProductModel extends Model
{

    function getAll(): array
    {

        $sql ="SELECT * FROM products";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }

    function add($id, $Name, $Type, $Price, $Quantity, $Dates, $Des)
    {

        $sql = 'INSERT INTO products(id,Name, Type, Price, Quantity, Dates, Des)

             VALUES (?, ?, ?, ?, ? )';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(1, $id);

        $stmt->bindParam(2, $Name);

        $stmt->bindParam(3, $Type);

        $stmt->bindParam(4, $Price);

        $stmt->bindParam(5, $Quantity);

        $stmt->bindParam(6, $Dates);

        $stmt->bindParam(5, $Des);


        $stmt->execute();


    }

    function delete($id)
    {
        $sql = 'DELETE FROM `products` WHERE id = ?';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(1, $id);

        $stmt->execute();

    }
}
//    function update($id,$Name,$Type,$,$GroupID){
//        $sql='UPDATE users SET UserID=?,Email=?,Passwords=?,Address=?,GroupID=? WHERE UserID=?';
//
//        $stmt = $this->pdo->prepare($sql);
//
//        $stmt->bindParam(1, $UserID);
//
//        $stmt->bindParam(2, $Email);
//
//        $stmt->bindParam(3, $Passwords);
//
//        $stmt->bindParam(4, $Address);
//
//        $stmt->bindParam(5, $GroupID);
//
//        $stmt->execute();
//    }

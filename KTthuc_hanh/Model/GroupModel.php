<?php
namespace Model;
include_once "Model.php";
use Model\Model;

class GroupModel extends Model
{

    public function getAll(): array
    {

        $sql = 'SELECT id, Name,Type FROM `products`';

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();

    }
}
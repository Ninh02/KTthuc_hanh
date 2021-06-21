<?php
namespace Controller;


use Model\GroupModel;

class GroupController
{
    public $groupModel;
    public function __construct()
    {
        $this->groupModel= new GroupModel();
    }
    function getAll(): array
    {
        return $this->groupModel->getAll();
    }
}
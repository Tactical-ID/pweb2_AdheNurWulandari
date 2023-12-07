<?php
include_once '../../models/User.php';

class UserController 
{
    private $model;

    public function __construct($db)
    {
        $this->model = new User($db);
    }
    public function getAllUser()
    {
        return $this->model->getAllUser();
    }
    public function createUser($nama,$username,$password,$level){
        return$this->model->createUser ($nama,$username,$password,$level);
    }
    public function getUserById($id)
    {
        return $this->model->getUserById($id);
    }
    public function updateUser($id,$nama,$username,$password,$level)
    {
        return $this->model->updateUser($id,$nama,$username,$password,$level);
    }
    public function deleteUser($id)
    {
        return $this->model->deleteUser($id);
    }
}
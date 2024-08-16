<?php
require_once 'models/User.php';

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function getUsers()
    {
        return $this->model->getAllUsers();
    }

    public function getUser($id)
    {
        return $this->model->getUserById($id);
    }

    public function addUser($data)
    {
        return $this->model->addUser($data['tenkh'], $data['username'], $data['matkhau'], $data['email'], $data['diachi'], $data['sodienthoai']);
    }

    public function updateUser($id, $data)
    {
        return $this->model->updateUser($id, $data['tenkh'], $data['username'], $data['matkhau'], $data['email'], $data['diachi'], $data['sodienthoai']);
    }

    public function deleteUser($id)
    {
        return $this->model->deleteUser($id);
    }
}

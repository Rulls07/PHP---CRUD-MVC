<?php

include_once('../model/Q_User.php');

class C_User
{
    private $q_user;
    function __construct()
    {
        $this->q_user = new Q_User();
    }
    public function getAllUser()
    {
        return $this->q_user->getAllUser();
    }
    public function getUserById($id)
    {
        if (!is_int($id)) {
            header("Location: ../vue/V_error.php");
        }
        return $this->q_user->getUserById($id);
    }
    public function createUser($name,$firstname,$age,$tel,$email,$pays,$comment,$metier,$url)
    {
        return $this->q_user->createUser($name,$firstname,$age,$tel,$email,$pays,$comment,$metier,$url);
    }

    public function deleteUserById($id)
    {
        return $this->q_user->deleteUserById($id);
    }
    public function updateUser($name,$firstname,$age,$tel,$email,$pays,$comment,$metier,$url)
    {
        return $this->q_user->updateUser($name,$firstname,$age,$tel,$email,$pays,$comment,$metier,$url);
    }
}
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
}
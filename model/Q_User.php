<?php
include_once('../model/Database.php');
include_once('../model/User.php');

class Q_User{

    private $dbh;
    function __construct()
    {
        $this->dbh = database::connect();
    }

    public function getAllUser()
    {
        $sth = $this->dbh->prepare("SELECT * FROM user ORDER BY id DESC");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_CLASS, 'User');
        return $result;
    }
    public function getUserById($id)
    {
        $sth = $this->dbh->prepare("SELECT * FROM user WHERE id = :id");
        $sth->execute(array(':id' => $id));
        $sth->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $sth->fetch();
        return $result;
    }









}
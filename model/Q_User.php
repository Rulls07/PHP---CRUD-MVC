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

    public function createUser($name,$firstname,$age,$tel,$email,$pays,$comment,$metier,$url){
        try {
            $sth = $this->dbh->prepare("INSERT INTO user (name,firstname,age,tel, email, pays,comment, metier,url) values(?, ?, ?, ? , ? , ? , ? , ?, ?)");
            $sth->bindParam(1, $name);
            $sth->bindParam(2, $firstname);
            $sth->bindParam(3, $age);
            $sth->bindParam(4, $tel);
            $sth->bindParam(5, $email);
            $sth->bindParam(6, $pays);
            $sth->bindParam(7, $comment);
            $sth->bindParam(8, $metier);
            $sth->bindParam(9, $url);
            $sth->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

    }
    public function deleteUserById($id){
        try {
            $sth = $this->dbh->prepare("DELETE FROM user WHERE id=$id");
            $sth->bindParam(1, $id);
            $sth->execute($id);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function updateUser($name,$firstname,$age,$tel,$email,$pays,$comment,$metier,$url){
        try {
            $sth = $this->dbh->prepare("UPDATE user SET name = ?,firstname = ?,age = ?,tel = ?, email = ?, pays = ?, comment = ?, metier = ?, url = ? WHERE id = ?");
            $sth->bindParam(1, $name);
            $sth->bindParam(2, $firstname);
            $sth->bindParam(3, $age);
            $sth->bindParam(4, $tel);
            $sth->bindParam(5, $email);
            $sth->bindParam(6, $pays);
            $sth->bindParam(7, $comment);
            $sth->bindParam(8, $metier);
            $sth->bindParam(9, $url);
            $sth->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

    }
}
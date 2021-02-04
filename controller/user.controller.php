<?php


class User extends Db{
    public function insertUsersStmt($firstname,$lastname,$email,$username,$password){
        $sql = 'INSERT INTO register (firstname,lastname,email,username,password) VALUES(?,?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname,$lastname,$email,$username,$password]);

    }
}
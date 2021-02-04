<?php


class Db {
    
    private $serverName = "localhost";
    private $dbUserName = "root";
    private $dbPassWord = "";
    private $dbName = "logins";

    protected function connect(){
        $conn = "mysql:host=" . $this->serverName . ";dbname=" . $this->dbName;
        $pdo = new PDO($conn, $this->dbUserName, $this->dbPassWord);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }



}
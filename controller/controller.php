<?php

require_once "model/models.php";


class Test extends Db {

    public function getUsers(){
        $sql = "SELECT * FROM register";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){

        echo $row["firstname"]. "<br>";

        }
    }


    public function getUsersStmt($firstname,$lastname){
        $sql = "SELECT * FROM register WHERE firstname = ? AND lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname,$lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name["firstname"]. "<br>"; 
            echo $name["lastname"]. "<br>"; 

               }

    }

   

}
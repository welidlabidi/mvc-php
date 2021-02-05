<?php

require "controller/controller.php";
require "controller/user.controller.php";

//validation of username and email
class UserValidator{

    private $data;
    private $errors = [];
    private static $fields = ["username" , "email" ];

    public function __construct($post_data){
        $this->data = $post_data;
    }

    public function validateForm(){
        foreach (self::$fields as $field) {
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->validateUserName();
        $this->validateEmail();
        return $this->errors;
    }


    private function validateUserName(){
        $val = trim($this->data['username']);

        if(empty($val)){
            $this->addError('username','username cannot be empty');
        }else{
            if(!preg_match('/^[a-zA-Z0-9`]{6,12}$/',$val)){
                $this->addError('username', 'username must be 6-12chars & alphanumeric');
            }
        }
    }

     private function validateEmail(){
        $val = trim($this->data['email']);

        if(empty($val)){
            $this->addError('email','email must be a valid email');
        }else{
            if(!preg_match('/^[a-zA-Z0-9`]{6,12}$/',$val)){
                $this->addError('email', 'email must be a valid email');
            }
        }
    } 




}









/*  $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $email = $_POST["email"];
 $username = $_POST["username"];
 $password = $_POST["password"]; */

   //new user in database
   /*  $object = new User();
    $object->insertUsersStmt($firstname,$lastname,$email,$username,$password);
 */

    /* if(!isset($_POST["submit"])){
        header('location: /login&register/');
    }else{
     echo '<h1 style="text-align:center">YOU SUCCESLY REGISTER IN THE DATABASE</h1>';
    } */
    
    /* $object = new Test();
    $object->getUsersStmt("welid","labidi"); */
 ?>
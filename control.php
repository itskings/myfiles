<?php

class Validation {
    public $fullnameErr = "";
    public $usernameErr = "";
    public $emailErr = "";
    public $phoneErr = "";
    public $passErr = "";
    public $fileErr = "";

    public $fullname = "";
    public $username = "";
    public $email = "";
    public $phone = "";
    public $pass = "";
    public $file = "";


    public function getInput(){

        if(empty($_POST["fullname"])){
            $this->fullnameErr = "Fill in this Space"; 
    }
    else {
        $this->fullname = $_POST["fullname"];
    }
//
    if(empty($_POST["username"])){
    $this->usernameErr = "Fill in this Space"; 
}
    else {
    $this->username = $_POST["username"];
}
//
    if(empty($_POST["email"])){
        $this->emailErr = "Fill in this Space"; 
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $this->emailErr = "Email format is invalid"; 
}
else {
    $this->email = $_POST["email"];
}   
//    
    if(empty($_POST["phone"])){
    $this->phoneErr = "Fill in this Space"; 
    } 
   elseif (!preg_match ("/^[0-9]*$/", $_POST["phone"]) ){  
    $this->phoneErr = "Only numeric value is allowed."; } 

    else {
    $this->phone = $_POST["phone"];
} 
//
if(empty($_POST["pass"])){
    $this->passErr = "Fill in this Space"; 
}
else {
$this->pass = $_POST["pass"];  
} 
//
if(empty($_POST["file"])){
    $this->fileErr = "Select a Picture"; 
}
else {
$this->file = $_POST["file"];  
}   
        
    }
}



?>
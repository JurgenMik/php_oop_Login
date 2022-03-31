<?php

class SignupContrl extends Signup{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;


    public function __construct($uid, $pwd, $pwdRepeat, $email){

        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;

    }


    public function signupUser(){

        if($this->emptyInput() == false){
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();

        }

         if($this->invalidUid() == false){
            // echo "Invalid Username";
            header("location: ../index.php?error=invalidUid");
            exit();

        }

         if($this->invalidEmail() == false){
            // echo "Invalid Email!";
            header("location: ../index.php?error=email");
            exit();

        }

        if($this->pwdMatch() == false){
            // echo "Invalid Email!";
            header("location: ../index.php?error=pwdDontMatch");
            exit();

        }

        if($this->checkInput() == false){
            // echo "Username or Email already taken";
            header("location: ../index.php?error=user&pwdalreadyexist");
            exit();

        }

        $this ->setUser($this->uid, $this->pwd, $this->email);


    }

    // error handling

    private function emptyInput(){

       $result;
       if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat)  ||  empty($this->email)){

           $result = false;

       } else{

            $result = true;

       }

       return $result;


    }

    private function invalidUid(){

    $result;
    if (!preg_match("/^[a-zA-z0-9]*$/", $this->uid)){

        $result = false;

    } else {

        $result = true;
    }

    return $result;

    }

    private function invalidEmail(){

    // built in email validation

    $result;
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){

        $result = false;

    } else {

        $result = true;
    }

    return $result;

    }

    private function pwdMatch(){

    $result;
    if ($this->pwd !== $this->pwdRepeat){

        $result = false;

    } else {

        $result = true;
    }

    return $result;

    }

    private function checkInput(){

    $result;
    if (!$this->checkUser($this->uid, $this->email)){

        $result = false;

    } else {

        $result = true;
    }

    return $result;

    }

}
<?php

class Login extends Model{

public $session;

    public function __construct(){
        
    }

    public function signin($email,$password){

        if(empty($email) || empty($password))
        {
        echo "Please Fill both the Fields";
        }

        else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
        echo "Enter valid Mail Format";
        }

        else {
        try {

        $results = $this->getdetails($email);
        $_SESSION["id"] = $results['id'];
        $checkpass = $results['pass_word'];
        $password1 = md5($password);

        if($checkpass == $password1){
            $_SESSION["username"] = $results['username'];
            echo "Success";
        }
        else {
            throw new Exception("Username or Password Incorrect" );   
        }

        }catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();           
            }
        }

    }
}
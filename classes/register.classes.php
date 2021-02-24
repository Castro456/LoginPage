<?php

class Register extends Model{

    public function signup($firstname, $email, $username, $password, $dateofbirth, $age){
        $lengthpass = strlen($password);    
        $checkem = $this->checkemail($email);   
            
        if(empty($firstname) || empty( $email) || empty($username) || empty($password) || empty($dateofbirth) || empty($age))
        {
            echo "Please fill all the Details";  
        }

        else if(!preg_match('/^[a-zA-Z\s]*$/',$firstname))
        {
        echo "Name only be characters";  
        }

        else if($lengthpass <= 4)
        {
        echo "Password mustbe atleast 4 characters";  
        }

        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
        echo "Enter a valid email address";  
        }

        else if($checkem == $email)
        {
        echo "Entred email already exists";
        }

        else if($age <= 0)
        {
        echo "Age must be above 1";
        }

        else {
            $password=md5($password);
            $this->setuser($firstname, $email, $username, $password, $dateofbirth, $age);
            echo "Registered Successfully can Login Now"; 
        }
    }
}

<?php

function sign()
{
$first = $_POST['firstname'];
$length_pass = strlen($_POST['psr']);
$length_user = strlen($_POST['usr']);
$email = $_POST["email"];
$agecheck = $_POST["age"];
require_once('signupconfig1.php');


if(empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['usr']) || empty($_POST['psr']) || empty($_POST['dob']) || empty($_POST['age']))
{
      echo "Please fill all the Details";  
}

else if(!preg_match('/^[a-zA-Z\s]*$/',$first))
{
  echo "Name only be characters";  
}

else if($length_pass <= 4)
{
  echo "Password mustbe atleast 4 characters";  
}

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
  echo "Enter a valid email address";  
}

else if($checkemail == $email)
{
   echo "Entred email already exists";
}

else if($agecheck <= 0)
{
   echo "Age must be above 1";
}

else 
{
  
  require_once('signupconfig.php');
  $firstname = $_POST['firstname'];
  $email  = $_POST['email'];
  $username= $_POST['usr'];
  $pass_word=$_POST['psr'];
  $pass_word=md5($pass_word);
  $dob       = $_POST['dob'];
  $age       = $_POST['age'];

  $sql="INSERT into users_table(firstname, email, username, pass_word, dob, age) VALUES(?,?,?,?,?,?)";
  $stmtinsert = $db->prepare($sql);
  $result=$stmtinsert->execute([$firstname, $email, $username, $pass_word, $dob, $age]);
  echo "Registered Successfully";

}

}sign();
  
?>
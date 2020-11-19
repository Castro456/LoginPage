<?php

function sign()
{
$first = $_POST['firstname'];
$length_pass = strlen($_POST['psr']);
$length_user = strlen($_POST['usr']);
$email = $_POST["email"];
require_once('signupconfig1.php');

if(empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['usr']) || empty($_POST['psr']) || empty($_POST['dob']) || empty($_POST['age']))
{
      header("location:register.php");  
}

else if(!preg_match('/^[a-zA-Z\s]*$/',$first))
{
  header("location:register.php");
}

else if($length_pass <= 6)
{
  header("location:register.php");
}

else if($length_user >= 6)
{
  header("location:register.php");
}

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    header("location:register.php");
}

else if($checkemail == $email)
{
    header("location:signuperror.php");
}
  
else if(isset($_POST['submit']))
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
  header("location:login.php");

}

}sign();
  
?>
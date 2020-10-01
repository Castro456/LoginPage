<?php
function sign()
{
    
    if(isset($_POST['submit']))
{
    require_once('signupconfig.php');
    $firstname = $_POST['firstname'];
    $email  = $_POST['email'];
    $username= $_POST['usr'];
    $pass_word=$_POST['psr'];
    $pass_word=md5($pass_word);
    $dob       = $_POST['dob'];
    $age       = $_POST['age'];

    $length_pass = strlen($_POST['psr']);
    $first =  $_POST['firstname'];
    

    if(!preg_match('/^[a-zA-Z\s]*$/',$first))
      {
        echo '<a href="register.php">Back</a>';
        echo '<br>';
        echo '<h1>Enter your Name correctly</h1>';
        echo '<br>';
       }


    if($length_pass<6)
    {
      echo '<a href="register.php">Back</a>';
      echo '<br>';
      echo '<h2>Password is too short, should be 6-15 characters</h2>';

    }
    else if($length_pass>14)
    {        
      echo '<h2>Password is too large, should be 6-15 characters</h2>';

    }   
    else
    {

    $sql="INSERT into simple_table(firstname, email, username, pass_word, dob, age) VALUES(?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result=$stmtinsert->execute([$firstname, $email, $username, $pass_word, $dob, $age]);
    if($result)
    {
        
        header("location:index.php");
    }
    else
    {
        echo "Error while Inserting";
    }
    }

} 

}sign();


  
?>
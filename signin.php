<?php
function sign()
{
    require_once('signinconfig.php');
    if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $username= $_POST['usr'];
    $pass_word=$_POST['psr'];
    $pass_word=md5($pass_word);
    $dob       = $_POST['dob'];
    $age       = $_POST['age'];

    $length_pass = strlen($_POST['psr']);
    $first =  $_POST['firstname'];
    $last  = $_POST['lastname'];

    if(!preg_match('/^[a-zA-Z\s]*$/',$first,$last))
      {
         echo '<h1>'."Enter your Name correctly".'</h1>';
         echo '<br>';
         echo '<a href="index.html">Back</a>';
       }


    if($length_pass<6)
    {
      echo '<h2>'."Password is too short, should be 6-15 characters".'</h2>';

    }
    else if($length_pass>14)
    {        
      echo '<h2>'."Password is too large, should be 6-15 characters".'</h2>';

    }   
    else
    {

    $sql="INSERT into simple_table(firstname, lastname, username, pass_word, dob, age) VALUES(?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result=$stmtinsert->execute([$firstname, $lastname, $username, $pass_word, $dob, $age]);
    if($result)
    {
        
        header("location:index.html");
    }
    else
    {
        echo "Error while Inserting";
    }
    }

} 

}sign();


  
?>
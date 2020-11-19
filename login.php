<?php
session_start();

if(isset($_SESSION["em"]))  
{  
    header("location:welcome.php");  
}

else if(!isset($_SESSION["em"]))  
{  
    header("location:index.php");  
}
 
function check()
{  

if(empty($_POST['em']) || empty($_POST['psr']))
{
    header("location:index.php");  
}

else if(isset($_POST["submit"]))
{
require_once('loginconfig.php');
$email= $_POST['em'];
$pass_word= $_POST['psr'];
$pass_word= md5($pass_word);

$query="SELECT id,email,username,pass_word FROM `users_table` where email ='$email' ";       
$query_run=mysqli_query($con,$query);
$query_execute=mysqli_fetch_assoc($query_run);  
$checkpass= @$query_execute['pass_word'];
$checkuser=@$query_execute['username'];
$checkid=@$query_execute['id'];

try {
    if($checkpass == $pass_word){
        $_SESSION["em"] = $email;
        $_SESSION["username"] = $checkuser;
        $_SESSION["id"] = $checkid;
        header("location:welcome.php");
    }
    else {
        throw new Exception(header("location:loginerror.php"));   
    }
}catch(Exception $e) {        
    $e->getMessage();    
}
}
 
}check();

?>

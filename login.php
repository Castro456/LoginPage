<?php
session_start();
 
function check()
{  

if(empty($_POST['em']) || empty($_POST['psr']))
{
   echo "Please Fill both the Fields";
}

else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST['em']))
{
  echo "Enter valid Mail Format";
}

else if(isset($_POST["em"]) && isset($_POST["psr"]))
{

$email= $_POST['em'];
$pass_word= $_POST['psr'];
$pass_word= md5($pass_word);

$conn =mysqli_connect('localhost','root','giveaccess','mydata');                                            
$query="SELECT id,email,username,pass_word FROM `users_table` where email ='$email' ";       
$query_run=mysqli_query($conn,$query);
$query_execute=mysqli_fetch_assoc($query_run);  
$checkpass= @$query_execute['pass_word'];
$checkuser=@$query_execute['username'];
$checkid=@$query_execute['id'];

try {
    if($checkpass == $pass_word){
        $_SESSION["em"] = $email;
        $_SESSION["username"] = $checkuser;
        $_SESSION["id"] = $checkid;
        echo "Success";
    }
    else {
        throw new Exception("Username or Password Incorrect" );   
    }
}catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();           
}

}
 
}check();

?>

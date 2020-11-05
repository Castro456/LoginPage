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
    //    $emailname = $_POST["em"];
    //    if (!filter_var($emailname, FILTER_VALIDATE_EMAIL)) 
    //    {
    //        header("location:welcome.html");
    //    }
       else if(isset($_POST["submit"]))
        {
        require_once('loginconfig.php');
        $email= $_POST['em'];
        $pass_word= $_POST['psr'];
        $pass_word= md5($pass_word);

        $query="SELECT email, pass_word FROM `simple_table` where email ='$email' ";          //AND pass_word = '$pass_word'
        $query_run=mysqli_query($con,$query);
        $query_execute=mysqli_fetch_assoc($query_run);  
        $checkpass= @$query_execute['pass_word'];

        try {
            if($checkpass == $pass_word)
            {
                $_SESSION["em"] = $email;
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

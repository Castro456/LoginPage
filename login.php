<?php
session_start();
function sec()
{
    if(isset($_SESSION["em"]))  
        {  
            header("location:welcome.php");  
        }
    elseif(!isset($_SESSION["em"]))
       {
            header("location:index.php");  
       }

}  sec();
 
function check()
    { 
      
  


        if(isset($_POST["submit"]))
        {
        require_once('loginconfig.php');
        $email= $_POST['em'];
        $pass_word= $_POST['psr'];
        $pass_word= md5($pass_word);
            
        $query="SELECT email, pass_word FROM `simple_table` where email ='$email' ";          //AND pass_word = '$pass_word'
        $query_run=mysqli_query($con,$query);
        $query_execute=mysqli_fetch_assoc($query_run);
    
        $checkpass= @$query_execute['pass_word'];
        
        try    
        {
        // if(empty($email) || empty($pass_word))
        // {
        
        //   echo "Fill the Username and Password";
        //   //exit();
        // }
        if($checkpass == $pass_word)       // password_verify
        {
          $_SESSION['em'] = $email; 
          header("location:welcome.php");
        }
        else
        {
          throw new Exception("Username or Password is Incorrect");
        }
                
             
        }
           
        //catch exception
        catch(Exception $e) {
                
        echo '<strong>'."!Error:  ".'</strong>' .$e->getMessage();
        echo '<a href="index.php">Refresh</a>';
               
        }
        
        
    }
  
   
}check();

?>

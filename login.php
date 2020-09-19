<?php
session_start();
function sec()
{
    if(isset($_SESSION["usr"]))  
        {  
            header("location:welcome.php");  
        }
    elseif(!isset($_SESSION["usr"]))
       {
            header("location:index.php");  
       }

}  
 
function check()
    { 
        if(isset($_POST["submit"]))
        {
        require_once('loginconfig.php');
        //require('index.html');
        $username= $_POST['usr'];
        $pass_word= $_POST['psr'];
        $pass_word= md5($pass_word);
            
        $query="SELECT username, pass_word FROM `simple_table` where username ='$username' ";          //AND pass_word = '$pass_word'
        $query_run=mysqli_query($con,$query);
        $query_execute=mysqli_fetch_assoc($query_run);
    
        $checkpass= @$query_execute['pass_word'];
        
        try    
        {
        if(empty($username) || empty($pass_word))
        {
        
          echo "Fill the Username and Password";
          //exit();
        }
        else if($checkpass == $pass_word)       // password_verify
        {
          $_SESSION['usr'] = $username; 
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
        echo '<a href="index.html">Refresh</a>';
               
        }
        
        
    }//check(); 
  
   
}
    
    //$num = mysqli_num_rows($query_run);
 //login();

   
  function up()
  {
    sec();
    check();

  } up();
 

  ?>
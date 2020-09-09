<?php  
 //entry.php  
 session_start();  
  if(!isset($_SESSION["usr"]))  
 {  
      header("location:index.html");  
 }  
 ?> 

<?php  
     
     echo '<a href="index.html">Home</a>';
     echo '<h1>Welcome User: '.$_SESSION["usr"].'</h1>';  
     echo '<button><a href="logout.php">Logout</a></button>';  
?>  
<?php  
 //entry.php  
 session_start();  
  if(!isset($_SESSION["em"]))  
 {  
      header("location:index.php");  
 }  
 ?> 

     <!-- // require_once('navigationbar.html');
     
     // echo '<h1>Welcome User: '.$_SESSION["usr"].'</h1>';  
     // echo '<button><a href="logout.php">Logout</a></button>';   -->
  
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome User</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #d1dbda">
        <a class="navbar-brand" href="home.html">Home</a>
      <!-- <form class="form-inline my-2 my-lg-0"> -->
      <a class="btn btn-danger my-2 my-sm-0 rounded-pill" href="logout.php" role="button">Logout</a>
                <!-- </form>   -->

    
    

</nav> 

     
     <h1 class="text-correct">WELCOME BACK:<?php echo $_SESSION["em"] ?></h1>
     <!-- <a class="btn btn-danger" href="logout.php" role="button">Logout</a> -->
     
     <!-- <button type="button" class="btn btn-danger"></button> -->
     <!-- <a href ="logout.php">Logout</a> -->
     <!--  class="btn btn-outline-primary"  <a href="logout.php"> </a> -->

</body>
</html>
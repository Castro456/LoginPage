<?php 
session_start();
require_once('loginconfig.php');

function sec()
{ 

if(isset($_SESSION["em"]))  
{  
    header("location:welcome.php");  
}

} sec();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/global.css">
<title>Log In</title>
</head>

<body>

<nav class="navbar navbar-light" style="background-color: #d1dbda">
<a class="navbar-brand" href="home.html">Home</a>
<form class="form-inline">
<a class="btn btn-warning my-2 my-sm-0 rounded-pill" href="register.php" role="button">Sign up</a>
</form>
</nav>
    
<div class="container ">
<div class="row justify-content-center">  
<div class="col-md-4">
        
<form class="form-container needs-validation" action="login.php" method="post" name="form1"> 

<div class="form-group">            
<h1 class="text-dark">Login</h1>
</div> 

<div class="form-group">
<label class="text-dark">Email</label>
<input type="text" class="form-control" name="em">
</div>

<div class="form-group">
<label class="text-dark">Password</label>
<input type="password" class="form-control" name="psr">
</div> 
<Input type="submit" class="btn btn-success btn-block rounded-pill" name="submit" onclick="ValidateEmail(document.form1.em)">
</form>

</div>
</div>
</div> 
</body>

<script src="js/script.js">
</script>

</html>

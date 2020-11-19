<?php  
 
session_start();  
if(isset($_SESSION["em"]))  
{  
    header("location:welcome.php");  
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/global.css">
<title>SignUp</title>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #d1dbda">
<a class="navbar-brand" href="home.html">Home</a>
<form class="form-inline">
  <a class="navbar-brand mr-sm-2" href="index.php">Login</a>
</form>
</nav>

<div class="container ">
<div class="row justify-content-center"> 
<form class="form-container1" name="form2" action="signup.php" method="post">

<div class="form-row">
<h1 class="text-dark">SignUp</h1>
</div> 

<div class="form-row">

<div class="col-md-6 mb-3">
<label class="text-dark">Name</label>
<input type="text" class="form-control" name="firstname" placeholder="Enter your full name" >
</div>

<div class="col-md-6 mb-3">
<label class="text-dark">Email</label>
<input type="text" class="form-control" name="email" placeholder="Enter your email address" >
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-3">
<label class="text-dark">UserName</label>
<input type="text" class="form-control" name="usr" placeholder="Provide a Username maximum of 6 characters">
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">Password</label>
<input type="password" class="form-control" name="psr" placeholder="Minimum of 6 characters">
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">DateofBirth</label>
<input type="date" class="form-control" name="dob" id="date-input" onchange="calAge()">
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">Age</label>
<input type="number" class="form-control" name="age" min="1" oninput="this.value = Math.abs(this.value)">
</div>
</div>

<div class="col-md-12 mb-3">
<button class="btn btn-success btn-block rounded-pill" name="submit" type="submit" onclick="ValidateName(document.form2.firstname); ValidateEmail(document.form2.email)">Create</button>
</div>

</form>
</div>
</div>
</body>
<script src="js/script1.js">
</script>
</html>
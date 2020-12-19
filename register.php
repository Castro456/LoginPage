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
<link rel="stylesheet" type="text/css" href="css/pikaday.css">
<title>SignUp</title>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #d1dbda">
<a class="navbar-brand" href="home.html">Home</a>
<form class="form-inline" method="post">
  <a class="navbar-brand mr-sm-2" href="index.php">Login</a>
</form>
</nav>

<div class="container ">
<div class="row justify-content-center"> 
<form class="form-container1">

<div class="form-row">
<h1 class="text-dark">SignUp</h1>
</div> 

<div class="form-row">

<div class="col-md-6 mb-3">
<label class="text-dark">Name</label>
<input type="text" class="form-control firstname"  placeholder="Enter your full name" >
</div>

<div class="col-md-6 mb-3">
<label class="text-dark">Email</label>
<input type="text" class="form-control email"  placeholder="Enter your email address" >
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-3">
<label class="text-dark">UserName</label>
<input type="text" class="form-control usr"  placeholder="Provide a Username maximum of 6 characters">
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">Password</label>
<input type="password" class="form-control psr"  placeholder="Minimum of 6 characters">
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">DateofBirth</label>
<input type="text" class="form-control datepicker dob"  readonly placeholder="Provide your DOB">
<!-- id="date-input" onchange="calAge()" -->
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">Age</label>
<!-- <input type="number" class="form-control" id="age" min="1" oninput="this.value = Math.abs(this.value)"> -->
<input type="text" class="form-control age"  placeholder="Age must be atleast 1" readonly>
</div>
</div>

<div class="col-md-12 mb-3">
<button  class="btn btn-success btn-block rounded-pill" >Create</button>
</div>

<div id="display">
</div>
<!-- class="btn btn-success btn-block rounded-pill"  -->
</form>
</div>
</div>
<script src="./js/pikaday.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/agecal.js"></script>

<script type="text/javascript">
 $(document).ready(function(){ 
  $(document).on("click","button", function(){

    var firstname = $(".firstname").val();
    var email = $(".email").val();
    var usr = $(".usr").val();
    var psr = $(".psr").val();
    var dob = $(".dob").val();
    var age = $(".age").val();
    console.log(firstname);
    $.ajax({
    url:"signup.php",
    type:"POST",
    data:{
      firstname: firstname,
      email: email,
      usr: usr,
      psr: psr,
      dob: dob,
      age: age
    },
    success:function(result){
           alert(result);
    },

  });
  });
 });
</script>
</body>
</html>
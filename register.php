<?php  
 //entry.php  
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
          <!-- <a class="btn btn-warning my-2 my-sm-0" href="register.php" role="button">Sign up</a> -->
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
            <input type="text" class="form-control" name="firstname" placeholder="Mark" >
            <small id="passwordHelpInline" class="text-muted">
            Must be only Letters.
            </small>
          </div>
          <div class="col-md-6 mb-3">
            <label class="text-dark">Email</label>
            <input type="text" class="form-control" name="email"  >
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="text-dark">UserName</label>
            <input type="text" class="form-control" name="usr" >
          </div>
          <div class="col-md-3 mb-3">
            <label class="text-dark">Password</label>
            <input type="password" class="form-control" name="psr" >
            <small id="passwordHelpInline" class="text-muted">
            Must be 8-20 characters long.
            </small>
          </div>
          <div class="col-md-3 mb-3">
            <label class="text-dark">DateofBirth</label>
            <input type="date" class="form-control" name="dob" >
          </div>

          <div class="col-md-3 mb-3">
            <label class="text-dark">Age</label>
            <input type="number" class="form-control" min="1" oninput="this.value = Math.abs(this.value)" name="age" placeholder="1" >
            <small id="passwordHelpInline" class="text-muted">
            Must be atleast 1.
            </small>
          </div>


        </div>
        <div class="col-md-12 mb-3">
        <button class="btn btn-success btn-block rounded-pill" name="submit" type="submit" onclick="ValidateEmail(document.form2.email)">Create</button>
      </div>
      </form>
      </div>
    </div>
</body>
<script>
function ValidateEmail(inputText)
{
var x = document.forms["form2"]["email"].value;
var y = document.forms["form2"]["psr"].value;
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if (x == "" || x == null) 
{
    alert("Email must be filled out");
    return false;
}
if (y == "" || y == null) 
{
    alert("Password must be filled out");
    return false;
}
if(! inputText.value.match(mailformat))
{
alert("InValid email address!");
document.form2.email.focus();
return true;
}


}

</script>
</html>
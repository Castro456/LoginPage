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
            <input type="text" class="form-control" name="firstname" placeholder="Oggy" >
            <small id="passwordHelpInline" class="small">
            Must be only Letters.
            </small>
          </div>
          <div class="col-md-6 mb-3">
            <label class="text-dark">Email</label>
            <input type="text" class="form-control" name="email" placeholder="samplemail@example.com" >
            <small id="passwordHelpInline" class="small">
            Provide a valid Email address.
            </small>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="text-dark">UserName</label>
            <input type="text" class="form-control" name="usr" placeholder="Oggy22">
            <small id="passwordHelpInline" class="small">
            Provide a Username.
            </small>
          </div>
          <div class="col-md-3 mb-3">
            <label class="text-dark">Password</label>
            <input type="password" class="form-control" name="psr" >
            <small id="passwordHelpInline" class="small">
            Greater than 6 characters long.
            </small>
          </div>
          <div class="col-md-3 mb-3">
            <label class="text-dark">DateofBirth</label>
            <input type="date" class="form-control" name="dob" >
            <small id="passwordHelpInline" class="small">
            Provide a correct DOB
            </small>
          </div>

          <div class="col-md-3 mb-3">
            <label class="text-dark">Age</label>
            <input type="number" class="form-control" min="1" oninput="this.value = Math.abs(this.value)" name="age" placeholder="1" >
            <small id="passwordHelpInline" class="small">
            Must be atleast 1.
            </small>
          </div>


        </div>
        <div class="col-md-12 mb-3">
        <button class="btn btn-success btn-block rounded-pill" name="submit" type="submit" onclick="ValidateName(document.form2.firstname); ValidateEmail(document.form2.email)">Create</button>
      </div>
      </form>
      </div>
    </div>
</body>
<script>
function ValidateName(input) 
{
  var name = document.forms["form2"]["firstname"].value;
  var nameformat= /^[A-Za-z]*$/;
  if (name == "" || name == null) 
{
    alert("Name must be filled out!");
    return false;
}

else if(! input.value.match(nameformat))
{
   alert("Invalid Name!"); 
   return true;
}
}
function ValidateEmail(inputText)
{

var email = document.forms["form2"]["email"].value;
var username = document.forms["form2"]["usr"].value;
var password = document.forms["form2"]["psr"].value;
var dateofbirth = document.forms["form2"]["dob"].value;
var age = document.forms["form2"]["age"].value;

var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

// if(email == null || name == null || username == null || password == null || dateofbirth == null || age == null)
// {
//   alert("All the fields must be filled out!");
// }

if (email == "" || email == null) 
{
    alert("Email must be filled out!");
    return false;
}

else if(! inputText.value.match(mailformat))
{
   alert("Invalid email address!"); //document.form1.em.focus();
   return true;
}

if (username == "" || username == null) 
{
    alert("UserName must be filled out!");
    return false;
}

if (password == "" || password == null) 
{
    alert("Password must be filled out!");
    return false;
}

if (dateofbirth == "" || dateofbirth == null) 
{
    alert("DOB must be filled out!");
    return false;
}

if (age == "" || age == null) 
{
    alert("Age must be filled out!");
    return false;
}


}

</script>
</html>
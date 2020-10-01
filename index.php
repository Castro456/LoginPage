<?php
session_start();
if(isset($_POST['submit']))
{
    
}
function sec()
{
    
  
    if(isset($_SESSION["em"]))  
        {  
            header("location:login.php");  
        }
        // if(!isset($_SESSION["usr"]))  
        // {  
        //     header("location:index.php");  
        // }
}  sec();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    
    <title>Login In</title>
    <header></header>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #d1dbda">
        <a class="navbar-brand" href="home.html">Home</a>
        <form class="form-inline">
            <!-- <a class="navbar-brand mr-sm-2" href="index.php">Login</a> -->
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
<script>
function ValidateEmail(inputText)
{
var x = document.forms["form1"]["em"].value;
var y = document.forms["form1"]["psr"].value;
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
document.form1.em.focus();
return true;
}


}

</script>
</html>

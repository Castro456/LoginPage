<?php  
 //entry.php  
 session_start();  
  if(isset($_SESSION["usr"]))  
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
    <form class="form-container1"  action="signup.php" method="post">

      <div class="form-row">
                  
        <h1 class="text-dark">SignUp</h1>
            </div> 

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="text-dark">First name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Mark" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="text-dark">Last name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Otto" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="text-dark">UserName</label>
            <input type="text" class="form-control" name="usr" required>
          </div>
          <div class="col-md-3 mb-3">
            <label class="text-dark">Password</label>
            <input type="password" class="form-control" name="psr" required>
          </div>
          <div class="col-md-3 mb-3">
            <label class="text-dark">DateofBirth</label>
            <input type="date" class="form-control" name="dob" required>
          </div>

          <div class="col-md-3 mb-3">
            <label class="text-dark">Age</label>
            <input type="number" class="form-control" min="1" oninput="this.value = Math.abs(this.value)" name="age" placeholder="1" required>
          </div>


        </div>
        <div class="col-md-12 mb-3">
        <button class="btn btn-success btn-block" name="submit" type="submit">Create</button>
      </div>
      </form>
      </div>
    </div>
</body>
</html>
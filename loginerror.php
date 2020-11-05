<?php

session_start();
if(!isset($_SESSION["em"]))  
{  
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #d1dbda">
        <a class="navbar-brand " href="index.php">Back</a>
</nav>
<h1 class="text-correct">Invalid Username or Password</h1>
</body>

<?php
}
else
{
    header("location:welcome.php");  
}


?>
</html>
<?php  
 //entry.php  
 session_start();  
  if(!isset($_SESSION["em"]))  
 {  
      header("location:index.php");  
 }  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #d1dbda">
    <a class="navbar-brand" href="welcome.php">Back</a>

</nav> 
<div class="container ">
<div class="row justify-content-center">


<form name="addform" class="add-container" action="addconfig.php" method="post">
    

  <div class="form-group">
  <textarea class="form-controladd" aria-label="With textarea" name="add" ></textarea>
  </div>
  
  <!-- <div class="form-group">
  <textarea class="form-controladd" aria-label="With textarea" name="add1" ></textarea>
  </div> -->
  
  <div class="align-self-end ml-auto">
   <button type="submit" class="addbtn " name="addbtn" onclick="validatetextbox(document.addform.add)">Add</button>
   <!-- <div class="alert alert-success">
    <p>Added!!</p>
    </div>  -->
</div>
</div>
</div>

</form>
</body>
<script>
function validatetextbox(input)
{
    var addtext = document.forms["addform"]["add"].value;
    if(addtext == null || addtext == "")
    {
        alert("Enter a Task to Add!");
    }
}
</script>
</html>
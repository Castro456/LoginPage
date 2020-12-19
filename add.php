<?php  
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

<div class="alert-success" id="display">
</div> 

<div class="container ">
<div class="row justify-content-center">
<form name="addform" class="add-container" action="addconfig.php" id="addform" method="post">

 <div class="form-group">
 <textarea class="form-controladd" aria-label="With textarea" name="add1" id="text"></textarea>
 </div>
  
 <div class="align-self-end ml-auto">
<button type="submit" class="addbtn " name="addbtn" >Add</button>

</div>
</div>
</div>

</form>
<script>
/*
List all tasks in table using JS (ajax) instead of php get
Put individual buttons done and delete for each task
If done is clicked respective task should be marked as done
If delete is clicked respective task should be marked as delete
All the above activities should be done by ajaz only
*/
        document.getElementById("addform").addEventListener("submit",addtext);
        function addtext(e){
        e.preventDefault();
        var text = document.getElementById("text").value;
        var pro="add1="+text;
        var xhr = new XMLHttpRequest();
        xhr.open("POST","addconfig.php",true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function(){
            document.getElementById("text").value = '';
            alert(this.responseText);
           }
        xhr.send(pro);
        }
</script>
</body>
</html>
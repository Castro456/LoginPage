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
<title>View</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #d1dbda">
  <a class="navbar-brand" href="welcome.php">Back</a>
</nav> 

<div class="container ">
<table class="table table-hover table-light">

<thead class="thead-dark">
<tr>
<th colspan="8" ><h1>Tasks</h1></th>
</tr>
<tr>
  <th scope="col">#</th>
  <th scope="col">Task</th>
  <th scope="col">Date</th>
  <th scope="col">User</th>
  <th scope="col">Status</th>
  <th scope="col">Delete</th>
  <th scope="col">Done</th>
</tr>
</thead>

<tbody id="table">

</tbody>

</table> 
</div>
<script src="./js/jquery.js"></script>
<script>
  $(document).ready(function(){
    $.ajax({
    url:"view1.php",
    type:"POST",
    success:function(result){
          $("#table").html(result);
    }
  });

  $(document).on("click",".viewbtn", function(){
    $.ajax({
    url:"delete.php",
    type:"POST",
    data:{
      delete: $(this).val(),
    },
    success:function(result){
          alert(result);
          window.location.reload();
    }
  });
  });

  $(document).on("click",".donebtn", function(){
    $.ajax({
    url:"done.php",
    type:"POST",
    data:{
      done: $(this).val()
    },
    success:function(result){
          alert(result);
          window.location.reload();
    }
  });
  });

  });
</script>
</body>
</html>
<?php

session_start();  
require 'loginconfig.php';

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
<form action="delete.php" name="viewform" method="post">
<table class="table table-hover table-light">
<thead class="thead-dark">
<tr>
<th colspan="6" ><h1>Tasks</h1></th>
</tr>
<tr>
  <th scope="col"><input type="checkbox" onClick="toggle(this)"    /> Select</th>
  <th scope="col">#</th>
  <th scope="col">Task</th>
  <th scope="col">Date</th>
  <th scope="col">User</th>
  <th scope="col">Status</th>
</tr>
</thead>

<?php
if($query_run=mysqli_query($con,$queryforview))
{
  while($rows=mysqli_fetch_assoc($query_run))  
{ ?>
 <tr>
    <td class="table-secondary"><input type="checkbox" name="keytodelete[]"   value="<?php echo $rows['id']?>" ></td>
    <td class="table-primary"><?php echo $rows['id'] ?></td>   
    <td class="table-warning"><?php echo $rows['task'] ?></td>
    <td class="table-info"><?php echo $rows['time_kept'] ?></td>
    <td class="table-success"><?php echo $rows['username'] ?></td>
    <td class="table-dark"><?php echo $rows['progress'] ?></td>
  </tr>

<?php
}
}
else
{?>
  <div class="alert alert-danger">
  <p>Whooppss...something went wrong!</p>
  </div> 
<?php }
  ?>  

</table> 

<div class="d-flex justify-content-between">
<div>
<button class="viewbtn" name="submitdelete" type="submit"  onclick="validatecheckbox(document.viewform.keytodelete)">Delete</button>
</div>
<div>
<button class="donebtn"  formaction="done.php" name="submitdone" type="submit" >Done</button> 
</div>
</div>

</form> 
</div>
</body>

<script>
function toggle(source) {
  checkboxes = document.getElementsByName('keytodelete[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>

</html>
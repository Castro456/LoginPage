<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only PHP</title>
</head>
<body>
    
    <?php
    $conn =mysqli_connect('localhost','root','giveaccess','mydata');
    $query = "SELECT tasks.id, tasks.task, tasks.time_kept, tasks.progress, users.username
    FROM task_table as tasks 
    join users_table as users on tasks.user = users.id";
    if($result= mysqli_query($conn,$query))
    {
      while($rows=mysqli_fetch_assoc($result))  
    { ?>
    <tr>
    <td class="table-primary"><?php echo $rows['id'] ?></td>   
    <td class="table-warning"><?php echo $rows['task'] ?></td>
    <td class="table-info"><?php echo $rows['time_kept'] ?></td>
    <td class="table-success"><?php echo $rows['username'] ?></td>
    <td class="table-dark"><?php echo $rows['progress'] ?></td>  
    <td class="table-danger">
    <button  class="viewbtn" value="<?php echo $rows['id']?>">Delete </button>
    </td>
    <td class="table-success">
    <button  class="donebtn" value="<?php echo $rows['id']?>">Done </button>
    </td>
    </tr>
    <?php
    }  }
    else{
        echo "0 results";
    }
    ?> 

</body>
</html>
<?php
require 'loginconfig.php';

if(isset($_POST['delete']))
{
    $key= $_POST['delete'];
    $querydelete="DELETE  FROM task_table WHERE id=$key "; 
    $value=mysqli_query($con,$querydelete);
    echo "Deleted";
}
else{
    header("location:index.php");
}

?>